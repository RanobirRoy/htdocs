<?php 

function markSystem($mark){
    if($mark >= 80 and $mark <= 100){
        echo "A+";
    }elseif($mark >= 70 and $mark <= 79){
        echo "A";
    }elseif($mark >= 60 and $mark <= 69){
        echo "A-";
    }elseif($mark >= 50 and $mark <= 59){
        echo "B";
    }elseif($mark >= 40 and $mark <= 49){
        echo "C";
    }elseif($mark >= 33 and $mark <= 39){
        echo "D";
    }elseif(empty($mark)){
        echo "0";
    }elseif($mark >= 0 and $mark <= 32){
        echo "F";
    }else{
        echo "Invalid";
    }
}
    $bangla1_mark = markSystem(60);
    echo $bangla1_mark;
// function markSystem2($mark){
//     if($mark >= 60 and $mark <= 75){
//         echo "A+";
//     }elseif($mark >= 52 and $mark <= 59){
//         echo "A";
//     }elseif($mark >= 45 and $mark <= 51){
//         echo "A-";
//     }elseif($mark >= 37 and $mark <= 44){
//         echo "B";
//     }elseif($mark >= 30 and $mark <= 36){
//         echo "C";
//     }elseif($mark >= 24 and $mark <= 29){
//         echo "D";
//     }elseif(empty($mark)){
//         echo "0";
//     }elseif($mark >= 0 and $mark <= 23){
//         echo "F";
//     }else{
//         echo "Invalid";
//     }
// }

// if(!empty($field1) && !empty($field2) && !empty($field3) && !empty($field4) && !empty($field5) && !empty($field6) && !empty($field7) && !empty($field8) && !empty($field9) && !empty($field10) && !empty($field11) && !empty($field12) && !empty($field13) && !empty($field14)){
//     $overall_bangla = ($field1 + $field2) / 2;
//     $overall_english = ($field3 + $field4) / 2;
//     $overall_physics = $field7 + $field8;
//     $overall_chemistry = $field9 + $field10;
//     $overall_biology = $field11 + $field12; 
// }

// $bangla1 = $field1;
// $bangla2 = $field2; 

// $english1 = $field3; 
// $english2 = $field4; 

// $mathematic = $field5;
// $higher_math = $field6;

// $physics = $field7;
// $chemistry = $field9;
// $biology = $field11;

// $social_science = $field13;
// $religion = $field14;


// function gradeCheck(){
//     global $bangla1,$bangla2,$english1,$english2,$mathematic,$higher_math,$physics,$chemistry,$biology,$social_science,$religion,$field8,$field10,$field12;

//     function markSystem3($gradeMark){
//         if($gradeMark >= 800 and $gradeMark <= 1000){
//             echo "A+";
//         }elseif($gradeMark >= 700 and $gradeMark <= 790){
//             echo "A";
//         }elseif($gradeMark >= 600 and $gradeMark <= 690){
//             echo "A-";
//         }elseif($gradeMark >= 500 and $gradeMark <= 590){
//             echo "B";
//         }elseif($gradeMark >= 400 and $gradeMark <= 490){
//             echo "C";
//         }elseif($gradeMark >= 330 and $gradeMark <= 390){
//             echo "D";
//         }elseif($gradeMark >= 0 and $gradeMark <= 320){
//             echo "0";
//         }else{
//             echo "0";
//         }
//     }

//     if(empty($bangla1) || empty($bangla2) || empty($english1) || empty($english2) || empty($mathematic) || empty($higher_math) || empty($physics) || empty($chemistry) || empty($biology) || empty($social_science) || empty($religion) || $bangla1 < 33 || $bangla2 < 33 || $english1 < 33 || $english2 < 33 || $mathematic < 33 || $higher_math < 33 || $physics < 24 || $chemistry < 24 || $biology < 24 || $social_science < 33 || $religion < 33 || $field8 < 8 || $field10 < 8 || $field12 < 8){
//         $gradeMark = 0;
//     }else{
//         $gradeMark = ($bangla1 + $bangla2 + $english1 + $english2 + $mathematic + $higher_math + $physics + $chemistry + $biology + $social_science + $religion);
//     }
//     $gradeMarkResult = markSystem3($gradeMark);
//     return $gradeMarkResult;
// }

// function totallGpa(){
// global $bangla1,$bangla2,$overall_bangla,$english1,$english2,$overall_english,$mathematic,$higher_math,$physics,$overall_physics,$chemistry,$overall_chemistry,$biology,$overall_biology,$social_science,$religion,$field8,$field10,$field12;

//     function markSystem4($mark){
//         if($mark >= 80 and $mark <= 100){
//             $gpa = 5.00;
//         }elseif($mark >= 70 and $mark <= 79){
//             $gpa = 4.00;
//         }elseif($mark >= 60 and $mark <= 69){
//             $gpa = 3.50;
//         }elseif($mark >= 50 and $mark <= 59){
//             $gpa = 3.00;
//         }elseif($mark >= 40 and $mark <= 49){
//             $gpa = 2.00;
//         }elseif($mark >= 33 and $mark <= 39){
//             $gpa = 1.00;
//         }elseif($mark >= 0 and $mark <= 32){
//             $gpa = 0.00;
//         }else{
//             $gpa = 0;
//         }
//         return $gpa;
//     }

//     if($bangla1 < 33 || $bangla2 < 33 || $english1 < 33 || $english2 < 33 || $mathematic < 33 || $higher_math < 33 || $physics < 24 || $chemistry < 24 || $biology < 24 || $social_science < 33 || $religion < 33 || $field8 < 8 || $field10 < 8 || $field12 < 8){
//         $totallResult = 0;
//     }else{
//         $totallResult = (markSystem4($overall_bangla) + markSystem4($overall_english) + markSystem4($mathematic) + markSystem4($higher_math) + markSystem4($overall_physics) + markSystem4($overall_chemistry) + markSystem4($overall_biology) + markSystem4($religion)) / 8;
//         // $returnTotallResult = number_format((float)$totallResult, 2, '.', '');
//     }
//     return $totallResult;
//     // return $returnTotallResult;
// }



?>