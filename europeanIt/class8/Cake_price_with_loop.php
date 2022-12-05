<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
<?php
    $cake_list = ["Black forest","Vanilla cake","Red Velvet","Lemon Sponge Cake","Chocolate Cake"];
    $material_price = ["180","150","220","165","170"];
    $material_price_update = ["780","600","800","650","660"];
    
    // Transportation cost
    $trans_c = 150;
    // Space cost
    $space_c = 50;
    // Staff cost
    $staff_c = 60;

    function utilityCost($cake_price){
        global $trans_c;
        $utility_sum = ($cake_price + $trans_c) * 3 / 100;
        return $utility_sum;
    };

    // Cake name show
    echo "<h1>Available Cake Name :</h1>";
    echo "<ol>";
    foreach($cake_list as $view_list){
        echo "<li>". $view_list . "</li>";
    }
    echo "</ol>";

    // Cake Inventory Cost Show
    function inventoryCost($materialCost, $utility){
        global $trans_c, $space_c, $staff_c;
        $total_cost = $materialCost + $trans_c + $space_c + $staff_c + $utility;
        return $total_cost;
    };
    echo "<h1> Total Inventory Cost : </h1>";
    echo "<ol>";
    echo "<li>" . $cake_list[0] . " Price : " . inventoryCost($material_price[0], utilityCost($material_price[0])) . "</li>";
    echo "<li>" . $cake_list[1] . " Price : " . inventoryCost($material_price[1], utilityCost($material_price[1])) . "</li>";
    echo "<li>" . $cake_list[2] . " Price : " . inventoryCost($material_price[2], utilityCost($material_price[2])) . "</li>";
    echo "<li>" . $cake_list[3] . " Price : " . inventoryCost($material_price[3], utilityCost($material_price[3])) . "</li>";
    echo "<li>" . $cake_list[4] . " Price : " . inventoryCost($material_price[4], utilityCost($material_price[4])) . "</li>";
    echo "</ol>";

    echo "<h1>Updated Cake Price :</h1>";
    echo "<ol>";
    echo "<li>" . $cake_list[0] . " Price : " . $material_price_update[0] . "</li>";
    echo "<li>" . $cake_list[1] . " Price : " . $material_price_update[1] . "</li>";
    echo "<li>" . $cake_list[2] . " Price : " . $material_price_update[2] . "</li>";
    echo "<li>" . $cake_list[3] . " Price : " . $material_price_update[3] . "</li>";
    echo "<li>" . $cake_list[4] . " Price : " . $material_price_update[4] . "</li>";
    echo "</ol>";

    echo "<h1>After Discount Cake Price :</h1>";

    function discount($update_price, $discout){

        $discount_sum = $update_price - ($update_price * $discout) / 100;
        return $discount_sum;
    }
    echo "<ol>";
    echo "<li>" . $cake_list[0] . " Price : " . discount($material_price_update[0], 5) . "</li>";
    echo "<li>" . $cake_list[1] . " Price : " . discount($material_price_update[1], 5) . "</li>";
    echo "<li>" . $cake_list[2] . " Price : " . discount($material_price_update[2], 7) . "</li>";
    echo "<li>" . $cake_list[3] . " Price : " . discount($material_price_update[3], 7) . "</li>";
    echo "<li>" . $cake_list[4] . " Price : " . discount($material_price_update[4], 7) . "</li>";
    echo "</ol>";
?>
</body>
</html>