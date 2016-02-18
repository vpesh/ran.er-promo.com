<?php
$to = 'admin@web-support24.ru';  //Recipient's or Your E-mail
$subject = 'Срочный месседж ✌ с web-support24.ru'; // Subject of your email


$message .= 'ИМЯ: ' . $_REQUEST['fname'] . "<br><br>";
$message .= $_REQUEST['message'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";


if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>