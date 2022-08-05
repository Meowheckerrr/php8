<?php require "../head.php";

function callByValue($value){
    $value+=10;
    echo $value . ",";
};

function callByAddress(&$value){
    $value+=10;
    echo $value;
};
$num1 = 5;
$num2 = 10;
callByValue($num1);
callByAddress($num2);

print "</br>";

echo $num1 . "," .$num2;


require "../tail.php";?>