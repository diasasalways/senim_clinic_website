<?php
ini_set("sendmail_from", "test@test.senim-clinic.kz");
echo !extension_loaded('openssl')?"Not Available":"Available";
 //код подключение PHPmailer'a с помощью композера
require 'PHPMailer/vendor/autoload.php';
    // Only process POST reqeusts.
    
        // Get the form fields and remove whitespace.
      

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
$mail->Username = 'test@test.senim-clinic.kz';
$mail->Password = 'X0h7_od4';

$mail->setFrom('test@test.senim-clinic.kz');
$mail->addAddress('zholanyegizbayev@gmail.com');
$mail->Subject = 'Запись пациента';
//$mail->msgHTML('Email content with asdasddd');
$mail->Body = 'test 1758
';
if ($mail->send()) {
    echo "Message sent!";
	//echo"<script> location.replace('index.html'); </script>";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
		 
		} catch(PHPMailer\PHPMailer\Exception $e){
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

?>

