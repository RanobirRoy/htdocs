<?php 
    include "connection.php";
    $id = $_GET['id'];
    $deleteQuery = "delete from test1 where id=$id";
    $deleteExecute = mysqli_query($connect, $deleteQuery);
    header('location:displaytable.php');

?>