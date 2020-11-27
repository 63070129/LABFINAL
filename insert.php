<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab129final.mysql.database.azure.com', 'it63070129@lab129final', '029154897zZ', 'ITFFinal', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['Product'];
$price = $_POST['Price'];
$amount = $_POST['Amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount) VALUES ('$product', '$price', '$amount')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>