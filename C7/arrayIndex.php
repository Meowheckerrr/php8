<?php require "../head.php";

$singularNumber = array();

for ($i=0;$i<10;$i++){
    if($i%2 == 1){
        $singularNumber[$i]=$i;
        echo $singularNumber[$i];
    };
}
echo "</br>";
echo "<---------------------------->";
echo "</br>";

$score = array ("meow" => 54,"meowmeow"=>23,"meower"=>12,"meowhecker"=>99);
$sum =0;
foreach ($score as $name => $value){
    echo "$name,$value</br>"; 
    $sum += $value;
}
echo "sum is " . $sum ."</br>";
print_r($score);

require "../tail.php";?>