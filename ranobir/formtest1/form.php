<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wraper">
        <form action="" method="post">
            <h1>Form</h1>
            <input type="text" name="name" id="" placeholder="Name">
            <input type="number" name="roll" id="" placeholder="Roll">
            <input type="number" name="reg" id="" placeholder="Registration">
            <input type="text" name="comment" id="" placeholder="Comments">
            <input type="submit" value="Register" name="submit">
        </form>
    </div>
</body>
</html>

<?php 
    include "connection.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $reg = $_POST['reg'];
        $comment = $_POST['comment'];

        $insertQuery = "insert into table1(name,roll,reg,comment) values('$name','$roll','$reg','$comment')";
        $inserting = mysqli_query($connect, $insertQuery);

        if($inserting){
            ?>
            <script>
                alert("Data submited .");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Data submited Fail .");
            </script>
            <?php
        }
    }

?>