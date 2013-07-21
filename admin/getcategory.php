<?php

include "library/config.php";
if(isset($_GET['budgetCode'])){

$select=mysql_query("select * from sub_category where parent_id='".$_GET['budgetCode']."'");

while($result=mysql_fetch_array($select))
{
		$id=$result['parent_id'];
		$description=$result['sub_catname'];
  switch($_GET['budgetCode']){
    case "$id":
      echo "obj.options[obj.options.length] = new Option('$description');\n";
     break;
    }  
}
}

?> 

 