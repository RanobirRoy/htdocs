<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1 2</title>
    <style>
        body{
            font-family: Sans-serif;
        }
        .form{
            display: flex;
            flex-direction: column;
            width: 20%;
            gap: .5rem;
            margin-inline: auto;
            margin-top: 15vh;
        }
        .form textarea{
            resize: none;
            padding: .5rem;
            outline: none;
        }
        .form textarea{
            outline: none;
        }
        .form input{
            padding: .5rem;
        }
        .form-btn{
            display: flex;
            width: 100%;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Problem 1,2 (Simple Calculator And Odd/Even Check)</h1>
    <form class="form" action="" method="post">
        <label for="value1">Input Value 1</label>
        <input type="text" name="value1" id="">
        <label for="value1">Input Value 2</label>
        <input type="text" name="value2" id="">

        <div class="form-btn">
            <input type="submit" name="plus" id="" value= "+">
            <input type="submit" name="minus" id="" value= "-">
            <input type="submit" name="mult" id="" value= "*">
            <input type="submit" name="div" id="" value= "/">
        </div>
        <textarea name="" id=""><?php
                if(isset($_POST['plus']) || isset($_POST['minus']) || isset($_POST['mult']) || isset($_POST['div'])){
                    $value1 = $_POST['value1'];
                    $value2 = $_POST['value2'];
                    if ($value1 == null && $value2 == null) {
                        echo "Please Input Something";
                    }elseif($value1 == null || $value2 == null){
                        echo "Please Input Something";
                    }else{
                        if (isset($_POST['plus'])) {
                            $result = $value1 + $value2;
                            echo $result;
                            if($result % 2 == 0){
                                echo " is even number.";
                            }else{
                                echo " is odd number.";
                            }
                        }elseif (isset($_POST['minus'])) {
                            $result = $value1 - $value2;
                            echo $result;
                            if($result % 2 == 0){
                                echo " is even number.";
                            }else{
                                echo " is odd number.";
                            }
                        }elseif (isset($_POST['mult'])) {
                            $result = $value1 * $value2;
                            echo $result;
                            if($result % 2 == 0){
                                echo " is even number.";
                            }else{
                                echo " is odd number.";
                            }
                        }elseif (isset($_POST['div'])) {
                            if ($value1 == 0 || $value2 == 0) {
                                echo "Invalid";
                            }else{
                                $result = $value1 / $value2;
                                echo $result;
                                if($result % 2 == 0){
                                    echo " is even number.";
                                }else{
                                    echo " is odd number.";
                                }
                            }
                        }
                    }
                }
            ?>
        </textarea>
    </form>
</body>
</html>