<?php
session_start();

if(!isset($_SESSION['user_name']))
{
	header("location:index.php");	
}

require_once 'library/functions.php';
require_once 'library/config.php';

	/*if(!isset($_SESSION['user_name'])){
		header('location: login.php');
	}*/
	$id=$_GET['id'];
	 $sql_user=mysql_query("select * from users where id='$id'") or die(mysql_error());
  	$s_no=0;
  	$fetch_user=mysql_fetch_array($sql_user);
  
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('left-nav.php');?> <!--left-menu -->

<div class="page">
    
    <div class="page-nav">
    	 <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1" style="">
    	<h1> Personalized Information</h1>
        <div align="center">
		<form method="post" name="user_info" id="user_info">
<table width="100%" border="0" cellspacing="5" cellpadding="0" style="border-top:solid 3px #CCCCCC;">
 
  <tr>
    <td width="15%"><strong>First Name</strong></td>
    <td width="85%"><?php echo $fetch_user['first_name'];?></td>
  </tr>
  <tr>
    <td height="24"><strong>Last Name</strong></td>
    <td><?php echo $fetch_user['last_name'];?></td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><?php echo $fetch_user['email'];?></td>
  </tr>
  <tr>
    <td><strong>Telephone</strong></td>
    <td><?php echo $fetch_user['telephone'];?></td>
  </tr>
   <tr>
    <td><strong>Address</strong></td>
    <td><?php echo $fetch_user['address'];?></td>
  </tr>
 
  <tr>
    <td><strong>Town</strong></td>
    <td><?php echo $fetch_user['town'];?></td>
  </tr>
  <tr>
    <td><strong>Country</strong></td>
    <td><?php echo $fetch_user['country'];?></td>
  </tr>
   <tr>
    <td><strong>Post Code</strong></td>
    <td><?php echo $fetch_user['postcode'];?></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><a class="btn1" href="page.php">Back</a></td>
  </tr>
</table>

  
  </table>
</form>
</div>
  </div><!--box1 -->
    <!--box 2 -->
<p>
        
   
    <br />
    <br />
    <br />
    <!-- sucess -->
    <!-- error -->
    <!-- warning -->
    <!-- information -->
<?php include "footer.php";?>
<!--footer -->
</div><!--page -->

<div class="clear"></div> <!--clear div -->

</body>
</html>
