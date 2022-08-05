<?php require "../head.php";
$uploadFiles=$_FILES["uploadFile"];
//$uploadFiles['name']="meow.jpg";

foreach($uploadFiles as $key => $value){
    echo "$key => $value"."</br>";
}

$fileSavePath = 'upload/'. basename($uploadFiles['name']);

if(is_uploaded_file($uploadFiles["tmp_name"])){
    if(!file_exists("upload")){
        mkdir("upload");
    }
        
    if(move_uploaded_file($uploadFiles['tmp_name'],$fileSavePath)){
        echo "Upload succussfly.";      
    }
    else{
        echo "failed";
    }
}
require "../tail.php";?>