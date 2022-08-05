<?php require "../head.php";

session_start();

if(!$_SESSION["loginStatus"] == "true"){
    header("Location:login.php");
}
else{
    echo "welcome bro (meowmeowmeow)";
}

require "../tail.php";?>