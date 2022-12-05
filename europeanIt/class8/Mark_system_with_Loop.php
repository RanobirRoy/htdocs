<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark system in Bangladesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
<?php
    echo "<h1>Mark System In Bangladesh</h1>";
    $subject_name = ["Bangla 1st", "Bangla 2st", "English 1st", "English 2st", "Mathematics", "Higher Math", "Higher Math Practical", "Physis", "Physis Practical", "Chemistry", "Chemistry Practical", "Biology", "Biology Practical", "Social Science", "ICT", "Hindu Dhormo"];
    echo count($subject_name) . "<br>";
    function markSystem($subject, $mark){
        // global $subject_name;  //it's working with out global decreation
        if($subject == "Higher Math" || $subject == "Physis" || $subject == "Chemistry" || $subject == "Biology"){
            if($mark >= 60 and $mark <= 75){
                // $gpa = 5.00;
                echo $subject . " : " . "A+";
            }elseif($mark >= 52 and $mark <= 59){
                // $gpa = 4.00;
                echo $subject . " : " . "A";
            }elseif($mark >= 45 and $mark <= 51){
                $gpa = 3.50;
                echo $subject . " : " . "A-";
            }elseif($mark >= 37 and $mark <= 44){
                // $gpa = 3.00;
                echo $subject . " : " . "B";
            }elseif($mark >= 30 and $mark <= 36){
                // $gpa = 2.00;
                echo $subject . " : " . "C";
            }elseif($mark >= 24 and $mark <= 29){
                // $gpa = 1.00;
                echo $subject . " : " . "D";
            }elseif($mark >= 0 and $mark <= 23){
                // $gpa = 0.00;
                echo $subject . " : " . "F";
            }else{
                echo " Please Enter Valid Marks !";
            }
        }else{
            if($mark >= 80 and $mark <= 100){
                $gpa = 5.00;
                echo $subject . " : " . "A+";
            }elseif($mark >= 70 and $mark <= 79){
                $gpa = 4.00;
                echo $subject . " : " . "A";
            }elseif($mark >= 60 and $mark <= 69){
                $gpa = 3.50;
                echo $subject . " : " . "A-";
            }elseif($mark >= 50 and $mark <= 59){
                $gpa = 3.00;
                echo $subject . " : " . "B";
            }elseif($mark >= 40 and $mark <= 49){
                $gpa = 2.00;
                echo $subject . " : " . "C";
            }elseif($mark >= 33 and $mark <= 39){
                $gpa = 1.00;
                echo $subject . " : " . "D";
            }elseif($mark >= 0 and $mark <= 32){
                $gpa = 0.00;
                echo $subject . " : " . "F";
            }else{
                echo " Please Enter Valid Marks !";
            }
        }
    }
    echo markSystem($subject_name[1], 46);

?>
</body>
</html>