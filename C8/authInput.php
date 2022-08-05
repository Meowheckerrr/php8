<?php require "../head.php";?>
<body>
    //POST form 
    <form action="authOutput.php" method="POST">
        <input type="text" name="account">
        <input type="password" name="password">
        <input type="submit" value ="pass by Post"> 
    </form>
</body>
<?php require "../tail.php";?>

