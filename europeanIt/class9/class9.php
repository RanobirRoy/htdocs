<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 8 word repeat</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="data" placeholder="Name" required>
        <input type="submit" name="sub" value="Send">
        <div>
            <h1>View Data</h1>
        <p>
        </p>
    </div>
    </form>
</body>
</html>
<?php
    if(isset($_POST['sub'])){
    echo $_POST['data'];
    }
?>