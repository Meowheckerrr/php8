<?php require "../head.php";

$hostname = "localhost";
$username = "root";
$password = "meowhecker";
$database = "meowhecker";

$connection =mysqli_connect(
    $hostname,
    $username,
    $password,
    $database
);

if(!$sqlOutput = mysqli_query($connection,"select * from client")){
   echo "error";     
}
else{
    //$getOneRow = mysqli_fetch_row($sqlOutput); 
    echo "<table border = 5>";
    echo "<tr>";
    while($fieldObject = mysqli_fetch_field($sqlOutput)){
        echo "<td>". $fieldObject->name ."</td>";
    }
    echo "</tr>";
    while($getOneRow = mysqli_fetch_row($sqlOutput)){//return an one dimension array.

        echo "<tr>";
        for($counter = 0;$counter<mysqli_num_fields($sqlOutput);$counter++){
            echo "<td>".$getOneRow[$counter]."</td>";
        }
        echo "</tr>";

    }

    echo "</tabe>";
    mysqli_free_result($sqlOutput);
    
}

require "../tail.php";?>