<?php

$mysqli = new mysqli("localhost", "root", "", "edubilitas");

$last_id = $_POST["last_id"];
//echo $last_id."<br>";
$otp = $_POST["otp"];
//echo $otp."<br>";

$response = cekOTP($last_id, $otp);

$json = json_decode($response, true); 
//var_dump($json);

if(isset($json['message'])){
    if($json['message'] == "Your OTP is valid"){ //kalo bener
        $update = $mysqli->query("UPDATE `api_sms` SET `status`= 1 WHERE `id` = $last_id");
        header("Location: nomor_terdaftar.php");
        exit();                
    }
    else if ($json['message'] == "Your OTP is invalid" && $json['maxAttempt'] > 0){
        header("Location: verifikasi_nomor_ulang.php?id=$last_id");        
        exit();                
    }
    else {
        header("Location: verifikasi_gagal.php");
    }
}else{
    $update = $mysqli->query("UPDATE `api_sms` SET `status`= 0 WHERE `id` = $last_id");
    header("Location: api_problem.php");
    exit();            
}

$mysqli->close();

function cekOTP($last_id, $otp){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/$last_id/verifications",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\r\n  \"maxAttempt\": 10,\r\n  \"otpstr\": \"$otp\",\r\n  \"expireIn\": 86400,\r\n  \"digit\": 6\r\n}",
      CURLOPT_HTTPHEADER => array(
        "x-api-key: 0kXc4yoA35nfwAgasPxhSUCCazrKheTD",
        "Content-Type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;

}

?>