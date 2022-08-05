<?php require "../head.php";?>
<?php

//Config something 
error_reporting(E_WARNING|E_ERROR);
require_once "cart.class.php";     //include class file.
session_start();


//Declare Mysql parameters
$hostname = "localhost";
$username = "root";
$password = "meowhecker";
$database = "Arsenal";


//Establish connection 
$connection = new mysqli(
    $hostname,
    $username,
    $password,
    $database
);

//Checke a connection of Msqil
if($connection->connect_error){

    die("connectd error".$connection->connect_error);

}


else{

    //Display the HTMl form.
    echo '<table border=5>';
    foreach($query = $connection->query("select * from Light_weapons") as $rows ){

        echo '<form action="shoplist.php" method="get">';
        echo '<tr>';
        echo "<td>    $rows[id]</td>";
        echo "<td>    $rows[name]</td>";
        echo "<td>USD $rows[price]</td>";
        echo '<td>Quantity: <input type ="text" name ="productCount"></td>'; 
        echo '<td><input type ="submit" value="Reserve"></td>';

        // Pass the product information 
        echo "<input type='hidden' name = 'productID'    value =  '". $rows["id"]. "'>";
        echo "<input type='hidden' name = 'productName'  value =  '". $rows["name"]. "'>";
        echo "<input type='hidden' name = 'productPrice' value =  '" .$rows["price"]. "'>";
        echo '</tr>';
        echo "</form>";

    }
    echo "</table>";

}


//$cartObject refers to the session variable.
$cartObject = &$_SESSION["classCart"]; 


// sets the cart innital values. 
if(!is_object($cartObject)){

    $cartObject = new Cart([

        'cartMaxItem'=> 0,      //Set number of item to cart 
        'itemMaxQuantity'=> 99, //Set maximun qanatity 
        'useCookie'=> false     //Whethe use the cookie or not 

    ]);
}


//Add values to the cartObject 
if(isset($_REQUEST["productCount"])){

    //Get form values
    $id    = $_REQUEST["productID"];
    $name  = $_REQUEST["productName"];
    $price = $_REQUEST["productPrice"];
    $count = $_REQUEST["productCount"];

    //Avoid quantity is zero. 
    if(empty($count)) $coumt=1;

    //insert values to the cartObject 
    $cartObject ->add($id,$count,[
        "name"  => $name,
        "price" => $price
    ]);

    //Succuse message. 
    echo "Reserving gun have been put in your shopping cart!!!!!";

}
?>
<?php require "../tail.php";?>