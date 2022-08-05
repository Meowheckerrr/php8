<?php require "../head.php";?>

<body>
    收尋專區
    <form action ="searchData.php" method= "post">
        <table border="5">
            <tr><td>Name:</td>       <td><input type="text" name="name"></td></tr>
            <tr><td>是否有男友</td>   <td><input type="text" name="boyFriend"></td> </tr>
        </table>
        <input type="hidden" name="search" value="true">
        <input type="submit" value="send">
    </form>
</body>

<?php require "../tail.php";?>