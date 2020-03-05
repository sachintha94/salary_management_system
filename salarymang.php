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
		if (!isset($_POST['paysheetno'] )){
		$errors[] = 'paysheet no  is Missing';}

		if (!isset($_POST['month'] )){
		$errors[] = 'month is Missing';}

		if (!isset($_POST['bsalary'] )){
		$errors[] = 'basic salary  is Missing';}

		if (!isset($_POST['overtime'] )){
		$errors[] = 'lastname  is Missing';}

		if (!isset($_POST['festival'] )){
		$errors[] = 'festival is Missing';}

		if (!isset($_POST['loan'] )){
		$errors[] = 'loan is Missing';}

		if (!isset($_POST['leave'] )){
		$errors[] = 'leave is Missing';}
		
		//check if there are any error in the form
	    if(empty($errors)) 
	    	echo "$errors";
	   {
		  	 //save all details in to variables
	  	     $paysheetno = mysqli_real_escape_string($connection, $_POST['paysheetno']);
	  	     $month      = mysqli_real_escape_string($connection, $_POST['month']);
	  	     $staffno    = mysqli_real_escape_string($connection, $_POST['staffno']);
	         $bsalary    = mysqli_real_escape_string($connection, $_POST['bsalary']);
	  	     $overtime   = mysqli_real_escape_string($connection, $_POST['overtime']);
	  	     $festival   = mysqli_real_escape_string($connection, $_POST['festival']);
	  	     $loan       = mysqli_real_escape_string($connection, $_POST['loan']);
	  	     $leave      = mysqli_real_escape_string($connection, $_POST['leave']);
	  	     

	  	      //Prepare database qurry
	             $query = "INSERT INTO 'salary' ('paysheet_no', 'month', 'staff_no', 'staff_leave', 'staff_ot', 'staff_advance', 'b_salary', 'net_amount') VALUES ('$paysheetno', '$month', '$staffno', '$bsalary', '$overtime', '$festival', '$lone', '$leave')";
                     

	             
                     
	             $result_set = mysqli_query($connection, $query);
	             
                  
	             if ($result_set)
	               {
		             	//$query successful
		             	if (mysqli_num_rows($result_set) == 1)
		             	{
		             		//vali user found
		             		header('location: showsalary.php');
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
	<title>Salary Input</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="user">
	<form action="salarymang.php" method="POST">
	<header>
 		<div class="appname"> Salary Management Sheet</div>
 		<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>!<a href="logout.php">Log Out</a></div>
 	</header>
 	<div class='registionbox'>
 	<h1>New Salary Input</h1>
 		<form>
 		<p>01).Paysheet No</p>
		<input type="text" name="paysheetno" placeholder="Enter Paysheet No" required>
		<p>02).Month</p>
		<input type="text" name="month" placeholder="Enter Month" required>
		<p>03).Staff No No</p>
		<input type="text" name="staffno" placeholder="Enter staff No" required>
        <p>04).Basic Salary</p>
		<input type="text" name="bsalary" placeholder="Enter Basic Salary" required>
		<h2>Increment</h2>
		<p>05).Over Time</p>
		<input type="text" name="overtime" placeholder="Enter Over Time">
		<p>06).Festival Advance</p>
		<input type="text" name="festival" placeholder="Enter Festival Advance">
		<h3>Deduction</h3>
		<p>07).Loan</p>
		<input type="text" name="loan" placeholder="Enter loan deduction">
		<p>08).Leave</p>
		<input type="text" name="leave" placeholder="Enter Leave deduction">
		<input type="Submit" name="submit" value="Submit"></input> 
	</form>

</div>
</form>
</body>
</html>