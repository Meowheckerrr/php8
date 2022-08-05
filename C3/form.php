<?php require "../head.php" ;?>
<body>

    <style>
        
    </style>



    <form method="post" action=temp.php >
        Account:<input type="text" name="account"></br>
        Password:<input type="password" name="password"></br>
        Address<textarea name ="addressInformation rows="6" cols="18"></textarea></br>
        <input type="hidden" name="loginTableVar1" value="member"> 
        <input type="submit" value="sign up">
    </form>

</body>
<?php require "../tail.php";?>