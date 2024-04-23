<?php
    $login = filter_var(trim($_POST['login']));
    $name = filter_var(trim($_POST['name']));
    $pass = filter_var(trim($_POST['pass']));

    if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
        echo "Недопустимая длина логина";
        exit();
    }
    if(mb_strlen($name) < 3 || mb_strlen($name) > 15) {
        echo "Недопустимая длина логина";
        exit();
    }
    if(mb_strlen($pass) < 6 || mb_strlen($pass) > 20) {
        echo "Недопустимая длина логина";
        exit();
    }

    $pass = md5($pass."ggvp12345");


    $mysql = new mysqli('localhost','c90832m8_genpc','1oc2uH*N','c90832m8_genpc');
    $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
    VALUES('$login','$pass','$name')");

    $mysql->close()

?>