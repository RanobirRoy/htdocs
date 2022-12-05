<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $search_email = "select * from table6 where email='$email'";
        $search_email_query = mysqli_query($connect, $search_email);

        $email_counter = mysqli_num_rows($search_email_query);
        if($email_counter){
            $fatch_email = mysqli_fetch_assoc($search_email_query);
            $db_pass = $fatch_email['pass'];
            $varify_pass = password_verify($pass, $db_pass);
            if($varify_pass){
                echo "OK";
            }else{
                echo "Mang";
            }
        }else{
            echo "invalid E-mail";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 2</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" id="" placeholder="E-mail">
        <input type="password" name="pass" id="" placeholder="Password">
        <input type="submit" name="submit" value="Login">
        <p>Don't have account?<a href="form.php">Signin</a></p>
    </form>
</body>
</html>