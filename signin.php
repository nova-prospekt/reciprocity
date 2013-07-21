<?php 
error_reporting('0');
if(isset($_GET['msg'])=='error')
{
$error="Please type in a valid Procity username and password";	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Procity - The Trading Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include"topNav.php"; ?>
<div id="box_login">
<div class="container">
<div class="span12 box_wrapper">
<div class="span12 box">
<div>
<div class="head">
<h4>Log in to your Procity account</h4>
</div>
<div class="form">
<div style="color:#F00;">
<?php echo $error;?></div>
<form method="post" action="scripts/signin.php"><input id="username" placeholder="Username" name="Username" onkeyup="validateFields();" onfocus="validateFields();" type="text" /> <input id="password" placeholder="Password" name="Password"onkeyup="validateFields();" onfocus="validateFields();" type="password" />
<div class="registrationFormAlert" id="incorrectEntry"></div>
<div class="remember">
<div class="left"><input id="remember_me" type="checkbox" /> <label for="remember_me">Remember me</label></div>
<div class="right"><a href="reset.php">Forgot password?</a></div>
</div>
<input class="btn" id="signinbut" onclick="loginUser()" value="Sign in" disabled="disabled" type="submit" style="width:28%;" /></form></div>
</div>
</div>
<p class="already">Don't have an account? <a href="signup.php"> Sign up</a></p>
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
</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
function loginUser() {

      var user = $('#username').val();
      var pass = $('#password').val();
    
      $.ajax({
         type: "GET",
         url:  "scripts/signin.php", 
         data: {Username: user, Password: pass},
         dataType: "json",
         success: function(data) {
               alert(data.pp);
               if(data.result === "present") {
                  window.location.replace("http://www.myprocity.com/profile.html?Username="+data.user+"&PP="+data.pp);
               } else if(data.result === "notfound") {
                     $("#incorrectEntry").html("Check username or password");
               } 

         }

      });
        
}
// ]]></script>
<script type="text/javascript">// <![CDATA[
function validateFields() {

        var username = $("#username").val();
        var password = $("#password").val();

        if(password.length > 0 && username.length > 0) {
            
                document.getElementById("signinbut").disabled = false;
                return;

        } 

 }
// ]]></script>
<?php include "footer.php";?>
</body>
</html>