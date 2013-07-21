<?php 

session_start();
ob_start();
include "scripts/config.php";
if(!isset($_SESSION['username'])){
	header('Location:signin.php');
}




if(isset($_POST['submit'])){
	
	$get_user=mysql_query("select * from userinfo where Id='". $_SESSION['userid']."'");
		$fetch_user=mysql_fetch_array($get_user);
		$useremail=$fetch_user['Email'];
		
	
	$cat_id=$_POST['category'];
	$sub_category=$_POST['sub_category'];
	$item=$_POST['item'];
    $condition=$_POST['condition'];
	$descp=$_POST['descp'];
	$curdate=date('M  d, Y');
	$curtime=date('h:m');
		
	
	$pic=$_FILES['image']['name'];
  	$uploadDir = 'images/'; 
                $filename = $_FILES['image']['name'];
                $uploadfile = $uploadDir.$filename;             
                if(move_uploaded_file($_FILES['image']['tmp_name'],   $uploadfile)) 
                {
                //echo '<br/> Image uploaded';
				}
				else
				{
				//echo '<br/> Image Not  uploaded';
				}
		
		$userid=$_SESSION['userid'];
		
		$chkdonates=mysql_query("select * from maxdonate where userid='$userid'") or die(mysql_error());
		$fetchdonates=mysql_fetch_array($chkdonates);
		$rowdonate=mysql_num_rows($chkdonates);
		$countdonate=$fetchdonates['countdonate'];
		
		
		if($countdonate=='5')
		{
			header("location:donate.php?msg=error");
		
		}
		else if($countdonate<5)
		{
			$max=$countdonate+1;
			$insert2= "INSERT INTO donate_item (`donated_id` ,`category` ,`sub_category` ,`item_id` ,`item_description` ,`condition` ,`donated_by` ,
`claimed_by` ,`claim_status` ,`donated_date` ,`donated_time` ,`donate_type` ,`image`,`max_donated`)

VALUES ( '', '$cat_id', '$sub_category', '$item', '$descp', '$condition', '$userid', '', '0', '$curdate', '$curtime', 'generic', '$pic','$max')";
		

				mysql_query($insert2) or die(mysql_error());
		$lastid=mysql_insert_id();
		$ids='0000000';
		$record=$ids.$lastid;
		 $record;
		$update="update donate_item set donated_id='$record' where id='$lastid'";
		mysql_query($update);
		
			if($rowdonate=='0')
		{
			$insertdonate="insert into maxdonate set userid='$userid', countdonate='$max', donatedate='$curdate'";
			mysql_query($insertdonate) or die(mysql_error());	
		}
		else
		{
				$updatedonate=mysql_query("update maxdonate set countdonate='$max' where userid='$userid'") or die(mysql_error());
		}
		
		header("location:profile.php");
		
		}		
	
	
	
	
	
}

$error = '';

if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error')){

