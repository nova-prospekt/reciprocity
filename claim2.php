<?php 
include "scripts/config.php";
session_start();
$username=$_SESSION['username'];
$user_id=$_SESSION['userid'];
$item_id=$_GET['item_id'];



/*************Get User claim details******/
$sql_user=mysql_query("select * from userinfo where Id='$user_id'") or die(mysql_error());
$fetch_user=mysql_fetch_array($sql_user);

$propoints=$fetch_user['ProPoints'];
$claim_email=$fetch_user['Email'];
$claim_username=$fetch_user['Username'];

/*************Get item details details******/
$sql_donar=mysql_query("select * from donate_item where id='$item_id'") or die(mysql_error());
$fetch_donar=mysql_fetch_array($sql_donar);
$donar_user=$fetch_donar['username_donar'];
$item_id=$fetch_donar['item_id'];
$donate_type=$fetch_donar['donate_type'];
$max_donate=$fetch_donar['max_donated'];
$max_claimed=$fetch_donar['max_claimed'];

if($donate_type='generic')
{
$sql_item=mysql_query("select * from item where id='$item_id' ") or die(mysql_error());
$fetch_item=mysql_fetch_array($sql_item);
$item_name=$fetch_item['item_name'];

}
if($max_claimed>1)
{
	$update_donate=mysql_query("update doante_item set claimed_by='$user_id', status='1'") or die(mysql_error());
	
}
else
{
	header("location:city.php?msg=nopts");	
}

$sql_user2=mysql_query("select * from userinfo where Username='$donar_user'") or die(mysql_error());
$fetch_user2=mysql_fetch_array($sql_user2);

$donar_email=$fetch_user2['Email'];
$donar_username=$fetch_user2['Username'];




$curdate=date('M d,Y');
	$curtime=date('h:m');












// Mail to claimer
$claim_msg="Hey ".$claim_username.'! <br><br>'.$donar_email.' <br><br> Above is who you should contact and set up a time and place to claim your item. Once you have your item please make sure you confirm your transaction in your profile under "Claimed Items" to ensure proper ProPoints are given to the other person. ProPoints will be deducted once you do this verification. <br> If you are unsatisfied with your claim you can always un-claim from your profile.<br> <br> We hope you are happy with your exchange! <br><br> Warm regards, <br><br> Procity Staff .';
$email_to=$useremail;
$template=$claim_msg;
$subject= "You have claimed someone's item!";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1 '.' \r\n';
$headers .= 'From: info@interactivetec.net'.' \r\n';
$from='saeed@gmail.com';
if(mail($email_to,$subject,$template,$headers,$from ))


// Mail to donar
$donar_msg="Hey ".$donar_username.'! <br><br>'.$useremail.' <br><br> The above user has claimed your item! Please contact and set up a time and place for the transaction. Once you have given your item and once the claimer confirms on his/her end, make sure you confirm your transaction in your profile under "Donated Items" to ensure proper ProPoints are given to you. <br> If you are wish to remove your item from donation, you can do so from your profile page at any time.<br> <br> We hope you are happy with your exchange! <br><br> Warm regards, <br><br> Procity Staff .';
$email_to=$donar_email;
$template=$claim_msg;
$subject= 'Someone has claimed your item! ';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1 '.' \r\n';
$headers .= 'From: info@interactivetec.net'.' \r\n';
$from='saeed@gmail.com';
if(mail($email_to,$subject,$template,$headers,$from ))




mysql_query($insert) or die(mysql_error());
$msg="Successfully Claimed";
header("location:blog.php?msg=$msg");

?>