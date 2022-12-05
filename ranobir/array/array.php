<?php 

    // $data = [
    //     [1,2,3,4,5],
    //     [6,7,8,9,10]
    // ];
    // // echo "<pre>";
    // // print_r($data);
    // echo $data[0][3];
    // echo $data[1][3];

    $data = ["Rony" => ["Bangla" => 85,"English" => 80],
            "Alexios" => ["Bangla" => 85,"English" => 80]
    ];
    // $data = ["Rony" => "85"];
    // echo "<pre>";
    // print_r($data);
    // foreach($data as $key => $mark){
    //     echo $key . $mark;
    // };
    // echo $data[0][1];
    foreach ($data as $key => $value1) {
        echo $key;
        foreach($value1 as $value2){
            echo $value2;
        }
        echo "<br>";
    }
    array_push($data, "Rony");
    echo "<pre>";
    print_r($data);
?>