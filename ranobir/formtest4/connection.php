<?php 

    $username = "root";
    $password = "";
    $server = 'localhost';
    $database = 'test_database';
    $connect = mysqli_connect($server, $username, $password, $database);
    if($connect){
        ?>
        <script>
            alert("Connected");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Connection Fail");
        </script>
        <?php
    }

?>