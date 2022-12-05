<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            padding: .5rem;
            border: 1px solid red;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <h1>Display</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Registration</th>
                <th colspan="2">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "connection.php";
                $selectTable = "select * from table3";
                $selectTableQuery = mysqli_query($connect,$selectTable);
                while($tableData = mysqli_fetch_array($selectTableQuery)){
                    ?>
                    <tr>
                        <td><?php echo $tableData['id'];?></td>
                        <td><?php echo $tableData['name'];?></td>
                        <td><?php echo $tableData['roll'];?></td>
                        <td><?php echo $tableData['reg'];?></td>
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