<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ProCity - The Trading Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/external-pages.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
<p><a href="#" class="scrolltop"> <span>up</span> </a></p>
<!-- begins navbar -->
<?php include"topNav.php"; ?>
<!-- starts pricing -->
<div id="pricing" class="pricing_page">
<div class="container"><!-- header --><hr class="left visible-desktop" />
<h2 class="section_header"><span> Procity services<small> click here to donate and more!</small> </span></h2>
<hr class="right visible-desktop" /><!-- pricing charts 1 -->
<div class="row">
<div class="span4">
<div class="price_wrapper lite regular">
<div class="header">
<div class="price"><span>Exchange</span></div>
</div>
<div class="section">
<h3>Transactions between members happen here. Swap your points for your items</h3>
<ul class="perks">
<li><i class="i_loading"></i> 3 items a week</li>
</ul>
<a href="http://myprocity.com/signup.html" class="btn">Exchange!</a></div>
</div>
</div>
<div class="span4">
<div class="price_wrapper pro">
<div class="header">
<div class="price"><span>Donate</span></div>
</div>
<div class="section">
<h3>Upload and fill out your item description and recieve immediate ProPoints</h3>
<ul class="perks">
<li><i class="i_shuffle"></i>Use your ProPoints immediately to get things you want</li>
<li><i class="i_shuffle"></i> All unclaimed items go to charity</li>
<li><i class="i_shuffle"></i>Also receive ProPoints for doing service! Find out how</li>
</ul>
<a href="http://myprocity.com/signup.html" class="btn">Donate!</a></div>
</div>
</div>
<div class="span4">
<div class="price_wrapper standard regular">
<div class="header">
<div class="price">
<h3>Terms and Conditions</h3>
<h3></h3>
</div>
</div>
<div class="section">
<h3>View our Terms and Conditions before donating or claiming</h3>
<ul class="perks">
<li><i class="i_loading"></i> Any fraud will result in action</li>
<li></li>
</ul>
<a href="http://myprocity.com/signup.html" class="btn">View!</a></div>
</div>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
</div>
</body>
</html>