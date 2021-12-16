<?php
$conection = mysqli_connect('127.0.0.1','root','','test');
if($conection ==false){

echo('ОШИБКА');
echo mysqli_connect_error();
exit();
}

