<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php'; // If installed via Composer
// // require 'PHPMailer/src/PHPMailer.php'; // If manually uploaded

echo 'send m...99';
try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Use your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'petterjohnm@gmail.com'; // 8019828727
    $mail->Password   = 'ynqu sinw axvi gjux';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->SMTPDebug = 2;  // Debug level (0 = off, 1 = client, 2 = client/server)
    $mail->Debugoutput = 'html'; // Output format
    $mail->setFrom('petterjohnm@gmail.com', 'PHP MAil');
    $mail->addAddress('gkumarswamy1216@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email from HostGator using PHPMailer.';

    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
echo 'send m...888';

?>
