<?php 

// This part will be hfield7den in Form
$field1_error = null;
$field2_error = null;
$field3_error = null;
$field4_error = null;
$field5_error = null;
$field6_error = null;
$field7_error = null;
$field8_error = null;
$field9_error = null;
$field10_error = null;
$field11_error = null;
$field12_error = null;
$field13_error = null;
$field14_error = null;

if(isset($_POST['submit'])){
    // Gating info
    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    $field3 = $_POST['field3'];
    $field4 = $_POST['field4'];
    $field5 = $_POST['field5'];
    $field6 = $_POST['field6'];
    $field7 = $_POST['field7'];
    $field8 = $_POST['field8'];
    $field9 = $_POST['field9'];
    $field10 = $_POST['field10'];
    $field11 = $_POST['field11'];
    $field12 = $_POST['field12'];
    $field13 = $_POST['field13'];
    $field14 = $_POST['field14'];

    // Checking empty Field Here

    if(empty($field1)){
        $field1_error = "Bangla 1st field required";
    }
    if(empty($field2)){
        $field2_error = "bangla 2nd field required";
    }
    if(empty($field3)){
        $field3_error = "English 1st field required";
    }
    if(empty($field4)){
        $field4_error = "English 2nd field required";
    }
    if(empty($field5)){
        $field5_error = "Mathematic field required";
    }
    if(empty($field6)){
        $field6_error = "Higher Math field required";
    }
    if(empty($field7)){
        $field7_error = "Physics field required";
    }
    if(empty($field8)){
        $field8_error = "Physics Practical field required";
    }
    if(empty($field9)){
        $field9_error = "Chemistry field required";
    }
    if(empty($field10)){
        $field10_error = "Chemistry Practical field required";
    }
    if(empty($field11)){
        $field11_error = "Biology field required";
    }
    if(empty($field12)){
        $field12_error = "Biology Practical field required";
    }
    if(empty($field13)){
        $field13_error = "Social Science field required";
    }
    if(empty($field14)){
        $field14_error = "Religion field required";
    }
    
}else{
    // This section work in Normall time when if condition not start yet
    $field1 = null;
    $field2 = null;
    $field3 = null;
    $field4 = null;
    $field5 = null;
    $field6 = null;
    $field7 = null;
    $field8 = null;
    $field9 = null;
    $field10 = null;
    $field11 = null;
    $field12 = null;
    $field13 = null;
    $field14 = null;
}
if (isset($_POST['reset'])) {
    if(!empty($field1) && !empty($field2) && !empty($field3) && !empty($field4) && !empty($field5) && !empty($field6) && !empty($field7) && !empty($field8) && !empty($field9) && !empty($field10) && !empty($field11) && !empty($field12) && !empty($field13) && !empty($field14)){
        // This section help us to remove all data which we used here . ((After field10mit Actualy))
        $field1 = null;
        $field2 = null;
        $field3 = null;
        $field4 = null;
        $field5 = null;
        $field6 = null;
        $field7 = null;
        $field8 = null;
        $field9 = null;
        $field10 = null;
        $field11 = null;
        $field12 = null;
        $field13 = null;
        $field14 = null;
    }
}

?>