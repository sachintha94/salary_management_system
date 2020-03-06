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
	if (isset($_POST['submit'])){
		$errors = array();
		
		
		//check if there are any error in the form
	    if(empty($errors)){
			  	 //save all details in to variables
		  	     $staff_no  = mysqli_real_escape_string($connection, $_POST['staff_no']);
		  	     $u_name    = mysqli_real_escape_string($connection, $_POST['u_name']);
		  	     $password  = mysqli_real_escape_string($connection, $_POST['password']);
		  	     $division  = mysqli_real_escape_string($connection, $_POST['division']);
		  	     $f_name    = mysqli_real_escape_string($connection, $_POST['f_name']);
		  	     $l_name    = mysqli_real_escape_string($connection, $_POST['l_name']);
		  	     $telephone = mysqli_real_escape_string($connection, $_POST['telephone']);
		  	     $address   = mysqli_real_escape_string($connection, $_POST['address']);
		  	     $bank_no   = mysqli_real_escape_string($connection, $_POST['bank_no']);
		         $b_day     = mysqli_real_escape_string($connection, $_POST['b_day']);
		  	     

	  	      //Prepare login database query
	             $query = "INSERT INTO login (staff_no, u_name, password, division) VALUES ('$staff_no', '$u_name', '$password', '$division')";
                     

                     $result = mysqli_query($connection, $query);
                     if ($result) {
                     	//quer successful.... redirecting to users page
                     	header('location: user.php');
                     } else {
                     	 $errors[] = 'failed to add the new record.';
                     }

              //Prepare user database query
              $sql = "INSERT INTO user (f_name, l_name, telephone, address, bank_no, b_day) VALUES ('$f_name', '$l_name', '$telephone', '$address', '$bank_no', '$b_day')";   


                      $result1 = mysqli_query($connection, $sql);
	                     if ($result1) {
	                     	//quer successful.... redirecting to users page
	                     	header('location: user.php');
	                     } else {
	                     	 $errors[] = 'failed to add the new record.';
	                     }    
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header>
 		<div class="appname"> Salary Management Sheet</div>
 		<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>!<a href="logout.php">Log Out</a></div>
 	</header>
 	<main>
 		<h1>User Registration Form <span><a href="user.php">View Main Page</a></span></h1>
 	    <div class="registionbox">
		   
	 		<form action="newuser.php" method="post" class="userform">
		 		<p>01).Staff No</p>
				<input type="text" name="staff_no" placeholder="Enter Staff No" required>

				<p>02).User Name</p>
				<input type="text" name="u_name" placeholder="Enter User Name" required>

				<p>03).Password</p>
				<input type="text" name="password" placeholder="Enter Password" required>

				<p>04).Division</p>
				<input type="text" name="division" placeholder="Enter Division" required>

				<p>05).First Name</p>
				<input type="text" name="f_name" placeholder="Enter First Name" required>

				<p>06).Last Name</p>
				<input type="text" name="l_name" placeholder="Enter Last Name" required>

				<p>07).Telephone</p>
				<input type="text" name="telephone" placeholder="Enter Telephone" required>

				<p>08).Address</p>
				<input type="text" name="address" placeholder="Enter Address" required>

				<p>09).Bank Account No</p>
				<input type="text" name="bank_no" placeholder="Enter Bank Account No" required>

				<p>10).Birthday</p>
				<input type="text" name="b_day" placeholder="Enter Birthday" required>

				<input type="Submit" name="submit" value="Submit"></input> 
	        </form>
        </div>
 	</main>
</body>
</html>