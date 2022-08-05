<?php require "../head.php";

echo $gender=$_REQUEST["gender"]."</br>";
echo $country=$_REQUEST["country"]."</br>";

if(!empty($_REQUEST["cat1"])){
    echo "meow"."</br>";
}
if(!empty($_REQUEST["cat2"])){
    echo "meowmeow"."</br>";
}
if(!empty($_REQUEST["cat3"])){
    echo "meowmeowmeow"."</br>";
}

$song=$_REQUEST["song"];

foreach($song as $value){
    if ($value == "song1"){
        echo "寫完這首歌我就會放下妳了"."</br>";
    }
    else if ($value == "song2"){
        echo "孤勇者"."</br>";
    }
    else if ($value =="song3"){
        echo "see your again"."</br>";
    }
    else {
        echo "stay";
    }
}

require "../tail.php";?>
