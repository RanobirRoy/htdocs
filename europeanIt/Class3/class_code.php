<?php
    $name = "Sal";
    $len_name = strlen($name);
    // echo "$len_name";
    // die();
    // if($name == ""){
    //     echo "Name fild can't be empty";
    // }elseif($len_name < 5){
    //     echo "Name size dose not match";
    // }else{
    //     echo "Success";
    // }
    // if(empty($name)){
    //     echo "Name fild can't be empty";
    // }elseif($len_name < 5){
    //     echo "Name size dose not match";
    // }else{
    //     echo "Success";
    // }
    if(empty($name)){
        echo "Name fild can't be empty";
    }else{
        if($len_name < 5){
            echo "Name size dose not match";
        }else{
            echo "Success";
        }
            
    }
?>