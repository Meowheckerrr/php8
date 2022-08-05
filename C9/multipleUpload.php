<?php require "../head.php";

$uploadFile=$_FILES["uploadAssociateArray"];
//print_r($uploadFile);
//echo $uploadFile[1];
//echo count($uploadFile["name"]);

$fileInfo = function($attributes)use($uploadFile){
    for($counter=0;$counter<=count($attributes);$counter++);
    $string="";
    $string = $uploadFile[$attributes][$counter];
    return  $string;
};

$printFileInfo =function($attributes)use($uploadFile){
    for($counter=0;$counter<=count($attributes)+1;$counter++){
        echo $uploadFile[$attributes][$counter]."</br>";
    }
};

/* Replace with for + anonymousFunction 
echo $uploadFile["name"][0];
echo $uploadFile["name"][1];
echo $uploadFile["name"][2];
*/
//Display file Info.
$printFileInfo("name");
$printFileInfo('type');
$printFileInfo('tmp_name');

//Upload File
if(!isset($uploadFile)){
    echo "upload failed";
}
else{
    if(!file_exists("upload2"))mkdir("upload2");
    for($counter=0;$counter<count($uploadFile["tmp_name"]);$counter++){
        $filePath ="upload2/".basename($uploadFile["name"][$counter]);

        if(!move_uploaded_file($uploadFile["tmp_name"][$counter],$filePath)){
            echo "upload failed";
        }
        else{
            echo $uploadFile["name"][$counter]."upload succuseful"."</br>";
        }
    }
}

require "../tail.php";?>