<?php
$access_token = 'AZ5HkrFaESpWLULsOXBD/g7deOkbXlPQcdUvjRfg6DYJx0dn3ror9TRfvqf8UrCKwQK49BvOV33TEvFcogLiF30itnULOZ+BFwkcQ/fEn9obBYAu6+/JMhqB3bu+/tNhNPjEs01w9wghrqp3l46N9QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
