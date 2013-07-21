<?php
session_start();

require_once 'library/functions.php';
require_once '../library/config.php';

	if(!isset($_SESSION['user_name'])){
		header('location: login.php');
	}
	
	
	
	if(isset($_REQUEST['submit'])){
	
	if($_REQUEST['Name']==""){
	
		$error = "Plase enter the name";
	
	}else {
	
		 $sqlupdate = "insert into personal_info set
			Name = '".$_REQUEST['Name']."',
			Title = '".$_REQUEST['titleinfo']."',
			Address = '".$_REQUEST['Address']."',
			City = '".$_REQUEST['City']."',
			State = '".$_REQUEST['State']."',
			Zip = '".$_REQUEST['Zip']."',
			Phone = '".$_REQUEST['Phone']."',
			Fax = '".$_REQUEST['Fax']."',
			Assignee = '".$_REQUEST['Assignee']."',
			Company = '".$_REQUEST['Company']."',
			Country = '".$_REQUEST['Country']."',
			addressbox = '".$_REQUEST['addressbox']."'";
			
		mysql_query($sqlupdate) or die(mysql_query());
		
		}
	
	}
	
	if(isset($_REQUEST['did'])){
		
		$sql = "delete from personal_info where id = '".$_REQUEST['did']."'";
		mysql_query($sql) or die(mysql_error());
	
	}
	
	$sqlinfo = "select * from company_letterhead";
	$queryinfo = mysql_query($sqlinfo) or die(mysql_error());
	$rs = mysql_fetch_array($queryinfo);
	
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
    	<!--<ul>
        	<li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
        </ul>-->
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> Personalized Information</h1>
		<form action="" name="personalinfo" method="post" >
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td width="23%" class="font18">&nbsp;</td>
        <td width="37%">&nbsp;</td>
        <td width="40%" align="right"><a style="background:#999999; padding:10px 10px 10px 10px; color:#FFFFFF; font-size:14px;" href="page.php">Re-fresh</a></td>
      </tr>
      
      <tr>
        <td class="font18">&nbsp;</td>
        <td><textarea name="letterhead" cols="80" rows="10" style="text-align:center; padding-top:90px; font-size:18px;"><?php echo $rs['letterhead']; ?></textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="font18">&nbsp;</td>
		<input type="hidden" name="update" value="save"  />
        <td><input type="submit" name="submit" value=" Save "  style="font-size:18px; padding:5px 5px 5px 5px;" /></td>
		<td>&nbsp;</td>
      </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
  </div>
  <!--box1 -->
    <!--box 2 -->
<p>
        
   
    <br />
    <br />
    <br />
    <!-- sucess -->
    <!-- error -->
    <!-- warning -->
    <!-- information -->
<div class="footer">
    &copy; Copyright 2011 Admin panel | Powered by: <a href="#" class="green"> JJTECHNOLOGIES</a>
  </div><!--footer -->
</div><!--page -->

<div class="clear"></div> <!--clear div -->

</body>
</html>
