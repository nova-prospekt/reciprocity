<?php 
include "scripts/config.php";
ob_start();

 $userid=$_POST['userid'];
 $new_user=$_POST['new_user'];
 $confirm=$_POST['c_user'];
 $current=$_POST['current_user'];


$sql_email=mysql_query("select * from userinfo where Id='$userid'") or die(mysql_error());
$fetch_email=mysql_fetch_array($sql_email);
$username=$fetch_email['Username'];



$sql_user2=mysql_query("select * from userinfo where Username='$new_user'") or die(mysql_error());
$rows=mysql_num_rows($sql_user2);

if($new_user!=$confirm)
{
	header("location:profile.php?msg=error7");
}


else if($current!=$username)
{
	header("location:profile.php?msg=error4");	
}
elseif($rows>0)
{
		header("location:profile.php?msg=error5");	
}
else
{
	$sql="update userinfo set Username='$new_user' where Id='$userid'";
	mysql_query($sql) or die(mysql_error());
	$_SESSION['username']=$new_user;
	header("location:profile.php?msg=confirm4");	
}

?>