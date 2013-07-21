<?php
session_start();
require_once 'library/functions.php';
include "library/config.php";
ob_start();
$errorMessage = '&nbsp;';

if (isset($_POST['submit'])) {

	$username=$_POST['txtUserName'];
	$password=md5($_POST['txtPassword']);
	
	$sql = "SELECT *
		        FROM admin 
				WHERE username = '$username' AND password = '$password'";
	$query=mysql_query($sql) or die(mysql_error());
	$rows=mysql_num_rows($query);
	$fetch=mysql_fetch_array($query);
	if($rows>0)
	{
		echo $_SESSION['user_name']=$fetch['username'];
		header("location:page.php");
	}
	else
	{
		header("location:index.php?msg=error");	
	}
}
$error='';
if(isset($_GET['msg'])=='error')

{
	$error="User Name and Password not match";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
	<style>
		body{background:url(images/login-bg2.png) repeat;}
    </style>
<body>
<div class="admin-logo">
        <div class="logo">
            <a href="#"></a>
            <a href="#"><img src="images/admin-panel-txt.png" width="206" height="33" alt="Admin panel" /></a>
        </div><!--logo -->
</div><!--admin -logo -->


<div class="admin-wrapper">
	<div class="admin-page">
        <div class="information">
            <span> INFORMATION! </span>Type in your ID and Password.
        </div><!-- information -->
        <?php echo $error;?>
    <form method="post" name="frmLogin" id="frmLogin">
	<p style="padding-top:20px;">
       <label class="font12 white"><strong>User Name:</strong></label>
       <input type="text" name="txtUserName" value="" class="txt-feild-small" />
    </p>
    <br />
    <p>
       <label class="font12 white"><strong>&nbsp;Password:</strong></label>
       <input type="password" name="txtPassword" value="" class="txt-feild-small" />
    </p>
    <br />
    <p style="padding-left:160px;">
        <input name="" type="checkbox" value="" />
        &nbsp;&nbsp;
        <label class="font11 white"><strong>Remember me</strong></label>
    </p>
    <br />
    <p style="padding-left:356px;">
        <input type="submit" name="submit" class="btn1" value="Sign In " />
    </p>
	</form>
</div><!--admin-page -->
</div> <!--admin-wrapper -->
</body>

</html>
