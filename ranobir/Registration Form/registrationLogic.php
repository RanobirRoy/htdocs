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