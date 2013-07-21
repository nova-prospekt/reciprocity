<?php
error_reporting(~E_NOTICE); 
$msg=$_REQUEST['msg'];
ob_start();
include "scripts/config.php";
include "mail.php";

$error='';
if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error'))
{
	$error='Email address not found in our database!';
}
if($_POST['reset'])
{
	$email=$_POST['Email'];	
	$sql=mysql_query("select * from userinfo where Email='$email'") or die(mysql_error());
	$rows=mysql_num_rows($sql);
	
	$fetch=mysql_fetch_array($sql);
	if($rows>0)
	{
			 $username=$fetch['Username'];
			 $password=$fetch['Password'];
			 
			  $msg= "Your Procity username and password are:".'<br> Username :  '.$username.'<br> Password :  '.$password.'<br><br> <br> Procity Staff
			  <br>Campus | Community | Charity'; 
			  $subject="Procity Credentials";
			  $to=$email;
			  sentmail($subj,$to,$msg);
			  
			  header("location:index.php");
			  
	}
	else
	{
		header("location:reset.php?msg=error");	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Procity - The Trading Network</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>

<link rel="stylesheet" type="text/css" href="css/theme.css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include"topNav.php"; ?>
<div id="box_sign">
  <div class="container">
    <div class="span12 box_wrapper">
      <div class="span12 box" style="width:70%;">
        <div>
      
          <div class="head">
            <h4>Enter your email address below to receive instructions on how to reset your password.</h4>
          </div>
            <div style="color:#F00; text-align:center;"><?php if($error!='') 
{ echo $error;}  ?></div>
          <div class="form">
            <form method="post" name="reset" id="reset">
              
              <input id="emailadd" class="validate[required]" placeholder="Email"name="Email" type="text" />
              
              
              
              
              <input class="btn" name="reset" onclick="registerUser()" value="Reset Password" id="submitbut" type="submit" style="width:42%;" />
            </form>
          </div>
        </div>
      </div>
     <p class="already">Know your password? <a href="signin.php"> Sign in</a></p>
    </div>
  </div>
  <section id="" style="margin-top:40px; margin-left:255px;"> 
    <script type="text/javascript"><!-- 

google_ad_client = "ca-pub-5663904797620784"; 

/* advert1 */ 

google_ad_slot = "2888958757"; 

google_ad_width = 728; 

google_ad_height = 90; 

//--> 

</script> 
    <script type="text/javascript" 

src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> 

</script> 
  </section>
</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/theme.js" type="text/javascript"></script>
</body>
</html>


<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#reset").validationEngine();
			
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