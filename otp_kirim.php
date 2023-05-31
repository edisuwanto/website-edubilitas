<?php 

$string = $_POST["hp"];
$length = strlen($string);
$index = $length - 1;

$mysqli = new mysqli("localhost", "root", "", "edubilitas");

if (substr($string, 0, 1) == "0"){
    $hp = "+62".substr($string, 1, $index);
} else if (substr($string, 0, 2) == "62"){
    $hp = "+".$string;
}


$token = rand(1,999999);

$check_no = $mysqli->query("SELECT * FROM `api_sms` WHERE `hp` = '$hp' AND `status` = 1");

if ($check_no->num_rows == 0) {
    $insert = $mysqli->query("INSERT INTO `api_sms`(`hp`, `token`) VALUES ('$hp','$token')");
    $last_id = $mysqli->insert_id;
    
    $response = smsOTP($hp, $last_id);
    // $response = '{
    //     "msgId": "11038108019",
    //     "status": "SENT",
    //     "expireIn": 86400,
    //     "maxAttempt": 10,
    //     "msgCount": 1
    //   }';
    $json = json_decode($response, true);    

    if(isset($json['status'])){
        if($json['status'] == "SENT"){            
            $update = $mysqli->query("UPDATE `api_sms` SET `status_kirim`= 1 WHERE `id` = $last_id");
            header("Location: verifikasi_nomor.php?id=$last_id&attempt=0");
            exit();                
        }
    }else{
        $update = $mysqli->query("UPDATE `api_sms` SET `status_kirim`= 0 WHERE `id` = $last_id");
        header("Location: api_problem.php");
        exit();            
    }
} else {
    header("Location: nomor_terdaftar.php");
    exit();
}

$mysqli->close();

function smsOTP($hp, $last_id){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/$last_id",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "PUT",
      CURLOPT_POSTFIELDS =>"{\r\n  \"maxAttempt\": 10,\r\n  \"phoneNum\": \"$hp\",\r\n  \"expireIn\": 86400,\r\n  \"content\": \"Kode OTP Anda adalah {{otp}}\",\r\n  \"digit\": 6,\r\n  \"callbackUrl\": \"string\"\r\n}",
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
