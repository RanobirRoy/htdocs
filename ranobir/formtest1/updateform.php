<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wraper">
        <form action="" method="post">
            <h1>Update</h1>
        <?php 
            include "connection.php";

            $ids = $_GET['id'];
            $showQuery = "select * from test1 where id={$ids}";
            $showData = mysqli_query($connect, $showQuery);
            $arrfetch = mysqli_fetch_array($showData);


            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $roll = $_POST['roll'];
                $reg = $_POST['reg'];
                $comment = $_POST['comment'];

                $idupdate = $_GET['id'];

                $updateQuery = "update test1 set id=$idupdate, name='$name',roll='$roll',reg='$reg',comment='$comment' where id=$idupdate"; 

                $inserting = mysqli_query($connect, $updateQuery);

                if($inserting){
                    ?>
                    <script>
                        alert("Data Updated .");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Data Update Fail Fail .");
                    </script>
                    <?php
                }
            }

        ?>
            <input type="text" name="name" id="" placeholder="Name" value="<?php echo $arrfetch['name'];?>">
            <input type="number" name="roll" id="" placeholder="Roll" value="<?php echo $arrfetch['roll'];?>">
            <input type="number" name="reg" id="" placeholder="Registration" value="<?php echo $arrfetch['reg'];?>">
            <input type="text" name="comment" id="" placeholder="Comments" value="<?php echo $arrfetch['comment'];?>">
            <input type="submit" value="Update" name="submit">
            <a href="displaytable.php">Check From</a>
        </form>
    </div>
</body>
</html>