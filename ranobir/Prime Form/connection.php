<?php 
    $username = "root";
    $password = "";
    $server = 'localhost';
    $database = 'alexios';

    $connect = mysqli_connect($server, $username, $password, $database);

    if($connect){
        ?>
        <script>
            alert("Server Connected");
        </script>
        <?php
    }else{
        die("Server connection Fail" . mysqli_connect_error());
    }

?>