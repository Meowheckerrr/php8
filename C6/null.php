<?php require "../head.php";

$string ="meowmeowmeow";
var_dump($string);
unset($string);
var_dump($string);


echo "</br>" ;
echo  "<---------------------------------->";
echo "</br>";


$name = "meowhecker";
function nullableFunction(?string $parameter){
  echo $parameter;
  echo "1";  
};
nullableFunction(null);


echo "</br>" ;
echo  "<---------------------------------->";
echo "</br>";


function defaultNullableFunction(?float $number = 20){
  
    $middle = $number/2;
    for($i=0;$i<$number;$i++){

        if($i<=$middle){

            //uper part
            for($uperLeftSpace=$number/2;$uperLeftSpace>$i;$uperLeftSpace--){
            echo "&nbsp";
            };
            for($uperLeftStar=0;$uperLeftStar<$i;$uperLeftStar++){
                echo "*";
            }
            for($uperRightStar=1;$uperRightStar<$i;$uperRightStar++){
                echo "*";
            }
            echo "</br>";
          }

        else{
            
            for($lowerLeftspace=$number/2;$lowerLeftspace<$i;$lowerLeftspace++){
                echo "&nbsp";
            } 
            for($lowerLeftStar=$number;$lowerLeftStar>$i;$lowerLeftStar--){
                echo "*";
            }
            for($lowerLeftStar=$number-1;$lowerLeftStar>$i;$lowerLeftStar--){
                echo "*";
            }
            echo "</br>";
            
        }
    };
};
defaultNullableFunction();
require "../tail.php";?>