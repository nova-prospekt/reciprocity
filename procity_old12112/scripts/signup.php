<?php

// check for required fields
if (isset($_GET['Username']) && isset($_GET['Email']) && isset($_GET['Password'])) {
    

    //Connect To Database
    $hostname='procity1999.db.10468841.hostedresource.com';
    $username='procity1999';
    $password='Ayudev98!';

    $con = mysql_connect($hostname,$username,$password);

    if (!$con) {

        $response = -1;
        echo $response;

    } else {

        mysql_select_db($username);

        $user = $_GET['Username'];
        $email = $_GET['Email'];
        $pass = $_GET['Password'];

        $ensure = "SELECT Username from userinfo WHERE Username = '$user'";

        $rows = mysql_query($ensure,$con);

        if(mysql_num_rows($rows) > 0) {

             
            $response = array('result'=>"user");
            echo json_encode($response); 
            mysql_close($con);       
            exit;
        }


        // ensure not existing email
        $ensure = "SELECT Email from userinfo WHERE Email = '$email'";
        $rows = mysql_query($ensure,$con);

        if(mysql_num_rows($rows) > 0) {

            $response = array('result'=>"email");
            echo json_encode($response);    
            mysql_close($con);    
            exit;
            
        } 

        $qry = "INSERT INTO userinfo (Username, Email, Password) VALUES ('$user', '$email', '$pass')";
 

        if (mysql_query($qry)) {

            $message = "Welcome to ProCity, we're currently Beta but you're registered! \n \nProcity Chief Staff";      
            mail($email,'Procity - The Donation Network', $message);
            mysql_close($con); 

            $response = array('result'=>"works");
            echo json_encode($response);    
            
        } else {

            echo "unsuccessful query";
        }

    }

} else {

    echo "no email set";

}

?>