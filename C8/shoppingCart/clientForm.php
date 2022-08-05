<?php require "../../head.php";?>
<body>

    <form method="POST" action ="storeAsSession.php">
        <select name="weapons[]" multiple="multiple" >
            <option value="ak47">ak47 price:70000000000</option>
            <option value="kar98">kar-98 price:69999999999</option>
            <option value="MG3">MG3 price:66666666666669</option>
        </select>
        <input type="submit" value="send">
    </form>
    
</body>

<?php require "../../tail.php";?>