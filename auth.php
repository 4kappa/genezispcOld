<?php
    $login = filter_var(trim($_POST['login']));
    $pass = filter_var(trim($_POST['pass']));

    $pass = md5($pass."ggvp12345");

    $mysql = new mysqli('localhost','c90832m8_genpc','1oc2uH*N','c90832m8_genpc');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "ТАКОГО ЧЕЛА НЕТ";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close()
?>