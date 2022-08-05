<?php require "../head.php";

$servername = "localhost";
$username = "root";
$password = "meowhecker";
$dbname="meowhecker";

// Create connection
$connectToMysqli = mysqli_connect($servername, $username, $password);    //阿晟好帥

// Check connection
if (!$connectToMysqli) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully"."</br>";
    if(!mysqli_select_db($connectToMysqli,$dbname)){ //open specified database 
        echo "Open the specified database is failed.";
    }
    else{
        echo "meowmewomeow open ". $dbname ." dabtbase is successful"."</br>";
        echo "<------------------------------------------------------------------------></br>";
        echo "Get the information by function ";
        echo mysqli_get_host_info($connectToMysqli)."//          mysqli_get_host_info()"."</br>";
        echo mysqli_get_server_info($connectToMysqli)."//         mysqli_get_server_info()"."</br>";
        echo mysqli_get_server_version($connectToMysqli)."//      mysqli_get_server_version()"."</br>";
        echo mysqli_get_proto_info($connectToMysqli)."//            mysqli_get_proto_info()"."</br>";
        echo mysqli_get_client_info($connectToMysqli)."//            mysqli_get_client_info()"."</br>";
        echo mysqli_get_client_version($connectToMysqli)."//            mysqli_get_client_version()"."</br>";
    }
}
mysqli_close($connectToMysqli);
require "../tail.php";?>
