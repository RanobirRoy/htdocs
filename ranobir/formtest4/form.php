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
            width: 20rem;
            margin-inline: auto;
            flex-direction: column;
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
        <input type="email" name="email" id="" placeholder="E-mail">
        <input type="submit" name="submit" value="SEND">
    </form>
</body>
</html>
<?php 

include "connection.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $insertData = "insert into table4 (name,email) values('$name', '$email')";
    $callInsertData = mysqli_query($connect, $insertData);
    if($callInsertData){
        echo "OK";
    }else{
        echo "NO";
    }
}

?>