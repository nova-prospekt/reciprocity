<?php 
include "scripts/config.php";
session_start();
$username=$_SESSION['username'];
 $user_id=$_SESSION['userid'];
 $donateitem_id=$_GET['item_id'];
 
 $sql_donate=mysql_query("select * from donate_item where id='$donateitem_id' ") or die(mysql_error());
 $fetch_donate=mysql_fetch_array($sql_donate);
 $item_id=$fetch_donate['item_id'];
 $donated_by=$fetch_donate['donated_by'];
 
 $sql_item=mysql_query("select * from item where item_id='$item_id'") or die(mysql_error());
 $fetch_item=mysql_fetch_array($sql_item);
 $ebase=$fetch_item['ebase'];
 
 $sql_user=mysql_query("select * from userinfo where Id='$user_id'") or die(mysql_error());
 $fetch_user=mysql_fetch_array($sql_user);
  $propts=$fetch_user['ProPoints'];
 $claim_name=$fetch_user['Username'];
 $claim_email=$fetch_user['Email'];
 
 $sql_donar=mysql_query("select * from userinfo where Id='$donated_by'") or die(mysql_error());
 $fetch_donar=mysql_fetch_array($sql_donar);
 $donar_name=$fetch_donar['Username'];
 $donae_email=$fetch_donar['Email'];
 
  
  $sql_claim=mysql_query("select * from maxclaim where userid='$user_id'") or die(mysql_error());
  $fetch_claim= mysql_fetch_array($sql_claim);
  $claimrow=mysql_num_rows($sql_claim);
$counterclaim=$fetch_claim['counterclaim'];



  if($counterclaim < 1)
  {
		if($propts>=$ebase)
	  {
			if($donated_by!=$user_id)
			{
			
				$maxclaim=$counterclaim +1;
			
				$update_cliam=mysql_query("insert into maxclaim set counterclaim='$maxclaim', userid='$user_id'") or die(mysql_error());
			
				$pts= $propts - $ebase;
			
				$update_user=mysql_query("update userinfo set ProPoints='$pts' where Id='$user_id'") or die(mysql_error()); 
			
				$update_donateitem=mysql_query("update donate_item set claim_status='1', claimed_by='$user_id' where id='$donateitem_id'") or die(mysql_error());
			
			//mail generate
			
			// Mail to claimer
$claim_msg="Hey ".$claim_name.'! <br><br>'.$donar_email.' <br><br> Above is who you should contact and set up a time and place to claim your item. Once you have your item please make sure you confirm your transaction in your profile under "Claimed Items" to ensure proper ProPoints are given to the other person. ProPoints will be deducted once you do this verification. <br> If you are unsatisfied with your claim you can always un-claim from your profile.<br> <br> We hope you are happy with your exchange! <br><br> Warm regards, <br><br> Procity Staff .';
$email_to=$claim_email;
$template=$claim_msg;
$subject= "You have claimed someone's item!";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1 '.' \r\n';
//$headers .= 'From: info@interactivetec.net'.' \r\n';
//$from='saeed@gmail.com';
if(mail($email_to,$subject,$template,$headers ))

// Mail to donar
$donar_msg="Hey ".$donar_name.'! <br><br>'.$claim_email.' <br><br> The above user has claimed your item! Please contact and set up a time and place for the transaction. Once you have given your item and once the claimer confirms on his/her end, make sure you confirm your transaction in your profile under "Donated Items" to ensure proper ProPoints are given to you. <br> If you are wish to remove your item from donation, you can do so from your profile page at any time.<br> <br> We hope you are happy with your exchange! <br><br> Warm regards, <br><br> Procity Staff .';
$email_to=$donar_email;
$template=$donar_msg;
$subject= 'Someone has claimed your item! ';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1 '.' \r\n';
//$from='saeed@gmail.com';
if(mail($email_to,$subject,$template,$headers ))
			
			
			
			header("location:profile.php"); 
			}
			
			else
			{
				header("location:city.php?msg=error2");	
			}
	  }
	  else
	  {
			header("location:city.php?msg=error3");
	  }  
  }
  
  else
  {
	  header("location:city.php?msg=error1");
	  
  }
  
 
?>