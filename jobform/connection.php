<?php 

    $username = "root";
    $password = "";
    $server = 'localhost';
    $database = 'prime';

    $con = mysqli_connect($server, $username, $password, $database);
    // $con = mysqli_connect($server, $username, $password, $db); //Direct pass kore jabe
    // $db = mysqli_select_db($con, $database);

    if($con){
        // echo "Connected";
        ?> 
            <script>
                alert('Connected');
            </script>
        <?php
    }else{
        die("Connection Fail" . mysqli_connect_error());
    }

?>