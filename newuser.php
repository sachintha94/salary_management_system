<?php require('inc/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registion</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="user">
	<header>
 		<div class="appname"> New User Registion</div>
 		<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>! <a href="logout.php">Log Out</a></div>
 	</header>
 	<div class='registionbox'>
 	<h1>New Registion</h1>
 		<form>
		<p>01).Staff No</p>
		<input type="text" name="staffno" placeholder="Enter Staff no">
		<p>02).User name</p>
		<input type="text" name="username" placeholder="Enter Username">
		<p>03).First Name</p>
		<input type="text" name="fname" placeholder="Enter First name">
		<p>04).Last Name</p>
		<input type="text" name="lname" placeholder="Enter Last name">
		<p>05).Password</p>
		<input type="text" name="password" placeholder="Enter Password">
		<p>06).Division</p>
		<input type="text" name="division" placeholder="Enter Division">
		<p>07).Birthday</p>
		<input type="date" name="birthday" placeholder="Enter date of birth">
		<p>08).Telephone Number</p>
		<input type="Telephone" name="telephone" placeholder="Enter Telephone number">
		<p>09).Address</p>
		<input type="Address" name="address" placeholder="Enter Address">
		<p>10).Bank Account No</p>
		<input type="text" name="bankno" placeholder="Enter Bank Account No">
		<input type="Submit" name="" value="Submit"></input> 
	</form>
</div>
</body>
</html>