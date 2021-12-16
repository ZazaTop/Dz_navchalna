<?php

echo ('
    <form method="POST" action="/menu.php">
    <input type="submit" value="menu" >
    </form>');

echo ('
	<form method="POST" action="/site.php">
	<input type="submit" value="Reload" >
    </form>');

?>


<?php


$conn = mysqli_connect('127.0.0.1','root','','test');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM tovary";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "Товары";
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Название</th><th>Описанние</th><th>Количество</th><th>Цена</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["counts"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();

?>
<form method="POST" action="/add_cart.php">
	<hr>
	Добавить в корзину
	<input types="text" placeholder="Имя пользователя" name ="name">
	<input types="int" placeholder="Id_товару" name ="ids">
	<input types="int" placeholder="Количество" name ="count">
	<input type="submit" value="send" >
	<hr>

</form>


