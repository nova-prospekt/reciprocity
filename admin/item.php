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
if(isset($_GET['pagenum']))
{
	$pagenum=$_GET['pagenum'];
}
 if (!(isset($pagenum))) 

 { 

 echo $pagenum = 1; 

 } 

 

 //Here we count the number of results 

 //Edit $data to be your query 

 $data = mysql_query("SELECT * FROM item") or die(mysql_error()); 

 $rows = mysql_num_rows($data); 

 

 //This is the number of results displayed per page 

 $page_rows = 5; 

 

 //This tells us the page number of our last page 

 $last = ceil($rows/$page_rows); 

 

 //this makes sure the page number isn't below one, or more than our maximum pages 
 if ($pagenum <= 1) 

 { 

 $pagenum = 1; 

 } 

 elseif ($pagenum > $last) 

 { 

  $pagenum = $last; 

 } 

 

 //This sets the range to display in our query 

 $max = 'limit ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
	
	
	
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
    	<h1> Item Information</h1>
        
        <h2><a class="btn1" href="import.php">Import Csv</a></h2><!--<h2><a class="btn1" href="delete_csv.php">Remove Csv</a></h2>-->
		<form action="" name="personalinfo" method="post" >
        

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:solid 3px #CCCCCC;  line-height:25px;">
 
  <tr>
    <td width="6%"><h1>S.No</h1></td>
    <td width="14%"><h1>Category Name</h1></td>
    <td width="15%"><h1>Sub Category</h1></td>
	<td width="13%"><h1>Item Name</h1></td>
    <td width="10%"><h1>E Base</h1></td>
    <td width="9%"><h1>E Max</h1></td>
    <td width="10%"><h1>E Med</h1></td>
    <td width="6%"><h1>E Min</h1></td>
   <td width="17%"><h1>Actions</h1></td>
	
  </tr>
  <?php 
  $sql_prod = mysql_query("SELECT * FROM item $max") or die(mysql_error()); 

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
	<td ><?php echo $cat_name; ?></td>
    <td ><?php echo  $fetch_prod['item_name'];?></td>
    <td ><?php echo $fetch_prod['sub_category']; ?></td>
    <td ><?php echo $fetch_prod['ebase']; ?></td>
    <td ><?php echo $fetch_prod['emax']; ?></td>
    <td ><?php echo $fetch_prod['emed']; ?></td>
      <td ><?php echo $fetch_prod['emin']; ?></td>
      
   <td ><a href="edit_item.php?prod_id=<?php echo $fetch_prod['item_id'];?>">Edit </a>| <a href="delete_item.php?prod_id=<?php echo $fetch_prod['item_id'];?>" onClick = "javascript: return confirm('Do you want to Delete this?');">Delete </a></td>
	
  </tr>
  <?php }
  
   ?>
   
</table>
<?php echo " --Page $pagenum of $last-- <p>";
if ($pagenum == 1) 

 {

 } 

 else 

 {

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'> <<-First</a> ";

 echo " ";

 $previous = $pagenum-1;

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'> <-Previous</a> ";

 } 


 //just a spacer

 echo " ---- ";


 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links

 if ($pagenum == $last) 

 {

 } 

 else {

 $next = $pagenum+1;

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next -></a> ";

 echo " ";

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last ->></a> ";

 } 
  ?>
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
