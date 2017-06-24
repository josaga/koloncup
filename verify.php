<?php
$access_token = 'sEx/LdMfuFWBoBbmk74lFFHGVhQWdwvujynTPsTloz//W1SQm+2d7wwZiX4yW5hYCCdKAAQfa6zcLB8b5qsCySrDVJS3GPlLHu/rnwV9a9uNHMoGRk1gfcTN4nvwPSDewwN40hczMJLCh3ASP6Zg4gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>