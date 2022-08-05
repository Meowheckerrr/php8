
<?php require "../head.php";

echo $id =$_GET["ID"]; //gets parameter from URL
echo $name= $_GET["Name"];//gets parameter from URL 

// if you want to pass by multiple parameters, using the & to concat parameters

echo $student = $_POST["studentNumber"];
echo $password= $_POST["password"];


require "../tail.php";?>
