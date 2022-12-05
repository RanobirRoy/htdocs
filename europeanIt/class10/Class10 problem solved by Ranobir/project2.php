<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Sans-serif;
        }
        .form{
            display: flex;
            flex-direction: column;
            width: 25%;
            gap: .5rem;
            margin-inline: auto;
            margin-top: 15vh;
        }
        .form textarea{
            resize: none;
            height: 5rem;
            padding: .5rem;
            outline: none;
        }
        .form textarea:focus{
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
    <h1 style="text-align: center">Problem 4,5 (Count Number And Odd/Even Check)</h1>
    <form class="form" action="" method="post">
        <input type="text" name="num1" id="" placeholder="Input 1">
        <input type="text" name="num2" id="" placeholder="Input 2">
        <div class="form-btn">
            <input type="submit" name="plus" id="" value= "+">
            <input type="submit" name="minus" id="" value= "-">
            <input type="submit" name="mult" id="" value= "*">
            <input type="submit" name="div" id="" value= "/">
        </div>
        <textarea name="" id=""><?php 
                if (isset($_POST['plus'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    if ($num1 == null && $num2 == null) {
                        echo "Please Input Something";
                    }elseif($num1 == null || $num2 == null){
                        echo "Please Input Something";
                    }else{
                        if($num1 < $num2){
                            $res = 0;
                            $result = "";
                            for($i = $num1; $i <= $num2; $i++){
                                // $res = $res + $i;
                                $res += $i;
                                $result .= ($i == $num2) ? $i : $i." + ";
                            }
                        }else{
                            $res = 0;
                            $result = "";
                            for($i = $num1; $i >= $num2; $i--){
                                $res += $i;
                                $result .= ($i == $num2) ? $i : $i." + ";
                            }
                        }
                        if($res % 2 == 0){
                            echo $result . " = " . $res . " (Even Number)";
                        }else{
                            echo $result . " = " . $res . " (Odd Number)";
                        }
                    }
                }

                // Subtraction Code Start Here
                if (isset($_POST['minus'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    if ($num1 == null && $num2 == null) {
                        echo "Please Input Something";
                    }elseif($num1 == null || $num2 == null){
                        echo "Please Input Something";
                    }else{
                        if($num1 < $num2){
                            $res = 1;
                            $result = "";
                            for($i = $num1; $i <= $num2; $i++){
                                $res -= $i;
                                $result .= ($i == $num2) ? $i : $i." - ";
                            }
                        }else{
                            $res = 0;
                            $result = "";
                            for($i = $num1; $i >= $num2; $i--){
                                $res += $i;
                                $result .= ($i == $num2) ? $i : $i." - ";
                            }
                        }
                        if($res % 2 == 0){
                            echo $result . " = " . $res . " (Even Number)";
                        }else{
                            echo $result . " = " . $res . " (Odd Number)";
                        }
                    }
                }
                // Multiplication Code Start Here
                if (isset($_POST['mult'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    if ($num1 == null && $num2 == null) {
                        echo "Please Input Something";
                    }elseif($num1 == null || $num2 == null){
                        echo "Please Input Something";
                    }else{
                        if($num1 < $num2){
                            $res = 1;
                            $result = "";
                            for($i = $num1; $i <= $num2; $i++){
                                $res *= $i;
                                $result .= ($i == $num2) ? $i : $i." * ";
                            }
                        }else{
                            $res = 1;
                            $result = "";
                            for($i = $num1; $i >= $num2; $i--){
                                $res *= $i;
                                $result .= ($i == $num2) ? $i : $i." * ";
                            }
                        }
                        if($res % 2 == 0){
                            echo $result . " = " . $res . " (Even Number)";
                        }else{
                            echo $result . " = " . $res . " (Odd Number)";
                        }
                    }
                }
                // Division Code Start Here
                if (isset($_POST['div'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    if ($num1 == null && $num2 == null) {
                        echo "Please Input Something";
                    }elseif($num1 == null || $num2 == null){
                        echo "Please Input Something";
                    }else{
                        if($num1 < $num2){
                            $res = 1;
                            $result = "";
                            for($i = $num1; $i <= $num2; $i++){
                                $res /= $i;
                                $result .= ($i == $num2) ? $i : $i." / ";
                            }
                        }else{
                            $res = 1;
                            $result = "";
                            for($i = $num1; $i >= $num2; $i--){
                                $res /= $i;
                                $result .= ($i == $num2) ? $i : $i." / ";
                            }
                        }
                        if($res % 2 == 0){
                            echo $result . " = " . $res . " (Even Number)";
                        }else{
                            echo $result . " = " . $res . " (Odd Number)";
                        }
                    }
                }
            ?>
        </textarea>
        <p>
            
        </p>
    </form>
</body>
</html>