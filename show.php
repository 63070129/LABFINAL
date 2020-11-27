<html>
<head>
<title>ITF Final</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab129final.mysql.database.azure.com', 'it63070129@lab129final', '029154897zZ', 'ITFFinal', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbooks');
?>
<table class="table table-dark table-hover" width="600" border="1">
  <tr>
    <th width="200"> <div align="center">Product</div></th>
    <th width="150"> <div align="center">Price</div></th>
    <th width="150"> <div align="center">Amount</div></th>
    <th width="150"> <div align="center">Total</div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result['Amount'];?></td>
    <td><?php echo $Result['Total'];?></td>
    <td><?php echo '<a href="delete.php?id='.$Result['id'].'">Delete</a>'?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>