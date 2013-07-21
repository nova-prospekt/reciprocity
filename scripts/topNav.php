<?php ob_start(); ?>
 <script type="text/javascript" language="javascript">
    function createlightbox()
    {
        document.getElementById('light').style.display='block';
        document.getElementById('fade').style.display='block';
		apply2();
    }
    function closelightbox()
    {
        document.getElementById('light').style.display='none';
        document.getElementById('fade').style.display='none'
    }
    </script>

<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
 
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand scroller"  href="index.php"> <img src="img/Logo.jpg" alt="logo" /> </a>
<div class="nav-collapse collapse">
<ul class="nav pull-right">

<li><a href="donate.php">Donate</a></li>
<li><a href="city.php">The City</a></li>
<li class="dropdown" style="font-size: 14px;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            More
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="buypro.php">Buy ProPoints</a></li>
                           
                            <li><a href="faq.php">How it works</a></li>
                             <li><a href="term.php">Terms and Conditions</a></li>
                        </ul>
                    </li>
                    
<?php
if(isset($_SESSION['username'])){
	?>

<li><a href="profile.php"><?php echo ucfirst($_SESSION['username']);?></a></li>
<!--<li><a class="btn-header" href="faq.php">FAQ's</a></li>-->
<li><a href="scripts/logout.php">Sign Out</a></li>

<!--<li ><a href="#"><img src="img/Settings_256.png" /></a>
 <ul class="sub_menu" style="list-style:none; font-size:11px;">
                <li><a style="margin-left:10px;"  href="scripts/process.php?status=deactiv&username=<?php  echo $_SESSION['username']; ?>">Deactivate Account</a></li>
                <li><a style="margin-left:10px;"  href="changepass.php?status=changepass&username=<?php  echo $_SESSION['username']; ?>">Change Password</a></li>
                </ul>
</li>-->

	<?php
}else
{
 ?>
<li><a class="btn-header" href="signup.php">Sign up</a></li>
<li><a class="btn-header" href="signin.php">Sign in</a></li>
<!--<li><a class="btn-header" href="faq.php">FAQ's</a></li>-->
<?php } ?>

</ul>

</div>
</div>
</div>
</div>