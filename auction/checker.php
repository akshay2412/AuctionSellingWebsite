<?php
 $code1=$_POST['code'];
 $mail=$_POST['email'];

echo "<script type='text/javascript'>alert('$code1');</script>";

echo "<script type='text/javascript'>alert('$mail');</script>";
$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);

$Select = "SELECT * from checker where mail='$mail' and code='$code1'";
$Rsc  = mysql_query($Select);
$c=mysql_num_rows($Rsc);
mysql_close($con);
echo $c;
if($c==1)
{
	header("location:register1.php");
}
else
{	
$message = "Wrong code";
echo "<script type='text/javascript'>alert('$message');</script>";

//header("location:verify.php");
}

 ?>