<?php 
include "scripts/config.php";
session_start();
echo $username=$_SESSION['username'];
 $user_id=$_SESSION['userid'];
 if(isset($_POST['confirm']))
 {
	$donate_id=$_POST['claim_idssss'];
  	$condition=$_POST['condition'];
	echo $insert="INSERT INTO confirm_claim (`userid` ,`donate_id` ,`condition`
)
VALUES (
 '$user_id', '$donate_id', '$condition'
)";
	mysql_query($insert) or die(mysql_error());
	$update_donate=mysql_query("update donate_item set claim_status='2' where id='$donate_id' ") or die(mysql_error());
	header("location:profile.php");
 
 }
 
 if(isset($_POST['cancel']))
 {
	 $user_id=$_SESSION['userid'];
	 $donate_id=$_POST['claim_idssss'];
	 $update_donate1=mysql_query("update donate_item set claim_status='0' where id='$donate_id' ") or die(mysql_error());
	 
	 $sql_user=mysql_query("select * from userinfo where Id='$user_id'") or die(mysql_error());
	 $fetch_user=mysql_fetch_array($sql_user);
	 $propts=$fetch_user['ProPoints'];
	 $claim_email=$fetch_user['Email'];
	 
	 $sql_donateitem=mysql_query("select * from donate_item where id='$donate_id' ") or die(mysql_error());
 $fetch_donateitem=mysql_fetch_array($sql_donateitem);
 $item_id=$fetch_donateitem['item_id'];
	 
	 $sql_item=mysql_query("select * from item where item_id='$item_id'") or die(mysql_error());
 $fetch_item=mysql_fetch_array($sql_item);
 $ebase=$fetch_item['ebase'];
	 
	 $pts=$propts-$ebase;
	 
	 $update_user=mysql_query("update userinfo set ProPoints='$pts' where Id='$user_id'") or die(mysql_error());
	 
	 
	 $claim_msg='Your Claim is Canceled';
$email_to=$claim_email;
$template=$claim_msg;
$subject= "You have claimed someone's item!";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1 '.' \r\n';
//$headers .= 'From: info@interactivetec.net'.' \r\n';
//$from='saeed@gmail.com';
if(mail($email_to,$subject,$template,$headers ))

	header("location:profile.php");	 
}
 
 
 ?>