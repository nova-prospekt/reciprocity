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
	
	
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style>
.row{ background-color:#f1f1f1;}
</style>
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
		<form method="post" name="user_info" id="user_info">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:solid 3px #CCCCCC; text-align:center; line-height:25px;">
  <tr>
    <td width="5%"><h1>S.No</h1></td>
	<td width="6%"><h1>User Name</h1></td>
    <td width="8%"><h1>Email</h1></td>
    <td width="8%"><h1>Pro Points</h1></td>
    <td width="11%"><h1>Action</h1></td>
  </tr>
  <?php $sql_user=mysql_query("select * from userinfo") or die(mysql_error());
  	$s_no=0;
  	while($fetch_user=mysql_fetch_array($sql_user))
  	{
		$s_no++;
  ?>
  <tr <?php if($s_no%2=='0') {?> class="row" <?php } ?> >
    <td><?php echo $s_no;?></td>
    <td><?php echo $fetch_user['Username'];?></td>
	<td><?php echo $fetch_user['Email'];?></td>
    <td><?php echo $fetch_user['ProPoints'];?></td>
	<td><a href="edit_user.php?id=<?php echo $fetch_user['Id'];?>">Edit</a> | <a href="block.php?id=<?php echo $fetch_user['Id'];?> & status=<?php echo $fetch_user['status'];?>"> <?php if($fetch_user['status']=='0') { echo 'Un Block';} else { echo 'Block';}?></a></td>

  </tr>
  
  <?php } ?>
</table>
</form>

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
