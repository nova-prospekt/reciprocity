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
	
	if(isset($_POST['add_prod']))
	{
		$cat_name=$_POST['cat_name'];
		$item_name=$_POST['item_name'];
		$sub_cat=$_POST['sub_cat'];
		$base=$_POST['base'];
		$max=$_POST['max'];
		$med=$_POST['med'];
		$min=$_POST['min'];
		
		
		
		echo $insert="insert into item set 
				item_name='$item_name',
				cat_id='$cat_name',
				sub_category='$sub_cat',
				ebase='$base',
				emax='$max',
				emed='$med',
				emin='$min'
		";
		mysql_query($insert) or die(mysql_error());
		header("location:item.php");	
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
			jQuery("#product").validationEngine();
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
     <script src="ji/jquery-1.7.2.js"></script> 

  <script src="ji/jquery.ui.core.js"></script> 

  <script src="ji/jquery.ui.widget.js"></script> 

     <script type="text/javascript" src="ajax1.js"></script> 

  <script type="text/javascript" src="drop_function_3.js">



</script> 


</head>

<body>

<?php include('left-nav.php');?> <!--left-menu -->

<div class="page">
    
    <div class="page-nav">
    	
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> Add Item</h1>
        
       
		<form action="" id="product" name="product" method="post" enctype="multipart/form-data" >
 
 <table  width="100%" border="0" cellspacing="5" cellpadding="0" style="border-top:solid 3px #CCCCCC;" align="center">
  <tr>
    <td width="17%" valign="top"><strong>Category Name</strong></td>
    <td width="83%"><select name="cat_name" id="cat_name" class="validate[required] txt-feild-small" onchange="getbudget(this,'')">
    	<option value="">Select Category</option>
        <?php $sql_cat=mysql_query("select * from category");
			while($fetch_cat=mysql_fetch_array($sql_cat))
			{
		?>
        <option value="<?php echo $fetch_cat['cat_id'];?>"><?php echo $fetch_cat['cat_name'];?></option>
        <?php } ?>
    </select></td>
  </tr>
  

  <tr>
    <td valign="top"><strong>Item Name</strong></td>
    <td><input type="text" name="item_name" id="item_name" class="validate[required] txt-feild-small"  /></td>
  </tr>
  <tr>
    <td valign="top"><strong>Item Sub Category</strong></td>
    <td><input type="text" name="sub_cat" id="sub_cat" class="validate[required] txt-feild-small"  /></td>
  </tr>
  <tr>
    <td valign="top"><strong>E Base</strong></td>
    <td><input type="text" name="base" id="base" class="validate[required] txt-feild-small"  /></td>
  </tr>
  <tr>
    <td valign="top"><strong>E Max</strong></td>
    <td><input type="text" name="max" id="max" class="validate[required] txt-feild-small"  /></td>
  </tr>
  <tr>
    <td valign="top"><strong>E Med</strong></td>
    <td><input type="text" name="med" id="med" class="validate[required] txt-feild-small"  /></td>
  </tr>
  <tr>
    <td valign="top"><strong>E Min</strong></td>
    <td><input type="text" name="min" id="min" class="validate[required] txt-feild-small"  /></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="add_prod" class="btn1" value="Add" /></td>
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
