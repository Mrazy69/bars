<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$sandmail = new PHPMailer;
$sandmail->CharSet = 'utf-8';

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email_send'];
$them = $_POST['them_send'];
$message = $_POST['message_send'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mrazy69@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'AAaYAtupy21)'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('mrazy69@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('ilnur9lite@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта bars';
$mail->Body    = '' .$fname .$lname . ' оставил заявку, его тема: ' .$them . '<br>Почта этого пользователя: ' .$email . 'текст обращения' .$message;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>
