 <?php 
error_reporting(~E_NOTICE);
include "library/config.php";
ob_start();
if(isset($_POST['add_prod']))
{
if ($_FILES[csv][size] > 0) {

    //get the csv file
    $file = $_FILES[csv][tmp_name];
    $handle = fopen($file,"r");
    $del=mysql_query("delete from item") or die(mysql_error());
    //loop through the csv file and insert into database
    do {
        if ($data[0]) {
            mysql_query("INSERT INTO item (item_name,cat_id,sub_category,ebase,emax,emed,emin) VALUES
                (
                    '".addslashes($data[0])."',
                    '".addslashes($data[1])."',
                    '".addslashes($data[2])."',
					'".addslashes($data[3])."',
					'".addslashes($data[4])."',
					'".addslashes($data[5])."',
					'".addslashes($data[6])."'
                )
            ") or die(mysql_error());
        }
    } while ($data = fgetcsv($handle,1000,",","'"));
    

?>
<script>
window.location="item.php";
</script>
<?php    //redirect
    header("location:item.php"); 

}
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
    <td valign="top"><strong>Import Csv</strong></td>
    <td><input type="file" name="csv" id="csv" class="validate[required] txt-feild-small"  /></td>
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
