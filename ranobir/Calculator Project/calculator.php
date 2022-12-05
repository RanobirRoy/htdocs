<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator Project</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <main>
      <div class="calculator">
        <div class="top">
          <form mathod="">
            <div class="data1">
              <input type="text" value="" name="num1" placeholder="Enter Number" />
            </div>
            <div class="data2">
              <input type="text" value="" name="num2" placeholder="Enter Number" />
            </div>
            <div class="selector">
              <select name="operation" id="">
                <option value="">Select</option>
                <option value="add">Add</option>
                <option value="mult">Mult</option>
              </select>
            </div>
            <div class="button">
              <input type="submit" name="submit" value="submit"/>
            </div>
          </form>
        </div>
        <div class="bottom">
          <p>
            <?php
              if(isset($_GET['submit'])){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                // echo "{$num1} {$num2}";
                $operation = $_GET['operation'];

                switch($operation){
                  case "add" : $sum = $num1 + $num2;
                  echo "Your Number is {$sum}";
                  break;
                  case "mult" : $sum = $num1 * $num2;
                  echo "Your Number is {$sum}";
                  break;
                }
              }
            ?>
          </p>
        </div>
      </div>
    </main>
  </body>
</html>
