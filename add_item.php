<?php

$name = $res[name];
$description = $res[description];
$price = $res[price];
$count = $res[count];


$conection = mysqli_connect('127.0.0.1','root','','test');





mysqli_query($conection,"INSERT INTO `tovary` (`name`,`description`,`price`,counts) VALUES ('".$_POST['name']."','".$_POST['description']."','".$_POST['price']."','".$_POST['count']."')");
echo '<script>location.replace("/admin.php");</script>'; exit;