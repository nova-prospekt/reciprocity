<?php session_start();

include "scripts/config.php"; 
if(!isset($_SESSION['username'])){
	header('Location:signin.php');
}

error_reporting(0);
$cat_id=$_GET['cat_id'];

$user_name=$_SESSION['username'];


$error1 = '';
$error2='';
$error3='';


if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error1')){

$error1 = 'Max Claimed One Item';
}

if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error2')){

$error2 = 'You Our item not claim';
}

if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error3')){

$error3 = 'You ProPoint is less first purchase points';
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
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
</head>
<body>
<p><a href="#" class="scrolltop"> <span>up</span> </a></p>
<?php include"topNav.php"; ?>
<div id="blog_wrapper">
<div style="color:#F00;"><?php if($error1!='') {?> <script>alert("Max Claimed One Item");</script><?php } if($error2!='')  {?> <script>alert("You Our item not claim");</script><?php  } if($error3!=''){?><script>alert("You ProPoint is less first purchase points");</script><?php }
		   ?></div>
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
<h1 class="header">The City</h1>
<hr />
<?php
		
	
	$tableName="donate_item";		
	 	
	$limit = 5; 
	
	if(isset($_GET['cat_id']))
	{
		$catid=$_GET['cat_id'];
		$targetpage = "city.php?cat_id=".$_GET['cat_id'];
		if($catid=='')
		{
			$query = "SELECT COUNT(*) as num FROM $tableName where claim_status='0'";	
		}
		else
		{
			$query = "SELECT COUNT(*) as num FROM $tableName where category='$catid' and  claim_status='0'";	
		}
	
	}
	else
	{
		$targetpage = "city.php?cat_id=".$_GET['cat_id'];
		$query = "SELECT COUNT(*) as num FROM $tableName";
	}
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	
	$stages = 3;
	$page = $_GET['page'];
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	
			if(isset($_GET['cat_id']))
	{
		$catid=$_GET['cat_id'];
		if($catid=='')
		{
			$query1 = "SELECT * FROM $tableName where claim_status='0'";
		}
		else
		{
			$query1 = "SELECT * FROM $tableName where category='$cat_id' and  claim_status='0'";
		}
	}
	else
	{
		
		$query1 = "SELECT * FROM $tableName where claim_status='0'";
	}
 $query1 =$query1. " LIMIT $start, $limit";
	 
	 
	$result = mysql_query($query1);
	$rows=mysql_num_rows($result);
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class='pagination'> <ul>";
		// Previous
		if ($page > 1){
			$paginate.= "<li><a href='$targetpage&page=$prev'>previous</a></li>";
		}else{
			$paginate.= "<li><span class='disabled'>previous</span></li>";	}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<li><span class='current'>$counter</span></li>";
				}else{
					$paginate.= "<li><a href='$targetpage&page=$counter'>$counter</a></li>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<li><span class='current'>$counter</span></li>";
					}else{
						$paginate.= "<li><a href='$targetpage&page=$counter'>$counter</a></li>";}					
				}
				$paginate.= "<li>...</li>";
				$paginate.= "<li><a href='$targetpage&page=$LastPagem1'>$LastPagem1</a></li>";
				$paginate.= "<li><a href='$targetpage&page=$lastpage'>$lastpage</a></li>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<li><a href='$targetpage&page=1'>1</a></li>";
				$paginate.= "<li><a href='$targetpage&page=2'>2</a></li>";
				$paginate.= "<li>...</li>";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<li><span class='current'>$counter</span></li>";
					}else{
						$paginate.= "<li><a href='$targetpage&page=$counter'>$counter</a></li>";}					
				}
				$paginate.= "<li>...</li>";
				$paginate.= "<li><a href='$targetpage&page=$LastPagem1'>$LastPagem1</a></li>";
				$paginate.= "<li><a href='$targetpage&page=$lastpage'>$lastpage</a></li>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<li><a href='$targetpage&page=1'>1</a></li>";
				$paginate.= "<li><a href='$targetpage&page=2'>2</a></li>";
				$paginate.= "<li>...</li>";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<li><span class='current'>$counter</span></li>";
					}else{
						$paginate.= "<li><a href='$targetpage&page=$counter'>$counter</a></li>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<li><a href='$targetpage&page=$next'>next</a></li>";
		}else{
			$paginate.= "<li><span class='disabled'>next</span></li>";
			}
			
		$paginate.= "</ul></div>";		
	
	
}
    $total_pages.' Results';
 // pagination

?>
<?php //$sql_donate=mysql_query("select * from donate_item where cat_id='$cat_id'  order by donate_worth desc") or die(mysql_error());
	if($rows>0)
	{
		
	while($fetch_donate=mysql_fetch_array($result))
	{
		$item_id=$fetch_donate['item_id'];
		$donated_by=$fetch_donate['donated_by'];
		$sql_item=mysql_query("select * from item where item_id='$item_id'") or die(mysql_error());
		$fetch_item=mysql_fetch_array($sql_item);
		$ebase=$fetch_item['ebase'];
		$sub_category=$fetch_item['sub_category'];
		$donate_type=$fetch_donate['donate_type'];
		
		$sql_user=mysql_query("select * from userinfo where Id='$donated_by'") or die(mysql_error());
		$fetch_user=mysql_fetch_array($sql_user);
		
		$condition=$fetch_donate['condition'];
		$sql_cond=mysql_query("select * from conditions where id ='$condition'");
		$fetch_cond=mysql_fetch_array($sql_cond);
		
		$condition_detail=$fetch_cond['condition'];
		
?>
<div class="post">
<div class="row">
<div class="span3"><a href="#"> <img class="main_pic" alt="main pic" src="images/<?php echo $fetch_donate['image'];?>" style="width:226px; height:237px;" /></a></div>
<div class="span4 info">
<h3><?php if($donate_type=='generic'){ echo $fetch_item['item_name'].' - '.$sub_category;} else { echo $fetch_donate['item_id'].' - '.$sub_category;}?></h3>
<p><?php echo $condition_detail;?></p>
<p><?php echo $fetch_donate['item_description'];?></p>

<div class="post_info">
<p class="author"><?php echo $fetch_user['Username'];?></p>
<p class="date"><?php echo $fetch_donate['donated_date'];?></p>
<p><?php echo 'USA';?></p>
</div>
</div>
</div>
<a href="claim.php?item_id=<?php echo $fetch_donate['id'];?>" class="btn">claim - <?php echo $ebase;?> PP</a> </div>

<?php  }
	}
	else
	{?>
		<p style="color:#F00;">No Records</p>		
<?php	}?>
<?php 
 echo $paginate;
?>

</div>
<div class="span3 sidebar offset1">
<form name="search" method="post" action="search.php">
<input class="input-large search-query" placeholder="Search" name="search" type="text" />
<input type="submit" class="btn" name="searchbtn" value="Search">
</form>
<h4 class="sidebar_header">Categories</h4>
<ul class="sidebar_menu">
<li><a href="city.php">All</a></li>
<?php $sql_cat=mysql_query("select * from category order by cat_name asc") or die(mysql_error());
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
<section id="" style="margin-top:-81px; margin-left:140px;">

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