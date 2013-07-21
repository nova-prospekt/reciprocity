<?php session_start(); 



$userName=$_SESSION['username'];



$points=$_SESSION['points'];



$userid= $_SESSION['userid'];



if(!isset($userName)){



	header('Location:signin.php');



}



include"scripts/config.php";



$error = '';

$confirm ='';

$error2='';

$error3='';

$confirm2='';

$cloc='';

$error4='';

$error5='';

$confirm4='';
$error7='';
$error8='';
$error9='';



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error')){



$error = 'Current Password Not Correct';

}


if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error9')){



$error9 = 'Passwords must match!';

}

if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error8')){



$error8 = 'Email address must match!';

}



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error2')){



$error2 = 'Current Email Not Correcct';

}


if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error7')){



$error7 = 'Username do not match!';

}



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error3')){



$error3 = 'Email Already Taken';

}



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error4')){



$error4 = 'Current Username Not Correct';

}



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='error5')){



$error5 = 'Username Already Taken';

}



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='confirm')){



$confirm = 'Successfully Change Password';

}





if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='confirm2')){



$confirm2 = 'Successfully Change Email';

}



if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='confirm4')){



$confirm4 = 'Successfully Change Username';

}





if(isset($_REQUEST['msg']) && ($_REQUEST['msg']=='cloc')){



$cloc = 'Successfully Change Location';

}













$sql2=mysql_query("select * from userinfo where Id='$userid'") or die(mysql_error());

$fetch2=mysql_fetch_array($sql2);

$loc_id=$fetch2['Location'];
$propoints=$fetch2['ProPoints'];



$sql_location=mysql_query("select * from location where id='$loc_id'") or die(mysql_error());

$fetch_location=mysql_fetch_array($sql_location);

$location=$fetch_location['location'];

