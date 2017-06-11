<?php
//this is stored on out server insted of the client side with cookies!

session_start();

$_SESSION['user_id'] = 22;
//clear the session
unset($_SESSION['user_id']);
session_destroy();
