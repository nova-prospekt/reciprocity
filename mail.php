

<?php include "scripts/config.php";

function sentmail($subj,$to,$msg)
{ 

$email_to=$to;
$template=$msg;
$subject=$subj;

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1 '.' \r\n';
$headers .= 'From: Oxfam '.' \r\n';

if(mail($email_to,$subject,$template,$headers ))
		 'Mail is Sent ';
	else
		 'Please try Again ';

}

?>