?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Procity - The Trading Network</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->

    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/external-pages.css">
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
    <link rel="stylesheet" href="css/template.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/global.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
    <link href='http://fon0ts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
    <script type="text/javascript" language="javascript">



	

	

    function password()

    {

		var userid= document.getElementById('userid').value;

		

		document.getElementById('userids').value=userid;

		

        document.getElementById('plight').style.display='block';

        document.getElementById('pfade').style.display='block'

    }

    function passwordclose()

    {

        document.getElementById('plight').style.display='none';

        document.getElementById('pfade').style.display='none'

    }

	

	

	 function email()

    {

		var userid= document.getElementById('userid').value;

		

		document.getElementById('userids2').value=userid;

		

        document.getElementById('elight').style.display='block';

        document.getElementById('efade').style.display='block'

    }

    function emailclose()

    {

        document.getElementById('elight').style.display='none';

        document.getElementById('efade').style.display='none'

    }

	

	 function claim()

	 

    {

		

		

		var userid= document.getElementById('userid').value;

		

		document.getElementById('userids2').value=userid;

		

		var claim=document.getElementById('claim_id').value;

		document.getElementById('claimid').value=claim;

		

		

		

        document.getElementById('clight').style.display='block';

        document.getElementById('cfade').style.display='block';

		document.getElementById('counter_'+claim).style.display='block';

		

		

    }

    function claimclose()

    {

        document.getElementById('clight').style.display='none';

        document.getElementById('cfade').style.display='none'

    }

	

	

	 function preferred()

    {

		var userid= document.getElementById('userid').value;

		

		document.getElementById('userids2').value=userid;

		

        document.getElementById('llight').style.display='block';

        document.getElementById('lfade').style.display='block'

    }

    function preferredclose()

    {

        document.getElementById('llight').style.display='none';

        document.getElementById('lfade').style.display='none'

    }

	

	 function donate(id)

    {

		alert(id);

		var userid= document.getElementById('userid').value;

		

		document.getElementById('userids2').value=userid;

		

		var donateid=document.getElementById('donate_id').value;

		alert(donateid);

		//document.getElementById('donateid').value=donateid;

		

		

        document.getElementById('dlight').style.display='block';

        document.getElementById('dfade').style.display='block';

		document.getElementById('counterdonate_'+donateid).style.display='block';    }

    function donateclose()

    {

        document.getElementById('dlight').style.display='none';

        document.getElementById('dfade').style.display='none'

    }

	

	

	 function username()

    {

		var userid= document.getElementById('userid').value;

		

		document.getElementById('userids2').value=userid;

		

        document.getElementById('ulight').style.display='block';

        document.getElementById('ufade').style.display='block'

    }

    function usernameclose()

    {

        document.getElementById('ulight').style.display='none';

        document.getElementById('ufade').style.display='none'

    }

	

	

    </script>
    <script>

	function validate()

	{

			var msg=1;

 			 var Alphabet;

			Alphabet =/^[A-Za-z ]+$/; 

			

			var current='';

			var new_pswd='';

			var confirm_pswd='';

			

			

			if(document.change_pswd.current_pswd.value == "")

			{

			document.change_pswd.current_pswd.style.backgroundColor='#F00';

			msg=0;

			current='=> Current Password Required\n';			

			}

			else

			{

				document.change_pswd.current_pswd.style.backgroundColor='';

				

			}

			

			if(document.change_pswd.new_pswd.value == "")

			{

			document.change_pswd.new_pswd.style.backgroundColor='#F00';

			msg=0;

			new_pswd='=> New Password Required\n';

			

			}

			else

			{

				document.change_pswd.new_pswd.style.backgroundColor='';

				

			}

			

			if(document.change_pswd.c_pswd.value == "")

			{

			document.change_pswd.c_pswd.style.backgroundColor='#F00';

			msg=0;

			confirm_pswd='=> Confirm Password Required\n';

			

			

			}

			else

			{

				document.change_pswd.c_pswd.style.backgroundColor='';

				if(document.change_pswd.new_pswd.value!=document.change_pswd.c_pswd.value)

				{

					alert('Password Not Match!')

					return false;

				}

				

				

			}

			

			if(msg==0)

			{

					alert(current+new_pswd+confirm_pswd);

					return false;

			}

			else

			{

				return true;

			}

			

			

	}

	

	function usernamevalidate()

	{
			alert('yasir');
			var msg=1;

 			 var Alphabet;

			Alphabet =/^[A-Za-z ]+$/; 

			

			var current='';

			var new_username='';

			var confirm_username='';

			

			

			if(document.change_user.current_user.value == "")

			{

			document.change_user.current_user.style.backgroundColor='#F00';

			msg=0;

			current='=> Current Username Required\n';			

			}

			else

			{

				document.change_user.current_user.style.backgroundColor='';

				

			}

			

			if(document.change_user.new_user.value == "")

			{

			document.change_user.new_user.style.backgroundColor='#F00';

			msg=0;

			new_username='=> New Username Required\n';

			

			}

			else

			{

				document.change_user.new_user.style.backgroundColor='';

				

			}

			

			if(document.change_user.c_user.value == "")

			{

			document.change_user.c_user.style.backgroundColor='#F00';

			msg=0;

			confirm_username='=> Confirm Username Required\n';

			

			

			}

			else

			{

				document.change_user.c_user.style.backgroundColor='';

				

				if(document.change_user.new_user.value!=document.change_user.c_user.value)

				{

					alert('Usernames do not match!')

					return false;

				}

				

				

			}

			

			if(msg==0)

			{

					alert(current+new_username+confirm_username);

					return false;

			}

			else

			{

				return true;

			}

			

			

	}

	

		function emailvalidate()

	{

			var msg=1;

 			 var Alphabet;

			Alphabet =/^[A-Za-z ]+$/; 

			

			var current='';

			var new_email='';

			var confirm_email='';

			

			

			if(document.change_email.current_email.value == "")

			{

			document.change_email.current_email.style.backgroundColor='#F00';

			msg=0;

			current='=> Current Email Required\n';			

			}

			else

			{

				document.change_email.current_email.style.backgroundColor='';

				var x=document.change_email.current_email.value;

				var atpos=x.indexOf("@terpmail.umd.edu");

				

				var dotpos=x.lastIndexOf(".");

				if (atpos <= 0)

				  {

				  alert("Not a valid Current e-mail address");

				  document.change_email.current_email.style.backgroundColor='#F00';

				  return false;

				  }

				

			}

			

			if(document.change_email.new_email.value == "")

			{

			document.change_email.new_email.style.backgroundColor='#F00';

			msg=0;

			new_email='=> New Email Required\n';

			

			}

			else

			{

				document.change_email.new_email.style.backgroundColor='';

				var x=document.change_email.new_email.value;

				var atpos=x.indexOf("@terpmail.umd.edu");

				

				var dotpos=x.lastIndexOf(".");

				if (atpos <= 0)

				  {

				  alert("Not a valid New e-mail address");

				  document.change_email.new_email.style.backgroundColor='#F00';

				  return false;

				  }

				

			}

			

			if(document.change_email.c_email.value == "")

			{

			document.change_email.c_email.style.backgroundColor='#F00';

			msg=0;

			confirm_email='=> Confirm Email Required\n';

			

			

			}

			else

			{

				document.change_email.c_email.style.backgroundColor='';

				if(document.change_email.new_email.value!=document.change_email.c_email.value)

				{

					alert('Email Not Match!')

					return false;

				}

				

				var x=document.change_email.c_email.value;

				var atpos=x.indexOf("@");

				var dotpos=x.lastIndexOf(".");

				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)

				  {

				  alert("Not a valid e-mail address");

				  document.change_email.c_email.style.backgroundColor='#F00';

				  return false;

				  }

				

				

			}

			

			if(msg==0)

			{

					alert(current+new_email+confirm_email);

					return false;

			}

			else

			{

				return true;

			}

			

			

	}

	

	

	

	

	</script>
    </head>
    
    <body>
