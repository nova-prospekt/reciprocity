<?php
 
// check for required fields
if (isset($_GET['Email'])) {

    //Connect To Database
    $hostname='procity1999.db.10468841.hostedresource.com';
    $username='procity1999';
    $password='Ayudev98!';

    $con = mysql_connect($hostname,$username, $password);

    if (!$con) {

        $response["success"] = -1;
        echo "unsuccesful connection";

    } else {

        $email = $_GET['Email'];
             
        mysql_select_db($username);
       
        $qry = "INSERT INTO emails (Email) VALUES ('$email')";

        if (mysql_query($qry)) {

            echo "Successful";
            $message = "We've added you to our list. Stay tuned! \n \nProcity Chief Staff";      
            mail($email,'Procity - The Donation Network', $message);
            mysql_close($con); 

        } else {

            echo "unsuccessful query";
        }

    }

} else {

    echo "no email set";

}

?>