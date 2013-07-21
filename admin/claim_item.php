<?php
session_start();
if(!isset($_SESSION['user_name']))
{
	header("location:index.php");	
}
//require_once 'library/functions.php';
require_once 'library/config.php';

	/*if(!isset($_SESSION['user_name'])){
		header('loprodion: login.php');
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

<div class="page" style="width:1020px;">
    
    <div class="page-nav">
    	
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> Product Information</h1>
        
        <h2><a class="btn1" href="add_item.php">Add Item</a></h2>
		<form action="" name="personalinfo" method="post" >
        

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:solid 3px #CCCCCC; text-align:center; line-height:25px;">
 
  <tr>
    <td width="7%"><h1>S.No</h1></td>
    <td width="12%"><h1>Image</h1></td>
	<td width="14%"><h1>Item Name</h1></td>
    <td width="15%"><h1>Cateory Name</h1></td>
    <td width="13%"><h1>Item Condition</h1></td>
    <td width="17%"><h1>Item Description</h1></td>
    <td width="9%"><h1>Item Points</h1></td>
   <td width="13%"><h1>Actions</h1></td>
	
  </tr>
  <?php 
  $sql_prod=mysql_query("select * from item") or die(mysql_error());
  $s_no=0;
  while($fetch_prod=mysql_fetch_array($sql_prod))
  {
	  $cat_id=$fetch_prod['cat_id'];
	  $sql_cat=mysql_query("select * from category where cat_id='$cat_id'") or die (mysql_error());
	  $fetch_cat=mysql_fetch_array($sql_cat);
	  $cat_name=$fetch_cat['cat_name'];
	  $s_no++;
	
  ?>
  <tr <?php if($s_no%2=='0') {?> class="row" <?php } ?> >
    <td ><?php echo $s_no;?></td>
	<td ><?php if($fetch_prod['image']==''){?> <img src="img/noimg.jpg" width="50" height="50" /> <?php } else {?><img src="img/<?php echo $fetch_prod['image']; ?>" width="50" height="50" /> <?php }?></td>
    <td ><?php echo $fetch_prod['item_name']; ?></td>
    <td ><?php echo $fetch_cat['cat_name']; ?></td>
    <td ><?php echo $fetch_prod['item_condition']; ?></td>
    <td ><?php echo $fetch_prod['item_description']; ?></td>
    <td ><?php echo $fetch_prod['item_pts']; ?></td>
   <td ><a href="edit_item.php?prod_id=<?php echo $fetch_prod['item_id'];?>">Edit </a>| <a href="delete_item.php?prod_id=<?php echo $fetch_prod['item_id'];?>" onClick = "javascript: return confirm('Do you want to Delete this?');">Delete </a></td>
	
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
