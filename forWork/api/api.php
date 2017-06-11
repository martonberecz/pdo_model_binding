<?php
//for sending data to api
//make an api for test

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
	return;
}
if(!isset($_POST['text'])){

	http_response_code(400); //validation error

	echo json_encode([	//output this if no text!
		'data' => [
			'error' => 'Text is required.',
			]
	]);
}

//reverse the text
$text = strrev($_POST['text']);

http_response_code(200); ///if worked

echo json_encode([
		'data' => [
			'text' => $text
		]
	]);