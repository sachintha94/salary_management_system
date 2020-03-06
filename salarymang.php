
<?php session_start();?>
<?php require('inc/connection.php');?>
<?php
	//checking if a user is logged in
	if(!isset($_SESSION['staffno'])){header('location:index.php');}
?>	

<?php

	//check for the submision button
	if (isset($_POST['submit'])){
		$errors = array();
		
		
		//check if there are any error in the form
	    if(empty($errors)){
		  	 //save all details in to variables
	  	     $name        = mysqli_real_escape_string($connection, $_POST['name']);
	  	     $month       = mysqli_real_escape_string($connection, $_POST['month']);
	  	     $staff_no    = mysqli_real_escape_string($connection, $_POST['staff_no']);
	  	     $b_salary    = mysqli_real_escape_string($connection, $_POST['b_salary']);
	  	     $loan        = mysqli_real_escape_string($connection, $_POST['loan']);
	  	     $leave       = mysqli_real_escape_string($connection, $_POST['leave']);
	  	     $ot          = mysqli_real_escape_string($connection, $_POST['ot']);
	  	     $advance     = mysqli_real_escape_string($connection, $_POST['advance']);
	         $net_amount  = mysqli_real_escape_string($connection, $_POST['net_amount']);
			   
			 
			 echo $name.$month.$staff_no;

	  	      //Prepare database query
			$query = "INSERT INTO salary (name,staff_no,b_salary,month,loan,leave_,ot,advance,net_amount,delet) 
			VALUES ('$name','$staff_no','$b_salary','$month','$loan','$leave','$ot','$advance','$net_amount','0')";

			
                     

			$result = mysqli_query($connection, $query);

			if ($result) {
			//quer successful.... redirecting to users page
				header('location: showsalary.php');
			} 
			else {
				$errors[] = 'failed to add the new record.';
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
<body>
	<header>
 		<div class="appname"> Salary Management Sheet</div>
 		<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>!<a href="logout.php">Log Out</a></div>
 	</header>
 	<main>
 		<h1>New Salary Input Sheet  <span><a href="showsalary.php">View salary list</a></span></h1>
 	    <div class="registionbox">
		   
	 		<form action="salarymang.php" method="post" class="userform">
		 		

				<p>02).Name</p>
				<input type="text" name="name" placeholder="Enter Name" required>

				<p>03).Month</p>
				<input type="text" name="month" placeholder="Enter Month" required>

				<p>04).St.number</p>
				<input type="text" name="staff_no" placeholder="Enter st.number" >

				<p>05).Basic Salary</p>
				<input type="text" name="b_salary" placeholder="Enter Basuc salary" required>

				<p>06).Loan Deduction</p>
				<input type="text" name="loan" placeholder="Enter Loan Deduction" required>

				<p>07).Leave</p>
				<input type="text" name="leave" placeholder="Enter Leave" required>

				<p>08).Overtime</p>
				<input type="text" name="ot" placeholder="Enter Overtime" required>

				<p>09).Festival Advance</p>
				<input type="text" name="advance" placeholder="Enter Festival Advance" required>

				<p>10).Net Amount</p>
				<input type="text" name="net_amount" placeholder="Enter Net Amount" required>

				<input type="Submit" name="submit" value="Submit"></input> 
	        </form>
        </div>
 	</main>
</body>

</html>