<?php require "../head.php";

session_start();

echo session_id()."</br>";
echo session_name()."</br>";

$_SESSION["number"]=0;
if(isset($_SESSION["number"])){
    for ($i=0;$i<10;$i++){
        $_SESSION["number"]++;
    }
    echo $_SESSION["number"];
}


if (!isset($_SESSION["counter"])){
    $_SESSION["counter"] = 1;
}
else {
    $_SESSION["counter"]++;
    echo $_SESSION["counter"];
}

if ($_SESSION["counter"] >= 30 ){ //if the user loads web over the 30 time, it will remove all session variables. 
    session_unset();
}

print_r($_SESSION);// show all session vairables 

require "../tail.php";?>

