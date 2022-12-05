<?php 
    include "connection.php";
    $getID = $_GET['id'];
    $deleteData = "delete from table4 where id=$getID";
    $callDeleteData = mysqli_query($connect, $deleteData);
    header('location:display.php');

?>