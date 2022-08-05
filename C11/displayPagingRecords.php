<?php require "../head.php";
 
//header("Location:displayPagingRecords.php?page=1");
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
 
    //Get a number of pages by URL. 
    if($_GET["page"])   $currentPages = $_GET["page"];
    else                $currentPages = 1;
    echo                "Current pages is :".$currentPages."</br>";
 
    $sqlOutput = mysqli_query($connection,"select * from client");  
 
    $rowsOfRecords=mysqli_num_rows($sqlOutput);
    $numberOfColumns=mysqli_num_fields($sqlOutput);
 
    $pagingRecordNumber=2;
    $totalPage = ($rowsOfRecords/$pagingRecordNumber); // To know how many pages have to be divided (meowmeowmeowmeowemwoemw
 
    //To find the pages what position the records
    $recordsPointer = ($currentPages-1)*$pagingRecordNumber;
    mysqli_data_seek($sqlOutput,$recordsPointer);
    echo "total records is ". $rowsOfRecords ."</br>";
 
 
    echo "<table border=5>";
    echo "<tr>"; //show field names  
    while($fieldObject = mysqli_fetch_field($sqlOutput)){
        echo "<td>". $fieldObject -> name ."</td>";
    }
    echo "</tr>";
 
    $counter=1;
    while($getOneRowRecord = mysqli_fetch_array($sqlOutput,MYSQLI_NUM) and $counter<=$pagingRecordNumber){
        echo "<tr>";
        for($index=0;$index<$numberOfColumns;$index++){
            echo "<td>". $getOneRowRecord[$index]."</td>";
        }
        echo "</tr>";
        $counter++;
    }
 
 
    echo "</table>";
   
 
    // Previous pages block
    if($currentPages > 1){
        echo "<a href='displayPagingRecords.php?page=" .($currentPages-1). "'>Previous page |</a>";
    }
    // Middle pages block
    for($counterForPages=1;$counterForPages<=$totalPage;$counterForPages++){
        if($counterForPages != $currentPages ){
            echo "<a href=\"displayPagingRecords.php?page=" . $counterForPages. "\">". $counterForPages ."</a>";
        }
        else{
            echo $counterForPages."&nbsp";
        }
 
    }
    // Next pages block
    if($currentPages < $totalPage){
        echo " | <a href='displayPagingRecords.php?page=" .($currentPages+1). "'>Next page </a>";
    }
   
    mysqli_free_result($sqlOutput);
 
}
require "../tail.php";?>