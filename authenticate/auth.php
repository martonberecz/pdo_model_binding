<?php
//password hashing API

//THE SECOND ARG IS the algorithm password_default will use the latest
//at registaration 
//to store this varchar(255)
$DBpassword = password_hash('ilovecats', PASSWORD_DEFAULT, 
	[
		'cost' => 12, //the deficulty get slower as increments are higher
	]
	);

//at login
//check the password aka authenticate
$loginPass = "ilovecats";

if(password_verify($loginPass, $DBpassword)){
	echo "you are in";
}