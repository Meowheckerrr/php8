<?php require "../head.php";?>

<?php
//$action=$_REQUEST["action"];
$action = $_GET["action"];
$id = $_GET["id"];

$hostname ="localhost";
$username="root";
$password="meowhecker";
$database="meowhecker";
$talbe="cutegirl";



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
    if(isset($action)){
        if($action == "delete"){
            $sqlDelete = "delete from ".$talbe." where id = '".$id."'";
            echo $sqlDelete;
            mysqli_query($connection,$sqlDelete);
            //header("Location:displayPagingRecords.php");
        }
        elseif($action == "modify"){ //ok

            echo $sqlmodify = "select * from ".$talbe." where id = '".$id."'";
            $sqlOutput = mysqli_query($connection, $sqlmodify);
            $getOneRow = mysqli_fetch_assoc($sqlOutput);

            $queryName = $getOneRow["name"];
            $queryAge = $getOneRow["age"];
            $queryBoyFriend = $getOneRow["boyFriend"];

            mysqli_free_result($sqlOutput);
        }
        elseif($action == "update"){
            $sqlUpdate = "update cutegirl set name ='". $_REQUEST["modifyName"]."',age =".$_REQUEST["modifyAge"].",boyfriend='". $_REQUEST["modifyBoyFriend"] ."' where id ='".$id."'";
            echo $sqlUpdate;      

            $sqlOutput=mysqli_query($connection,$sqlUpdate);
            //echo "</br>". "Update successfully";
            header("Location:displayPagingRecords.php");
        }
    }
    

}
?>
<body>
    <form action="modify.php?action=update&&id=<?php echo $id ?>".$id method="post">
        Name        <input type ="text" name="modifyName" value="<?php echo $queryName;?>">
        Age         <input type ="text" name="modifyAge" value="<?php echo $queryAge;?>">
        boyFriend   <input type="text" name="modifyBoyFriend" value="<?php echo $queryBoyFriend;?>">
        
        <input type ="submit" value="modify">
    </form>
</body>


<?php require "../tail.php";?>