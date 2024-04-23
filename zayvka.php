<?php
    $name = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    $email = $_POST['user_email'];
    $message = $_POST['user_comment'];



    $mysql = new mysqli('localhost','c90832m8_genpc','1oc2uH*N','c90832m8_genpc');
    $mysql->query("INSERT INTO `calls` (`name`,`phone`,`email`,`message`)
    VALUES('$name','$phone','$email','$message')");

    $mysql->close();
    header('Location: /')
    
?>

