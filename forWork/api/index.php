<?php

//GET data from API

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/topstories.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //to true will retrun string

$result = curl_exec($ch);

//var_dump(curl_getinfo($ch));

//for error heandling
if(curl_getinfo($ch)['http_code'] !== 200){
	echo 'problems';
}

$storyIds = array_slice(json_decode($result), 0, 5);

foreach ($storyIds as $id) {
	curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/'. $id .'.json');
	$result = curl_exec($ch);

	if(curl_getinfo($ch)['http_code'] === 200){
		$story = json_decode($result);
		//var_dump($story);
		echo '<a href="'. $story->url .'">'.$story->title.'</a> by '.$story->by.'.<br/>';
	}
}