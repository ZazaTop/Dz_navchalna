<?php

$conection = mysqli_connect('127.0.0.1','root','','test');

echo mysqli_connect_error();

$result = mysqli_query($conection,"SELECT * FROM `users`");


while( $res = mysqli_fetch_assoc($result)) 
{


}

?>


<center>








<form method="POST" action="/logins.php">
	Login 
	<input types="text" placeholder="name" name ="login">
	<input types="text" placeholder="pass" name ="password">
	<input type="submit" value="send" >
	<hr>

</form>

<form method="POST" action="/register.php">
	Register
	<input types="text" placeholder="name" name ="login">
	<input types="text" placeholder="surname" name ="surname">
	<input types="text" placeholder="pass" name ="password">
	<input type="submit" value="send" >
<hr>
</form>
</center>