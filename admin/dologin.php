<?php

require_once 'library/functions.php';
require_once '../library/config.php';


if (isset($_POST['txtUserName'])) {
echo "";
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}
?>