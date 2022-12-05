<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
    <?php 
        include "connection.php";
        $getID = $_GET['id'];
        $selectRow = "select * from table4 where id=$getID";
        $callSelectRow = mysqli_query($connect, $selectRow);
        $fetchRowData = mysqli_fetch_array($callSelectRow);

        if(isset($_POST['update'])){
            $name = $_POST['name'];
            $email = $_POST['email'];

            $updateID = $_GET['id'];

            $updateData = "update table4 set id=$updateID, name='$name', email='$email' where id=$updateID";
            $callUpdateData = mysqli_query($connect, $updateData);
            if($callUpdateData){
                echo "OK";
            }else{
                echo "NO";
            }
        }

    ?>
        <h1>Update</h1>
        <input type="text" name="name" id="" placeholder="Name" value="<?php echo $fetchRowData['name'];?>">
        <input type="email" name="email" id="" placeholder="E-mail" value="<?php echo $fetchRowData['email'];?>">
        <input type="submit" name="update" value="UPDATE">
    </form>
</body>
</html>
