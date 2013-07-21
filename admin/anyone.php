<?php
session_start();
require_once 'library/functions.php';
require_once '../library/config.php';

	if(!isset($_SESSION['user_name'])){
		header('location: login.php');
	}

	$sqlinfo = "select * from personal_info";
	$queryinfo = mysql_query($sqlinfo) or die(mysql_error());
	$rsinfo = mysql_fetch_array($queryinfo);
	
	
	if(isset($_REQUEST['submit'])){
	
	$getletter1 = "select * from letters where lettername = 'anyone'";
	$getquery1 = mysql_query($getletter1) or die(mysql_error());
	
	$rows = mysql_num_rows($getquery1);
	
	if($rows>0){
	$sql = "update letters set
		lettername = '".$_REQUEST['open']."',
		cnd = '".$_REQUEST['toanyone']."',
		reply = '".$_REQUEST['reply']."',
		subject = '".$_REQUEST['subject']."',
		bodytext = '".$_REQUEST['bodytext']."',
		letterdate = '".$_REQUEST['datetype']."' where  lettername = 'anyone'";
	mysql_query($sql) or die(mysql_error());
	}else{
	$sql = "insert into letters set
		lettername = '".$_REQUEST['open']."',
		cnd = '".$_REQUEST['toanyone']."',
		reply = '".$_REQUEST['reply']."',
		subject = '".$_REQUEST['subject']."',
		bodytext = '".$_REQUEST['bodytext']."',
		letterdate = '".$_REQUEST['datetype']."'";
	mysql_query($sql) or die(mysql_error());
	}
	
	
	}
	
	$getletter = "select * from letters where lettername = 'anyone'";
	$getquery = mysql_query($getletter) or die(mysql_error());
	$rsletter = mysql_fetch_array($getquery);


	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('left-nav.php');?> <!--left-menu -->

<div class="page">
    
    <div class="page-nav">
    	<!--<ul>
        	<li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
            <li> <a href="#"> Write New   </a> </li>
			<li> <a href="#"> Manage Articles  </a> </li>
            <li> <a href="#"> Manage Comments </a> </li>
            <li> <a href="#"> Manage categories</a> </li>
        </ul>-->
        <div class="clear"></div> <!--clear div -->

    </div> <!--page nav -->
    
  <div class="box1">
    	<h1> To Anyone</h1>
        <form action="" method="post" name="anyone">
		<table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Header</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea rows="4" cols="40" name="addressbox"  style="text-align:center; padding-top:15px; font-size:15px;"><?php echo $rsinfo['addressbox']; ?></textarea></td>
    <td rowspan="3"><table width="100%" border="0" cellspacing="5" cellpadding="0" >
      
      
      <tr>
        <td colspan="2" style="padding-left:62px;">Reply Message </td>
        </tr>
      <tr>
        <td width="16%">&nbsp;</td>
        <td width="84%">&nbsp;</td>
      </tr>
      <tr>
         <tr>
        <td><div align="right">
          <?php if($rsletter['reply']=="Urgent"){
		  echo '<input type="radio" checked="checked" name="reply" value="Urgent">';
		  }else{
		   echo '<input type="radio" name="reply" value="Urgent">';
		  }
		  ?>
        </div></td>
        <td>Urgent </td>
      </tr>
      <tr>
        <td><div align="right">
          <?php if($rsletter['reply']=="Need Reply"){
		  echo '<input type="radio" checked="checked" name="reply" value="Need Reply">';
		  }else{
		   echo '<input type="radio" name="reply" value="Need Reply">';
		  }
		  ?>
        </div></td>
        <td>Reply Needed </td>
      </tr>
      <tr>
        <td><div align="right">
		<?php if($rsletter['reply']=="No Reply Need"){
		  echo '<input type="radio" checked="checked" name="reply" value="No Reply Need">';
		  }else{
		   echo '<input type="radio" name="reply" value="No Reply Need">';
		  }
		  ?>
          
        </div></td>
        <td>No Reply Needed </td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">Date:</div></td>
        <td><input type="text" name="datetype" value="<?php echo $rsletter['letterdate'];?>"/></td>
      </tr>
      <tr>
        <td><div align="right">Subject:</div></td>
        <td><input type="text" name="subject"  value="<?php echo $rsletter['subject'];?>"/></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Anyone </td>
    </tr>
  <tr>
    <td><textarea rows="4" cols="40" name="toanyone"  style="text-align:center; padding-top:15px; font-size:15px;"><?php echo $rsletter['cnd'];?></textarea></td>
    </tr>
  <tr>
    <td>Body Message </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="bodytext" rows="20" cols="150"><?php echo $rsletter['bodytext'];?></textarea></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="right">
	<input type="hidden" name="open" value="anyone" />
	<input type="submit" name="submit" value=" Save Letter " /></td>
    <td width="67%">&nbsp;</td>
  </tr>
</table>
		</form>

  </div>
    <!--box1 -->
    <!--box 2 -->
<p>
        
   
    <br />
    <br />
    <br />
    <!-- sucess -->
    <!-- error -->
    <!-- warning -->
    <!-- information -->
<div class="footer">
    &copy; Copyright 2011 Admin panel | Powered by: <a href="#" class="green"> JJTECHNOLOGIES</a>
  </div><!--footer -->
</div><!--page -->

<div class="clear"></div> <!--clear div -->

</body>
</html>
