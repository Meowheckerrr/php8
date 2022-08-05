<?php require "../../head.php";
session_start();

$jumpSeconds=3;

if(isset($_REQUEST["weapons"])){ 
    $weapons=$_REQUEST["weapons"];
    $_SESSION["weapons"]="";
    $_SESSION["weaponsPrices"] = array();
    
}

if(!isset($_SESSION["weapons"])){
    echo "meow";    
}
else{
    $_SESSION["weapons"]=$weapons;
    foreach($_SESSION["weapons"] as $weapons){ //Display weapons Name
        echo $weapons."</br>";
    }
}

if(!isset($_SESSION["weaponsPrices"])){
    echo "meowmeow";
}
else {
    
    $sessionWeaponName = $_SESSION["weapons"];
    $sessionWeaponPrice =  $_SESSION["weaponsPrices"];

    for($counter=0;$counter<count($sessionWeaponName);$counter++){

        if ($sessionWeaponName[$counter] == "ak47"){
            $sessionWeaponPrice=3000;
            array_push($_SESSION["weaponsPrices"],$sessionWeaponPrice);
            //$_SESSION["weaponsPrices"]=$sessionWeaponPrice;
        }
        else if ($sessionWeaponName[$counter]== "kar98"){
            $sessionWeaponPrice=6999;
            array_push($_SESSION["weaponsPrices"],$sessionWeaponPrice);
            //$_SESSION["weaponsPrices"]=$sessionWeaponPrice;
        }
        else if($sessionWeaponName[$counter]== "MG3"){
            $sessionWeaponPrice=6669;
            array_push($_SESSION["weaponsPrices"],$sessionWeaponPrice);
            //$_SESSION["weaponsPrices"]=$sessionWeaponPrice;
        }
    }

    //echo "product price:" . $sessionWeaponPrice . "</br>". "</br>". "</br>";
    print_r($_SESSION["weaponsPrices"]);
    echo "Jump after $jumpSeconds seconds";
    header("Refresh:$jumpSeconds;url=storedAsCookie.php");

}

require "../../tail.php";?>
