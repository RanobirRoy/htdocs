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
            flex-direction: column;
            width: 20rem;
            margin-inline: auto;
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
        <?php 
            include "connection.php";
            $id = $_GET['id'];
            $selectTableID = "select * from table3 where id=$id";
            $selectTableIDQuery = mysqli_query($connect, $selectTableID);
            $fetchData = mysqli_fetch_array($selectTableIDQuery);

            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $roll = $_POST['roll'];
                $reg = $_POST['reg'];

                $newID = $_GET['id'];

                $updateQuery = "update table3 set id=$newID,name='$name',roll='$roll',reg='$reg' where id=$newID";
                $callUpdateQuery = mysqli_query($connect,$updateQuery);
                if($callUpdateQuery){
                    ?>
                    <script>
                        alert("Data Submited");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Data Submite Fail");
                    </script>
                    <?php
                }
            }


        ?>
        <input type="text" name="name" id="" placeholder="Name" value="<?php echo $fetchData['name'];?>">
        <input type="text" name="roll" id="" placeholder="Roll" value="<?php echo $fetchData['roll'];?>">
        <input type="text" name="reg" id="" placeholder="Registration" value="<?php echo $fetchData['reg'];?>">
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>