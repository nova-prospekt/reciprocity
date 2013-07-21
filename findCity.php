<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
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
$stateId=$_GET['state'];
$query="SELECT * FROM item WHERE cat_id='$countryId' and item_name LIKE '%$stateId%'";
$result=mysql_query($query);

?>

<select name="item" id="item" onchange="run(this.value)">
<option>Select Item</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['item_id'];?>"><?php echo $row['sub_category'];?></option>
<?php }

 ?>
</select>
