<?php 
ini_set("sendmail_from", "info@senimclinic.kz");
echo !extension_loaded('openssl')?"Not Available":"Available";
 //код подключение PHPmailer'a с помощью композера
require 'PHPMailer/vendor/autoload.php';
    // Only process POST reqeusts.
    
        $name = $_POST["name"];
		
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
 $uslugi=$_POST["uslugi"];
$birthdate = $_POST["birthdate"];
if ( empty($name) || empty($phone) || empty($birthdate)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo'<script>
			if(confirm("Запослните все поля")===true){
			location.replace("index.html");
			}</script>';
	exit;
        }
else{

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

$mail->setFrom('senimclinic@senimclinic.kz','Senimclinic');
$mail->addAddress('info@senimclinic.kz');
$mail->Subject = 'Запись пациента';
//$mail->msgHTML('Email content with asdasddd');
$mail->Body = 'Имя: '.$name.'  Телефон:'.$phone.'  Электронная почта: '.$email.'   Услуга: '.$uslugi.'  Дата рождения: '.$birthdate.' Сообщение:'.$message;
if ($mail->send()) {
    echo "Message sent!";
	
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
		 
		} catch(PHPMailer\PHPMailer\Exception $e){
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}}



?>



<?php
header("Content-Type: text/html; charset=utf-8");
echo"<meta charset='UTF-8' />";
        $name = $_POST["name"];
		
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
 $uslugi=$_POST["uslugi"];
$birthdate = $_POST["birthdate"];
if ( empty($name) || empty($phone) || empty($birthdate)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo'<script>
			if(confirm("Запослните все поля")===true){
			location.replace("index.html");
			}</script>';
	exit;
        }
else{

$EmailTo = "senim7777@gmail.com";
$Subject = "Запись пациента";

// prepare email body text
$Fields .= "Имя: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Сообщение: ";
$Fields .= $message;
$Fields .= "\n";

$Fields .= "Дата рождения: ";
$Fields .= $birthdate;
$Fields .= "\n";
$Fields .= "Услуга: ";
$Fields .= $uslugi;
$Fields .= "\n";
$Fields .= "Телефон: ";
$Fields .= $phone;
$Fields .= "\n";

// send email
//$success = mail($EmailTo,  $Subject,  $Fields, "От:".$email);
if(mail($EmailTo,  $Subject,  $Fields, "От:".$email)){
echo"<script> location.replace('index.html'); </script>";
}}
?>