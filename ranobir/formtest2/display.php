<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
    <h1>Display</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "connection.php";
                $selectingTable = "select * from table2";
                $selectingTableQuery = mysqli_query($connect, $selectingTable);
                while($tableData = mysqli_fetch_array($selectingTableQuery)){
                    ?>
                    <tr>
                        <td><?php echo $tableData['id'];?></td>
                        <td><?php echo $tableData['name'];?></td>
                        <td><?php echo $tableData['email'];?></td>
                        <td><?php echo $tableData['comment'];?></td>
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