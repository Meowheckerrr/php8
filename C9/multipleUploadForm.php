<?php require "../head.php";?>

<form action="multipleUpload.php" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="uploadAssociateArray[]">
    <input type="file" name="uploadAssociateArray[]">
    <input type="file" name="uploadAssociateArray[]">

    <input type="submit" value="send">
</form>

<?php require "../tail.php";?>