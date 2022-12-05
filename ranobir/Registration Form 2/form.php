<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Name">
        <input type="number" name="number" id="" placeholder="Number">
        <input type="email" name="email" id="" placeholder="E-mail">
        <input type="password" name="pass" id="" placeholder="Password">
        <input type="password" name="conPass" id="" placeholder="Confirm Password">
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conPass = $_POST['conPass'];

        $incryptedPass = password_hash($pass, PASSWORD_BCRYPT);
        $incryptedConPass = password_hash($conPass, PASSWORD_BCRYPT);

        $emailQuery = "select * from table6 where email= '$email' ";
        $callEmailQuery = mysqli_query($connect, $emailQuery);

        $emailCounter = mysqli_num_rows($callEmailQuery);

        if($emailCounter > 0){
            ?>
                <script>
                    alert("E-mail already Used");
                </script>
            <?php
        }else{
            if($pass === $conPass){
                $insertQuery = "insert into table6 (name,number,email,pass,conPass) values('$name', '$number', '$email', '$incryptedPass', '$incryptedConPass')";
                $callInsertQuery = mysqli_query($connect, $insertQuery);
                header('location:form.php');
            }else{
                ?>
                <script>
                    alert("Password Not match");
                </script>
            <?php
            }
        }
    }


?>