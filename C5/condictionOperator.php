<?php require "../head.php";

date_default_timezone_set('Asia/Taipei');

$hour = date('H');
$string ="Current time is ";

$strTime = ($hour < 12 ) ? "AM" : "PM";
$hour = ($hour < 12 ) ? "$hour":$hour-12;

print $string . $hour . $strTime;

require "../tail.php";?>