<p><a href="#" class="scrolltop"> <span>up</span> </a></p>

<!-- begins navbar -->

<?php include"topNav.php"; ?>
<div id="content" class="clearfix">
      <section id="left">
    <div id="userStats" class="clearfix">
          <div class="data">
        <div style="color:#F00;">
              <?php if($error!='') {?>
              <script>alert("Current Password Not Match");</script>
              <?php } if($error2!='')  {?>
              <script>alert("Current Email Not Match");</script>
              <?php  } if($error3!=''){?>
              <script>alert("Email Already Taken");</script>
              <?php }

		   if($error4!='') {?>
              <script>alert("Current Username Not Match");</script>
              <?php  }
			  
			   if($error9!='') {?>
              <script>alert("Passwords must match");</script>
              <?php  }
			  
			  if($error7!='') {?>
              <script>alert("Usernames must match");</script>
              <?php  }
			  
			   if($error8!='') {?>
              <script>alert("Email Must Match!");</script>
              <?php  }

		   if($error5!='') {?>
              <script>alert("Username already taken");</script>
              <?php   }

		   if($confirm!='') {?>
              <script>alert("We have succesfully changed your password!");</script>
              <?php   }

		   if($confirm2!='') {?>
              <script>alert("Successfully Change Email!. please login again");</script>
              <?php }

		   if($confirm4!='') {?>
              <script>alert("We have succesfully changed your username!"); </script> <script>

window.location="scripts/logout.php";

</script>
              <?php   }

		   if($cloc!='') {?>
              <script>alert("Successfully Change Location");</script>
              <?php header("location:profile.php");  }

		   ?>
            </div>
        <h1 id="username"><?php echo 'Welcome to Procity '. $userName.'!'; ?></h1>
        <h3></h3>
        <div class="sep"></div>
        <ul class="numbers clearfix">
              <li>Pro Points<strong id="propoints"><?php echo $propoints; ?></strong></li>
              <li style="width: 188px;">Preferred Location
            <p><b><?php echo '<br>'.$location;  ?></b></p>
          </li>
            </ul>
      </div>
        </div>
  </section>
      <input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
      <section id="right">
      <div class="gcontent">
    <div class="head">
          <h1>Settings</h1>
        </div>
    <div class="boxy">
          <p> <a href = "javascript:void(0)" onclick = "username()" > Change Username</a> </p>
          <p> <a href = "javascript:void(0)" onclick = "email()" > Change Email</a> </p>
          <p> <a href = "javascript:void(0)" onclick = "password()" > Change Password</a> </p>
          <p> <a href = "javascript:void(0)" onclick = "preferred()" > Change Preferred Location</a> </p>
          
          <!--<div class="badgeCount"><a href="blog.html">More<img src="img/profitem1.png" /></a> <a href="#"><img src="img/profitem2.png" /></a> <a href="#"><img src="img/profitem3.png" /></a></div>--> 
          
        </div>
  </div>
    </div>
<div id="light" class="white_content"> <a href = "javascript:void(0)" onclick = "closelightbox()" style="position: absolute;

