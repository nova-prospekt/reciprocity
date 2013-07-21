<?php 
include "scripts/config.php";

 $userid=$_POST['userid'];
$location=$_POST['location'];

	$sql="update userinfo set Location='$location' where Id='$userid'";
	mysql_query($sql) or die(mysql_error());
	header("location:profile.php?msg=cloc");	


?>