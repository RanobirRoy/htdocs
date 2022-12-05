<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 20rem;
            margin-inline: auto;
            gap: 1rem;
        }
        form input{
            padding: .5rem;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Form</h1>
        <input type="text" name="name" id="" placeholder="Name">
        <input type="text" name="roll" id="" placeholder="Roll">
        <input type="text" name="reg" id="" placeholder="Registration">
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>
<?php 
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $reg = $_POST['reg'];

        $insertQuery = "insert into table3 (name,roll,reg) values('$name','$roll','$reg')";
        $selectQuery = mysqli_query($connect,$insertQuery);
        if($selectQuery){
            ?>
            <script>
                alert("Data Submited");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Data Submite Fail");
            </script>
            <?php
        }
    }


?>