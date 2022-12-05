<?php 

    // class className{
    //     public $a,$b,$c;
    //     public function __construct($a){
    //         $this->x = $a;
    //         // $this->y = $b;
    //     }
    //     function sum($mark){
    //         $this->c = $this->a + $mark;
    //         return $this->c;
    //     }
    //     function su($mark){
    //         $this->c = $this->a - $mark;
    //         return $this->c;
    //     }
    // }
    // $object = new className(20);
    // $object->a = 10;
    // $object->b = 15;
    // echo $object-> sum(30);

    // $object2 = new className(30);
    // $object2->a = 60;
    // echo $object2-> su(20);


    // ===========================main Structure code======================

    // class className{
    //     public $name;
    //     function funName(){
    //         echo "Name" . $this->name;
    //     }
    // }
    // $object = new className();
    // $object->name = "Rony";
    // $object-> funName();
    // ===========================Constructor code======================
    // class className{
    //     public $name;
    //     function __construct($a){
    //         $this->name = $a;
    //     }
    //     function funName(){
    //         echo $this->name;
    //     }
    // }
    // $object = new className("rony");
    // $object-> funName();

    // ===========================Constructor practice code======================

    // class className{
    //     public $name;
    //     function __construct($a = 10){
    //         $this->name = $a;
    //     }
    //     function funName(){
    //         $this->c = $this->name + 2;
    //         return $this->c;
    //     }
    //     function funName2(){
    //         $this->c = $this->name * 26;
    //         return $this->c;
    //     }
    // }
    // $object = new className(23);
    // echo $object-> funName();

    // $object2 = new className(25);
    // echo $object2-> funName2();

    // ===========================Inheritance code======================

    // class className{
    //     public $name;
    //     function __construct($a = 10){
    //         $this->name = $a;
    //     }
    //     function funName(){
    //         $this->c = $this->name + 2;
    //         return $this->c;
    //     }
    //     function funName2(){
    //         $this->c = $this->name * 26;
    //         return $this->c;
    //     }
    // }
    // class child extends className{
        // public $name;
        // function __construct($a = 10){
        //     $this->name = $a;
        // }
        // function funName(){
        //     $this->c = $this->name + 2;
        //     return $this->c;
        // }
        // function funName2(){
        //     $this->c = $this->name * 26;
        //     return $this->c;
        // }
    // }
    // $object = new className(23);
    // echo $object-> funName();

    // $object2 = new className(25);
    // echo $object2-> funName2();

    // $object3 = new child(25);
    // echo $object3-> funName2();

    // ===========================Inheritance code======================

    // class className{
    //     public $name, $mark;
    //     function __construct($a = 10){
    //         $this->name = $a;
    //     }
    //     public function funName(){
    //         $this->c = $this->name + 2;
    //         $mark = $this->c;
    //         return $mark;
    //     }
    //     public function funName2(){
    //         global $mark;
    //         $this->c = $this->name * $mark;
    //         return $this->c;
    //     }
    // }

    // $object = new className(12);
    // echo $object-> funName2();
    // $r = $object-> funName();
    // echo $r;

    function su(){
        $su = 5 + 2; 
        return $su;
    }
    $r = su();
    function sum($n){
        $sum = $n + 2; 
        return $sum;
    }
    echo sum($r);

        // ===========================Sucssess top code======================

    // class child extends className{
    //     public $name;
    //     function __construct($a = 10){
    //         $this->name = $a;
    //     }
    //     function funName(){
    //         $this->c = $this->name + 2;
    //         return $this->c;
    //     }
    //     function funName2(){
    //         $this->c = $this->name * 26;
    //         return $this->c;
    //     }
    // }
    // $object = new className(23);
    // echo $object-> funName2();

    // $object2 = new className(25);
    // echo $object2-> funName2();

    // $object3 = new child(25);
    // echo $object3-> funName2();
?>