<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Procity - The Trading Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/external-pages.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
     <script type="text/javascript" language="javascript">
    function createlightbox()
    {
        document.getElementById('light').style.display='block';
        document.getElementById('fade').style.display='block'
    }
    function closelightbox()
    {
        document.getElementById('light').style.display='none';
        document.getElementById('fade').style.display='none'
    }
    </script>
</head>
<body>
<p><a href="#" class="scrolltop"> <span>up</span> </a></p>
<!-- begins navbar -->
<?php include"topNav.php"; ?>
<!-- ends navbar -->
<div id="hero">
<div class="container"><!-- starts carousel -->
<div class="row animated fadeInDown">
<div class="span12">
<div id="myCarousel" class="carousel slide"><!-- carousel items -->
<div class="carousel-inner"><!-- slide -->
<div class="active item slide1">
<div class="row">
<div class="span6"><img src="img/slide1.png" alt="slide1" /></div>
<div class="span4">
<h1>Donate items for points</h1>
<p>Use those points to receive donated items</p>
<a href = "donate.php"  class="btn btn-success btn-large"> Donate Now! </a></div>
</div>
</div>
<!-- slide -->
<div class="item slide2">
<div class="row">
<div class="span4 animated fadeInUpBig">
<h1>Exclusive to college campuses</h1>
<p>All untraded items go to charity</p>
<a href="blog.html" class="btn btn-success btn-large"> View feed! </a></div>
<div class="span6 animated fadeInDownBig"><img src="img/slide2.png" alt="slide2" /></div>
</div>
</div>
<!-- slide -->
<div class="item slide3 animated fadeInUpBig">
<a href="signin.php" class="btn btn-success btn-large" > Get Started</a>
<img src="img/slide3.png" alt="slide3" />

</div>
</div>

<!-- Carousel nav --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a></div>
</div>
</div>
</div>
</div>
<!-- coming soon -->
<div id="comingsoon" class="comingsoon_page">
<div class="container">
<div class="countdown">
<div class="row">
<div class="span6 offset1 left">
<h1>We are launching very soon...</h1>
<p>Click below to subscribe! Nothing else works yet, but you're free to explore!</p>
</div>
<div class="span5 right">
<div class="figure">
<div class="square"><span>29<br /></span></div>
<label>DAYS</label></div>
<div class="figure">
<div class="square"><span>23</span></div>
<label>HOURS</label></div>
<div class="figure">
<div class="square"><span>59</span></div>
<label>MINUTES</label></div>
<div class="figure">
<div class="square"><span>01</span></div>
<label>SECONDS</label></div>
</div>
</div>
</div>
<!-- features -->
<div id="features" class="features_page">
<div class="container">
<div class="features1"><!-- header --><hr class="left visible-desktop" />
<h2 class="section_header"><span>Features</span></h2>
<hr class="right visible-desktop" />
<div class="row">
<div class="span12">
<h3 class="intro">Procity is a trading network where citizens earn points for donating goods! Better than a tax write-off? We think so!</h3>
</div>
</div>
<!-- feature list -->
<div class="row">
<div class="span4 feature"><img src="img/feature1.jpg" alt="feature1" class="thumb" />
<h3>Founded on reciprocity</h3>
<p class="description">Reward those who give. The only way to obtain goods from Procity is to earn ProPoints from donating items. All items will either be claimed by a fellow Procity citizen or be further donated to the Vietnam Veterans of America!</p>
</div>
<div class="span4 feature"><img src="img/UMD Full Logo.jpg" alt="feature2" class="thumb" />
<h3>Opening to UMD campus</h3>
<p class="description">Upload items you no longer need, donate more to earn ProPoints and use them to get items you like in the CITY. Those who have more ProPoints will get prioirity over items. So start donating today and don't miss out!!</p>
</div>
<div class="span4 feature"><img src="img/feature3.jpg" alt="feature3" class="thumb" />
<h3><i class="i_movil"></i> Future prospects</h3>
<p class="description">We have plans to expand trade to other univeristies inluding UMBC, Johns Hopkins University, University of Virginia and others!</p>
</div>
<div class="subscribe">
<div class="row">
<div class="span12"><form ajax="true" href="index.php"><input id="emailadd" onkeyup="checkEmailTerps();" onfocus="checkEmailTerps();" class="span4" placeholder="Email address" type="text" /> <button type="submit" id="submitbut" disabled="disabled" onclick="addUserToEmail();" class="btn">Subscribe</button>
<div class="registrationFormAlert" id="terpmaillabel"></div>
</form>
<div class="follow"><strong>Follow us</strong> <a href="https://twitter.com/procityTN"> <i class="social tw"></i> </a> <a href="https://www.facebook.com/ProcityTN?fref=ts"> <i class="social fb"></i> </a> <a href="https://pinterest.com/procity/" target="_new"> <i class="social pin"></i> </a> <!--<a href="#"> <i class="social in"></i> </a>--> <!--<a href="#"> <i class="social gp"></i> </a>--></div>
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
</div>
</div>
</div>
</div>
</div>
</div>
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
<h3></h3>
</div>
</div>
<div class="section">
<h3>View our Terms and Conditions before donating or claiming</h3>
<ul class="perks">
<li><i class="i_loading"></i> Any fraud will result in action</li>
<li></li>
</ul>
<input type="checkbox" name="policy"> Please accept Terms & Policy
<a href="#" class="btn">Accept</a></div></div>
</div>
</div><a href = "javascript:void(0)" onclick = "closelightbox()" style="float:right"><div id="fade" class="black_overlay"></div></a>
<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
function checkEmailTerps() {
        var emailadd = $("#emailadd").val();

        if(emailadd.length > 0) {

             if(emailadd.indexOf("@terpmail.umd.edu") >= 0) {

                $("#terpmaillabel").html("You're an awesome Terp!");
                 document.getElementById("submitbut").disabled = false

             } else {
                $("#terpmaillabel").html("TERPMail Account only please!");
                 document.getElementById("submitbut").disabled = true

             }
           
        } else {

                $("#terpmaillabel").html("TERPMail Account only please!");
                document.getElementById("submitbut").disabled = true


        }



 }
// ]]></script>
<script type="text/javascript">// <![CDATA[
function addUserToEmail()
{
 // we want to store the values from the select box, then send via ajax below
    var email = $('#emailadd').val();
    
    $.ajax({
        type: "GET",
        url: "/scripts/subscribe.php",
        data: {Email: email}
     });

     alert("Success");

}
// ]]></script>
<?php include "footer.php";?>
</body>
</html>