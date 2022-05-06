<?php
$to = "sanketshevare1607@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sanketshevare07@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$success = mail($to,$subject,$txt,$headers);
if($success)
{
    echo "success";
}
else
{
    echo "failure";
}
?>