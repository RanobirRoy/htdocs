<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            <?php 

                include "connection.php";
                $selectTable = "select * from table4";
                $callSelectTable = mysqli_query($connect, $selectTable);
                while($tableData = mysqli_fetch_array($callSelectTable)){
                    ?>
                    <tr>
                        <td><?php echo $tableData['id']?></td>
                        <td><?php echo $tableData['name']?></td>
                        <td><?php echo $tableData['email']?></td>
                        <td><a href="update.php?id=<?php echo $tableData['id'];?>">Update</a></td>
                        <td><a href="delete.php?id=<?php echo $tableData['id'];?>">Delete</a></td>
                    </tr>
                    <?php
                }


            ?>
        </tbody>
    </table>
</body>
</html>