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
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post" action="register.php">
<table>
<?php if($_GET['msg']=='chk') { echo "already exist"; } else if($_GET['msg']=='suc') { echo "save"; }?>
<tr>
<td id="ut">User Type </td>
<td>
<select name="utype" id="select">
<option value="0"></option>
<option value="1">SALER</option>
<option value="2">BIDDER</option>
</select></td>
</tr>

<tr>
<td id="un">User Name </td>
<td><input type="text" name="username" id="uname" placeholder="Enter User Name" required/></td>
</tr>

<tr>
<td id="ps">Password </td>
<td><input type="password" name="password"  id="pass" placeholder="Enter Password" required/></td>
</tr>

<tr>
<td id="cps">Confirm Password </td>
<td><input type="password" name="cpassword"  id="cpass" placeholder="Enter Confirm Password" required/></td>
</tr>

<tr>
<td id="fn">First Name </td>
<td><input type="text" name="fname"  id="fname" placeholder="Enter Last Name" required/></td>
</tr>

<tr>
<td id="ln">Last Name </td>
<td><input type="text" name="lname"  id="lname" placeholder="Enter First Name" required/></td>
</tr>

<tr>
<td id="em">E_mail </td>
<td><input type="email" name="email"  id="email" placeholder="Enter Email" required/></td>
</tr>

<tr>
<td id="addr">Address </td>
<td><input type="text" name="address"  id="address" placeholder="Enter Address" required/></td>
</tr>

<tr>
<td id="cn">Contact No. </td>
<td><input type="text" name="contact"  id="contact" placeholder="Enter Contact no" required/></td>
</tr>

<tr>
<td id="cd">Create Date </td>
<td><input type="date" name="create"  id="create" placeholder="Enter date" required/></td>
</tr>
</div>
</table>
<div id="register">
</br>
<tr>
<td><input type="submit"  name="submit" value="REGISTER" id="submit"></td>
</tr>
<p id="p">Already have an account?<a  id="loginlink" href="login.html"> Login</a></p>
</div>
</form>
</div>
</div>
</body>
</html>