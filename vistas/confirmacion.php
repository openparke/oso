<!DOCTYPE html>
<html>
<head>
</head>
<body>
enviado
</div>
</div>
<?php
require './vendor/autoload.php';
//require_once './vendor/autoload.php';
//if(isset($_POST['aceptar']))
//{
$email = 'camilo@tramiti.com.co';
$password = 'Camilo123$';
$to_id = 'camilowebmaster@gmail.com';
$message = $_POST['nombrelocatario'];
$subject = $_POST['matriculainmobiliaria'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->FromName = "Nueva Solicitud Matricula #"; 
$mail->addCC('nicolas970329@gmail.com');
$mail->Subject = $subject;
$mail->msgHTML($message);
//if (!$mail->aceptar()) {
//$error = "Mailer Error: " . $mail->ErrorInfo;
//echo '<p id="para">'.$error.'</p>';
//}
//else {
//echo '<p id="para">Message sent!</p>';
//}
//}
//else{
//echo '<p id="para">Please enter valid data</p>';
//}
?>
</body>
</html>
