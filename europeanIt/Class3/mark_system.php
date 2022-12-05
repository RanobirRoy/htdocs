<?php
    echo "<h1>Result Shit : </h1>";
    // Bangla Information
    $bangla_1 = 70;
    $bangla_2 = 90;
    $sub_name_1 = "Bangla";
    $over_all_bangla = ($bangla_1 + $bangla_2) / 2;
    $mark = $over_all_bangla;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_1 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_1 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_1 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_1 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_1 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_1 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_1 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa1 = $gpa;
    echo "<br>";

    // English Information
    $english_1 = 75;
    $english_2 = 80;
    $sub_name_2 = "English";
    $over_all_english = ($english_1 + $english_2) / 2;
    $mark = $over_all_english;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_2 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_2 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_2 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_2 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_2 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_2 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_2 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa2 = $gpa;
    echo "<br>";

    // Mathematic Information
    $math_1 = 70;
    $math_2 = 65;
    $sub_name_3 = "Mathematic";
    $over_all_math = ($math_1 + $math_2) / 2;
    $mark = $over_all_math;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_3 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_3 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_3 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_3 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_3 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_3 . " : " . "D";
    }elseif($mark >= 0 and $mark <=32){
        $gpa = 0.00;
        echo $sub_name_3 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa3 = $gpa;
    echo "<br>";

    // Physics Information
    $sub_name_4 = "Physics";
    $physics = 55;
    $mark = $physics;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_4 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_4 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_4 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_4 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_4 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_4 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_4 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa4 = $gpa;
    echo "<br>";

    // Chemistry Information
    $sub_name_5 = "Chemistry";
    $chemistry = 48;
    $mark = $chemistry;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_5 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_5 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_5 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_5 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_5 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_5 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_5 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa5 = $gpa;
    echo "<br>";

    // Biology Information
    $sub_name_6 = "Biology";
    $biology = 33;
    $mark = $biology;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_6 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_6 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_6 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_6 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_6 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_6 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_6 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa6 = $gpa;
    echo "<br>";

    // Dhormo Information
    $sub_name_7 = "Hindu Dhormo";
    $dhormo = 80;
    $mark = $dhormo;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_7 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_7 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_7 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_7 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_7 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_7 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_7 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa7 = $gpa;
    echo "<br>";


    // ICT Information
    $sub_name_8 = "ICT";
    $ict = 65;
    $mark = $ict;
    if($mark >= 80 and $mark <= 100){
        $gpa = 5.00;
        echo $sub_name_8 . " : " . "A+";
    }elseif($mark >= 70 and $mark <= 79){
        $gpa = 4.00;
        echo $sub_name_8 . " : " . "A";
    }elseif($mark >= 60 and $mark <= 69){
        $gpa = 3.50;
        echo $sub_name_8 . " : " . "A-";
    }elseif($mark >= 50 and $mark <= 59){
        $gpa = 3.00;
        echo $sub_name_8 . " : " . "B";
    }elseif($mark >= 40 and $mark <= 49){
        $gpa = 2.00;
        echo $sub_name_8 . " : " . "C";
    }elseif($mark >= 33 and $mark <= 39){
        $gpa = 1.00;
        echo $sub_name_8 . " : " . "D";
    }elseif($mark >= 0 and $mark <= 32){
        $gpa = 0.00;
        echo $sub_name_8 . " : " . "F";
    }else{
        echo " Please Enter Valid Marks !";
    }
    $gpa8 = $gpa;
    echo "<br>";


    // Avarage Result
    function counter(){
        global $gpa1, $gpa2, $gpa3, $gpa4, $gpa5, $gpa6, $gpa7, $gpa8;
        if($gpa1 > 0 && $gpa2 > 0 && $gpa3 > 0 && $gpa4 > 0 && $gpa5 > 0 && $gpa6 > 0 && $gpa7 > 0 && $gpa8 > 0){
            $newData = ($gpa1 + $gpa2 + $gpa3 + $gpa4 + $gpa5 + $gpa6 + $gpa7 + $gpa8) / 8;
            echo number_format((float)$newData, 2, '.', '');
        }else{
            echo "0.00";
        }
    }

    $mark = ($over_all_bangla + $over_all_english + $over_all_math + $physics + $chemistry + $biology + $dhormo + $ict);
    if($mark >= 800 and $mark <= 1000){
        echo "<h1>Grade And GPA  :  " . "(A+)";
    }elseif($mark >= 700 and $mark <= 790){
        echo "<h1>Grade And GPA  :  " . "(A)";
    }elseif($mark >= 600 and $mark <= 690){
        echo "<h1>Grade And GPA  :  " . "(A-)";
    }elseif($mark >= 500 and $mark <= 590){
        echo "<h1>Grade And GPA  :  " . "(B)";
    }elseif($mark >= 400 and $mark <= 490){
        echo "<h1>Grade And GPA  :  " . "(C)";
    }elseif($mark >= 330 and $mark <= 390){
        echo "<h1>Grade And GPA  :  " . "(D)";
    }elseif($mark >= 00 and $mark <= 320){
        echo "<h1>Grade And GPA  :  " . "(F)";
    }else{
        echo " Please Enter Valid Marks !";
    }
    counter();
?>