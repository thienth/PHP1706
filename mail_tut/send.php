<?php 
require_once 'lib/phpmailer/PHPMailer.php';
require_once 'lib/phpmailer/Exception.php';
require_once 'lib/phpmailer/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nguyenthithutrang.ptit@gmail.com';                 // SMTP username
    $mail->Password = 'thutrang8a';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('thienth32@gmail.com', 'ThienTH');
    $mail->addAddress('thienth32@gmail.com', 'Thien Tran');     // Add a recipient
    $mail->addAddress('transachhai97@gmail.com', 'Hai do');     // Add a recipient
    $mail->addAddress('transachhai97@gmail.com');               // Name is optional
    $mail->addCC('caichivay@gmail.com');
    $mail->addBCC('nganguyenhaui9x96@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

 ?>