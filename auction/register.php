<?php
$con=mysql_connect('localhost','root','');
$db=mysql_select_db("auction",$con);


$a=$_POST['utype'];
$b=$_POST['username'];
$c=$_POST['password'];
$d=$_POST['cpassword'];
$e=$_POST['fname'];
$f=$_POST['lname'];
$g=$_POST['email'];
$h=$_POST['address'];
$i=$_POST['contact'];
$j=$_POST['create'];


 if($_POST['submit']!='')
 {
	$select = "select * from user where UserName='$b'";
	$Rsc = mysql_query($select);
	$Date = mysql_fetch_array($Rsc);
	if($Date['UserName']!='')
	{
	header("location:register1.php?msg=chk");
	}
	else
	{
    $x="insert into user(UserType,UserName,Password,FName,LName,Email,Address,ContactNo,CreateDate) values('$a','$b','$c','$e','$f','$g','$h',$i,now())"; 

     $y = mysql_query($x);
     mysql_close($con);
	 header("location:register1.php?msg=suc");
  	}
  }

?>