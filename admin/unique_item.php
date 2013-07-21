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

<div class="page" style="width:1060px;">
    
    <div class="page-nav">
    	
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> Donate Item Information</h1>
        
        <h2><!--<a class="btn1" href="add_item.php">Add Item</a>--></h2>
		<form action="" name="personalinfo" method="post" >
        

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:solid 3px #CCCCCC; text-align:center; line-height:25px;">
 
  <tr>
    <td width="6%"><h1>S.No</h1></td>
	    <td width="9%"><h1>Image</h1></td>
    <td width="9%"><h1>User Name</h1></td>
	<td width="12%"><h1>Cateory Name</h1></td>
    <td width="14%"><h1>Sub Category</h1></td>
    <td width="12%"><h1>Unique Item</h1></td>
    <td width="9%"><h1>E-Base</h1></td>
    <td width="8%"><h1>E-Max</h1></td>
    <td width="9%"><h1>E-Med</h1></td>
   <td width="9%"><h1>E-Min</h1></td>
   <td width="12%"><h1>Actions</h1></td>
   
	
  </tr>
  <?php 
  $sql_unique=mysql_query("select * from unique_item") or die(mysql_error());
  $rows=mysql_num_rows($sql_unique);
  if($rows>0)
  {
  $s_no=0;
  while($fetch_unique=mysql_fetch_array($sql_unique))
  {
	  $s_no++;
	  // get category neme
	  $category=$fetch_unique['category'];
	  $sql_category=mysql_query("select * from category where cat_id='$category'") or die (mysql_error());
	  $fetch_category=mysql_fetch_array($sql_category);
	  $category_name=$fetch_category['cat_name'];
	  
	  //get item name
	  $item_id=$fetch_unique['item_id'];
	  
	  $sql_item=mysql_query("select * from item where item_id='$item_id'") or die(mysql_error());
	  $fetch_item=mysql_fetch_array($sql_item);
	  $item_name=$fetch_item['item_name'];
	  
	  
	  $donate_type=$fetch_unique['donate_type'];//donation type
	  // get donated username
	  $donate_by=$fetch_unique['donated_by'];
	  
	  $sql_user=mysql_query("select * from userinfo where Id='$donate_by'") or die(mysql_error());
	  $fetch_user=mysql_fetch_array($sql_user);
	  $donate_name=$fetch_user['Username'];
	  //get claimed username
	 $claimed_by=$fetch_unique['claimed_by'];
	 
	 	  $sql_claim=mysql_query("select * from userinfo where Id='$claimed_by'") or die(mysql_error());
	  $fetch_claim=mysql_fetch_array($sql_claim);
	  $claim_name=$fetch_claim['Username'];
	
  ?>
  <tr <?php if($s_no%2=='0') {?> class="row" <?php } ?> >
    <td ><?php echo $s_no;?></td>
	<td><img src="../images/<?php echo $fetch_unique['image'];?>" style="width:50px; height:50px;" /></td>
    <td ><?php echo $donate_name;?></td>
    <td ><?php echo $category_name; ?></td>
    <td ><?php echo $fetch_unique['sub_category']; ?></td>
    <td ><?php echo  $fetch_unique['item_id'];?></td>
    <td ><?php echo $fetch_unique['ebase']; ?></td>
    <td ><?php echo $fetch_unique['emax'];?></td>
    <td ><?php echo $fetch_unique['emed'];?></td>
   <td ><?php echo $fetch_unique['emin'];?></td>
	
    <td ><a href="edit_unique.php?id=<?php echo $fetch_unique['id']; ?>">Edit</a> | Delete</td>
  </tr>
  <?php } }
  else
  {
	echo "No Records";  
	}?>
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
