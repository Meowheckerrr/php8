<?php require "../head.php";

$salary = array(1000,2312,9999999,100000000000000000000);

function passByRef(&$salary){
    $salary[3]= 0;
    return $salary;
};

echo "original Array</br>";
print_r($salary); 

$temp = passByRef($salary);
echo "</br>";
echo "pass by the address"."</br>";
print_r($temp);

function passByAddress($salary){
    $salary[3]= 99999999999;
    echo "</br>";
    return $salary;
}

$temp2 = passByAddress($salary);
echo "pass by the value"."</br>";
print_r($temp2);
echo "</br>";
echo "original Array" . "</br>";
print_r($salary);

require "../tail.php";?>