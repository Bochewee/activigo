<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $subject= $_POST['subject'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $mailFrom= $_POST['email'];
    $mailFrom = filter_var($mailFrom, FILTER_VALIDATE_EMAIL);
    $message= $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "activigo.2023@gmail.com";
    $mail->Password = "dtjhcridvrstxfxs";
    $mail->Subject = "ceci est un message evoyer par".$mailFrom. "avec pour objet".$subject;
    $mail->setFrom('activigo.2023@gmail.com');
    $mail->Body = $message;
    $mail->addAddress('activigo.2023@gmail.com');
    if ($mail->send()) {
        echo "Email Sent..!";
    } else {
        echo $mail->ErrorInfo;
    }
    $mail->smtpClose();

}
?>
<div class="bodyy">
<div class="contact-in">
    <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5246.560428318286!2d2.238988027717396!3d48.890996667162696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66505aaadd1dd%3A0xf187c86ce82c7889!2sLa%20D%C3%A9fense!5e0!3m2!1sfr!2sfr!4v1676982318764!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <a href="mailto:support@ActiviGo.com">Email: support@ActiviGo.com</a> <br>
    <a href="tel:01010101010">Tel:010101001</a>
    </div>
    <div class="contact-form" >
        <h1>Contact Us</h1>
        <form  method="POST">
            <input type="text" name="name" placeholder="Name" class="contact-form-txt">
            <input type="text" name="subject" placeholder="Subject" class="contact-form-txt">
            <input type="text" name="email" placeholder="Email" class="contact-form-txt">
            <textarea name="message" placeholder="Message" class="contact-form-textarea"></textarea>
            <input type="submit" name="Submit" class="contact-form-btn">
        </form>
    </div>
</div>
</div>