z-index: 1001;

margin-left: 308px;

margin-top: 4px;"><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:261px; width:562px;">
          <div class="span4 info">
        <form>
              <table>
            <tr>
                  <td class="tbltext">Item Name</td>
                  <td><input type="text" name="item_name" id="item_name" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Donator UserName</td>
                  <td><input type="text" name="user_name" id="user_name" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Donator Email</td>
                  <td><input type="text" name="user_email" id="user_email" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext" colspan="2" align="center"><input type="radio" name="a" value="Great">
                &nbsp;Great &nbsp;&nbsp;
                <input type="radio" name="a" value="Ok">
                &nbsp;Ok &nbsp;&nbsp;
                <input type="radio" name="a" value="Good">
                &nbsp;Good &nbsp;&nbsp; </td>
                </tr>
            &nbsp;
            <tr>
                  <td><input type="submit" name="confirm" value="Confirm"></td>
                  <td><input type="submit" name="cancel" value="Cancel"></td>
                </tr>
          </table>
            </form>
      </div>
        </div>
  </div>
    </div>
<a href = "javascript:void(0)" onclick = "closelightbox()" style="float:right">
    <div id="fade" class="black_overlay"></div>
    </a>
<div id="light2" class="white_content"> <a href = "javascript:void(0)" onclick = "closelightbox2()" style="position: absolute;

z-index: 1001;

margin-left: 308px;

margin-top: 4px;"><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:261px; width:562px;">
          <div class="span4 info">
        <form>
              <table>
            <tr>
                  <td class="tbltext">Item Name</td>
                  <td><input type="text" name="citem_name" id="citem_name" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Claimer UserName</td>
                  <td><input type="text" name="cuser_name" id="cuser_name" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Claimer Email</td>
                  <td><input type="text" name="cuser_email" id="cuser_email" value=""></td>
                </tr>
            &nbsp;
          </table>
            </form>
      </div>
        </div>
  </div>
    </div>
</div>
<a href = "javascript:void(0)" onclick = "closelightbox2()" style="float:right">
    <div id="fade2" class="black_overlay"></div>
    </a>
</section>
</div>
<div class="clearfix"><br>
    </div>
<div style="width: 818px;

margin: 0px auto;">
      <div class="head" style="background: #589fc6;

border: 1px solid #3e82a7;">
    <h1 style="

    height: 25px;

    line-height: 25px;

"> <span style="

    margin-left: 5px;

    color: #fff;

">Claimed Items</span></h1>
  </div>
      <div class="donatedslider">
    <div  class="ca-container">
          <div class="ca-wrapper">
        <?php 

				

				$sql_claim=mysql_query("select * from donate_item where (claimed_by='$userid') and (claim_status='1') order by id desc limit 0,1 ");

	$numrows=mysql_num_rows($sql_claim);

	while($fetch_claim=mysql_fetch_array($sql_claim))

	{

		$claim_id=$fetch_claim['id']

	

	?>
        <input type="hidden" name="claim_id" id="claim_id" value="<?php echo $claim_id?>">
        <input type="hidden" name="image" id="image" value="<?php echo $fetch_claim["image"] ; ?>">
        <div class="ca-item ca-item-1">
              <div class="ca-item-main">
            <div class="ca-icon"> <img src="images/<?php echo $fetch_claim["image"] ?>" style="float: left;

    height: 90px;

    width: 110px;" alt="" /></div>
          </div>
              <p style="float:left; margin-top:99px; margin-left:13px;"> <a href = "javascript:void(0)"  onclick = "claim()" > Click for more </a></p>
            </div>
        <?php } ?>
      </div>
        </div>
  </div>
    </div>
<div class="clearfix"><br>
    </div>
<div style="width: 818px;

margin: 0px auto;">
      <div class="head" style="background: #589fc6;

border: 1px solid #3e82a7;">
    <h1 style="

    height: 25px;

    line-height: 25px;

"> <span style="

    margin-left: 5px;

    color: #fff;

