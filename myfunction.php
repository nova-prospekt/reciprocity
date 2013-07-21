<?php
function getautorenew(){
	$sql="select * from tbladmin";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return $row['autorenew'];
	}else{
		return "Off";
	}
}

function getoldpass(){
	$sql="select * from tbladmin";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return $row['password'];
	}else{
		return "";
	}
}
function checkusername($username){
	$sql="select * from tblmembers where username='".$username."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return false;
	}else{
		$sql_sub_user="select * from tblmembers where cuser='".$username."'";
		$rs_sub_user=mysql_query($sql_sub_user);
		if(mysql_num_rows($rs_sub_user) > 0){
			return false;
		}else{
			return true;
		}
		
	}
}
function getexpiryduration($id){
	$sql="select * from tblproduct where id='".$id."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return $row['duration'];
	}else{
		return "12";
	}
}
function americandate($dated){
		$monthname=array('0','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	
	$date_arr=explode("-",$dated);
	if($date_arr[1] < 10){
		return $date_arr[2]."-".$monthname[substr($date_arr[1],1,1)]."-".$date_arr[0];
	}else{
		return $date_arr[2]."-".$monthname[$date_arr[1]]."-".$date_arr[0];
	}
	//return $date_arr[1]."-".$date_arr[2]."-".$date_arr[0];
}

function getmembername($id){
	$sql="select * from tblmembers where id='".$id."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return $row['firstname']." ".$row['lastname'];
	}else{
		return "Member";
	}
}
function checkcoupon($coupon){
	$sql="select * from tblcoupon where coupon='".$coupon."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return false;
	}else{
		return true;
	}
}

function getmembership($id,$field){
	$sql="select ".$field." from tblproduct where id='".$id."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	return $row[$field];
}

function getdiscount($coupon,$field){
	$sql="select ".$field." from tblcoupon where coupon='".$coupon."' and status='active' and validdate >= '".date('Y-m-d')."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return $row[$field];
	}else{
		return "invalid";
	}
}
function getmemberoldpass($id){
	$sql="select * from tblmembers where id='".$id."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return $row['password'];
	}else{
		return "";
	}
}

function getmemberinfo($id,$field){
	$sql="select * from tblmembers where id='".$id."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
	$row=mysql_fetch_array($rs);
		return $row[$field];
	}else{
		return "";
	}
}
function checkusernamenew($username){
	$sql="select * from tblmembers where username='".$username."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if(mysql_num_rows($rs) > 0){
		return false;
	}else{
		$sql_sub_user="select * from tblmembers where cuser='".$username."'";
		$rs_sub_user=mysql_query($sql_sub_user);
		if(mysql_num_rows($rs_sub_user) > 0){
			return false;
		}else{
			return true;
		}
		
	}
}
function getemaildata($id){
	$sql="select * from tblautoemails  where id='".$id."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
	$row=mysql_fetch_array($rs);
		return $row;
	}else{
		return "";
	}
}

function getOpenEmailData($id){
	$sql="select * from tblautoemails  where id='".$id."' AND restrict_autoemail = 'No'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
	$row=mysql_fetch_array($rs);
		return $row;
	}else{
		return "";
	}
}


function memberid($username){
	$sql="select * from tblmembers where username='".$username."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
		$row=mysql_fetch_array($rs);
		return $row['id'];
	}else{
		return false;
	}
}

function siterandom($no){
$totalChar = $no;  //length of random number
$salt = "abcdefghijklmnpqrstuvwxyz123456789";  // salt to select chars
srand((double)microtime()*1000000); // start the random generator
$password=""; // set the inital variable
for ($i=0;$i<$totalChar;$i++)  // loop and create number
$randnumber= $randnumber. substr ($salt, rand() % strlen($salt), 1);

return $randnumber;
}

function updatememberpass($pass,$id){
$sql="update tblmembers set password='".$pass."' where id='".$id."'";
if(mysql_query($sql)){
	return true;
}else{
	return false;
}
}

