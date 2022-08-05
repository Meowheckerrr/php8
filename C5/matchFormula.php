```php=
<?php require "../head.php";?>

<body>
    <form action= "matchFormula.php" method="POST">
        <select name ="facialAttractiveness">
            <option value = "95">100~90</option>
            <option value = "85">90~80</option>
            <option value = "75">80~70</option>
            <option value = "60">70 ~</option>
        </select>
        <input type="submit" value="send">
    </form> 
</body>

<?php
$facialAttractiveness = $_REQUEST["facialAttractiveness"];
$rank = "";
if($facialAttractiveness>90)       $rank="A";
else if ($facialAttractiveness>80) $rank="B";
else if ($facialAttractiveness>70) $rank="C";
else $rand="D--"; 

$respond =match($rank){
    "A"  => "要來我家看貓嗎",
    "B"  =>"好熱 可以去妳家吹電風扇嗎",
    "C"  =>"OH  可以教我 要怎麼加別人ig嗎 順便加一下妳的",
    default => "我要去洗澡了"
};
?>

<?require "../tail.php";?>