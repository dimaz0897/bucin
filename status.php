<?php
 
$access_token = "EAAAAUaZA8jlABAKECCdF2Yx5P3cg0qTdMduLr5ytddT6JuPrVOoLr00bVkETd6MfCdZAUbOijyEChYeGf9caLVHVgej79ILtWLd9kSW9TzWuT5eoSyhFfRXHFZAS8fdAX0jPlOWXOkz4sPx0m5XxQ5Feo1zFPe7tZA0AHtrJRAZDZD";
$url = "https://graph.facebook.com/me/feed?method=POST";
if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {
$send = file("http://kibass.com/kata.php");
$nabila = $send[array_rand($send)];
$statusku= $nabila; 
} 
    $ch = curl_init();
    $attachment =  array(   'access_token'  => $access_token,                       
                        'message'          => $statusku,
                    );
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $attachment);
    $result= curl_exec($ch);
    curl_close ($ch);
?>
