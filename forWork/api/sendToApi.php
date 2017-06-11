<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'localhost/api/api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, [
	'text' => 'all done up and running',
	]);

$result = curl_exec($ch);

//check if the sending failed

if(curl_getinfo($ch)['http_code'] !== 200){
	$result = json_decode($result);
	echo $result->data->error;
	die();
}

$response = json_decode($result);

echo $response->data->text;