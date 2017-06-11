<?php
//send mail from within the server
//php mailer library to sending out mails
//https://github.com/PHPMailer/PHPMailer require in this

//require in the autoload

require_once '../app/bootstrap.php';
$mail = new PHPMailer;

$mail->setFrom('marton');
$mail->addAddress('1berecz.marton@gmail.com');
$mail->Subject = '<h1>Mail test</h1>';
$mail->msgHTML('Hi there');
$mail->AltBody = "Hi there";  //if cant show html they'll see this

if(!$mail->send()){
	echo $mail->ErrorInfo;
	die();
}

echo 'Message sent.';