<?php require "../head.php";


$cookieUser = "meowhecker";
$cookiePassword="asf123666666666666699";   //cookie variable value 
setcookie($cookieUser,$cookiePassword,time()+(86400*2));   //86400 = 1 day 
//setcookie($cookieUser,"",time() -(3600*69));

if(!isset($_COOKIE[$cookieUser])){
    echo "The cookie dosen't existen";
}
else {
    echo "Cookie is setted ". $cookieUser ."</br>";
    echo "Password= ". $_COOKIE[$cookieUser]."</br>";
}
require "../tail.php";?>
