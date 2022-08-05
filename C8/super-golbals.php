<?php require "../head.php";

$filePath =$_SERVER["SCRIPT_FILENAME"];
echo $filePath."</br>";

echo $clientAddress = $_SERVER["REMOTE_ADDR"]."</br>";
echo $clientPort = $_SERVER["REMOTE_PORT"]."</br>";

echo $serverSoftware = $_SERVER["SERVER_SOFTWARE"]."</br>";
echo $serverCGI = $_SERVER["GATEWAY_INTERFACE"]."</br>";
echo $serverName = $_SERVER["SERVER_NAME"]."</br>";
echo $serverPort= $_SERVER["SERVER_PORT"]."</br>";
echo $serverProtocol=$_SERVER["SERVER_PROTOCOL"];

foreach($_SERVER as $key => $value ){
    echo "$key => $value || "."</br>";
}

require "../tail.php";?>