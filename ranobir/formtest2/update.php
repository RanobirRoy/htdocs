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
            flex-direction: column;
            width: min(20rem, 100% - 1rem);
            margin-inline: auto;
            gap: 1rem;
        }
        form input{
            padding: .5rem;
        }
        h1{
            text-align: center;
            margin: 10vh;
        }
    </style>
</head>
<body>
    <h1>Update</h1>
    <form action="" method="post">
    <?php
        include "connection.php";
        $gettingID = $_GET['id'];
        $selectingTableID = "select * from table2 where id={$gettingID}";
        $selectingTableIDQuery = mysqli_query($connect, $selectingTableID);
        $fetchingData = mysqli_fetch_array($selectingTableIDQuery);

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            
            $idUpdate = $_GET['id'];

            $updateData = "update table2 set id=$idUpdate , name='$name', email='$email', comment='$comment' where id=$idUpdate";
            $updateDataQuery = mysqli_query($connect, $updateData);
            if($updateDataQuery){
                ?>
                <script>
                    alert("Data Submited");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Data not Submited");
                </script>
                <?php
            }
        }


        ?>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $fetchingData['name']?>">
        <input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $fetchingData['email']?>">
        <input type="text" name="comment" id="comment" placeholder="Comments" value="<?php echo $fetchingData['comment']?>">
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>