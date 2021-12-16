<?php
$login= $_POST['login'];
$pass= $_POST['password'];

$conection = mysqli_connect('127.0.0.1','root','','test');

$count = mysqli_query($conection,"SELECT * FROM `users` WHERE `name` = '$login' AND `pass` = '$pass'");

//$res = mysqli_fetch_assoc($count)); 
$res = mysqli_fetch_assoc($count);

//print_r($res);
$type = $res[type];
$id = $res[id];
$name = $res[name];
$surname = $res[surname];
$pass = $res[pass];


if( mysqli_num_rows($count) == 0 ){
echo "<script type='text/javascript'> 
                alert('unregistered');
            </script>"; 
echo '<script>location.replace("/");</script>'; exit;
}else{
echo "<script type='text/javascript'> 
                
                alert('hello '+'$name');
            </script>"; 
if ($type =="admin") {
    echo '<script>location.replace("/admin.php");</script>'; exit;
}
if($type =="user") {
echo '<script>location.replace("/menu.php");</script>'; exit;

}
}






?>