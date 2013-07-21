<?php
session_start();
ob_start();
include"config.php";
$name=$_REQUEST['username'];
$status=$_REQUEST['status'];

if($status=="deactiv"){
if(isset($name)){
	$query="delete from userinfo where Username='$name'";
	mysql_query($query);
	session_destroy();
	header('Location:../index.php');
}}
$statuscp=$_POST['status'];
$oldpass=$_POST['oldpass'];
$Password=$_POST['Password'];
$username=$_POST['username'];
if($statuscp=="changepass"){
	echo "change pass".$username.$oldpass;
	echo $query="SELECT * FROM userinfo WHERE Username='$username' and Password='$oldpass'";
	
	$row=mysql_query($query);
	if($row=mysql_num_rows($row)>0){
		$query="UPDATE `userinfo` SET `Password`='$Password' WHERE `Username`='$username'";
		mysql_query($query);
		echo "Password Updated";
		header('Location:../profile.php');
	}
	
}
 ?>