">Donated Items</span></h1>
  </div>
      <div class="donatedslider">
    <div id="ca-container" class="ca-container">
          <div class="ca-wrapper">
        <?php 

				$sql_donate1=mysql_query("select * from donate_item where donated_by='$userid' limit 0,5 ") or die(mysql_error());

 $numrows1=mysql_num_rows($sql_donate1);

	while($fetch_donate1=mysql_fetch_array($sql_donate1))

	{

	

	?>
        <input type="hidden" name="donate_id" id="donate_id" value="<?php echo $fetch_donate1['id'];?>">
        <div class="ca-item ca-item-1">
              <div class="photo">
            <div class="ca-item-main" style="height:100% !important;">
                  <div class="ca-icon"> <img src="images/<?php echo $fetch_donate1["image"] ?>" style="float: left;

    height: 90px;

    width: 110px;" alt="" /></div>
                </div>
            <p style="float:left; margin-top:95px; margin-left:13px;"> <a  href="#<?php echo $fetch_donate1['id'];?>"> Click for more </a></p>
          </div>
            </div>
        <?php } ?>
        <?php $sql=mysql_query("select * from donate_item where donated_by='$userid' ");

	  		while($fetch=mysql_fetch_array($sql))

			{
				$itemid2=$fetch['item_id'];
				$sql_item2=mysql_query("select * from item where item_id='$itemid2'");
				$fetch_item2=mysql_fetch_array($sql_item2);
				$item_name2=$fetch_item2['item_name'];
				
				$claimed=$fetch['claimed_by'];
				$sql_claim2=mysql_query("select * from userinfo where Id='$claimed'") or die(mysql_error());
				$fetch_claim2=mysql_fetch_array($sql_claim2);
				$claimedby=$fetch_claim2['Username'];
				$claimedemail=$fetch_claim2['Email'];
	  ?>
        <div  style="width:500px; height:400px;">
              <div id="<?php echo $fetch['id'];?>"> <img src="images/<?php echo $fetch['image'];?>" style="width:50px; height:50px;" />
            <div style="height:100px; width:200px; margin-top:10px;"> <?php echo $item_name2;
	   
	   ?> <?php echo '<br>'. $username;?> <?php echo 'Claimed By: '.$claimedby;
		  		echo 'Claimed Email:'.$claimedemail;
		  ?> </div>
          </div>
            </div>
        <?php } ?>
      </div>
        </div>
  </div>
      <br>
      <section id="" style="margin-top:40px;"> 
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
<?php include "footer.php";?>
</body>

    </html>
<a href = "javascript:void(0)" onclick = "passwordclose()" style="float:right">
    <div id="pfade" class="black_overlay"></div>
    </a>
<div id="plight" class="white_content" style="width: 572px;"><a href = "javascript:void(0)" onclick = "passwordclose()" style="position: absolute;

z-index: 1001;

margin-left: 553px;

margin-top: 4px; "><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:226px; width:482px;">
          <div class="span4 info" style="width:100%;">
        <form name="change_pswd" method="post" id="change_pswd" action="change_pswd.php">
              <input type="hidden" id="userids" name="userids" value="">
              <h1>Change Password</h1>
              <table width="100%" style="margin-top: 0px;">
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            <tr>
                  <td class="tbltext">Current Password:</td>
                  &nbsp;
                  <td><input type="password" name="current_pswd" class="validate[required]" id="current_pswd" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">New Password:</td>
                  &nbsp;
                  <td><input type="password" name="new_pswd" class="validate[required]" id="new_pswd" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Confirm New Password:</td>
                  &nbsp;
                  <td><input type="password" name="c_pswd" class="validate[required]" id="c_pswd" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td><input type="submit" name="" id="" value="Save" class="btn" ></td>
                </tr>
            &nbsp;
          </table>
            </form>
      </div>
        </div>
  </div>
    </div>
<a href = "javascript:void(0)" onclick = "emailclose()" style="float:right">
    <div id="efade" class="black_overlay"></div>
    </a>
<div id="elight" class="white_content" style="width: 572px;"><a href = "javascript:void(0)" onclick = "emailclose()" style="position: absolute;

z-index: 1001;

margin-left: 553px;

