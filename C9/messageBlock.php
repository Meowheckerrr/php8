<?php require "../head.php";


$message=$_REQUEST["message"];

/*
echo file_get_contents("meow.txt");
echo json_encode(file_get_contents("meow.txt"));
*/

$tempMessageFile="tempMessageFile.txt";
if(!file_exists($tempMessageFile)){
    $createFile = fopen($tempMessageFile,"w");
    fclose($createFile);
}
else{
    //read file;
    
    $readFile = json_decode(file_get_contents($tempMessageFile));

    $readFile[]=$message; //acumulate message -> set readFile to the array 

    $writeFile = file_put_contents($tempMessageFile,json_encode($readFile));

    foreach($readFile as $read){
        echo $read."</br><hr>";
    }
}

require "../tail.php";?>


