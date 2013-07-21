<?php 
include "scripts/config.php";

 $userid=$_POST['userids2'];
$new_email=$_POST['new_email'];
 $current=$_POST['current_email'];
 $confirm=$_POST['c_email'];

$sql_email=mysql_query("select * from userinfo where Id='$userid'") or die(mysql_error());
$fetch_email=mysql_fetch_array($sql_email);
$email=$fetch_email['Email'];



$sql_email2=mysql_query("select * from userinfo where Email='$new_email'") or die(mysql_error());
$rows=mysql_num_rows($sql_email2);

if($new_email!=$confirm)
{
	header("location:profile.php?msg=error8");
}
else if($current!=$email)
{
	header("location:profile.php?msg=error2");	
}
elseif($rows>0)
{
		header("location:profile.php?msg=error3");	
}
else
{
	$sql="update userinfo set Email='$new_email' where Id='$userid'";
	mysql_query($sql) or die(mysql_error());
	header("location:profile.php?msg=confirm2");	
}

?>