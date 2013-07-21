<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");	
//echo $_SERVER['DOCUMENT_ROOT'];
//Connect To Database
    $hostname = 'localhost';
    $username = 'root';
    $password = '';

    $con = mysql_connect($hostname,$username,$password);
 mysql_select_db("procity");
 
#define(MYURL,"http://www.juryinstruction.com/");
define(MYURL,"http://localhost/proci/");

function page_check($page){
	$string = $_SERVER['PHP_SELF'];
    $pos = strpos($string, $page);
    if ($pos ) {
        header("Location: ".MYURL."index.shtml");
		die();
    } 
	/*if (preg_match($page,$_SERVER['PHP_SELF'])) {
		header("Location: ".MYURL."index.shtml");
		die();
	}*/
}
//page_check("conn.php");


?>