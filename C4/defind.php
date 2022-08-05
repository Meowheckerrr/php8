<?php require "../head.php";

//calculate
function area(int|float $radius) : int|float{
    define("PI",3.1415926); //defind PI constant 
    return $radius*$radius*PI;
}
print "半徑為10的面積為" . area(10);

require "../tail.php";?>
