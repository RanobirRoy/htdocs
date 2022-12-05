<?php
    // This part will be hidden in Form
    $name_error = null;
    $roll_error = null;
    $reg_error = null;
    $shift_error = null;
    $group_error = null;
    $dep_error = null;
    $id_error = null;
    $pass_error = null;
    $activity_error = null;
    $sub_error = null;

    if(isset($_POST['submit'])){
        // Gating info
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $reg = $_POST['reg'];
        $shift = $_POST['shift'];
        $group = $_POST['group'];
        $dep = $_POST['dep'];
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $activity = $_POST['activity'];
        $sub = $_POST['sub'];

        // No Need Array right now
        // $all_inputs = ["$name", "$roll", "$reg", "$shift", "$group", "$dep", "$id", "$pass", "$activity", "$sub"];
        
        if(empty($name) && empty($roll) && empty($reg) && empty($shift) && empty($group) && empty($dep) && empty($id) && empty($pass) && empty($activity) && empty($sub)){
            // Checking every field empty or not

            $name_error = "Name field required";
            $roll_error = "Roll field required";
            $reg_error = "Reg field required";
            $shift_error = "Shift field required";
            $group_error = "Group field required";
            $dep_error = "Depertment field required";
            $id_error = "ID field required";
            $pass_error = "Password field required";
            $activity_error = "Activity field required";
            $sub_error = "Subject field required";
        }
        if(empty($name)){
            $name_error = "Name field required";
        }
        if(empty($roll)){
            $roll_error = "Roll field required";
        }
        if(empty($reg)){
            $reg_error = "Reg field required";
        }
        if(empty($shift)){
            $shift_error = "Shift field required";
        }
        if(empty($group)){
            $group_error = "Group field required";
        }
        if(empty($dep)){
            $dep_error = "Depertment field required";
        }
        if(empty($id)){
            $id_error = "ID field required";
        }
        if(empty($pass)){
            $pass_error = "Password field required";
        }
        if(empty($activity)){
            $activity_error = "Activity field required";
        }
        if(empty($sub)){
            $sub_error = "Subject field required";
        }
    }else{
        // This section work in Normall time when if condition not start yet
        $name = null;
        $roll = null;
        $reg = null;
        $shift = null;
        $group = null;
        $dep = null;
        $id = null;
        $pass = null;
        $activity = null;
        $sub = null;
    }
    if(!empty($name) && !empty($roll) && !empty($reg) && !empty($shift) && !empty($group) && !empty($dep) && !empty($id) && !empty($pass) && !empty($activity) && !empty($sub)){
        // This section help us to remove all data which we used here . ((After Submit Actualy))
        $name = null;
        $roll = null;
        $reg = null;
        $shift = null;
        $group = null;
        $dep = null;
        $id = null;
        $pass = null;
        $activity = null;
        $sub = null;
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Required Notify</title>
    <link rel="stylesheet" href="project3repeat.css">
</head>
<body>
    <div class="form-container">
        <div class="form-wraper">
            <h1>Required Notify</h1>
            <form action="" method="post">
                <div class="input-wraper">
                    <div class="input-box">
                        <input type="text" placeholder="Name" name="name" id="name" value="<?php echo $name; ?>">
                        <label for="name"><?php echo $name_error;?></label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Roll" name="roll" id="roll" value="<?php echo $roll; ?>">
                        <label for="roll"><?php echo $roll_error;?></label>
                    </div>
                </div>
                <div class="input-wraper">
                    <div class="input-box">
                        <input type="text" placeholder="Registration No :" name="reg" id="reg" value="<?php echo $reg; ?>">
                        <label for="reg"><?php echo $reg_error;?></label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Shift" name="shift" id="shift" value="<?php echo $shift; ?>">
                        <label for="shift"><?php echo $shift_error;?></label>
                    </div>
                </div>
                <div class="input-wraper">
                    <div class="input-box">
                        <input type="text" placeholder="Group" name="group" id="group" value="<?php echo $group; ?>">
                        <label for="group"><?php echo $group_error;?></label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Depertment" name="dep" id="dep" value="<?php echo $dep; ?>">
                        <label for="dep"><?php echo $dep_error;?></label>
                    </div>
                </div>
                <div class="input-wraper">
                    <div class="input-box">
                        <input type="text" placeholder="ID" name="id" id="id" value="<?php echo $id; ?>">
                        <label for="id"><?php echo $id_error;?></label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Password" name="pass" id="pass" value="<?php echo $pass; ?>">
                        <label for="pass"><?php echo $pass_error;?></label>
                    </div>
                </div>
                <div class="input-wraper">
                    <div class="input-box">
                        <input type="text" placeholder="Activity" name="activity" id="activity" value="<?php echo $activity; ?>">
                        <label for="activity"><?php echo $activity_error;?></label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Subject" name="sub" id="sub" value="<?php echo $sub; ?>">
                        <label for="sub"><?php echo $sub_error;?></label>
                    </div>
                </div>
                <input type="submit" value="Register" name="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>