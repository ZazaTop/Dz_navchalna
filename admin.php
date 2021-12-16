
Admin Panel
    <form method="POST" action="/menu.php">
    <input type="submit" value="menu" >
    </form>
	<form method="POST" action="/admin.php">
	<input type="submit" value="Reload" >
    </form>


<form method="POST" action="/add_item.php">
	<hr>
	Create Item
	<input types="text" placeholder="name" name ="name">
	<input types="text" placeholder="description" name ="description">
	<input types="text" placeholder="price" name ="price">
	<input types="text" placeholder="count" name ="count">
	<input type="submit" value="send" >


</form>

<form method="POST" action="/delete_item.php">
    <hr>
    Удалить
    <input types="text" placeholder="id" name ="id">
    <input type="submit" value="send" >
    <hr>

</form>

<form method="POST" action="/add_action.php">
	Akcii
	<input types="text" placeholder="item for action" name ="login">
	<input types="text" placeholder="durarion" name ="surname">
	<input types="text" placeholder="procent skidki" name ="password">
	<input type="submit" value="send" >
<hr>
</form>

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
$sql = "SELECT * FROM actions";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Акции</p>";
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>id_tovary</th><th>Начало</th><th>Конец</th><th>Процент скидки</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["id_tovary"] . "</td>";
            echo "<td>" . $row["start"] . "</td>";
            echo "<td>" . $row["end"] . "</td>";
            echo "<td>" . $row["procent"] . "%</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}


$conn->close();
?>