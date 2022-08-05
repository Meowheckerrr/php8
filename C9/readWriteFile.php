<?php require "../head.php";

$fileName ="webStyle.css";
$fileNameWrite="meowmeow.php";
$contents ="meowmewomewomewoemwoemwmeowmewo";


$file1=fopen($fileName,"r");
    while(! feof($file1)){
        $linesByString = fgets($file1);
        echo $linesByString."</br>";
    }

$file2=fopen($fileName,"r");
    while(! feof($file2)){
        $linesByChar = fgetc($file2);
        echo $linesByChar."</br>";
    }

$file3 =fopen($fileNameWrite,"w");
if(!fwrite($file3,$contents)){
    echo "failed";
}
else{
    echo "succussfully";
}


//To write some php programs into the specified file.  
$file4 = fopen($fileNameWrite,"a");
fputs($file4,"<?php echo 'writeSomething';?>");  

fclose($file1);
fclose($file2);
fclose($file3);
fclose($file4);

require "../tail.php";?>