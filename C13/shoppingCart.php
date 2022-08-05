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

if($cartObject->isEmpty){
    echo "shopping cart is empty";
}
else{
    $ProductTotal=0;

    echo '<table border=5>';

    //Gets a multi_dimensional array of items stroed in cart
    foreach ($cartObject->getItems() as $items) {

        foreach ($items as $item) {

            echo "<tr>";
            echo "<td>".'ID: '.$item['id']."</td>";
            echo "<td>".'Qty: '.$item['quantity']."</td>";
            echo "<td>".'Price: '.$item['attributes']['name']."</td>";
            echo "<td>".'Size: '.$item['attributes']['price']."</td>";
            echo "<td><a href='deleteItemShoppingCart.php?id=".$item['id']."'>Delete the Item</a></td>";  
            echo "</tr>";

            $subSum = $item['quantity'] * $item['attributes']['price'];

        }

        $ProductTotal += $subSum;

      }


    echo "</table>";
    echo "Total: USD " . $ProductTotal ."dollors";
}


require "../tail.php";?>