<?php require "../head.php";?>

<?php
$imageName = "meowmeow.jpg";

$imageInfo = exif_read_data($imageName);

//the image transinto the string 
$imageBase64Encode = base64_encode(file_get_contents($imageName));

//src = data::image;base64,baseEncode; 
echo '<img src="data:'.$imageInfo['MimeType'].';base64,'.$imageBase64Encode.'">'
?>

<?php require "../tail.php";?>