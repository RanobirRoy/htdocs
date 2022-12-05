<?php
    function markSystem($mark, $subName){
        if($mark >= 80 and $mark <= 100){
            $gpa = 5.00;
            echo $subName . " : " . "A+";
        }elseif($mark >= 70 and $mark <= 79){
            $gpa = 4.00;
            echo $subName . " : " . "A";
        }elseif($mark >= 60 and $mark <= 69){
            $gpa = 3.50;
            echo $subName . " : " . "A-";
        }elseif($mark >= 50 and $mark <= 59){
            $gpa = 3.00;
            echo $subName . " : " . "B";
        }elseif($mark >= 40 and $mark <= 49){
            $gpa = 2.00;
            echo $subName . " : " . "C";
        }elseif($mark >= 33 and $mark <= 39){
            $gpa = 1.00;
            echo $subName . " : " . "D";
        }elseif($mark >= 0 and $mark <= 32){
            $gpa = 0.00;
            echo $subName . " : " . "F";
        }else{
            echo " Please Enter Valid Marks !";
        }
        echo "<br>";
    }

    function markSystem2($mark, $subName){
        if($mark >= 60 and $mark <= 75){
            $gpa = 5.00;
            echo $subName . " : " . "A+";
        }elseif($mark >= 52 and $mark <= 59){
            $gpa = 4.00;
            echo $subName . " : " . "A";
        }elseif($mark >= 45 and $mark <= 51){
            $gpa = 3.50;
            echo $subName . " : " . "A-";
        }elseif($mark >= 37 and $mark <= 44){
            $gpa = 3.00;
            echo $subName . " : " . "B";
        }elseif($mark >= 30 and $mark <= 36){
            $gpa = 2.00;
            echo $subName . " : " . "C";
        }elseif($mark >= 24 and $mark <= 29){
            $gpa = 1.00;
            echo $subName . " : " . "D";
        }elseif($mark >= 0 and $mark <= 23){
            $gpa = 0.00;
            echo $subName . " : " . "F";
        }else{
            echo " Please Enter Valid Marks !";
        }
        echo "<br>";
    }
    // ============================Code Start================================

    $bangla1 = 70;
    $bangla2 = 90;
    $overall_bangla = ($bangla1 + $bangla2) / 2;
    echo markSystem($bangla1, "Bangla 1st");
    echo markSystem($bangla2, "Bangla 2nd");
    echo markSystem($overall_bangla, "Overall Bangla"). "<br>";

    $english1 = 75;
    $english2 = 75;
    $overall_english = ($english1 + $english2) / 2;
    echo markSystem($english1, "English 1st");
    echo markSystem($english2, "English 2nd");
    echo markSystem($overall_english, "Overall English"). "<br>";

    $mathematics = 80;
    $higherMath = 43;
    echo markSystem($mathematics, "Mathematics");
    echo markSystem2($higherMath, "Higher Math"). "<br>";

    $biology = 57;
    echo markSystem2($biology, "Biology"). "<br>";

    $physics = 60;
    echo markSystem2($physics, "Physics"). "<br>";

    $chemistry = 70;
    echo markSystem2($chemistry, "Chemistry"). "<br>";

    $dhormo = 90;
    echo markSystem($dhormo, "Hindu Dhormo"). "<br>";

    $socialScience = 65;
    echo markSystem($socialScience, "Social Science"). "<br>";


    $mark = ($overall_bangla + $overall_english + $mathematics + $higherMath + $biology + $physics + $chemistry + $dhormo + $socialScience);
    if($mark >= 800 and $mark <= 1000){
        echo "<h1>Grade Point Average  : (A+)";
    }elseif($mark >= 700 and $mark <= 790){
        echo "<h1>Grade Point Average  : (A)";
    }elseif($mark >= 600 and $mark <= 690){
        echo "<h1>Grade Point Average  : (A-)";
    }elseif($mark >= 500 and $mark <= 590){
        echo "<h1>Grade Point Average  : (B)";
    }elseif($mark >= 400 and $mark <= 490){
        echo "<h1>Grade Point Average  : (C)";
    }elseif($mark >= 330 and $mark <= 390){
        echo "<h1>Grade Point Average  : (D)";
    }elseif($mark >= 00 and $mark <= 320){
        echo "<h1>Grade Point Average  : (F)";
    }else{
        echo " Please Enter Valid Marks !";
    }

?>