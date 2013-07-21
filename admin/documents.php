<?php
session_start();

	if(!isset($_SESSION['user_name'])){
		header('location: login.php');
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('left-nav.php');?> <!--left-menu -->

<div class="page">
    
    <div class="page-nav">
    	<!--<ul>
        	<li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
        </ul>-->
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> To Documents </h1>
        
	</div>
    <!--box1 -->
    <!--box 2 -->
<p>
        
   
    <br />
    <br />
    <br />
    <!-- sucess -->
    <!-- error -->
    <!-- warning -->
    <!-- information -->
<div class="footer">
    &copy; Copyright 2011 Admin panel | Powered by: <a href="#" class="green"> JJTECHNOLOGIES</a>
  </div><!--footer -->
</div><!--page -->

<div class="clear"></div> <!--clear div -->

</body>
</html>
