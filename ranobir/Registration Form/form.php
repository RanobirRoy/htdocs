<?php 
    session_start();
    include "connection.php";
    // include "registrationLogic.php";

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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $number = mysqli_real_escape_string($connect, $_POST['number']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $pass = mysqli_real_escape_string($connect, $_POST['pass']);
        $conPass = mysqli_real_escape_string($connect, $_POST['conPass']);

        $password = password_hash($pass, PASSWORD_BCRYPT);
        $conPassword = password_hash($conPass, PASSWORD_BCRYPT);

        $emailQuery = "select * from table5 where email='$email'";
        $callEmailQuery = mysqli_query($connect, $emailQuery);

        $emailCounter = mysqli_num_rows($callEmailQuery);

        if($emailCounter > 0){
            ?>
            <script>
                alert("E-mail already Exists");
            </script>
            <?php
        }else{
            if($pass === $conPass){
                $insertQuery = "insert into table5 (name,number,email,pass,conPass) values('$name', '$number', '$email', '$password', '$conPassword')";
                $callInsertQuery = mysqli_query($connect, $insertQuery);
                if($callInsertQuery){
                    ?>
                    <script>
                        alert("Data Submited");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Data Submit Fail");
                    </script>
                    <?php
                }
            }else{
                ?>
                <script>
                    alert("Password Not Matching");
                </script>
                <?php
            }
        }
    }

?>