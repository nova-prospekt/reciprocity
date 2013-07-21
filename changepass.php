<?php
error_reporting(~E_NOTICE); 
session_start();
$msg=$_REQUEST['msg'];
$status=$_REQUEST['status'];
if(!isset($_SESSION['username']))
{
	header('Location:signin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ProCity - The Trading Network</title>
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
<h4>Change your Password</h4>
</div>
<div class="form"><form method="post" action="scripts/process.php"><input id="oldpass" placeholder="Old Password" name="oldpass" onkeyup="validateFields()" onfocus="validateFields()" type="password" />  <input placeholder="New Password"  name="Password" id="newpass" onkeyup="validateFields()" onfocus="validateFields()" type="password" /> <input placeholder="Confirm New Password" name="ConfirmPassword" id="confpass" onkeyup="validateFields();" onfocus="validateFields();" type="password" />
<input type="hidden" name="status" value="<?php echo $status; ?>">
<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
<div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
<div class="registrationFormAlert" id="terpmaillabel"><?php $msg; ?></div>
<input class="btn" disabled="disabled" onclick="registerUser()" value="Change Password" id="submitbut" type="submit" /></form></div>
</div>
</div>
<p class="already">Already have an account? <a href="signin.php">Sign in</a></p>
</div>
</div>
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

        var emailadd = $("#oldpass").val();
        //var username = $("#username").val();
        var password = $("#newpass").val();
        var confirmPassword = $("#confpass").val();

        if(confirmPassword.length === 0 || password.length === 0) {
            
                $("#divCheckPasswordMatch").html("Passwords empty!");
                document.getElementById("submitbut").disabled = true
                return;

        } else if(confirmPassword.length > 0 && password.length > 0) {


                if (password === confirmPassword) {

                     $("#divCheckPasswordMatch").html("Passwords match!");

                   
                               document.getElementById("submitbut").disabled = false;
 /*
                        
*/

                     } else {

 
                        //$("#terpmaillabel").html("TERPMail Account only please!");
                        document.getElementById("submitbut").disabled = true


                     }

                }

        }

 
// ]]></script>
</body>
</html>