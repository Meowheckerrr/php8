<?php require "../head.php";

$hostname = "localhost";
$username = "root";
$password = "meowhecker";
$database= "meowhecker";

$connection = mysqli_connect(
    $hostname,
    $username,
    $password,
    $database
);

if(!$sqlOutput = mysqli_query($connection,"select * from client")){
    echo "error";
}
else{
    echo "sql execute succusefuly"."</br>";
    echo mysqli_num_fields($sqlOutput)."</br>";
    echo mysqli_num_rows($sqlOutput)."</br>";

    //show fields information

    //$fiedObject = mysqli_fetch_field($sqlOutput); // this function is a object, use attribute show something.
    echo "<table border=10>";
    while($fiedObject = mysqli_fetch_field($sqlOutput)){
        echo "<tr>";
        echo "<td>".$fiedObject->name."</td>";
        //echo "<td>".$fileObject->table."</td>";
        //echo "<td>".$fileObject->max_length."</td>";
        //echo "<td>".$fileObject->type."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($sqlOutput);
    
}

require "../tail.php";?>
