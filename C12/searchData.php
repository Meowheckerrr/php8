<?php require "../head.php";

session_start();

$searchRequest= $_REQUEST["search"];

$hostname ="localhost";
$username="root";
$password="meowhecker";
$database="meowhecker";
$table="cuteGirl";

$name=$_REQUEST["name"];
$boyfriend=$_REQUEST["boyFriend"];


$sql ="select * from cuteGirl ";

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
    if(!$sqlOutput = mysqli_query($connection,$sql)||!$searchRequest=="true"){
        die("error");
        mysqli_close($connection);
    }
    else{
        echo "Success </br>";
        if(!chop($name != ""))  $subCmdName ="";  
        else                    $subCmdName ="name like '%".$name."%' ";
        
        if(!chop($boyfriend))  $subCmdBoyfriend="";
        else                   $subCmdBoyfriend="boyfriend ='".$boyfriend."'";
        
        if(chop($subCmdName) !="" && chop($boyfriend) !="" ){
            $sql.= "where " .$subCmdName. " and " .$boyfriend;
        }
        elseif(chop($subCmdName) != ""){
            $sql.="where " . $subCmdName;
            
        }
        elseif(chop($subCmdBoyfriend) != ""){
            $sql.="where ". $subCmdBoyfriend;
         }
         else{
            $subCmdBoyfriend ="";
         }
    }
    echo $_SESSION["searchCmd"]= $sql;

    //echo $_SESSION["searchCmd"];
    header("Refresh:1;url=displayPagingRecords.php?page=1");
    echo "query successfuly";

}

require "../tail.php";?>
