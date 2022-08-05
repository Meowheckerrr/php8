<?php require "../head.php";

$account=$_REQUEST["account"];
$password=$_REQUEST["password"];

if(!empty($password)&&isset($password)&&$password=="123"){
    echo "login success!!";
    echo $account;
}
else {
    echo "account or password error ";
    header("Location:authInput.php");   
}

require "../tail.php";?>
