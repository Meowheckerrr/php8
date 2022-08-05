<?php require "../head.php";?>

<body>
    <form action="singularUpload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadFile">
        <input type="submit" value="send">
    </form>
</body>

<?php require "../tail.php";?>