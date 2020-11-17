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
      <form name="veri" method="post" action="check.php">
      Enter your email id for verification code to be sent:<br>
      <input type='text' name='mail' id='mail' placeholder='Enter your mail id'>
      <br>
      <input type="submit"  name="submit" value="Click here" id="submit">
      </form>
</div>

</body>
</html>
