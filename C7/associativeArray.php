<?php require "../head.php";

$objects = array ("name" => "meowhecker", "salary" => 10000, "years" => 10);

if(isset($objects["name"])){
    echo "Existent name " . $objects["name"] . "</br>"; 

    //establish new an element, if name is existential. 
    $objects["try create a new element"] ="meow";
    echo $objects["try create a new element"]."</br>";
}

//Delete the newly created keys and values.
if(isset($objects["try create a new element"])){
    unset($objects["try create a new element"]);
    echo "the element deletes successfully";
}

//Display object Array !!meow 
foreach($objects as $key => $value){
    echo "$key => $value, ";
}
echo "</br>";

//Establish an array that index start from 1
$rank = array ( 1 => "jon", "mandy", "tigger", "julia");
for ($i=1;$i<count($rank)+1;$i++){
    echo "$rank[$i] => Rank is : $i </br>";
}

require "../tail.php";?>