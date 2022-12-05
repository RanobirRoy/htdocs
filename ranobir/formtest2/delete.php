<?php 
include "connection.php";
$id = $_GET['id'];
$deleteQuery = "delete from table2 where id=$id";
$callDeleteQuery = mysqli_query($connect,$deleteQuery);
header('location:display.php');
?>