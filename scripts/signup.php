<?php

// check for required fields
if (isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password'])) {
  ob_start();  
include "config.php";
include "../mail.php";


  
    if (!$con) {

        $response = -1;
        echo $response;

    } else {

       

        $user = $_POST['Username'];
        $email = $_POST['Email'];
        $pass = $_POST['Password'];

        $ensure = "SELECT Username from userinfo WHERE Username = '$user'";

        $rows1 = mysql_query($ensure,$con);
		
		$ensure = "SELECT Email from userinfo WHERE Email = '$email'";
        $rows = mysql_query($ensure,$con);

        if(mysql_num_rows($rows1) > 0) {

             
            header('location:../signup.php?msg=error1');
        }


        // ensure not existing email
        

        else if(mysql_num_rows($rows) > 0) {

          header('location:../signup.php?msg=error2');
            
        } else{

        $qry = "INSERT INTO userinfo (Username, Email, Password,status) VALUES ('$user', '$email', '$pass','0')";
		}

        if (mysql_query($qry)) {
			
			echo $link="http://myworkdemo.net/procity/confirm_email.php?email=$email";
			
			  $msg= "Hi".'  '.$user.'!<br><br>
			  Please click the following link to confirm this email as your Procity account email <br><br><a href="http://myworkdemo.net/procity/confirm_email.php?email='.$email.'">Please Confirmation Your Email </a>'.'<br><br> <br> Procity Staff
			  <br>Campus | Community | Charity <br>
			  <br>
			  If you are recieving this email and you did not register with us at myprocity.com please email us at procitystaff@gmail.com to resolve this issue
			  '; 
			  $subject="Confirm your Procity account!";
			 echo  $to=$email;
			  sentmail($subj,$to,$msg);
			
			header('Location:../index.php'); 



             
            
        } else {

            echo "unsuccessful query";
        }

    }

} else {

    echo "no email set";

}

?>