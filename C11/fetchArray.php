<?php require "../head.php";

$hostname = "localhost";
$username = "root";
$password = "meowhecker";
$database = "meowhecker";
$querySql ="select * from client";

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
    $sqlOutput =mysqli_query($connection,$querySql);
    
    echo "Use numberic array"."</br>";
    echo "<table border= 10 >";
    while($getOneRow= mysqli_fetch_array($sqlOutput,MYSQLI_NUM)){  //Mysqli_num is a number of the row result
        echo "<tr>";
        for($columnNumber=0;$columnNumber < mysqli_num_fields($sqlOutput);$columnNumber++){
            echo "<td>" . $getOneRow[$columnNumber] . "</td>";
        }
        echo "</tr>";    
    }
    echo "</table>";
    mysqli_free_result($sqlOutput);


    $sqlOutput =mysqli_query($connection,$querySql);

    echo "Use associated array "."</br>"; 
    // Save field name to the array 
    
    // Ottimize failed (the problem is I want to use array to save field names  but I don't know how to put set key by using array)  problems be solved
    $saveFileArray = array();
    while ($fieldObject = mysqli_fetch_field($sqlOutput)){
        array_push($saveFileArray,$fieldObject->name);
    }
    
    //print_r($saveFileArray);
    echo "<table border= 10 >";
    while($getOneRowAssoc= mysqli_fetch_array($sqlOutput,MYSQLI_ASSOC)){  //Mysqli_num is a number of the row result
        echo "<tr>";
        for($columnNumber=0;$columnNumber < mysqli_num_fields($sqlOutput);$columnNumber++){
            echo "<td>" . $getOneRowAssoc[$saveFileArray[$columnNumber]] . "</td>";
        }
        echo "</tr>";    
    }
    echo "</table>";
    /*

    echo "<table border= 10 >";
    while($getOneRowAssoc = mysqli_fetch_array($sqlOutput,MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>".$getOneRowAssoc["ID"]."</td>";
        echo "<td>".$getOneRowAssoc["firstName"]."</td>";
        echo "<td>".$getOneRowAssoc["lastName"]."</td>";
        echo "<td>".$getOneRowAssoc["email"]."</td>";
        echo "<td>".$getOneRowAssoc["account"]."</td>";
        echo "<td>".$getOneRowAssoc["password"]."</td>";
        echo "<td>".$getOneRowAssoc["phoneNumber"]."</td>";
        echo "<td>".$getOneRowAssoc["asset"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    */
    mysqli_free_result($sqlOutput);
}

require "../tail.php";?>