$error = 'Max Allow 5 per day';
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
    
    <script language="javascript" type="text/javascript">
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://roshanbh.com.np
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {	
		

	document.getElementById('condition_1').checked = false;
	document.getElementById('condition_2').checked = false;
	document.getElementById('condition_3').checked = false;
	document.getElementById('max1').value='Donate';
	
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function run(sel) {		
	
	
		document.getElementById('condition_1').checked = false;
	document.getElementById('condition_2').checked = false;
	document.getElementById('condition_3').checked = false;
	
	document.getElementById('max1').value='Donate';
	
		var strURL="findcondition.php?country="+sel;
	
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('condition_1').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {	
		document.getElementById('condition_1').checked = false;
	document.getElementById('condition_2').checked = false;
	document.getElementById('condition_3').checked = false;
	
	document.getElementById('max1').value='Donate';
	
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
     
  <script src="ji/jquery.ui.core.js"></script> 

  <script src="ji/jquery.ui.widget.js"></script> 

     <script type="text/javascript" src="ajax1.js"></script> 

  <script type="text/javascript" src="drop_function_3.js"></script>
  <script>
function hideArea() {
	
	var show = document.getElementById('show');
	
	var thelist = document.getElementsByName('unique');
	
	var thelistout = document.getElementsByName('outstanding_float');
	var nn=(thelist);
	for(var i = 0; i < thelist.length; i++) 
	{
          if(thelist[i].checked)
		   {
			  
			   
               if(thelist[i].value == "unique")
			    {
				  show.style.display = "";
                }
               else
			    {
                  show.style.display = "none";

               }
               break;
          }
     }
	 
	 
}




</script>
   
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
<h2 class="section_header" style="font-size:30px;"><span style="width:50%;"> Donate to Procity!</span></h2>
<hr class="right visible-desktop" /><!-- pricing charts 1 -->
<form method="POST" action="donate.php" name="donatefrm" id="donatesdd" enctype="multipart/form-data">
<div class="row" style="margin-left:0px;">
<div style="color:#F00;"><?php if($error!='') {?> <script>alert("Max Allow 5 per day");</script><?php } ?></div>
<div class="donationform">
<!--<div class="headerdonate">
<div class="textheadForm">
Donate to Procity</div>
</div>-->
<table style="margin: 20PX 0px -20px 40px; width:100%;">
<tr>
<td colspan="2"><!--<input type="radio" onClick="hideArea()" id="radio" name="unique" value="unique">--> &nbsp;<a href="unique.php" class="btn">Unique Donation</a> &nbsp;&nbsp;&nbsp; <!--<input id="radio" onClick="hideArea()" type="radio" checked="true" name="unique" value="generic">-->&nbsp;<a href="donate.php" class="btn">Generic Donation</a></td>
</tr>

<tr>
<td class="tbltext">Category </td>
<td><select name="category" id="category" class="validate[required]" onChange="getState(this.value)">
<option value="">Select category</option>
<?php $sql_cat=mysql_query("select * from category") or die(mysql_error());
	while($fetch_cat=mysql_fetch_array($sql_cat))
	{
?>
<option  value="<?php echo $fetch_cat['cat_id'];?>"><?php echo $fetch_cat['cat_name'];?></option>
<?php }?>
</select></td>
</tr>
<tr  class="tbltext">
<td>Sub Category</td>
<td><div id="statediv"><select name="sub_category" id="sub_category">
</select></div></td>
</tr>
<tr>
<td class="tbltext">Item Name</td>
<td><div id="citydiv"><select name="item" id="item">
</select></div></td>
</tr>
<!--<tr>
<td class="tbltext">value</td>
<td><div id="condition"><select name="item" id="item">
</select></div></td>
</tr>-->

<tr>
<td class="tbltext">Condition</td>

<td>
<?php $sql_cond=mysql_query("select * from conditions") or die(mysql_error());
$s_no=0;
		while($fetch_cond=mysql_fetch_array($sql_cond))
		
{
	$s_no++;
?>
<input class="condition validate[required]" type="radio" id="condition_<?php  echo $s_no;?>" onChange="getcond();" name="condition" value="<?php echo $fetch_cond['id'];?>"> &nbsp;<?php echo $fetch_cond['condition'];?><br />
<?php }?>
</td>
</tr>
<!--<tr>
<td>
Value
</td>
<td><input type="text" name="max" id="max1" value=""></td>
</tr>-->
<tr>
<td class="tbltext">Brief Description</td>
<td><input type="text" class="validate[required]" id="descp" name="descp"></td>
</tr>
<tr>
<td class="tbltext">Upload Photo</td>
<td><input type="file" name="image" class="validate[required]"></td>
</tr>
<tr>
<td class="tbltext"><a href = "faq.php" target="_new" style="color:rgb(83, 88, 97);">Accept The Terms And Condition</a></td>
<td><input type="checkbox" name="accept" class="validate[required]"></td>
</tr>
<tr>
<td class="tbltext">&nbsp;</td>
<td><input type="submit" name="submit" id="max1" value="Donate" class="btn"></td>
</tr>
</table>
</div>
</form>

</div>
<div id="light" class="white_content"> 
<a href = "javascript:void(0)" onclick = "closelightbox()" style="position: absolute;
z-index: 1001;
margin-left: 308px;
margin-top: 4px;"><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>      
<div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
 <div class="price_wrapper standard regular">
<div class="header">
<div class="price">
<h3>Terms and Conditions</h3>
<h3>
</h3>

</div>
</div>
<p>Submission of your Request is merely an offer to The Sample Network to use commercially reasonable efforts to provide the services and deliver the deliverables described in the Request for the price proposed therein. The Request is not binding on The Sample Network unless or until The Sample Network delivers written confirmation of its acceptance of the Request to the Client. </p>
<!--<div class="section">
<h3>View our Terms and Conditions before donating or claiming</h3>
<ul class="perks">
<li><i class="i_loading"></i> Any fraud will result in action</li>
<li></li>
</ul>
<input type="checkbox" name="policy" onClick="apply()"> Please accept Terms & Policy-->

<a href="#" onClick="accept()" class="btn">Accept</a>
<!--<input type="button" name="submit" value="Accept" class="btn" onClick="accept();">-->
</div></div>
</div>
</div><a href = "javascript:void(0)" onclick = "closelightbox()" style="float:right"><div id="fade" class="black_overlay"></div></a>

</div>
</div>

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
<?php //include "footer.php";?>
</body>
</html>



	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#donatesdd").validationEngine();
			
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
   
<script type="text/javascript">

function apply()
{
  document.donatefrm.submit.disabled=true;
  if(document.donatefrm.policy.checked==true)
  {
    document.donatefrm.submit.disabled=false;
  }
  if(document.donatefrm.policy.checked==false)
  {
    document.donatefrm.submit.enabled=true;
  }
}
function apply2()
{
	document.donatefrm.submit.disabled=true;
}

function accept()
{
	document.getElementById('light').style.display='none';
        document.getElementById('fade').style.display='none'	
	document.donatefrm.submit.disabled=false;
}

</script> 
 
    