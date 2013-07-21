<?php
include "library/config.php";

$id=$_GET['id'];
$status=$_GET['status'];

if($status=='0')
{
	$update=mysql_query("update userinfo set status='1' where id='$id'") or die(mysql_error());	
	header("location:page.php");
}
else
{
		$update=mysql_query("update userinfo set status='0' where id='$id'") or die(mysql_error());
		header("location:page.php");
}

?>