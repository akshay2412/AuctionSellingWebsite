<?php
session_start();
include("function.php");

$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);

$Select = "select * from additem where id='".$_GET['id']."'";
$Rsc  = mysql_query($Select);
$Data = mysql_fetch_array($Rsc);

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
<td><?php echo $Data['Product_name']?></td>
</tr>

<tr>
<td id="ps">Description</td>
<td><?php echo $Data['Description']?></td>
</tr>

<tr>
<td id="cps">Min Bid Price</td>
<td><?php echo $Data['Min_bid']?></td>
</tr>

<tr>
<td id="fn">Start Date</td>
<td><?php echo $Data['Start_date']?></td>
</tr>

<tr>
<td id="ln">End Date</td>
<td><?php echo $Data['End_date']?></td>
</tr>

<tr>
<td id="ut">Category</td>
<td>
<?php echo $Data['Category']?></td>
</tr>

<tr>
<td id="em">Create date</td>
<td><?php echo $Data['CreateDate']?></td>
</tr>
<tr>
<td id="em">Product Image</td>
<td><img src="upload/<?php echo $Data['Image']?>" height="150" width="150"></td>
</tr>

<tr>
<td id="em">Saler</td>
<td><?php echo UserName($Data['SellerId'])?></td>
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