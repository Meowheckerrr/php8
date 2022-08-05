<?php require "../head.php";?>

<body>
    妹子資料 登入專區 : )
    <form action ="insertValue.php" method= "post">
        <table border="5">
            <tr><td>ID:</td>         <td><input type="text" name="id"> </td></tr>
            <tr><td>IP:</td>         <td><input type="text" name="ip"></td></tr>
            <tr><td>Name:</td>       <td><input type="text" name="name"></td></tr>
            <tr><td>Age</td>        <td><input type="text" name="age"></td> </tr>
            <tr><td>是否有男友</td>   <td><input type="text" name="boyFriend"></td> </tr>
        </table>
        <input type="submit" value="send">
    </form>
</body>

<?php require "../tail.php";?>