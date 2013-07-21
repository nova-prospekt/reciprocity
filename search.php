<?php
include "scripts/config.php";

$searchqry=$_POST['search'];

$sql_cat=mysql_query("select * from category where cat_name  LIKE '%$searchqry%'") or die(mysql_error());
$rows=mysql_num_rows($sql_cat);
if($rows>0)
{
	while($fetch_cat=mysql_fetch_array($sql_cat))
	{
		$catname= $fetch_cat['cat_name'];
		$cat_id=$fetch_cat['cat_id'];	
		header("location:city.php?cat_id=$cat_id");
	}
		
}

$sql_item=mysql_query("select * from item where (item_name LIKE '%$searchqry%') or (sub_category LIKE '%$searchqry%') ") or die(mysql_error());
echo $rowitem=mysql_num_rows($sql_item);


?>