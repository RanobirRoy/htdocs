<?php 
    
    $res = 1;
    $new = 0;
    for($i = 1; $i <= 5; $i++){
        // $res -=$i;
        $res = $res * $i;
        // echo $i . "<br>";
        $new = $i;
    };
    echo $res;

    // $a = 0;
    // $result = "";
    // for($i = 5; $i >= 1; $i--){
    //     $a -= $i;
    //     $result .= ($i == 1) ? $i : $i." - ";
    // }
    // echo $result . " = " . $a;
    // echo $res;

    // $count = 1;
    // $string = '';
    // for ($i = 1; $i <= 5; $i++){
    //     $count -= $i;

    //     $string .= ($i == 5) ? $i : $i." - ";
    // }
    // echo $string." = ".$count;
    
?>