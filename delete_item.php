<?php

$arrr = array();

$conn = mysqli_connect('127.0.0.1','root','','test');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM tovary";
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
  	if($value["id"] == $_POST['id']){echo "esty";

mysqli_query($conn,"DELETE FROM `tovary` WHERE id = ".$_POST["id"]."");

echo '<script>location.replace("/admin.php");</script>'; exit;


  }
  }
  echo "<script type='text/javascript'> 
                alert('Нету такого товара');
            </script>"; 
echo '<script>location.replace("/admin.php");</script>'; exit;
$conn->close();