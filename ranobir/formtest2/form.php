<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main table</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: min(20rem, 100% - 1rem);
            margin-inline: auto;
            gap: 1rem;
        }
        form input{
            padding: .5rem;
        }
        h1{
            text-align: center;
            margin: 10vh;
        }
    </style>
</head>
<body>
    <h1>Form 02</h1>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="text" name="email" id="email" placeholder="E-mail">
        <input type="text" name="comment" id="comment" placeholder="Comments">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php 

    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $insertingQuery = "insert into table2(name,email,comment) values('$name','$email','$comment')";
        $callingInsertQuery = mysqli_query($connect, $insertingQuery);
        if($callingInsertQuery){
            ?>
            <script>
                alert("Data Submited");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Data not Submited");
            </script>
            <?php
        }
    }


?>