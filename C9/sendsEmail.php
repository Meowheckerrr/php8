<?php 

ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "aa098933967901@gmail.com");

$message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";

$headers = "From:aa098933967901@gmail.com";

mail("aa098933967903@gamil.com", "Meowmeow", $message, $headers);
echo "Check your email now....&lt;BR/>";


/*
$receiverMail= "aa098933967901@gmail.com";
$subject="Mailtest";
$contents="meowmewoemwoemwoe";
$message = wordwrap($contents,70);

if(mail($receiverMail,$subject,$message)){
}
*/
?>