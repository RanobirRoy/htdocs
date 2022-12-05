<?php 

    $username = "root";
    $password = "";
    $server = 'localhost';
    $database = 'test_database';

    $connect = mysqli_connect($server, $username, $password, $database);
    if($connect){
        // echo "Connected to Database";
        ?>
        <script>
            alert("Connected to Database.");
        </script>
        <?php
    }else{
        // echo "Connection fail";
        ?>
        <script>
            alert("Connection fail.");
        </script>
        <?php
    }
?>