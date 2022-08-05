<?php
$hostname ="localhost";
$username="root";
$password="meowhecker";
$database="meowhecker";

$id=$_REQUEST["id"];
$ip=$_REQUEST["ip"];
$girlName=$_REQUEST["name"];
$age=$_REQUEST["age"];
$boyfriend=$_REQUEST["boyFriend"];

$sql ="insert into cuteGirl (id, ip, name, age, boyFriend) values ('";
$sql.=$id . "','" . $ip . "','"  . $girlName . "','"  .$age . "','" .$boyfriend."')";

$connection = mysqli_connect(
    $hostname,
    $username,
    $password,
    $database
);

if(!$connection){
    die("Connection failed " . mysqli_connect_error());
}
else{   
    echo 1;
    //echo $sql;
    if(!$sqlOutput = mysqli_query($connection,$sql)){
        die("error");
        mysqli_close($connection);
    }
    else{
        echo "Success" . mysqli_affected_rows($connection) . "</br>";
        header("Location:displayPagingRecords.php");
    }
}
?>
