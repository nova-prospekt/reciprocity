
<?php
session_start();
ob_start();
include "scripts/config.php";
if(isset($_POST['buy']))
{
	$userid=$_SESSION['userid'];
	$pts=$_POST['points'];
	$amount=$_POST['amount'];
	
	$insert= "insert into propoints set
			  user_id='$userid',
			  points='$pts',
			  amount='$amount',
			  status='n'";
	mysql_query($insert) or die(mysql_error());	
	
	//header("location:paypal.php");
}
/*  PHP Paypal IPN Integration Class Demonstration File
 *  4.16.2005 - Micah Carrick, email@micahcarrick.com
 *
 *  This file demonstrates the usage of paypal.class.php, a class designed  
 *  to aid in the interfacing between your website, paypal, and the instant
 *  payment notification (IPN) interface.  This single file serves as 4 
 *  virtual pages depending on the "action" varialble passed in the URL. It's
 *  the processing page which processes form data being submitted to paypal, it
 *  is the page paypal returns a user to upon success, it's the page paypal
 *  returns a user to upon canceling an order, and finally, it's the page that
 *  handles the IPN request from Paypal.
 *
 *  tlundy I tried to comment this file, aswell as the acutall class file, as well as
 *  I possibly could.  Please email me with questions, comments, and suggestions.
 *  See the header of paypal.class.php for additional resources and information.
*/

// Setup class 
 $pts;
 $amount;
 $userid;
require_once('paypal.class.php');  // include the class file
$p = new paypal_class;             // initiate an instance of the class
//$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
            
// setup a variable for this script (ie: 'http://www.micahcarrick.com/paypal.php')
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

// if there is not action variable, set the default action of 'process'
if (empty($_GET['action'])) $_GET['action'] = 'process';  

switch ($_GET['action']) {
    
   case 'process':      // Process and order...

      // There should be no output at this point.  To process the POST data,
      // the submit_paypal_post() function will output all the HTML tags which
      // contains a FORM which is submited instantaneously using the BODY onload
      // attribute.  In other words, don't echo or printf anything when you're
      // going to be calling the submit_paypal_post() function.
 
      // This is where you would have your form validation  and all that jazz.
      // You would take your POST vars and load them into the class like below,
      // only using the POST values instead of constant string expressions.
 
      // For example, after ensureing all the POST variables from your custom
      // order form are valid, you might have:
      //
      // $p->add_field('first_name', $_POST['first_name']);
      // $p->add_field('last_name', $_POST['last_name']);
     // $p->add_field('business', 'lswcod_1354541170_biz@gmail.com');
	 // $p->add_field('business', 'yasirmehmood670_seller@yahoo.com');
      $p->add_field('business', 'procitystaff@gmail.com');
	  $p->add_field('return', $this_script.'?action=success&uid='.$userid.'');
      $p->add_field('cancel_return', $this_script.'?action=cancel&uid='.$userid.'');
      $p->add_field('notify_url', $this_script.'?action=ipn&uid='.$userid.'');
      $p->add_field('currency_code', 'USD');
	  $p->add_field('cmd', '_xclick-subscriptions');
	  $p->add_field('item_name', 'Buy Pro Points');
	  $p->add_field('no_shipping', '1');
	  $p->add_field('auto-renew', '1');
	  $p->add_field('a1', '0');
	  $p->add_field('p1', '1');
	  $p->add_field('t1', 'D');
	  $p->add_field('rm', '2');
	  $p->add_field('a3', $amount);
	  $p->add_field('p3', '1');
	  $p->add_field('t3', 'D');
	  $p->add_field('src', '1');
	  $p->add_field('custom', $userid);
	  

      $p->submit_paypal_post(); // submit the fields to paypal
      //$p->dump_fields();      // for debugging, output a table of all the fields
      break;
      
   case 'success':      // Order was successful...
     
	  // This is where you would probably want to thank the user for their order
      // or what have you.  The order information at this point is in POST 
      // variables.  However, you don't want to "process" the order until you
      // get validation from the IPN.  That's where you would have the code to
      // email an admin, update the database with payment status, activate a
      // membership, etc.  
 		include('success.php');
      //echo "<html><head><title>Success</title></head><body><h3>Thank you for your order.</h3>";
      //foreach ($_POST as $key => $value) { echo "$key: $value<br>"; }
      //echo "</body></html>";
      
      // You could also simply re-direct them to another page, or your own 
      // order status page which presents the user with the status of their
      // order based on a database (which can be modified with the IPN code 
      // below).
      
      break;
      
   case 'cancel':       // Order was canceled...

      // The order was canceled before being completed.
		if($_POST['txn_type'] = 'subscr_cancel'){
			include('cancel.php');
		}
      //echo "<html><head><title>Canceled</title></head><body><h3>The order was canceled.</h3>";
      //echo "</body></html>";
      
      break;
      
   case 'ipn':          // Paypal is calling page for IPN validation...
   
      // It's important to remember that paypal calling this script.  There
      // is no output here.  This is where you validate the IPN data and if it's
      // valid, update your database to signify that the user has payed.  If
      // you try and use an echo or printf function here it's not going to do you
      // a bit of good.  This is on the "backend".  That is why, by default, the
      // class logs all IPN data to a text file.
         
      if ($p->validate_ipn()) {
        
		 // Payment has been recieved and IPN is verified.  This is where you
         // update your database to activate or process the order, or setup
         // the database with the user's order details, email an administrator,
         // etc.  You can access a slew of information via the ipn_data() array.
  
         // Check the paypal documentation for specifics on what information
         // is available in the IPN POST variables.  Basically, all the POST vars
         // which paypal sends, which we send back for validation, are now stored
         // in the ipn_data() array.
 			
		//activate the uesr account
		
		//txn_type=subscr_signup
			
         // For this example, we'll just email ourselves ALL the data.
         $subject = 'Instant Payment Notification - Recieved Payment';
         //$to = 'yasir.mehmood@binarybrainz.com';    //  your email
		 $to = 'sfaisal@binarybrainz.com';
         $body =  "An instant payment notification was successfully recieved\n";
         $body .= "from ".$p->ipn_data['payer_email']." on ".date('m/d/Y');
         $body .= " at ".date('g:i A')."\n\nDetails:\n";

		foreach ($_POST as $field=>$value) { 
			$p->ipn_data["$field"] = $value;
			$post_string .= '&'. $field .'='. urlencode(stripslashes($value)); 
		}
		
         foreach ($p->ipn_data as $key => $value) { $body .= "\n$key: $value"; }
         mail($to, $subject, $body);
         mail('waqar@binarybrainz.com', $subject, $body);
         
      }
      break;
 }     

?>