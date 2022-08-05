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
        if($sqlCommand = mysqli_query($connectToMysqli,"select * from client")){
            echo mysqli_num_rows($sqlCommand)."</br>";  //get the number of rows in result. 
            
            $output = mysqli_fetch_assoc($sqlCommand);
            foreach($output as $key => $value){
                echo "$key => $value ". "</br>";
            }
            print "<------------------------------------>". "</br>";
            
            echo ("ID and password ")."</br>";
            while ($GetOneRow = mysqli_fetch_assoc($sqlCommand)){
                echo $GetOneRow["ID"] ."-----". $GetOneRow["password"]."</br>";
            }
            mysqli_free_result($sqlCommand);   //free the memory associated with a result. 
        }
    }
}
mysqli_close($connectToMysqli);
require "../tail.php";?>
