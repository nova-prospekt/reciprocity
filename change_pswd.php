<?php 
include "scripts/config.php";

$userid=$_POST['userids'];
$new_pswd=$_POST['new_pswd'];
$current=$_POST['current_pswd'];
$confirm=$_POST['c_pswd'];

$sql_pswd=mysql_query("select * from userinfo where Id='$userid'") or die(mysql_error());
$fetch_pswd=mysql_fetch_array($sql_pswd);
$pswd=$fetch_pswd['Password'];

if($current!=$pswd)
{
	header("location:profile.php?msg=error");	
}
else if($new_pswd!=$confirm)
{
		header("location:profile.php?msg=error9");
}
else
{
	$sql="update userinfo set Password='$new_pswd' where Id='$userid'";
	mysql_query($sql) or die(mysql_error());
	header("location:profile.php?msg=confirm");	
}

?>