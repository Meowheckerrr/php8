<?php require "../head.php";?>
<body>
    <form action="sendsEmail.php" method="POST">
        <table>
        <tr><td>Sender:</td><td><input type="text" name="senderEmail"></td></tr>
        <tr><td>Receiver:</td><td><input type="text" name="receiverEmail"></td></tr>
        <tr><td>Subject:</td><td><input type="text" name="subject"></td></tr>
        <tr><td>Mail contents:</td><td><textarea rowd="5" cols="40" name="mailContents"></textarea></td></tr>
        </table>
        <input type="submit" value="send">
    </form>
</body>

<?php require "../tail.php";?>