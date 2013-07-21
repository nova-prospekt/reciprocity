<?php
include "library/config.php";
$cat_id=$_GET['cat_id'];

$del=mysql_query("delete from conditions where id='$cat_id'") or die(mysql_error());
header("location:condition.php");

?>