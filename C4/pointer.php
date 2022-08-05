<?php require  "../head.php";

echo "default variable1 is 10"."</br>";
echo "variable1 -> variable2". "</br>";

$variable1 = 10;
$variable2 = 20;

//variable1 -> variable2 
$variable1 = &$variable2;

echo $variable1;
echo "</br>"; 

//double dollor
$x = "Car";
$$x = "red";
echo "$x's color is $Car";

require "../tail.php";?>