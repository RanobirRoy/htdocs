<?php 
    session_start();
    include "connection.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $searchEmail = "select * from table5 where email='$email' ";
        $callSearchEmail = mysqli_query($connect, $searchEmail);

        $emailCounter = mysqli_num_rows($callSearchEmail);
        if($emailCounter){
            $emailPass = mysqli_fetch_assoc($callSearchEmail);
            $DatabasePass = $emailPass['pass'];
            $decodePass = password_verify($pass, $DatabasePass);

            if($decodePass){
                echo "OK";
                ?>
                <script>
                    location.replace("form.php");
                    alert("Loged in");
                </script>
                <?php
            }else{
                echo "NOT OK";
                ?>
                <script>
                    alert("Password Invalid 1");
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Invalid E-mail");
            </script>
            <?php
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="email" name="email" id="" placeholder="E-mail">
        <input type="password" name="pass" id="" placeholder="Password">
        <input type="submit" name="submit" value="Login">
        <p>Don't have account?<a href="form.php">Signin</a></p>
    </form>
</body>
</html>