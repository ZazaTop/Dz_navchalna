<?php

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


$total = 10;


  foreach ($arrr as $value) {
  	if($value["name"] == $_POST['name']){echo "esty";

mysqli_query($conn,"INSERT INTO `cart` (`id_user`,`id_item`,`counts`) VALUES ('".$value["id"]."','".$_POST['ids']."','".$_POST['count']."')");
echo '<script>location.replace("/site.php");</script>'; exit;


  }


  }
  echo '<script>location.replace("/site.php");</script>'; exit;

$conn->close();