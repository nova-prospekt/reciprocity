<?php
include "library/config.php";


$del=mysql_query("delete from item") or die(mysql_error());
header("location:item.php");


?>