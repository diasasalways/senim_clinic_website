<?php 
ini_set("sendmail_from", "info@senimclinic.kz");
require "db.php";
echo !extension_loaded('openssl')?"Not Available":"Available";
 //код подключение PHPmailer'a с помощью композера
require 'PHPMailer/vendor/autoload.php';
    // Only process POST reqeusts.
    
        $name = $_POST["name"];
		
        $question = $_POST["question"];
        
        $message = $_POST["message"];

if ( empty($name) || empty($question)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo'<script>
			if(confirm("Заполните все поля")===true){
			location.replace("faq.php");
			}</script>';
	exit;
        }
else{
	if(empty($message)){
	$link->query("INSERT INTO faq(name,question,description) VALUES('$name','$question',' ')");
	}
	else{
		$link->query("INSERT INTO faq(name,question,description) VALUES('$name','$question','$message')");
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

$mail->setFrom('senimclinic@senimclinic.kz','Senimclinic');
$mail->addAddress('info@senimclinic.kz');
$mail->Subject = 'Вопрос от пользователя';
//$mail->msgHTML('Email content with asdasddd');
$mail->Body = 'Имя: '.$name.'  Вопрос:'.$phone.' Сообщение:'.$message;
if ($mail->send()) {
    echo "Message sent!";
	
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
		 
		} catch(PHPMailer\PHPMailer\Exception $e){
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}



$EmailTo = "senim7777@gmail.com";
$Subject = "Вопрос от пользователя";

// prepare email body text
$Fields .= "Имя: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Вопрос: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Сообщение: ";
$Fields .= $message;
$Fields .= "\n";

// send email
//$success = mail($EmailTo,  $Subject,  $Fields, "От:".$email);
if(mail($EmailTo,  $Subject,  $Fields)){
echo"<script> location.replace('index.html'); </script>";
}




}



?>



