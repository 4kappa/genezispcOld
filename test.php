<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&family=Grenze:wght@300;900&family=Sofia+Sans+Semi+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/test.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link type="image/x-icon" href="assets/images/logobig.png" rel="shortcut icon">
    <title>Genezis PC</title>
    <script src="https://kit.fontawesome.com/2f7bb8b74f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <?php
    if($_COOKIE['user'] == ''):
    ?>


    <form action="check.php" method="post">
        <input type="text" name="login" id="login" placeholder="Введите логин">
        <input type="text" name="name" id="name" placeholder="Введите имя">
        <input type="password" name="pass" id="login" placeholder="Введите пароль">
        <button type="submit">Зарегистрироваться</button>
    </form>

    <br>
    <br>
    <form action="auth.php" method="post">
        <input type="text" name="login" id="login" placeholder="Введите логин">
        <input type="password" name="pass" id="login" placeholder="Введите пароль">
        <button type="submit">Авторизоваться</button>
    </form>

    <?php else: ?>
      <p>ДАРОВА ХУЙ <?=$_COOKIE['user'];?>. Чтобы съебаться нажми <a href="exit.php">сюда</a></p>
    <?php endif;?>
</body>
</html>
<script>
  $('a[href*="#"]').on('click', function (e) {
  e.preventDefault();
 
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500, 'linear');
});
</script>
<script src="assets/js/swiper.js"></script>
<script src="assets/js/calc.js"></script>