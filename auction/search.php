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
		 
		 </tr>
	   </div>
	  
	  <div id="forlogin">
          <?php include("menu.php");?>
      </div>

<div id="form">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="search" method="post" action="show.php">
<table>

<tr>
<td id="un">Enter location </td>
<td><input type="text" name="loc" id="loc" placeholder="Enter Location" /></td>
</tr>

<tr>
<td id="ps">Enter price </td>
<td><input type="text" name="price"  id="price" placeholder="Price" /></td>
</tr>
<tr>
<td >Enter price </td>
<td><input type="text" name="name"  id="name" placeholder="Product name" /></td>
</tr>
<tr>
<td>Enter price </td>
<td><input type="text" name="sid"  id="sid" placeholder="Seller id" /></td>
</tr>
<tr>
<td >Enter price </td>
<td><input type="date" name="dat"  id="dat" /></td>
</tr>
<tr>
<td><input type="submit"  name="submit" value="SEARCH" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
</body>
</html>