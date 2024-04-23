<?php

/* https://api.telegram.org/bot5630571345:AAGEd9x59Rv7i50MQstPHoWvjUGPX2QDFxA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$upgpu = $_POST['user_upgpu'];

foreach($_POST['modern'] as $key => $value);

$select = $_POST['user_select'];
$token = "5630571345:AAGEd9x59Rv7i50MQstPHoWvjUGPX2QDFxA";
$chat_id = "-893856363";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Модернизировать: ' => $value
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('location: upgrade.html');
} else {
  header('location: upgrade.html');
}
?>