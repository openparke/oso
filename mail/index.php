<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>prueba</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="robots" content="noindex, nofollow">

</head>
<body>
<div id="main">
<h1>prueba</h1>
<div id="login">
<h2>Gmail SMTP</h2>
<hr/>
<form action="index.php" method="post">
<!--<input type="text" placeholder="Enter your email ID" name="email"/>
<input type="password" placeholder="Password" name="password"/>
<input type="text" placeholder="To : Email Id " name="toid"/>-->
<input type="text" placeholder="Subject : " name="subject"/>
<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"></textarea>
<input type="submit" value="Send" name="send"/>
</form>
</div>
</div>
<?php
require './vendor/autoload.php';
//require_once './vendor/autoload.php';
if(isset($_POST['send']))
{
$email = 'camilo@tramiti.com.co';
$password = 'Camilo123$';
$to_id = 'camilowebmaster@gmail.com';
$message = $_POST['message'];
$subject = $_POST['subject'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->FromName = "Tramiti"; 
$mail->addCC('nicolas970329@gmail.com');
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
}
else{
echo '<p id="para">Please enter valid data</p>';
}
?>
</body>
</html>