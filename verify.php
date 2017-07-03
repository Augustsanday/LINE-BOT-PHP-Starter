<?php
$access_token = 'BkXbmWRqZjSYsc638fvlBCFCz/X+g9DrjE5eaME6PcxdrteIqg9grMQlULH5AotuXqWAAAAmeyt7X6Tzh4eiXQmRrWMGe7h3IN7P2P1t+zj59Hj/K0aeGMr7DukG3FSCaS/oqcfCZLZUn+SNLOdvdAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;