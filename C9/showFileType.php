<?php require "../head.php";

$absolutePath =$_SERVER["SCRIPT_FILENAME"];
$specifyFile=basename($_SERVER["SCRIPT_FILENAME"]);


function setTimeZoneAndEcho($TimeZone,$variable,$explain){
    date_default_timezone_set($TimeZone);
    echo $explain."</br>";
    echo date("YMD:H:i:s",$variable)."</br>";     //print last access time of specified file.
}

if(!filetype($specifyFile)){
    echo "not exist";
}
else{  
    echo(filetype($specifyFile))."</br>";
    echo(fileatime($specifyFile))."</br>";

    $lastAccessTime = fileatime($specifyFile);
    setTimeZoneAndEcho("Asia/Taipei",$lastAccessTime,"lastAccessTime");

    $lastFixTime = filemtime($specifyFile); //Gets file modification time.
    setTimeZoneAndEcho("Asia/Taipei",$lastFixTime,"lastFixTime"); 
}

if(!is_dir("meowTest")){
    echo "It's not a direction"."</br>";
}
else {
    echo "It's a direction"."</br>";
}
if(!is_file($specifyFile)||!is_readable($specifyFile)||!is_writable($specifyFile)){
    echo "It is not a file or, it's not readable or writeable !!!";
}
else {
    echo "It's a file"."</br>";
}
if(!is_uploaded_file("webStyle.css")){
    echo "It couldn't upload by HTTP POST";
}
else {
    echo "It could upload via HTTP POST";
}

require "../tail.php";?>