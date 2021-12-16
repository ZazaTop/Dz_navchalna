<?php

$conection = mysqli_connect('127.0.0.1','root','','test');



mysqli_query($conection,"INSERT INTO `users` (`name`,`surname`,`pass`) VALUES ('".$_POST['login']."','".$_POST['surname']."','".$_POST['password']."')");
echo '<script>location.replace("/");</script>'; exit;