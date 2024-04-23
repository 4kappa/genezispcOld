  <?php

/* https://api.telegram.org/bot5630571345:AAGEd9x59Rv7i50MQstPHoWvjUGPX2QDFxA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$age = $_POST['user_age'];

$select = $_POST['user_select'];
$token = "5630571345:AAGEd9x59Rv7i50MQstPHoWvjUGPX2QDFxA";
$chat_id = "-893856363";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Возраст техники: ' => $age,
  'Вопрос: ' => $select
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('location: index.html');
} else {
  header('location: index.html');
}
?>