function memberidemail($email){
	$sql="select * from tblmembers where email='".$email."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
		$row=mysql_fetch_array($rs);
		return $row['id'];
	}else{
		return false;
	}
}
function cchalf($cc)
{
	$cclen=strlen($cc);
	$ccfour=4;
	$xvalue=$cclen-$ccfour;
	$newcc="";
	for($i=1;$i<=$xvalue;$i++)
	{
		$newcc.="X";
	}
	return $newcc.=substr($cc,$xvalue,4);
}
function memberidmain($username){
	$sql="select * from tblmembers where username='".$username."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
		$row=mysql_fetch_array($rs);
		return $row['id'];
	}else{
		$sqlemail="select * from tblmembers where email='".$username."'";
		$rsemail=mysql_query($sqlemail);
		if(mysql_num_rows($rsemail) > 0){
			$rowemail=mysql_fetch_array($rsemail);
			return $rowemail['id'];
		}else{
			return false;
		}
	}
	return false;
}

function getpersonalinfo($memberid){
	$sql="select * from tblmembers where id='".$memberid."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
		$row=mysql_fetch_array($rs);
		$info="";
		$info="Name: ".$row['firstname']." ".$row['lastname'];
		$info.="<br>";		
		$info.="Title: ".$row['title'];
		$info.="<br>";		
		$info.="Organization: ".$row['organization']; 
		$info.="<br>";		
		$info.="Address 1: ".$row['address1']; 
		$info.="<br>";		
		$info.="Address 2: ".$row['address2']; 
		$info.="<br>";		
		$info.="City: ".$row['city']; 
		$info.="<br>";		
		$info.="State:".$row['state'];
		$info.="<br>";		
		$info.="Postal Code: ".$row['code']; 
		$info.="<br>";		
		$info.="Country: ".$row['country']; 
		$info.="<br>";		
		$info.="Phone: ".$row['phone']; 
		$info.="<br>";		
		$info.="Fax: ".$row['fax'];
		$info.="<br>";		
		$info.="Email: ".$row['email']; 
		$info.="<br>";		
		$info.="<br>";		
		$info.="<b>Your Credit Card Info:</b>";
		$info.="<br>";		
		$info.="Card Type: ".$row['cardtype'];
		$info.="<br>";		
		$info.="Card Numbe: ".substr($row['cardnumber'],strlen($row['cardnumber'])-4,strlen($row['cardnumber']));   
		$info.="<br>";		
		$info.="CSC: ".$row['csc']; 
		$info.="<br>";		
		$info.="Expiration Month: ".$row['comnth'];
		$info.="<br>";		
		$info.="Expiration Year: ".$row['cyear'];
		$info.="<br>";		
		return $info;
	}else{
		return "";
	}
}

function getpersonalinfo_array($memberid){
	$sql="select * from tblmembers where id='".$memberid."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
		$row=mysql_fetch_array($rs);
		return $row;
	}else{
		return "";
	}
}

function getsubsinfo($memberid,$coupon){
	$sql="select * from tblmembers where id='".$memberid."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs) > 0){
		$row=mysql_fetch_array($rs);
		$info.="Your Selected Subscription: ". getmembership($row['productid'],'pname');
		$info.="<br>";		
		$info.="Subscription Amount: ". getmembership($row['productid'],'price');
		$info.="<br>";		

		if($coupon){
			$info.="(Discount Coupon Name: ". getdiscount($coupon,'copontitle');
			$info.=" and Coupon No: ". $coupon.")";
			$info.="<br>";
			$amount=getdiscount($coupon,'amount');
			if(getdiscount($coupon,'distype')=='percent'){
				$totaldicount=getmembership($row['productid'],'price')*$amount/100;
				$totalamount=getmembership($row['productid'],'price')-$totaldicount;
				$info.=$amount." % Discount: ". $amount;
				$info.="<br>";
				$info.="Your Payable Amount: ". $totalamount;
				$info.="<br>";
			}else{
				$totalamount=getmembership($row['productid'],'price')-$amount;
				$info.="Discount Amount: ". $amount;
				$info.="<br>";
				$info.="Your Payable Amount: ". $totalamount;
				$info.="<br>";
			}
		}else{
			$totalamount=getmembership($row['productid'],'price');
			$info.="Your Payable Amount: ". $totalamount;
			$info.="<br>";
		}
		return $info;
	}else{
		return false;
	}
}

#*******************************************#
#Method:		getProductPrice();			#
#Arguments:		product id;					#
#return type:	database result row.		#
#author:		msibtain.					#
#*******************************************#
function getProductPrice($productid)
{
	$query = "SELECT price FROM tblproduct WHERE id = " . $productid;
	$result = mysql_query( $query );
	return mysql_fetch_array($result);
}

?>