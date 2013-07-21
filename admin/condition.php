<?php
session_start();
if(!isset($_SESSION['user_name']))
{
	header("location:index.php");	
}
//require_once 'library/functions.php';
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
    	
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> Condition Information</h1>
        
        <h2><a class="btn1" href="add_condition.php">Add Condition</a></h2>
		<form action="" name="personalinfo" method="post" >
        

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:solid 3px #CCCCCC; line-height:25px;">
 
  <tr style="text-align:center;">
    <td width="9%"><h1>S.No</h1></td>
	
	<td width="25%"><h1>Condition Name</h1></td>
    <td width="45%"><h1>Condition Points</h1></td>
	<td width="21%"><h1>Actions</h1></td>
	
  </tr>
  <?php 
  $sql_cond=mysql_query("select * from conditions") or die(mysql_error());
 
  $s_no=0;
  while($fetch_cond=mysql_fetch_array($sql_cond))
  {
	  $s_no++;
	  $cat_id=$fetch_cond['id'];
  ?>
  <tr <?php if($s_no%2=='0') {?> class="row" <?php } ?> style="text-align:center;">
    <td><?php echo $s_no;?></td>

	<td><?php echo $fetch_cond['condition']; ?></td>
    <td><?php echo $fetch_cond['condition_pts']; ?></td>
    
	<td> <a href="edit_condition.php?cat_id=<?php echo $fetch_cond['id'];?>">Edit </a>| <a href="delete_condition.php?cat_id=<?php echo $fetch_cond['id'];?>" onClick = "javascript: return confirm('Do you want to Delete this?');">Delete </a></td>
	
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
