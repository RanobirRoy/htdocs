<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database table</title>
    <script src="https://kit.fontawesome.com/ae5d7039ca.js" crossorigin="anonymous"></script>
    <style>
        table{
            border-collapse: collapse;
        }
        table thead th,
        table tbody td {
        border: 1px solid #00b7ff;
        padding: 0.5rem;
        text-align: center;
}
    </style>
</head>
<body>
    <div class="datatable-container">
        <div class="datatable-wraper">
            <h1>Database Displaying</h1>
            <div class="datatable">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>E-mail</th>
                            <th>Subject</th>
                            <th>Comments</th>
                            <th colspan="2">Other Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include "connection.php";
                        $selectquery = "select * from alexiosinfo";
                        $query = mysqli_query($connect, $selectquery);
                        while ($showdata = mysqli_fetch_array($query)) {
                            ?>

                            <tr>
                            <td><?php echo $showdata['id'];?></td>
                            <td><?php echo $showdata['name'];?></td>
                            <td><?php echo $showdata['mobile'];?></td>
                            <td><?php echo $showdata['email'];?></td>
                            <td><?php echo $showdata['subject'];?></td>
                            <td><?php echo $showdata['comments'];?></td>
                            <td><i class="fa-solid fa-pen-to-square"></i></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tr>

                        <?php

                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>