<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime form fillup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="#" method="post">
            <h1>Fill this form</h1>
            <div class="input-wraper">
                <div class="input-box">
                    <input type="text" name="name" id="" placeholder="Name" required>
                    <input type="text" name="mobile" id="" placeholder="Mobile No:" required>
                </div>
                <div class="input-box">
                    <input type="text" name="email" id="" placeholder="E-mail" required>
                    <input type="text" name="subject" id="" placeholder="Subject" required>
                </div>
            </div>
            <textarea name="comments" id="" rows="10" placeholder="Write Your Comments..."></textarea>
            <input type="submit" name="submit" value="Register" id="submit">
        </form>
    </div>
</body>
</html>
<?php 

    include "connection.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $comments = $_POST['comments'];
        
        $insertInfo = "insert into alexiosinfo(name,mobile,email,subject,comments) values('$name', '$mobile', '$email', '$subject', '$comments')";

        $checker = mysqli_query($connect, $insertInfo);

        if ($checker) {
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
        header("location:index.php");
    }
    
?>