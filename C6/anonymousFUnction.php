<?php require "../head.php";

$statement = function($name){
    echo $name . "&nbsp is  a handsome boy"; 
};
echo $statement("meowhecker") . "</br>";


echo "<--------------------------------------->";
echo "</br>";

/*
$doubleNum = function ($num = 10){
    return $num *2 ;
};

function callBackFunction1(Closure $doubleNum){
    $doubleNum();
    static $answer = 0;
    return $answer += $doubleNum**2 ;     
}; 

echo callBackFunction1($doubleNum);
*/

$doubleNum = function($num =10){
    echo $num*2;
    echo "</br></br>";
};

function callBackFunction(callable $sentence){
    $sentence();
}
callBackFunction($doubleNum);

$G = function($x = 10 ){
    echo "x=10</br>";
    echo "g(x) = 2*X**2+5*X+3</br>";
    echo "f(x) = X**2</br>";
    echo "f(g(X))</br>";
    return 2*$x**2 + 5*$x +3;
};

function f(callable $function ){
    return $function()**2;
}
echo f($G);



require "../tail.php";?>