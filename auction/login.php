<?php
session_start();
?>

<html>
<head>
<title>Auction</title>
<link rel="stylesheet" href="register.css">
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
          <?php include("menu.php");?>
      </div>

<div id="form">
 

 <div>
<form name="regi" method="post" action="log.php">
<table>

<tr>
<td id="un">UseName </td>
<td><input type="text" name="username" id="username" placeholder="Enter User" required/></td>
</tr>

<tr>
<td id="ps">Password</td>
<td><input type="Passwoord" name="password"  id="password" placeholder="Password" required/></td>
</tr>
</table>
</div>
<div id="register">
</br>
<tr>
<td><input type="submit"  name="submit" value="Login" id="submit"></td>
</tr>
</div></br>


<div id="footer">
<p>Copyright &copy; 2019 Auction.com All rights reserved.</p>
</form>
</div>

</div>
</div>
</body>
</html>