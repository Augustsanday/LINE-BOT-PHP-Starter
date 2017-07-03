<?php
$strAccessToken = "BkXbmWRqZjSYsc638fvlBCFCz/X+g9DrjE5eaME6PcxdrteIqg9grMQlULH5AotuXqWAAAAmeyt7X6Tzh4eiXQmRrWMGe7h3IN7P2P1t+zj59Hj/K0aeGMr7DukG3FSCaS/oqcfCZLZUn+SNLOdvdAdB04t89/1O/w1cDnyilFU=";

 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "USER_ID";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 

 
?>
