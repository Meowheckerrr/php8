<?php require "../head.php";

$captital = 10000;
$interestRate=1.025;
$years = 0;

do{
    $captital= $captital * $interestRate;
    $years+=1;
}while($years<5);

print $captital;

require "../tail.php";?>