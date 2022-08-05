<?php require "../head.php";

$severName = "locolhost";
$userName="root";
$password="meowhecker";
$databasename="meowhecker";
try{
    $connection = new PDO("mysql:host=$severName;dbname=$databasename",$userName,$password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully";

}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
require "../tail.php";?>
