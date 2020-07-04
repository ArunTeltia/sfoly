<?php 

$result="";


require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;

$fname = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_message =$_POST['message'];
$email_subject = "Someone contacted you about Sfoly";
$email_body = "You have received a new message from the user: $fname \n  mail: $visitor_email .\n"."Here is the message:\n $visitor_message".




// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('springfieldolympiad@gmail.com', 'Mailer');
$mail->addAddress('springfieldolympiad@gmail.com');     // Add a recipient

$mail->addReplyTo($visitor_email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email_subject;
$mail->Body    = $email_body;

if(!$mail->send()) {
    $result= "Message could not be sent.";
} else {
     $result="Thanks ".$fname." for contacting us we will respond to you  soon. ";
}
 

    
?> 