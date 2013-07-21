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
	
	$cat_id=$_GET['id'];
	
	
	
	
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
    	<h1> category Information</h1>
        
        <h2><a class="btn1" href="add_sub_category.php?cat_id=<?php echo $cat_id;?>">Add Sub Category</a></h2>
		<form action="" name="personalinfo" method="post" >
        

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:solid 3px #CCCCCC; line-height:25px;">
 
  <tr>
    <td width="13%"><h1>S.No</h1></td>
	
	<td width="48%"><h1>Caegory Name</h1></td>
	<td width="26%"><h1>Actions</h1></td>
	
  </tr>
  <?php 
  $sql_cat=mysql_query("select * from category where parent_id='$cat_id'") or die(mysql_error());
  $s_no=0;
  while($fetch_cat=mysql_fetch_array($sql_cat))
  {
	  $s_no++;
  ?>
  <tr <?php if($s_no%2=='0') {?> class="row" <?php } ?>>
    <td width="13%"><?php echo $s_no;?></td>

	<td width="48%"><?php echo $fetch_cat['cat_name']; ?></td>
	<td width="26%"><a href="edit_sub_cat.php?cat_id=<?php echo $fetch_cat['id'];?> & id=<?php echo $fetch_cat['parent_id'];?>">Edit </a>| <a href="delete_sub_category.php?cat_id=<?php echo $fetch_cat['id'];?> & id=<?php echo $fetch_cat['parent_id'];?>" onClick = "javascript: return confirm('Do you want to Delete this?');">Delete </a></td>
	
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
