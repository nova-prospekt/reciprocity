<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
<?php
include "mail.php";
if(isset($_POST['submit']))
{
	function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
$link=curPageURL();
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	$comments=$_POST['comments'];
	
	$to='procitystaff@gmail.com';
	$subj='Comment on Procity';
	
	 $msg= "Name :".'  '.$name.'<br><br>
			 Email : '.$email.'<br><br>
			 Comments : '.$comments.'
			  '; 
	
	sentmail($subj,$to,$msg);	
	header("location:index.php");
}
?>



<div id="footer">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <h3></h3>
                    <div class="blog_post">
                        <div class="row">
                            <!--<div class="span2">
                                <a href="blog.html">
                                    <img src="img/pic_blog.png" alt="post image" class="img-circle" />
                                </a>
                            </div>
                            <div class="span4">
                                <a href="blog.html" class="title">
                                    Lorem Ipsum is simply dummy 
                                </a>
                                <div class="intro">
                                    There are many variations of passages of Lorem alteration in some form by injected look even slightly believable.
                                </div>
                                <div class="date">
                                    Oct 22. 2012
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="span4 contact_us">
                    <h3>Contact Us</h3>
                    <form class="form-horizontal" name="contact" method="post" id="contact" action="">
                        <div class="field">
                            <div class="label_field">
                                <label for="inputName">Name</label>
                            </div>
                            <input type="text" name="name" class="validate[required]" id="inputName" />
                        </div>

                        <div class="field">
                            <div class="label_field">
                                <label for="inputEmail">Email</label>
                            </div>
                            <input type="text" name="email" class="validate[required]" id="inputEmail" />
                        </div>

                        <!--<div class="field">
                            <div class="label_field">
                                <label for="inputCity">City</label>
                            </div>
                            <input type="text" id="inputCity" />
                        </div>-->

                        <div class="field">
                            <div class="label_field">
                                <label for="inputComment">Comments</label>
                            </div>
                            <textarea name="comments" class="validate[required]"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Send" class="btn">
                    </form>
                </div>
            </div>
            <hr>
            <div class="row copyright">
                <div class="span5">
                    <h3>Social</h3>
                    <a href="https://www.facebook.com/ProcityTN?fref=ts" target="_new" class="social fb">
                        <i class="i_facebook"></i>
                    </a>
                    <a href="https://twitter.com/procityTN" target="_new" class="social tw">
                        <i class="i_twitter"></i>
                    </a>
                    <a href="www.youtube.com" target="_new" class="social yt">
                        <i class="i_youtube"></i>
                    </a>
                </div>
                <div class="span2 offset5 copy">
                   <p>2013 - Procity Inc</p>
                </div>
            </div>
        </div>
    </div>
 
	</script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#contact").validationEngine();
			
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
   
