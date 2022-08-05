<?php require "../head.php";

$image ="meowmeow.JPG";

if(!file_exists($image)){
    echo "error";
}
else{
    echo "file exists"."</br>";
}

$imageInfo = exif_read_data($image);

foreach($imageInfo as $key => $value){//shows the image information.
    echo "$key => $value"."</br>";
}
print("<----------------------------------->");

header("Content-Type:". $imageInfo['MimeType']);  //MINI (Multipurpose Internet Mail Extensions
header("Content-Length:". $imageInfo['FileSize']);
readfile($image);

require "../tail.php";?>