<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$sekret = '6LdBMmMUAAAAAJ6IqeJPnby6cTCmyaJwBT5sZr6c';



if (isset($_POST['submit'])) {
    // $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
    // $odpowiedz = json_decode($sprawdz);

    if ($odpowiedz->success===false) {
        echo "potwierdź że nie jesteś botem";
    }


    // Passing `true` enables exceptions
    try {
        //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '299c40fbc1bce7';                 // SMTP username
    $mail->Password = 'f5e3418aec89cd';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 2525;                                    // TCP port to connect to

    //Recipients
        $mail->setFrom('kordian.bober@wp.pl', 'Mailer');
        $mail->addAddress('kordian.bober@wp.pl', 'Joe User');     // Add a recipient

        //Attachments
        #$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subjectt';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>

<html>
<head>
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>
<form class="" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<input type="submit" value="Wyślij" name="submit">
<div class="g-recaptcha" data-sitekey="6LdBMmMUAAAAAOOQ1BUNsjJ1onn4s__Es7TKFZBm"></div>
</form>

</html>
