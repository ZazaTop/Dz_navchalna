<?php

echo ('
    <form method="POST" action="/menu.php">
    <input type="submit" value="menu" >
    </form>');



//////////////////////////////////////////
$arrr = array();

$conn = mysqli_connect('127.0.0.1','root','','test');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    foreach($result as $row){
     $arrr[]=array( "id" => $row["id"], 
                    "name" => $row["name"]);

    }
    
} else{
    echo "Ошибка: " . $conn->error;
}


  foreach ($arrr as $value) {
    if($value["name"] == $_POST['name']){

$conn = mysqli_connect('127.0.0.1','root','','test');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM cart";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "Корзина";
    echo "<table><tr><th>Id</th><th>id_user</th><th>id_item</th><th>counts</th></tr>";
    foreach($result as $row){
        if($row[id_user]== $value["id"]){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["id_user"] . "</td>";
            echo "<td>" . $row["id_item"] . "</td>";
            echo "<td>" . $row["counts"] . "</td>";
        echo "</tr>";
    }
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}


  }


  }


?>
<form method="POST" action="/delete_cart.php">
    <hr>
    Удалить
    <input types="text" placeholder="id" name ="id">
    <input type="submit" value="send" >
    <hr>

</form>