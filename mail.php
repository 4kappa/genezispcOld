<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$compania = $_POST['user_compania'];
$select = $_POST['value[]'];
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Компания' => $compania,
    'Вопрос: ' => $select
  );
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'genezisshop@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'uqWKH3igsF7GmUSYc2Q8'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('genezisshop@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('msnosok1308@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Complex IT (tech)';
$mail->Body    = '' .$name . ' оставил заявку.<br>Номер телефона пользователя: ' .$phone . '<br> Компания пользователя:  '.$compania .'<br> Пользователь выбрал тариф: '.$select .' ';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>