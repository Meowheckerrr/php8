<?php require "../head.php";

$hostname = "localhost";
$username = "root";
$password = "meowhecker";
$database = "meowhecker";
$sqlCmd = "select * from client";


$connection =mysqli_connect(
    $hostname,
    $username,
    $password
);

$errorHandler = function($connect){
    echo "Error code: " . mysqli_errno($connect)."</br>";
    echo "Error message: ". mysqli_error($connect)."</br>";
    exit();
};

if(!isset($_GET["database"])){
    $database = $database;
}
else{
    $database = $_GET["database"];
}

if(!isset($_GET["sqlCmd"])){
    $sqlCmd = $sqlCmd;
}
else{
    $sqlCmd = $_GET["sqlCmd"];
}

if(!mysqli_select_db($connection,$database)){
    echo $errorHandler($connection);
    mysqli_errno($connection);
    echo 1;
}    
else{
    $sqlOutput = mysqli_query($connection,$sqlCmd);
    if(mysqli_errno($connection)!= 0){
        $errorHandler($connection);
        mysqli_free_result($sqlOutput);
    }
    else{
        mysqli_free_result($sqlOutput);
    }
   
}

require "../tail.php";?>