<?php require "../head.php";

$wight = 70;

$BMI = function($height) use ($wight){
    $hight = $height/100;
    return $wight/$height/$height;
};
echo $BMI(173);
require "../tail.php";?>