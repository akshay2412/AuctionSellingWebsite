<?php
session_start();
$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);

$Catname = $_POST['Catname'];
$msg = $_GET['msg'];

if($_POST['submit'])
{

$ins = "insert into category set CateName='$Catname'";
$Rsc = mysql_query($ins);	
	if($Rsc)
	{
	header("location:category.php?msg=Save");
	}
	else
	{
	header("location:category.php?msg=Error");
	}

}

?>
<html>
<head>
<link rel="stylesheet" href="add.css">
</head>
<body>
<div id="main">

       <div id="logo">
	     <img src="logo1.png">
		 <?php echo $_SESSION['name'];?>
	   </div>
	  
	  <div id="forlogin">
          <?php include("menu.php"); ?>
      </div>

<div id="addform">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post"  action="">
<table>
<tr>
	<td><?php echo $msg;?></td>
</tr>
<tr>
<td id="un">Category Name </td>
<td><input type="text" name="Catname" id="Catname" placeholder="Enter Product Name" required/></td>
</tr>

</table>
</div>
<div id="register">
</br>
<tr>
<td><input type="submit"  name="submit" value="Add Category" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
</body>
</html>