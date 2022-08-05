<head>
        <meta charset="utf-8">
        <title>meowhecker php 8</title>
        <link href="webStyle.css" rel="stylesheet"> <!-- rel =relation "" with current web --> 

        //config
            //jQuery libary
            <script src="jquery-3.6.0.min.js"></script>
            //google CDN
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            //Wait page to load already and execute js.
            $(document).ready(function(){
                $("button").click(function(){
                    $("p").hide();
                });
            });

        </script>
        
        
</head>

<body>
    <h1>Try to kill the following text</h1>

    <p>meow mewo mewo</p>

    <button>click me and kill the meowmeow</button>
</body>



<?php require "tailJquery.php";?>