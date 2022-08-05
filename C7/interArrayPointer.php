<?php require "../head.php";

//Declares an array 
$learningArrayPointerFunction = array();

//sets array elements
for($i=0;$i<10;$i++){
    $learningArrayPointerFunction[$i] = $i;
}

echo reset($learningArrayPointerFunction) . "</br>";
echo next($learningArrayPointerFunction) . "</br>";

//uses pointer to display the value, 超好玩XD
for($i=0;$i<5;$i++){
    echo next($learningArrayPointerFunction) . "</br>";
}
for($i=0;$i<5;$i++){
    echo prev($learningArrayPointerFunction) . "</br>";
}
echo "the current position".current($learningArrayPointerFunction);

require "../tail.php"?>