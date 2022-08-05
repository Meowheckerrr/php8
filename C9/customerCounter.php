<?php require "../head.php";

$maxlength=10;

$counterFile = "counter.php";

if(!is_file($counterFile)){
    $counter=0;
    $files = fopen($counterFile,"w");
    fwrite($files, $counter);
    fclose($files);
}
else{
    
    $files = fopen($counterFile,"r");
    /*
    while(!feof($files)){
        $charactor = fgetc($files);
        $counter = $charactor;
        echo $counter;
    }
    */
    $counter = fread($files, filesize($counterFile));
    //echo $counter;
    fclose($files);  
}

$counter =$counter+1;
$files = fopen($counterFile,"w+");
fputs($files,$counter);
fclose($files);

$stringReapeat = str_repeat("0",$maxlength-strlen($counter)); //repeat string 
//echo $stringReapeat; //show duplicated 0
echo $stringReapeat.=$counter;  //concats counter

require "../tail.php";?>
