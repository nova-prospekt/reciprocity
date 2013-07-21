<?php
 
// check for required fields
if (isset($_POST['Username']) && isset($_POST['Password'])) {

   include"config.php";
    if (!$con) {

        $response = array('result'=>"error1");
        echo json_encode($response);

    } else {

       

        $user = $_POST['Username'];
        $pass = $_POST['Password'];

        $ensure = "SELECT * from userinfo WHERE Username = '$user' AND Password='$pass' AND status='1'";

        $result= mysql_query($ensure,$con);
    
        if(mysql_num_rows($result) > 0) {

            $entry = mysql_fetch_array($result) or die(mysql_error());
			session_start();
			$_SESSION['username']= $entry['Username'];
			$_SESSION['points']=$entry['ProPoints'];
			$_SESSION['userid'] = $entry['Id'];
            /*$response = array('result'=>"present",'user'=> $entry["Username"],'pp'=> $entry["ProPoints"]);
            echo json_encode($response); */
			
			$curdate=date('M  d, Y');
			$sql=mysql_query("select * from maxdonate where userid='".$_SESSION['userid']."'") or die(mysql_error());
			$fetch=mysql_fetch_array($sql);
			$donatedate=$fetch['donatedate'];
			
			/*if($curdate!=$donatedate)
			{
				$update="update maxdonate set countdonate='0' where userid='".$_SESSION['userid']."'";
				mysql_query($update) or die(mysql_error());	
			}*/
header('Location:../index.php');
        } else {

          header('Location:../signin.php?msg=error');
        }

        mysql_close($con);


    }

} else {

        $response = array('result'=>"error2");
        echo json_encode($response);

}

?>