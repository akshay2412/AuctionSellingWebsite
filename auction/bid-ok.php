<?php
session_start();
include("function.php");

$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);

$Remark = $_POST['Remark'];


$Select = "SELECT * FROM biding WHERE  id='".$_GET['id']."'";
$Rsc  = mysql_query($Select);
$Data = mysql_fetch_array($Rsc);

if($_POST['BidOk'])
{
$Updatte = "update biding set Remark='$Remark' where id='".$_GET['id']."'";
$Rscx = mysql_query($Updatte);
}

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
<form name="regi" method="post"  enctype="multipart/form-data" action="">
<table>

<tr>
<td id="un">Product Name </td>
<td><?php echo ProductName($Data['ProductId'])?></td>
</tr>

<tr>
<td id="ps">Bidder</td>
<td><?php echo UserName($Data['BidderId'])?></td>
</tr>

<tr>
<td id="cps">Bid Price</td>
<td><?php echo $Data['BidAmount']?></td>
</tr>

<tr>
<td id="em">Product Image</td>
<td><img src="upload/<?php echo Product($Data['ProductId'])?>" height="150" width="150"></td>
</tr>

<tr>
<td id="em">Remarks</td>
<td><textarea name="Remark"></textarea></td>
</tr>

<tr>
<td id="em"</td>
<td><input type="submit" name="BidOk" value="BidOk"></td>
</tr>


</table>
</div>
<div id="register">
</br>
</div>
</form>
</div>
</div>
</body>
</html>