<?php require "../head.php";

$string= "meowhecker";
echo "string is " . $string ."</br>";
echo "string length:" . strlen($string) . "</br>";
echo "to upper ". strtoupper($string) . "</br>";
echo "to lower" . strtolower($string) . "</br>";


echo "</br>"."specify w"."</br>";
echo "Search the specified string the index is :" . strpos($string,"w")."</br>";
echo "Reverse direction search the specified string the index :" . strrpos($string ,"w")."</br>";
echo "Display substring that the first occurrence :" . strstr($string,"h")."</br>";


echo chr(0x64)."</br>";

echo substr($string, 6)."</br>"; //give index 


$string1="meowmeow";
$string2="jaaa";

echo strcmp($string1,$string2)."</br>";
echo strcmp($string2,$string1)."</br>";
require "../tail.php";?>