<?php require "../head.php";

function staticVariable(){
    static $num = 0;
    $num += 2;
    return $num;
}

function nonstaticVariable(){
    $num =0;
    $num+=2;
    return $num;
}

echo staticVariable() . "&nbsp";
echo staticVariable() . "&nbsp";
echo staticVariable() . "&nbsp";


echo nonstaticVariable() . "&nbsp";
echo nonstaticVariable() . "&nbsp";
echo nonstaticVariable() . "&nbsp";

require "../tail.php";?>