margin-top: 4px; "><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:226px; width:482px;">
          <div class="span4 info" style="width:100%;">
        <form name="change_email" method="post" id="change_email" action="change_email.php">
              <input type="hidden" id="userids2" name="userids2" value="">
              <?php 
			  $sql_email=mysql_query("select * from userinfo where Id='$userid'") or die(mysql_error());
			  $fetch_email=mysql_fetch_array($sql_email);
			  
			  ?>
              <h1>Change Email</h1>
              <table width="100%" style="margin-top: 0px;">
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            <tr>
                  <td class="tbltext">Current Email</td>
                  &nbsp;
                  <td><input type="text" name="current_email" readonly="true" class="validate[email]" id="current_email" value="<?php echo $fetch_email['Email']; ?>"></td>
                </tr>
            <tr>
                  <td class="tbltext">New Email</td>
                  &nbsp;
                  <td><input type="text" name="new_email" class="validate[required]" id="new_email" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Confirm Email</td>
                  &nbsp;
                  <td><input type="text" name="c_email" class="validate[required]" id="c_email" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td><input type="submit" name="" id="" value="Save" class="btn" onClick="return emailvalidate();"></td>
                </tr>
            &nbsp;
          </table>
            </form>
      </div>
        </div>
  </div>
    </div>
<a href = "javascript:void(0)" onclick = "claimclose()" style="float:right">
    <div id="cfade" class="black_overlay"></div>
    </a>
<div id="clight" class="white_content" style="width: 572px;"><a href = "javascript:void(0)" onclick = "claimclose()" style="position: absolute;

z-index: 1001;

margin-left: 553px;

margin-top: 4px; "><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:256px; width:482px;">
          <div class="span4 info" style="width:100%;">
        <form name="change_claim" method="post" id="change_claim" action="processclaim.php">
              <input type="hidden" id="claimid" name="claimid" value="">
              <?php $userid5 = $_SESSION['userid'];

			  //	echo $_GET['claim'];

			  

			  ?>
              <h1>Claimed item</h1>
              <?php 

				

				$sql_claim=mysql_query("select * from donate_item where (claimed_by='$userid') and (claim_status='1') order by id desc limit 0,1 ");

	$numrows=mysql_num_rows($sql_claim);

	$counter=0;

	while($fetch_claim=mysql_fetch_array($sql_claim))

	{

		$counter++;

		echo $claim_id=$fetch_claim['id'];

		$itemid=$fetch_claim['item_id'];

		$sql_item=mysql_query("select * from item where item_id='$itemid'");

		$fetch_item=mysql_fetch_array($sql_item);

		$item_name=$fetch_item['item_name'];

		$donated_by=$fetch_claim['donated_by'];

		$sqluser=mysql_query("select * from userinfo where Id='$donated_by'");

		$fetchuser=mysql_fetch_array($sqluser);

		$donated_username=$fetchuser['Username'];

		$donated_email=$fetchuser['Email'];

	

	?>
              <input type="hidden" name="image" id="image" value="<?php echo $fetch_claim["image"] ; ?>">
              <div class="ca-item ca-item-1" id="counter_<?php echo $claim_id;?>" style="display:none; height:168px; ">
            <div class="ca-item-main">
                  <div class="ca-icon" style="width:480px; height:168px;"><img src="images/<?php echo $fetch_claim["image"] ?>" style="float: left;

    height: 90px;

    width: 110px;" alt="" />
                <p style="float:left;"><?php echo $item_name;?></p>
                <p style="float:left;">Donated By:<?php echo $donated_username;?></p>
                <p>Donated Email:<?php echo $donated_email;?></p>
                <p>
                      <input type="radio" class="validate[required]" name="condition" value="Great">
                      &nbsp;Great &nbsp;&nbsp;
                      <input type="radio" name="condition" value="Ok">
                      &nbsp;Good &nbsp;&nbsp;
                      <input type="radio" name="condition" value="Good">
                      &nbsp;Ok &nbsp;&nbsp;</p>
                <input type="hidden" name="claim_idssss" id="claim_id" value="<?php echo $claim_id?>">
                <p>
                      <input type="submit" name="confirm" value="Confirm Received" >
                      <input type="submit" name="cancel" value="Cancel" >
                    </p>
              </div>
                </div>
          </div>
              <?php } ?>
            </form>
      </div>
        </div>
  </div>
    </div>
<a href = "javascript:void(0)" onclick = "donateclose()" style="float:right">
    <div id="dfade" class="black_overlay"></div>
    </a>
<div id="dlight" class="white_content" style="width: 572px;"><a href = "javascript:void(0)" onclick = "donateclose()" style="position: absolute;

z-index: 1001;

margin-left: 553px;

