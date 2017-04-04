<?php
$access_token = 'ZhYXANksDYqbPPdZZCtFKFTBZTsu7Qc2OJm3ESHae5kh/VVEi299cd/Wra6W5A1j9V2QWbMJebn0CwlmEuPpTe4r1LFHiNG1lqUrHloJ+/YeYB7qZjyqyKoNUvSLxERBPB6WEaPlu5iiDMesvq8YFgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;