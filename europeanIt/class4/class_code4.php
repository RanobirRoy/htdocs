<?php

    // $a = 1;
    // $end = 100;
    // $deff = 2;
    // for($a ; $a < $end; $a = $a + 1){
    //     $new_deff = $a;
    //     if($new_deff < 9){
    //         echo $a . "<br>";
    //     }else{
    //         die();
    //     }
    // }

    // $a = 1;
    // $end = 10;
    // $deff = 2; //lagtece na
    // for($a ; $a <= $end; $a = $a + 1){
    //     $new_deff = $end - $a;
    //     if($new_deff <=1){
    //         break;
    //     }else{
    //         echo $a . "<br>";
    //     }
    // }
    // $a = 1;
    // do{
    //     echo $a."<br>";
    //     $a++;
    // }while($a < 10);

    $a = 1;
    $end = 10;
    $deff = 2; //lagtece na
    for($a ; $a <= $end; $a = $a + 1){
        if($a == 5 || $a == 9 || $a == 1){
            continue;
        }
        echo $a . "<br>";
    }

?>