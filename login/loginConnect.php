<?php
session_start();

$visitorAccount = $_REQUEST["account"];
$visitorPassowrd= $_REQUEST["password"];


if($visitorAccount == "" || $visitorPassowrd == ""){
    echo "Login failed (mewomewomewoeowme";
}
else{
    $hostname ="localhost";
    $username="root";
    $password="meowhecker";
    $database="meowhecker";

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
        // padding sql commend.
        $sql = "select * from client where account ='";
        $sql.=$visitorAccount. "'and password ='".$visitorPassowrd."'";
        echo $sql."</br>";
        $sqlOutput = mysqli_query($connection,$sql);

        $recordsRow = mysqli_num_rows($sqlOutput);
        if(!$recordsRow>0){
            echo "Login failed (mewomewomewoeowme";
        }
        else{
            $_SESSION["loginStatus"] = "true";
            header("Location:index.php");
            mysqli_free_result($sqlOutput);
        }
    }
}
?>
