<?php require "../head.php";
$hostname = "localhost";
$username = "root";
$password = "meowhecker";
$database = "meowhecker";

if(!isset($_REQUEST["check"])){
    echo "error";
}
else{
    $connection = new mysqli(
        $hostname,
        $username,
        $password,
        $database
    );
    if($connection->connect_error){
        die("connectd error".$connection->connect_error);
    }
    else{
         $query = $connection->prepare("insert into cutegirl(id, ip, name, age, boyFriend) values (?,?,?,?,?)");
         $query->bind_param("issis",$id,$ip,$name,$age,$boyFriend);
         
        $id =$_REQUEST["id"];
        $ip =$_REQUEST["ip"];
        $name =$_REQUEST["name"];
        $age =$_REQUEST["age"];
        $boyFriend=$_REQUEST["boyFriend"];
        $query ->execute();
        header("Location:../C12/displayPagingRecords.php");
    }
}

require "../tail.php";?>