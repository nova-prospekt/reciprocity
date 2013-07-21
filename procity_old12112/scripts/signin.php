<?php
 
// check for required fields
if (isset($_GET['Username']) && isset($_GET['Password'])) {

    //Connect To Database
    $hostname = 'procity1999.db.10468841.hostedresource.com';
    $username = 'procity1999';
    $password = 'Ayudev98!';

    $con = mysql_connect($hostname,$username,$password);

    if (!$con) {

        $response = array('result'=>"error1");
        echo json_encode($response);

    } else {

        mysql_select_db($username);

        $user = $_GET['Username'];
        $pass = $_GET['Password'];

        $ensure = "SELECT * from userinfo WHERE Username = '$user' AND Password='$pass'";

        $result= mysql_query($ensure,$con);
    
        if(mysql_num_rows($result) > 0) {

            $entry = mysql_fetch_array($result) or die(mysql_error());
            $response = array('result'=>"present",'user'=> $entry["Username"],'pp'=> $entry["ProPoints"]);
            echo json_encode($response); 

        } else {

            $response = array('result'=>"notfound");
            echo json_encode($response); 

        }

        mysql_close($con);


    }

} else {

        $response = array('result'=>"error2");
        echo json_encode($response);

}

?>