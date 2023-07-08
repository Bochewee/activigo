<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "activigo.2023@gmail.com";
$mail->Password = "dtjhcridvrstxfxs";
$mail->Subject = "ceci est un Test email using PHPMailer";
$mail->setFrom('activigo.2023@gmail.com');
$mail->Body = "email body";
$mail->addAddress('activigo.2023@gmail.com');
if ($mail->send()) {
	echo "Email Sent..!";
} else {
	echo $mail->ErrorInfo;
}
$mail->smtpClose();
///////////////////
//////////////////// Created Azim Ebrahemi
//////////////////////
/* you need to do following setting to work email sending
1_ go to Manage Your Google Account
2_ to to Security Tab (side bar Menu)
3_ search for App Password 
4_ Click Drop Down and type desired custom name
5_ Click Generate and note the generated password
6_ Put generate password in password section of email
7_ put email your gmail email address
8_ enjoy
*/
