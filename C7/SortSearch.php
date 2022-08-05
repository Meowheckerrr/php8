<?php require "../head.php";
$numberArray = array(120, 402,12,23,90);

function bubbleSort($array){
    for ($j=0;$j<count($array)-1;$j++){
        for($i=0;$i<count($array)-1;$i++){
            if($array[$i] > $array[$i+1]){ 
                $temp = 0;
                $temp = $array[$i];
                $array[$i]=$array[$i+1];
                $array[$i+1] = $temp;
            }
            print_r($array);
            echo "</br>";
        }
    }
        
}
function binarySearch($array , $flags){
    $lowIndex = 0;
    $hightIndex = count($array);
    while($lowIndex < $hightIndex){
        $searchIndex = ($lowIndex+$hightIndex)/2;
        if ($flags == $array[$searchIndex]){
            echo "find the flags is". $array[$searchIndex];
            break;
        }
        else if ($flags > $array[$searchIndex]){
            $lowIndex = $searchIndex+1;
        }
        else if ($flags < $array[$searchIndex]){
            $hightIndex= $searchIndex+1;
        }else return -1;
    }
}

echo "Use algorithm to sort and serach</br>";

echo "Bubble sort"."</br>";
bubbleSort($numberArray);

echo "BinarySearch</br>";
binarySearch($numberArray,90);

echo "</br><----------------------------------------></br>";
echo "Use function to sort and serach</br>";
sort($numberArray);
print_r($numberArray);
echo "</br>";

echo "find the flags is " . $numberArray[array_search(90,$numberArray)];

require "../tail.php";?>