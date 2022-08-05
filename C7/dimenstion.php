<?php require "../head.php";

$row1 = array(50,75);
$row2 = array(30,67);
$row3 = array (49,99);

$score = array($row1,$row2,$row3);

echo "Specify the value [0][0]</br>";
echo $score[0][0];

echo "</br>";

$total = 0;
for ($i=0;$i<count($score);$i++){
    $sum =0;
    for($j=0;$j<count($row1);$j++){
        echo $score[$i][$j] ." ";
        $sum +=$score[$i][$j];
        $total +=$sum;
    }
    echo "sum = " . $sum;
    echo "</br>";
}
echo "total =" . $total;
require "../tail.php";?>