<?php

include "connection.php";



$select=mysql_query("select * from projects");

while($result=mysql_fetch_array($select))

{



		$id=$result['id'];

		$description=$result['description'];

if(isset($_GET['budgetCode'])){

  

  switch($_GET['budgetCode']){

    

    case "$id":

	

      echo "obj.options[obj.options.length] = new Option(' $description');\n";

     

    

     break;

    }  

}

}

?> 

 