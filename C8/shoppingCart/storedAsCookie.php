<?php require "../../head.php";
session_start();


//echo $_SESSION["weapons"];
//echo $_SESSION["weaponsPrices"];

$weaponsName= $_SESSION["weapons"];
$weaponsPrices=$_SESSION["weaponsPrices"];

for($i=0;$i<count($weaponsName);$i++)$weaponsPrices[$i];  // Unknow bug fix

/*
foreach($weaponsName as $names){
    echo $names; 
}
foreach($weaponsPrices as $prices){
    echo $prices;
}
*/
if(!isset($weaponsName)||!isset($weaponsPrices)){
    echo "error !!!";
    echo "someThing is odd";
}
else{
    for($counter=0;$counter<count($weaponsName);$counter++){
        //echo $weaponsName[$counter];
        setcookie($weaponsName[$counter],$weaponsName[$counter],time()+86400*30);
        setcookie($weaponsPrices[$counter],$weaponsPrices[$counter],time()+86400*30);
    }
    if(!isset($_COOKIE))echo "Cookie creation failed ";
    else {
        for($counter=0;$counter<count($weaponsName);$counter++){
            echo $_COOKIE[$weaponsName[$counter]].":";
            echo $_COOKIE[$weaponsPrices[$counter]]."<br>";
            
            //$data = json_decode($_COOKIE[$weaponsPrices[$counter]], true);
            //echo $data . "<br>";
        }
        //echo $_COOKIE["price"];
       // header("Refresh:2;url=showCookie.php");
     }    
}
session_commit();
require "../../tail.php";?>