<?php
include "library/config.php";

$cat_id=$_GET['prod_id'];

$del=mysql_query("delete from item where item_id='$cat_id'") or die(mysql_error());
header("location:item.php");


?>