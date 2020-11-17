<?php
function UserName($id)
{
	$Select = "select * from user where id='$id'";
	$Rsc  = mysql_query($Select);
	$Data = mysql_fetch_array($Rsc);
	return $Data['UserName'];
}
function ProductName($id)
{
	$Select = "select * from additem where id='$id'";
	$Rsc  = mysql_query($Select);
	$Data = mysql_fetch_array($Rsc);
	return $Data['Product_name'];
}

function Product($id)
{
	$Select = "select * from additem where id='$id'";
	$Rsc  = mysql_query($Select);
	$Data = mysql_fetch_array($Rsc);
	return $Data['Image'];
}


?>