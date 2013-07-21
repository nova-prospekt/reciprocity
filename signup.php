<?php
error_reporting(~E_NOTICE); 
$error1='';
$error2='';
if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error1'))
{
	$error1='Username taken!';
}

if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error2'))
{
	$error2='Email address taken!';
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
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include"topNav.php"; ?>
<div id="box_sign">
<div class="container">
<div class="span12 box_wrapper">
<div class="span12 box">
<div>
<div class="head">
<h4>Create your Procity account</h4>
</div>
<div style="color:#F00; text-align:center;"><?php if($error1!='') 
{ echo $error1;} else if($error2!='') 
{ echo $error2;} ?></div>
<div class="form"><form method="post" action="scripts/signup.php"><input id="username" placeholder="Username" name="Username" onkeyup="validateFields()" onfocus="validateFields()" type="text" /> <input id="emailadd" onkeyup="validateFields()" onfocus="validateFields();" placeholder="Email"name="Email" type="text" /> <input placeholder="Password"  name="Password" id="newpass" onkeyup="validateFields()" onfocus="validateFields()" type="password" /> <input placeholder="Confirm Password" name="Confirm Password" id="confpass" onkeyup="validateFields();" onfocus="validateFields();" type="password" />
<div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
<div class="registrationFormAlert" id="terpmaillabel"><?php $msg; ?></div>
<input class="btn" disabled="disabled" onclick="registerUser()" value="Sign up" id="submitbut" type="submit" style="width:28%;" /></form></div>
</div>
</div>
<p class="already"><a href="signin.php">Already have an account Sign in </a></p>
</div>
</div>
<section id="" style="margin-top:40px; margin-left:350px;">

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
<script type="text/javascript">// <![CDATA[
function registerUser() {



      var user = $('#username').val();
      var email = $('#emailadd').val();
      var pass = $('#newpass').val();

      $.ajax({
         type: "GET",
         url:  "scripts/signup.php", 
         data: {Username: user, Email: email, Password: pass},
         dataType: "json",
         success: function(data) {

                if(data.result === "user") {
                    $("#divCheckPasswordMatch").html("Username taken");
                } else if(data.result === "email") {
                    $("#divCheckPasswordMatch").html("Email taken");
                } else if(data.result == "works") {
                  window.location.replace("http://www.myprocity.com/profile.html?Username="+user+"&PP=0");

                }

         }

      });

        
}
// ]]></script>
<script type="text/javascript">// <![CDATA[
function validateFields() {

       // var emailadd = $("#emailadd").val();
        var username = $("#username").val();
        var password = $("#newpass").val();
        var confirmPassword = $("#confpass").val();
		

        if(confirmPassword.length === 0 || password.length === 0) {
            
                //$("#divCheckPasswordMatch").html("Passwords empty!");
                document.getElementById("submitbut").disabled = true
                return;

        } else if(confirmPassword.length > 0 && password.length > 0) {


                if (password === confirmPassword) {
					

                     $("#divCheckPasswordMatch").html("Passwords match!");
					 document.getElementById("submitbut").disabled = false

                /*     if(emailadd.length > 0 && username.length > 0) {

                          if((emailadd.indexOf("@umd.edu") >= 0) ||(emailadd.indexOf("@terpmail.umd.edu") >= 0)){

                               $("#terpmaillabel").html("You're an awesome Terp!");
                               document.getElementById("submitbut").disabled = false;
 
                          } else {
     
                               $("#terpmaillabel").html("UMD account only please!");
                               document.getElementById("submitbut").disabled = true

                          }


                     } else {

 
                        $("#terpmaillabel").html("umd Account only please!");
                        document.getElementById("submitbut").disabled = true


                     }
*/
                }
				else
				{
					$("#divCheckPasswordMatch").html("Passwords not match!");
					 document.getElementById("submitbut").disabled = true
                return;
				}

        }

 }
// ]]></script>
<?php include "footer.php";?>
</body>
</html>
