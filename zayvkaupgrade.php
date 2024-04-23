<?php
    $name = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    foreach($_POST['upcpu'] as $key => $value);
    foreach($_POST['upgpu'] as $key => $value);
    $upcpu = $_POST['upcpu'];
    $upgpu = $_POST['upgpu'];

    $mysql = new mysqli('localhost','c90832m8_genpc','1oc2uH*N','c90832m8_genpc');
    $mysql->query("INSERT INTO `request-up` (`name`,`phone`,`modern`)
    VALUES('$name','$phone','$upcpu $upgpu')");

    $mysql->close();
    header('Location: /')
    
?>

