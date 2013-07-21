<?php

include "scripts/config.php";
if(isset($_GET['budgetCode'])){

$select=mysql_query("select * from item where cat_id='".$_GET['budgetCode']."'");

while($result=mysql_fetch_array($select))
{
		$id=$result['cat_id'];
		$description=$result['item_name'];
  switch($_GET['budgetCode']){
    case "$id":
      echo "obj.options[obj.options.length] = new Option('$description');\n";
     break;
    }  
}
}

?> 

 