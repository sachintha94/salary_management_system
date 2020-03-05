<?php session_start();?>
<?php require('inc/connection.php');?>
<?php
	//checking if a user is logged in
	if(!isset($_SESSION['staffno'])){
		header('location:index.php');
	}
?>	

<?php

	//check for the submision button
	if (isset($_POST['submit']))
  {
	 	$errors = array();
		//check all are entered
		if (!isset($_POST['staffno'] )){
		$errors[] = 'staff no  is Missing';}

		if (!isset($_POST['username'] )){
		$errors[] = 'username  is Missing';}

		if (!isset($_POST['fname'] )){
		$errors[] = 'first name  is Missing';}

		if (!isset($_POST['lname'] )){
		$errors[] = 'lastname  is Missing';}

		if (!isset($_POST['password'] )){
		$errors[] = 'password is Missing';}

		if (!isset($_POST['division'] )){
		$errors[] = 'division is Missing';}

		if (!isset($_POST['birday'] )){
		$errors[] = 'birthday is Missing';}

		if (!isset($_POST['telephone'] )){
		$errors[] = 'telephone is Missing';}

		if (!isset($_POST['address'] )){
		$errors[] = 'address is Missing';}

		if (!isset($_POST['bankno'] )){
		$errors[] = 'bank no  is Missing';}
		
		//check if there are any error in the form
	    if(empty($errors)) 
	    	echo "$errors";
	   {
		  	 //save all details in to variables
	  	     $staffno   = mysqli_real_escape_string($connection, $_POST['staffno']);
	  	     $username  = mysqli_real_escape_string($connection, $_POST['username']);
	         $fname     = mysqli_real_escape_string($connection, $_POST['fname']);
	  	     $lname     = mysqli_real_escape_string($connection, $_POST['lname']);
	  	     $password  = mysqli_real_escape_string($connection, $_POST['password']);
	  	     $division  = mysqli_real_escape_string($connection, $_POST['division']);
	  	     $birthday  = mysqli_real_escape_string($connection, $_POST['birthday']);
	  	     $telephone = mysqli_real_escape_string($connection, $_POST['telephone']);
	  	     $address   = mysqli_real_escape_string($connection, $_POST['address']);
	  	     $bankno    = mysqli_real_escape_string($connection, $_POST['bankno']);

	  	      //Prepare database qurry
	             $query = "INSERT INTO 'login' ('staff_no', 'u_name', 'password', 'division') VALUES ('$staffno', '$username', '$password', '$division')";
                     

	             $query1 = "INSERT INTO 'user' ('f_name', 'l_name', 'telephone', 'address', 'bank_no', 'b_day') VALUES ('$fname', '$lname', '$telephoneno', '$address', '$bankno','$birthday')";
                     
	             $result_set = mysqli_query($connection, $query);
	             $result_set1 = mysqli_query($connection, $query1);
                  
                  
	             if ($result_set)
	               {
		             	//$query successful
		             	if (mysqli_num_rows($result_set) == 1)
		             	{
		             		//vali user found
		             		header('location: user.php');
		             	}
		             		else
		             		{
		                     $errors[] = 'Invalid user';
		             	   }

	             }


	             if ($result_set1)
	               {
		             	//$query successful
		             	if (mysqli_num_rows($result_set1) == 1)
		             	{
		             		//vali user found
		             		header('location: user.php');
		             	}
		             		else
		             		{
		                     $errors[] = 'Invalid user';
		             	   }

	             }
	             

  	    
  	    }
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registion</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="user">
	<form action="newuser.php" method="POST">
		<header>
 			<div class="appname"> New User Registion</div>
 			<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>!<a href="logout.php">Log Out</a></div>
 		</header>
 		<div class='registionbox'>
 			<h1>New Registion</h1>
 			<form>
				<p>01).Staff No</p>
				<input type="text" name="staffno" placeholder="Enter Staff no" >
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
				<input type="Submit" name="submit" value="Submit"></input> 
			</form>
		</div>
	</form>
</body>
</html>