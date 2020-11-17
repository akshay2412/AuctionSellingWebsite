<?php
session_start();
$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);

$a=$_POST['productname'];
$b=$_POST['description'];
$c=$_POST['minbid'];
$d=$_POST['sdate'];
$e=$_POST['edate'];
$f=$_POST['category'];
$postid = $_POST['postid'];

$name=$_FILES['productimage']['name'];
$temp=$_FILES['productimage']['tmp_name'];

move_uploaded_file($temp,'upload/'.$name);

 if($_POST['submit']!='')
{
    $x="insert into additem(Product_name,Description,Min_bid,Start_date,
   End_date,Category,Image,CreateDate,SellerId) values('$a','$b',$c,'$d','$e','$f','$name',now(),'".$_SESSION['id']."')"; 
    $Rsc = mysql_query($x);
	
	if($Rsc)
	{
    header("location:add.php");
	}
}

 if($_POST['Update']!='')
{
    $x="updatte additem set Product_name='$a',Description='$b',Min_bid='$c',Start_date='$d',End_date='$e',Category='$f',Image='$name',CreateDate=now() where id='$postid'"; 
    $Rsc = mysql_query($x);
	
	if($Rsc)
	{
    header("location:add.php");
	}
}
?>