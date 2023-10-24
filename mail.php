<?php
ini_set("sendmail_from", "info@senimclinic.kz");
echo !extension_loaded('openssl')?"Not Available":"Available";
 //код подключение PHPmailer'a с помощью композера
require 'PHPMailer/vendor/autoload.php';
    // Only process POST reqeusts.
    
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
	try{
	$mail->isSMTP(true);

$mail->CharSet  = 'UTF-8';

$mail->Host = 'localhost';
$mail->Port = 25;


$mail->SMTPSecure = 'tls'; # SSL is deprecated
$mail->SMTPOptions = array(
   'ssl' => array(
   'verify_peer' => false,
   'verify_peer_name' => false,
   'allow_self_signed' => true,
'peer_name' => 'Plesk',
  )
);

$mail->SMTPAuth = true;
$mail->SMTPAutoTLS = true;
$mail->Username = 'info@senimclinic.kz';
$mail->Password = '2Rc*76oq';

$mail->setFrom($email);
$mail->addAddress('info@senimclinic.kz');
$mail->Subject = $subject;
//$mail->msgHTML('Email content with asdasddd');
$mail->Body = $message;
if ($mail->send()) {
    echo "Message sent!";
	echo"<script> location.replace('contact.html'); </script>";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
		 
		} catch(PHPMailer\PHPMailer\Exception $e){
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

?>
