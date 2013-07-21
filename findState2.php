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
#### fell free to visit my blog http://roshanbh.com.np
?>

<?php $country=intval($_GET['country']);
$query="SELECT * FROM item WHERE cat_id='$country' group by item_name";
$result=mysql_query($query);

?>
<select name="sub_category" onchange="getCity(<?php echo $country?>,this.value)">
<option>Select Sub Category</option>
<?php while($row=mysql_fetch_array($result)) { 
$itemname=$row['item_name'];
?>
<option value=<?php echo $itemname;?>><?php echo $itemname;?></option>
<?php } ?>
</select>
