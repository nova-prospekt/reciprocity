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
	
	$id=$_GET['id'];
	
	$select=mysql_query("select * from category where id='$id'") or die(mysql_error());
	$fetch=mysql_fetch_array($select);
	$cat_id=$fetch['cat_id'];
	$cat_name=$fetch['cat_name'];
	
	
	if(isset($_POST['edit_cat']))
	{
		$id=$_GET['id'];
		$cat_name=$_POST['cat_name'];
		$cat_id=$_POST['cat_id'];
		$update="update category set cat_id='$cat_id',cat_name='$cat_name' where id='$id'";
		mysql_query($update) or die(mysql_error());
		header("location:category.php");	
	}
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>

<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#category").validationEngine();
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>

</head>

<body>

<?php include('left-nav.php');?> <!--left-menu -->

<div class="page">
    
    <div class="page-nav">
    	
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> Edit category</h1>
        
       
		<form action="" name="category" id="category" method="post" >
        
<table  width="100%" border="0" cellspacing="5" cellpadding="0" style="border-top:solid 3px #CCCCCC;" align="center">
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
    <td width="17%" valign="top"><strong>Category ID</strong></td>
    <td width="83%"><input type="text" class="validate[required] txt-feild-small" name="cat_id" id="cat_id" value="<?php echo $cat_id;?>" /></td>
  </tr>

  <tr>
    <td width="17%" valign="top"><strong>Category Name</strong></td>
    <td width="83%"><input type="text" class="validate[required] txt-feild-small" name="cat_name" id="cat_name" value="<?php echo $cat_name;?>" /></td>
  </tr>
  <!--<tr>
    <td width="17%" valign="top"><strong>Category Worth</strong></td>
    <td width="83%"><input type="text" class="validate[required] txt-feild-small" name="cat_worth" id="cat_worth" value="<?php echo $cat_worth;?>" /></td>
  </tr>
 -->
  <tr>
<td colspan="2">&nbsp;</td>
</tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="edit_cat" class="btn1" value="Save" /></td>
  </tr>
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