margin-top: 4px; "><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:256px; width:482px;">
          <div class="span4 info" style="width:100%;">
        <form name="change_claim" method="post" id="change_claim" action="processclaim.php">
              <input type="hidden" id="claimid" name="claimid" value="">
              <?php $userid5 = $_SESSION['userid'];

			  //	echo $_GET['claim'];

			  

			  ?>
              <h1>Donated item</h1>
              <?php 

				

				$sql_claim=mysql_query("select * from donate_item where donated_by='$userid' order by id desc ");

	$numrows=mysql_num_rows($sql_claim);

	$counterdonate=0;

	while($fetch_claim=mysql_fetch_array($sql_claim))

	{

		$counterdonate++;

		echo $claim_id=$fetch_claim['id'];

		$itemid=$fetch_claim['item_id'];

		$sql_item=mysql_query("select * from item where item_id='$itemid'");

		$fetch_item=mysql_fetch_array($sql_item);

		$item_name=$fetch_item['item_name'];

		$donated_by=$fetch_claim['donated_by'];

		$sqluser=mysql_query("select * from userinfo where Id='$donated_by'");

		$fetchuser=mysql_fetch_array($sqluser);

		$donated_username=$fetchuser['Username'];

		$donated_email=$fetchuser['Email'];

	

	?>
              <input type="hidden" name="image" id="image" value="<?php echo $fetch_claim["image"] ; ?>">
              <div class="ca-item ca-item-1" id="counterdonate_<?php echo $claim_id;?>" style="display:none; height:168px; ">
            <div class="ca-item-main">
                  <div class="ca-icon" style="width:480px; height:168px;"><img src="images/<?php echo $fetch_claim["image"] ?>" style="float: left;

    height: 90px;

    width: 110px;" alt="" />
                <p style="float:left;"><?php echo $item_name;?></p>
                <p style="float:left;">Donated By:<?php echo $donated_username;?></p>
                <p>Donated Email:<?php echo $donated_email;?></p>
                <p>
                      <input type="radio" class="validate[required]" name="condition" value="Great">
                      &nbsp;Great &nbsp;&nbsp;
                      <input type="radio" name="condition" value="Ok">
                      &nbsp;Good &nbsp;&nbsp;
                      <input type="radio" name="condition" value="Good">
                      &nbsp;Ok &nbsp;&nbsp;</p>
                <input type="hidden" name="claim_idssss" id="claim_id" value="<?php echo $claim_id?>">
                <p>
                      <input type="submit" name="confirm" value="Confirm Received" >
                      <input type="submit" name="cancel" value="Cancel Claim">
                    </p>
                <p><a href="processclaim.php?donate_id=<?php echo $claim_id;?>" onClick = "javascript: return confirm('Do you want to Confirm this?');">Confirm</a><a href="profile.php" >Cancel</a></p>
              </div>
                </div>
          </div>
              <?php } ?>
            </form>
      </div>
        </div>
  </div>
    </div>
<a href = "javascript:void(0)" onclick = "preferredclose()" style="float:right">
    <div id="lfade" class="black_overlay"></div>
    </a>
<div id="llight" class="white_content" style="width: 572px;"><a href = "javascript:void(0)" onclick = "preferredclose()" style="position: absolute;

z-index: 1001;

margin-left: 553px;

margin-top: 4px; "><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:156px; width:482px;">
          <div class="span4 info" style="width:100%;">
        <form name="change_email" method="post" id="change_email" action="change_location.php">
              <input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
              <h1>Change Location</h1>
              <table width="100%" style="margin-top: 0px;">
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            <?php 

		   

		   $sql_user=mysql_query("select * from userinfo where Id='$userid'") or die(mysql_error());

		   		$fetch_user=mysql_fetch_array($sql_user);

				

		   ?>
            <tr>
                  <td class="tbltext">Preferred Location</td>
                  &nbsp;
                  <td><select name="location" id="location">
                      <option value="">Select Preferred Location</option>
                      <?php $sql_loc=mysql_query("select * from location") or die(mysql_error());

				while($fetch_loc=mysql_fetch_array($sql_loc))

				{

				?>
                      <option <?php if($fetch_user['Location']==$fetch_loc['id']){ echo 'selected="selected"'; }?>  value="<?php echo $fetch_loc['id'];?>"><?php echo $fetch_loc['location'];?></option>
                      <?php }?>
                    </select></td>
                </tr>
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td><input type="submit" name="" id="" value="Save" class="btn" ></td>
                </tr>
            &nbsp;
          </table>
            </form>
      </div>
        </div>
  </div>
    </div>
