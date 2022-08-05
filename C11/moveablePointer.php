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

if(!$connection){
    die("failed connect ". mysqli_connect_error());
}
else{
    $sqlOutput = mysqli_query($connection,"select * from client");
    echo "Move the pointer to ID =4"."</br>";
    mysqli_data_seek($sqlOutput,3);
    
    while ($getOneRow = mysqli_fetch_row($sqlOutput)){
        for ($counter =0;$counter< mysqli_num_fields($sqlOutput);$counter++){
            echo $getOneRow[$counter]."</br>";
        }
    }
    mysqli_free_result($sqlOutput);
}

require "../tail.php";?>