<?php session_start();
include "scripts/config.php";
$user_name=$_SESSION['username'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Procity - The Trading Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
<p><a href="#" class="scrolltop"> <span>up</span> </a></p>
<?php include"topNav.php"; ?>
<div id="blog_wrapper">
<div class="container">
<section id="" style="">
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
<div class="row">
<div class="span8">
<h1 class="header">Feed</h1>
<hr />
<p style="color:#F00;">
<?php if(isset($_GET['msg'])){	echo $_GET['msg'];}?></p>
<?php $sql_donate=mysql_query("select * from donate_item  order by donate_worth desc") or die(mysql_error());
	while($fetch_donate=mysql_fetch_array($sql_donate))
	{
		$item_id=$fetch_donate['item_id'];
		$donar_user=$fetch_donate['username_donar'];
		$sql_item=mysql_query("select * from item where item_id='$item_id'") or die(mysql_error());
		$fetch_item=mysql_fetch_array($sql_item);
		
?>
<div class="post">
<div class="row">
<div class="span3"><a href="#"> <img class="main_pic" alt="main pic" src="admin/img/<?php echo $fetch_item['image'];?>" /></a></div>
<div class="span4 info">
<h3><?php echo $fetch_item['item_name'];?></h3>
<p><?php echo $fetch_item['item_description'];?></p>
<div class="post_info">
<div class="author"><?php echo $fetch_donate['username_donar'];?></div>
<div class="date"><?php echo $fetch_donate['date_donated'];?></div>
</div>
</div>
</div>
<a href="claim.php?item_id=<?php echo $fetch_donate['id'];?>" class="btn">claim - <?php echo $fetch_donate['donate_worth'];?></a> </div>

<?php  } ?>

<div class="pagination">
<ul>
<li><a href="#">Prev</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">Next</a></li>
</ul>
</div>
</div>
<div class="span3 sidebar offset1"><input class="input-large search-query" placeholder="Search" type="text" />
<h4 class="sidebar_header">Menu</h4>
<ul class="sidebar_menu">
<?php $sql_cat=mysql_query("select * from category") or die(mysql_error());
		while($fetch_cat=mysql_fetch_array($sql_cat))
		{
			
?>
<li><a href="city.php?cat_id=<?php echo $fetch_cat['cat_id'];?>"><?php echo $fetch_cat['cat_name'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
</body>
</html>