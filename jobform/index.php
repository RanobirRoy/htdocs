<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Form</title>
    <style>
        body{
            height: 100vh;
            display: grid;
            place-items: center;
        }
        form{
            display: flex;
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
        <input type="text" name="name" id="" placeholder="Name" required>
        <input type="text" name="degree" id="" placeholder="Degree" required>
        <input type="text" name="mobile" id="" placeholder="Mobile" required>
        <input type="email" name="email" id="" placeholder="E-mail" required>
        <input type="text" name="refer" id="" placeholder="Refer" required>
        <input type="text" name="jobpost" id="" placeholder="Job Post" required>
        <input type="submit" name="submit" id="" value="Submit">
    </form>
</body>
</html>

<?php 

include 'connection.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobpost = $_POST['jobpost'];

    $insertData = "insert into prime_info(name,degree,mobile,email,refer,jobpost) values('$name', '$degree', '$mobile', '$email', '$refer', '$jobpost')";

    $res = mysqli_query($con, $insertData);

    if($res){
        ?>
        <script>
            alert("Data inserted");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data NOT inserted");
        </script>
        <?php
    }
}

?>