

<?php include "scripts/config.php";

$email=$_GET['email'];

$update=mysql_query("update userinfo set status='1' where Email='$email'");
header("location:index.php");

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
      
          <div>
          Thanks Your Email confirm
          <br>
          Please Log us <a href="signin.php">Sign In </a>
          </div>
            
          
        </div>
      </div>
    
    </div>
  </div>
  
</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/theme.js" type="text/javascript"></script>
</body>
</html>