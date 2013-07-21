<?php
include "library/config.php";
$id=$_GET['id'];

$del=mysql_query("delete from location where id='$id'") or die(mysql_error());
header("location:location.php");

?>