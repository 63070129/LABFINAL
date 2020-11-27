<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab129final.mysql.database.azure.com', 'it63070129@lab129final', '029154897zZ', 'ITFFinal', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM guestbooks WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>