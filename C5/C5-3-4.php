<?php require "../head.php";

$sum =0;
for ($i=1;$i<16;$i++){
    echo $i . ",";
    $sum+=$i;
}
echo $sum;
print "</br>";

$a=0;
print "sigular number";
while ($a < 100){
    if ($a % 2 == 1) echo $a . ","; 
    $a++;
}

require "../tail.php";?>