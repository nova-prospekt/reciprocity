<!--//---------------------------------+
//  Developed by Roshan yasir Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->

<?php
include "scripts/config.php";
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://php-ajax-guru.blogspot.com
?>

<?php $countryId=intval($_GET['country']);
//$stateId=$_GET['state'];

$query="SELECT * FROM item WHERE item_id='$countryId'";
$result=mysql_query($query)  ;

?>

<?php while($row=mysql_fetch_array($result)) { ?>
<input type="hidden" name="emax" id="emax" value="<?php echo $row['emax']?>">
<input type="hidden" name="emed" id="emed" value="<?php echo $row['emed']?>">
<input type="hidden" name="emin" id="emin" value="<?php echo $row['emin']?>">
<?php }

 ?>