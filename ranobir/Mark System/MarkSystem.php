<?php 
  include ("requiredLogic.php");
  include ("markLogic.php");
  include ("commentsLogic.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mark System in PHP</title>
    <link rel="stylesheet" href="MarkSystem.css" />
    <script src="https://kit.fontawesome.com/ae5d7039ca.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <section class="input-field | section-padding">
      <div class="input-field-wraper">
        <form action="" method="post">
          <h1 class="headline">Input Mark Here</h1>
          <div class="input-wraper">
            <div class="input-box">
              <span>Bangla 1st</span>
              <input type="number" placeholder="Bangla 1st" name="field1" id="field1" value="<?php echo $field1; ?>" />
              <label for="field1"><?php echo $field1_error;?></label>
            </div>
            <div class="input-box">
              <span>Bangla 2nd</span>
              <input type="number" placeholder="Bangla 2nd" name="field2" id="field2" value="<?php echo $field2; ?>" />
              <label for="field2"><?php echo $field2_error;?></label>
            </div>
          </div>
          <div class="input-wraper">
            <div class="input-box">
            <span>English 1st</span>
              <input type="number" placeholder="English 1st" name="field3" id="field3" value="<?php echo $field3; ?>" />
              <label for="field3"><?php echo $field3_error;?></label>
            </div>
            <div class="input-box">
              <span>English 2nd</span>
              <input type="number" placeholder="English 2nd" name="field4" id="field4" value="<?php echo $field4; ?>" />
              <label for="field4"><?php echo $field4_error;?></label>
            </div>
          </div>
          <div class="input-wraper">
            <div class="input-box">
              <span>Mathematic</span>
              <input type="number" placeholder="Mathematic" name="field5" id="field5" value="<?php echo $field5; ?>" />
              <label for="field5"><?php echo $field5_error;?></label>
            </div>
            <div class="input-box">
              <span>Higher Math</span>
              <input type="number" placeholder="Higher Math" name="field6" id="field6" value="<?php echo $field6; ?>" />
              <label for="field6"><?php echo $field6_error;?></label>
            </div>
          </div>
          <div class="input-wraper">
            <div class="input-box">
              <span>Physics</span>
              <input type="number" placeholder="Physics (Under 75)" name="field7" id="field7" value="<?php echo $field7; ?>" />
              <label for="field7"><?php echo $field7_error;?></label>
            </div>
            <div class="input-box">
              <span>Physics Practical</span>
              <input type="number" placeholder="Physics Practical (Under 25)" name="field8" id="field8" value="<?php echo $field8; ?>" />
              <label for="field8"><?php echo $field8_error;?></label>
            </div>
          </div>
          <div class="input-wraper">
            <div class="input-box">
              <span>Chemistry</span>
              <input type="number" placeholder="Chemistry (Under 75)" name="field9" id="field9" value="<?php echo $field9; ?>" />
              <label for="field9"><?php echo $field9_error;?></label>
            </div>
            <div class="input-box">
              <span>Chemistry Practical</span>
              <input type="number" placeholder="Chemistry Practical (Under 25)" name="field10" id="field10" value="<?php echo $field10; ?>" />
              <label for="field10"><?php echo $field10_error;?></label>
            </div>
          </div>
          <div class="input-wraper">
            <div class="input-box">
              <span>Biology</span>
              <input type="number" placeholder="Biology (Under 75)" name="field11" id="field11" value="<?php echo $field11; ?>" />
              <label for="field11"><?php echo $field11_error;?></label>
            </div>
            <div class="input-box">
              <span>Biology Practical</span>
              <input type="number" placeholder="Biology Practical (Under 25)" name="field12" id="field12" value="<?php echo $field12; ?>" />
              <label for="field12"><?php echo $field12_error;?></label>
            </div>
          </div>
          <div class="input-wraper">
            <div class="input-box">
              <span>Social Science</span>
              <input type="number" placeholder="Social Science" name="field13" id="field13" value="<?php echo $field13; ?>" />
              <label for="field13"><?php echo $field13_error;?></label>
            </div>
            <div class="input-box">
              <span>Religion</span>
              <input type="number" placeholder="Religion" name="field14" id="field14" value="<?php echo $field14; ?>" />
              <label for="field14"><?php echo $field14_error;?></label>
            </div>
          </div>
          <div class="input-btn">
            <input type="submit" value="Submit" name="submit" class="btn" />
            <input type="submit" value="Reset" name="reset" class="btn" />
          </div>
        </form>
      </div>
    </section>
    <section class="show-mark | section-padding" id="showMark">
      <div class="mark-container">
        <div class="mark-wraper">
          <table>
            <h1 class="headline">Your Result</h1>
            <thead>
              <tr>
                <th name="subject">Subject</th>
                <th name="grade" colspan="2">Grade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="--clr-td-1: #eeeeee">Bangla 1st</td>
                <td style="--clr-td-1: #eeeeee" colspan="2" name="resultgpa"><?php markSystem($bangla1);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #9ecfff">Bangla 2nd</td>
                <td style="--clr-td-1: #9ecfff" colspan="2" name="resultgpa"><?php markSystem($bangla2);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #eeeeee">English 1st</td>
                <td style="--clr-td-1: #eeeeee" colspan="2" name="resultgpa"><?php markSystem($english1);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #9ecfff">English 2nd</td>
                <td style="--clr-td-1: #9ecfff" colspan="2" name="resultgpa"><?php markSystem($english2);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #eeeeee">Mathematic</td>
                <td style="--clr-td-1: #eeeeee" colspan="2" name="resultgpa"><?php markSystem($mathematic);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #9ecfff">Higher Math</td>
                <td style="--clr-td-1: #9ecfff" colspan="2" name="resultgpa"><?php markSystem($higher_math);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #eeeeee">Physics</td>
                <td style="--clr-td-1: #eeeeee" colspan="2" name="resultgpa"><?php markSystem2($physics);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #9ecfff">Chemistry</td>
                <td style="--clr-td-1: #9ecfff" colspan="2" name="resultgpa"><?php markSystem2($chemistry);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #eeeeee">Biology</td>
                <td style="--clr-td-1: #eeeeee" colspan="2" name="resultgpa"><?php markSystem2($biology);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #9ecfff">Social Science</td>
                <td style="--clr-td-1: #9ecfff" colspan="2" name="resultgpa"><?php markSystem($social_science);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #eeeeee">Religion</td>
                <td style="--clr-td-1: #eeeeee" colspan="2" name="resultgpa"><?php markSystem($religion);?></td>
              </tr>
              <tr>
                <td style="--clr-td-1: #9ecfff">Totall :</td>
                <td style="--clr-td-1: #9ecfff" name="resultgpa">Grade :<?php echo goldenCheck();?> <?php echo gradeCheck(); ?></td>
                <td style="--clr-td-1: #9ecfff" name="resultgpa">GPA : <?php echo totallGpa();?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="info | section-padding">
      <div class="info-container">
        <div class="info-wraper">
          <ul>
            <li name="compare">Grade Counter</li>
            <li><span><i class="fa-solid fa-circle-exclamation"></i></span>You got A+ = <?php echo gradeAA();?></li>
            <li><span><i class="fa-solid fa-circle-exclamation"></i></span>You got A = <?php echo gradeA();?></li>
            <li><span><i class="fa-solid fa-circle-exclamation"></i></span>You got A = <?php echo gradeAe();?></li>
          </ul>
          <ul>
            <li name="compare">Mark Compare</li>
            <li><?php compareText("Bangla 1st",$bangla1); compare($bangla1); ?></li>
            <li><?php compareText("Bangla 2nd",$bangla2); compare($bangla2); ?></li>
            <li><?php compareText("English 1nd",$english1); compare($english1); ?></li>
            <li><?php compareText("English 2nd",$english2); compare($english2); ?></li>
            <li><?php compareText("Mathematic",$mathematic); compare($mathematic); ?></li>
            <li><?php compareText("Physics",$physics); compare($physics); ?></li>
            <li><?php compareText("Chemistry",$chemistry); compare($chemistry); ?></li>
            <li><?php compareText("Biology",$biology); compare($biology); ?></li>
            <li><?php compareText("Social Science",$social_science); compare($social_science); ?></li>
            <li><?php compareText("Religion",$religion); compare($religion); ?></li>
            <!-- <li>50 mark need to pass in Static Text</li> -->
          </ul>
        </div>
      </div>
    </section>
    <!-- <section class="notice">
      <div class="notice-wraper">
        <ul>
          <li>Field Required System</li>
          <li>Full Result System Subject Fail Detector</li>
          <li>Golden mark Show if all Subject Result is A+</li>
          <li>How much A+/A/A-/B/C/D (Done)</li>
          <li name="notFinished">Not Finished Yet</li>
          <li name="notFinished">Not Finished Yet</li>
        </ul>
      </div>
    </section> -->
  </body>
</html>
