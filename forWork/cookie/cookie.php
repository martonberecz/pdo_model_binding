<?php
//set a cookie for lenguage preferance
$expiry = new DateTime('+1 year');
setcookie('language', 'EN-GB', $expiry->getTimestamp());///(name, vlaue, expiry offset from the current time)

//get cookies
if(isset($_COOKIE['language'])){
	echo "lenguage set: {$_COOKIE['language']}";
}

//remove cookies
$expiry = new DateTime('2 days ago');
setcookie('language', 'EN-GB', $expiry->getTimestamp());
