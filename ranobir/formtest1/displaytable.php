<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
</head>
<body>
    <div class="table-wraper">
        <h1>Display Table</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Registration</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "connection.php";
                    $tableSelector = "select * from test1";
                    $selectQuery = mysqli_query($connect, $tableSelector);
                    while($dataSelector = mysqli_fetch_array($selectQuery)){

                        ?>

                        <tr>
                            <td><?php echo $dataSelector['id'];?></td>
                            <td><?php echo $dataSelector['name'];?></td>
                            <td><?php echo $dataSelector['roll'];?></td>
                            <td><?php echo $dataSelector['reg'];?></td>
                            <td><?php echo $dataSelector['comment'];?></td>
                            <td><a href="updateform.php?id=<?php echo $dataSelector['id'];?>">update</a></td>
                            <td><a href="delete.php?id=<?php echo $dataSelector['id'];?>">Delete</a></td>
                        </tr>

                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>