<a href = "javascript:void(0)" onclick = "usernameclose()" style="float:right">
    <div id="ufade" class="black_overlay"></div>
    </a>
<div id="ulight" class="white_content" style="width: 572px;"><a href = "javascript:void(0)" onclick = "usernameclose()" style="position: absolute;

z-index: 1001;

margin-left: 553px;

margin-top: 4px; "><img src="http://2.bp.blogspot.com/-aXHXnOQPBJM/Tx_p1qqNI4I/AAAAAAAAAeU/bH0tlsikADQ/s1600/icon_cancel.gif" alt="" /></a>
      <div class="span4" id="pricing" style="width:292px; margin-left:34px; margin-top: 5px;">
    <div class="price_wrapper standard regular" style="min-height:226px; width:482px;">
          <div class="span4 info" style="width:100%;">
        <form name="change_user" method="post" id="change_user" action="change_user.php">
              <input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
              <h1>Change Username</h1>
              <table width="100%" style="margin-top: 0px;">
            <tr>
                  <td class="tbltext">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            <tr>
                  <td class="tbltext">Username</td>
                  &nbsp;
                  <td><input type="text" name="current_user" readonly="true" class="validate[required]" id="current_user" value="<?php echo $userName;?>"></td>
                </tr>
            <tr>
                  <td class="tbltext">New Username</td>
                  &nbsp;
                  <td><input type="text" name="new_user" class="validate[required]" id="new_user" value=""></td>
                </tr>
            <tr>
                  <td class="tbltext">Confirm Username</td>
                  &nbsp;
                  <td><input type="text" name="c_user" class="validate[required]" id="c_user" value=""></td>
                </tr>
            <tr>
              <td class="tbltext">&nbsp;</td>
                  <td><input type="submit" name="" id="" value="Save" class="btn" ></td>
                </tr>
            &nbsp;
          </table>
            </form>
      </div>
        </div>
  </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- the jScrollPane script -->

<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript">

			$('#ca-container').contentcarousel();

		</script>
<?php $error='';

		$confirm='';?>
<script src="js/jquery-1.8.2.min.js" type="text/javascript">

	</script>
<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">

	</script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">

	</script>
<script>

		jQuery(document).ready(function(){

			// binds form submission and fields to the validation engine

			jQuery("#change_claim").validationEngine();

			

		});



		/**

		*

		* @param {jqObject} the field where the validation applies

		* @param {Array[String]} validation rules for this field

		* @param {int} rule index

		* @param {Map} form options

		* @return an error string if validation failed

		*/

		function checkHELLO(field, rules, i, options){

			if (field.val() != "HELLO") {

				// this allows to use i18 for the error msgs

				return options.allrules.validate2fields.alertText;

			}

		}

	</script>
<script>

function myFunction()

{

document.change_claim.submit();

}

</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.1/mootools-yui-compressed.js"></script>
<script type="text/javascript" src="js/fancyzoom.js"></script>
<script type="text/javascript" charset="utf-8">

    document.addEvent('domready', function() {

      $$("div.photo a").each(function(el) { 

        new FancyZoom(el, {

          scaleImg:true,

          onShow: function(e) {

            var fancy = this

            var a = fancy.content_div.getElement('a')

            if(a && a.getElement('.loading')) {

              var loaded = function() {

                fancy.loaded = true

                fancy.options.width = this.width

                fancy.options.height = this.height

                a.empty().adopt(this)

                FancyZoom.show(e)

              }

              var image = new Image()

              image.onload = loaded

              image.src = a.href

            }

          },

          max: 480

        })

      })

      new FancyZoom('medium_box_link', {width:400, height:300});

      new FancyZoom('large_box_link', {width:400, height:300});

      new FancyZoom('flash_box_link', {width:400, height:300});

    });

  </script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#change_pswd").validationEngine();
			
			
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>
    
    <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#change_email").validationEngine();
			
			
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>
    
        <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#change_user").validationEngine();
			
			
			
		});
		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			

			if (field.val() != "HELLO") {
				
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>