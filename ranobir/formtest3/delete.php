<?php 

    include "connection.php";
    $id = $_GET['id'];
    $deleteQuery = "delete from table3 where id=$id";
    $callDeleteQuery = mysqli_query($connect, $deleteQuery);
    header('location:display.php');

?>