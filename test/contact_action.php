<?php
extract($_POST);
session_start();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['send_mail'])) {

    if ($name && $email && $subject && $message) {


        try {

            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.edevlop.com';                    //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
            $mail->Username   = 'testmail@edevlop.com';                    //SMTP username
            $mail->Password   = 'Password@1a';                            //SMTP password
            $mail->SMTPSecure = 'ssl';                                   //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );


            //Recipients
            $mail->setFrom('testmail@edevlop.com', 'EDevlop');
            $mail->addAddress($email, $name);                         //Add a recipient         
            $mail->addReplyTo('info@example.com', 'Information');


            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = 'Thank You for contact us : <br><br> <b>Your Message : </b>' . $message;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            $_SESSION['contact_msg'] = 'Mail send successfully.';
            // echo 'Message has been sent';
            header("location: contact.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} else {
    $_SESSION['contact_msg'] = 'Mail not send.';
    header("location: contact.php");
}
