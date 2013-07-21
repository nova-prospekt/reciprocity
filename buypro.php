<?php 

session_start();
ob_start();
include "scripts/config.php";
if(!isset($_SESSION['username'])){
	header('Location:signin.php');
}

if(isset($_POST['buy']))
{
	$userid=$_SESSION['userid'];
	$pts=$_POST['points'];
	$charges=$_POST['amount'];
	
	$insert= "insert into propoints set
			  user_id='$userid',
			  points='$pts',
			  amount='$charges',
			  status='pending'";
	mysql_query($insert) or die(mysql_error());	
	
	header("location:paypal.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Procity - The Trading Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="css/external-pages.css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
      <script>
	  function isNumberKey(evt)
      {
		  //alert('dd');
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        
      }
  function pro() 
  {
		var pts=document.getElementById('points').value;
		
		var val1 = parseFloat(pts, 10);
		var new1 =val1.toFixed(2);
		//alert(new1);
		if(pts<=0)
		{
			document.buypro.buy.disabled=true;
			//alert('Please Enter more than zero');	
			
			return false;
		} 
		var cost=0.2;
		var propts=pts * cost;
		var new1 =propts.toFixed(2);
		//alert(new1);
		document.buypro.buy.disabled=false;
		
		document.getElementById('amount').value=new1;
  }
  </script>
      <script src="ji/jquery-1.7.2.js"></script> 

  <script src="ji/jquery.ui.core.js"></script> 

  <script src="ji/jquery.ui.widget.js"></script> 

     <script type="text/javascript" src="ajax1.js"></script> 

  <script type="text/javascript" src="drop_function_3.js"></script>

   
</head>
<body>
<p><a href="#" class="scrolltop"> <span>up</span> </a></p>
<!-- begins navbar -->
<?php include"topNav.php"; ?>
<!-- starts pricing -->
<div id="pricing" class="pricing_page">
<div class="container">
<section id="" style=" margin:0px auto; width:700px;margin-top: 31px;">
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
<script>
	function getcond()
{


	$(document).ready(function () {
$(".condition").change(function () {
	
    var val = $('.condition:checked').val();
    if(val==1)
	{
		var emax=document.getElementById('emax').value;
		var newval='Donate Earn '+emax+' PP';
		document.getElementById('max1').value=newval;		
	}
	else if(val=='2')
	{
		var emed=document.getElementById('emed').value;
		var newval='Donate Earn '+emed+' PP';
		document.getElementById('max1').value=newval;	
	}
	else
	{
		var emin=document.getElementById('emin').value;
		var newval='Donate Earn '+emin+' PP';
		document.getElementById('max1').value=newval;	
	}
});
});	
}
	</script>
</section>
<!-- header --><hr class="left visible-desktop" />
<h2 class="section_header" style="font-size:30px;"><span style="width:50%;"> Buy ProPoints!</span></h2>
<hr class="right visible-desktop" /><!-- pricing charts 1 -->
<form method="POST" action="paypal.php" name="buypro" id="buypro" enctype="multipart/form-data">
<div class="row" style="margin-left:0px;">

<div class="donationform">
<!--<div class="headerdonate">
<div class="textheadForm">
Donate to Procity</div>
</div>-->
<table style="margin: 20PX 0px -20px 40px; width:100%;">
<tr>
<td colspan="2">Please enter how many points you would like to buy <br>
15 points for $3</td>
</tr>


<tr>
<td class="tbltext">Enter points: </td>
<td><input type="text" name="points" id="points" onkeypress="return isNumberKey(event)" class="validate[required]" onKeyUp="pro();"></td>
</tr>


<tr>
<td class="tbltext">Amount ($) </td>
<td><input type="text" name="amount" id="amount"  readonly="true" class="validate[required]"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" disabled="true" name="buy" class="btn" value="Submit"></td>
</tr>
</table>
</div>
</form>

</div>

</div>
</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
</div>
<section id="" style="margin-top:18px; margin-left:358px;">

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
<?php include "footer.php";?>
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
			jQuery("#buypro").validationEngine();
			
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
   
   

 
    