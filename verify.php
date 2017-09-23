<?php
$access_token = 'FhUhvKhnrLhNUk9fCTHGT2ULklS4Uvr4bvwgz21m6FCSX1ifql3V4MyJvgZASEwfXVzOr6dbBcuNjeaRPZjyV3AoNeDQlZiJ2BvT2EuicAN7jwzIm6+tcnrWN7gfjC4fJNXMfzw/6CCTwu8VEBOpAwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;