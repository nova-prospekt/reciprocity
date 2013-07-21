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
	$id=$_GET['id'];
	 $sql_user=mysql_query("select * from userinfo where Id='$id'") or die(mysql_error());
  	$s_no=0;
  	$fetch_user=mysql_fetch_array($sql_user);
	
	if(isset($_POST['edit_user']))
	{
		$id=$_GET['id'];
		$user_name=$_POST['user_name'];
		$email=$_POST['email'];
		echo "select * from userinfo where (Username='$user_name' or Email='$email') and (Id!='$id')";
		$sql=mysql_query("select * from userinfo where (Username='$user_name' or Email='$email') or (Id!='4')") or die(mysql_error());
		$rows=mysql_num_rows($sql);
		if($rows>0)
		{
			header("location:edit_user.php?id=$id & msg=error");	
		}
		else
		{
			$update="update userinfo set Username='$user_name',
					email='$email',
					 where Id='$id'";
			mysql_query($update) or die(mysql_error());
			
			header("location:page.php");
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
			jQuery("#user_info").validationEngine();
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
    
  <div class="box1" style="">
    	<h1> Personalized Information</h1>
     <p style="color:#F00;">   <?php if(isset($_GET['msg'])=='error') { echo 'User Name or Email Already Exists';}?></p>
        <div align="center">
		<form method="post" name="user_info" id="user_info">
<table width="100%" border="0" cellspacing="5" cellpadding="0" style="border-top:solid 3px #CCCCCC;">
 
  <tr>
    <td width="15%" valign="top"><strong>User Name</strong></td>
    <td width="85%" valign="top"><input type="text" class="validate[required] txt-feild-small" name="user_name" id="user_name" value="<?php echo $fetch_user['Username'];?>" /></td>
  </tr>
  <tr>
    <td valign="top"><strong>Email</strong></td>
    <td valign="top"><input type="text" class="validate[required] txt-feild-small" name="email" id="email" value="<?php echo $fetch_user['Email'];?>" /></td>
  </tr>
 <tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="edit_user" class="btn1" value="Save" /></td>
  </tr>
</table>

  
  </table>
        </form>
</div>
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
