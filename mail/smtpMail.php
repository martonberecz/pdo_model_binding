<?php
//send mail from within the server
//php mailer library to sending out mails
//https://github.com/PHPMailer/PHPMailer require in this

//require in the autoload

require_once '../app/bootstrap.php';
$mail = new PHPMailer;

//specify smtp details
$mail->isSMTP();
$mail->SMTDebuging = 2; //zero means off do not leav this on on production!
$mail->Host = "smtp.mailtrap.io";
$mail->Port = 2525;
$mail->SMTPAuth = "PLAIN";
$mail->Username = " 511499cc761e69";
$mail->Password = "c69d1a5db62d86";


$nameFromDB = "marton";

//require in a templet (welcome) with out outputing to the page

ob_start();
require 'view/welcome.php';
$data = ob_get_clean();


$mail->setFrom('marton');
$mail->addAddress('1berecz.marton@gmail.com');
$mail->Subject = 'Mail test';
$mail->msgHTML($data);
$mail->AltBody = "Hi there";  //if cant show html they'll see this

//to send attachement
//$mail->addAttachment('imags/about.jpg');

if(!$mail->send()){
	echo $mail->ErrorInfo;
	die();
}

echo 'Message sent.';