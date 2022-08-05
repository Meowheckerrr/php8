<?php require "../head.php";


//Config some options 
require_once "cart.class.php";
error_reporting(E_WARNING|E_ERROR);
session_start();


//cartObject refers to the session variable
$cartObject = & $_REQUEST["classCart"];

// sets the cart innital values. 
if(!is_object($cartObject)){

    $cartObject = new Cart([

        'cartMaxItem'=> 0,      //Set number of item to cart 
        'itemMaxQuantity'=> 99, //Set maximun qanatity 
        'useCookie'=> false     //Whethe use the cookie or not 

    ]);
}


//Delete  item from shoppingCart 
$cartObject->remove($_GET["id"]);

//Trans into the URL
header("Location:shoppingCart.php");


require "../tail.php";?>