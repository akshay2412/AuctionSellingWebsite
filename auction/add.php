<?php
session_start();
$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);

$Select = "SELECT * FROM biding WHERE  SalerId='".$_SESSION['id']."'";
$Rsc  = mysql_query($Select);
 

?>
<html>
<head>
<link rel="stylesheet" href="add.css">
</head>
<body>
<div id="main">

       <div id="logo">
	     <tr>
		 <td>
		 <img src="logo1.png">
		 </td>
		 
		 <td align="right"><?php echo $_SESSION['name'];?></td>
		 </tr>
	   </div>
	  
	  <div id="forlogin">
          <?php include("menu.php"); ?>
      </div>

<div id="addform">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post"  enctype="multipart/form-data" action="additem1.php">
<table>

<tr>
<td id="un">Product Name </td>
<td><input type="text" name="productname" id="productname" placeholder="Enter Product Name" required/></td>
</tr>

<tr>
<td id="ps">Description</td>
<td><input type="text" name="description"  id="description" placeholder="Enter Product Description" required/></td>
</tr>

<tr>
<td id="cps">Min Bid Price</td>
<td><input type="text" name="minbid"  id="minbid" placeholder="Enter Minimum Bid Price" required/></td>
</tr>

<tr>
<td id="fn">Start Date</td>
<td><input type="date" name="sdate"  id="sdate" placeholder="Enter Start Date" required/></td>
</tr>

<tr>
<td id="ln">End Date</td>
<td><input type="date" name="edate"  id="edate" placeholder="Enter End Date" required/></td>
</tr>

<tr>
<td id="ut">Category</td>
<td>
<?php
$sel = "select * from category";
$rsc = mysql_query($sel);
?>
<select name="category" id="category">
<option value=""></option>
<?php
	while($data = mysql_fetch_array($rsc))
	{
?>
<option value="<?php echo $data['CateName']?>"><?php echo $data['CateName']?></option>
<?php } ?>
</select></td>
</tr>

<tr>
<td id="em">Product Image</td>
<td><input type="file" name="productimage" required/></td>
</tr>
</table>
</div>
<div id="register">
</br>
<tr>
<td><input type="submit"  name="submit" value="ADD ITEM" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
<?php 
$today=date("Y-m-d")." ".date("h:i:sa");
while($Data = mysql_fetch_array($Rsc))
	{
?>	
<?php $date=$Data['End_date'];

if($today>$date)
{
	$q="Select * from biding where ProductId='".$data['id']."'";
	$Rsc1  = mysql_query($Select);
	$max=0;
	$sold_to=0;
	while($row = mysql_fetch_array($Rsc1))
		
	{
		if($row['BidAmount']>$max)
		{
			$max=$row['BidAmount'];
			$sold_to=$row['BiderId'];
		}
		
	}
	$msg='Item '.$Data['id'].' sold to ucstomer id'.$sold_to.' at price '.$max;
	
	echo "<script type='text/javascript'>alert('$msg');</script>";
	
}
?>
<?php } ?>
</body>
</html>