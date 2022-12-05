<?php 
$b = 5;
$ab = 20;
function a($ab){
    // global $ab,$b;
    // $ares = $ab + $b;
    // return $ares;
    function b($ab){
        global $ab,$b;
        $bres = $ab - $b;
        return $bres;
    }
}
echo a($ab);
echo b($ab);

?>