<?php require "../head.php";?>

<body>
    <style>
        table, td, th {
             border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
        .textColor{
            color: green;
        }
    </style>

    <!-- table 1-->
    <div class="textColor":>
        <table>
            <tr><th>client </th> <th>server</th></tr>
            <tr><td>meow</td></tr>
            <tr><td>meow1</td><td>meow2</td></tr>
            <tr><td>jacky</td><td>test1</td></tr>
        </table>
        
    <!-- table 2-->
        <table >
            <caption>meow</caption>
            <tr><th>month</th> <th>deposit</th></tr>
            <tr><td>1</td><td>1000 US</td></tr>
            <tr><td>2</td><td>2000 US</td></tr>
            <tr><td>3</td><td>3000 US</td></tr>
            <tr><td>4</td><td>4000 US</td></tr>
            <tr><td>Sum</td><td>10000 US</td></tr>
        </table>
    </div>
</body>

<?php require "../tail.php";?>



