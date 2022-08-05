<?php require "../head.php";

$fileName = $_SERVER["SCRIPT_FILENAME"];
echo "Source : path " . "</br>";
echo $fileName."</br>";
echo basename($fileName)."</br>";
echo basename($fileName,".php");   //(path,suffix) The file exetention wiil be cut off.

echo "</br><-------------------------------------------------></br>";

echo dirname($fileName)."(level =1"."</br>";   //parent directory 
echo dirname($fileName,2)."(level =2"."</br>";

echo realpath(basename($fileName))."</br>"; //Display the absolute path.

print_r(pathinfo($fileName));

print "</br><------------------------------------------------></br>"; //file 


//Checks the file and copies it and deletes the copy file :)

$renameFile ="meow.php";
if(!file_exists(basename($fileName))){
    echo "The file didn't existent"."</br>";
} 
else {
    echo "The file existent||";
    if(!copy(basename($fileName),"copyTest.php")){
        echo "failed";
    }
    else{
        if(!rename("copyTest.php",$renameFile)){
            echo "Rename failed !!! but copy successfully||";
        }
        else{
            echo "Rename successfully !!! and copy successfully||";
        }
        if(!unlink($renameFile)){
            echo  "Delete:" . $renameFile. " failed";
        }
        else{
            echo "Delete:" . $renameFile. " successfully";
        }
    } 
}
require "../tail.php";?>

