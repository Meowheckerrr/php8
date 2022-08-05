<?php require "../../head.php";
session_start();

$weaponsName= $_SESSION["weapons"];
$weaponsPrices=$_SESSION["weaponsPrices"];

//print_r($_COOKIE);
print_r($_SESSION);
echo "商品清單</br>";

echo $_SESSION["weapons"][0];

for($counter=0;$counter<count($_SESSION["weapons"]);$counter++){
    $associateArray = array();
    $temp[$counter] = array($_COOKIE[$_SESSION["weapons"][$counter]] => $_COOKIE[$_SESSION["weaponsPrices"][$counter]] );
    array_push($associateArray,$temp[$counter]);
    print_r($associateArray);
}

foreach($_COOKIE[$weaponsName] as $Name ){
    echo $Name;
}



require "../../tail.php";?>


