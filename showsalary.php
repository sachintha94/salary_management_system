
<?php session_start();?>
<?php require('inc/connection.php');?>
<?php
	//checking if a user is logged in
	if (!isset($_SESSION['staffno'])){ header('location:index.php');}
     

    $salary_list = '';
    //getting the list of salary
    $query ="SELECT * FROM salary WHERE delet = '0'";
    $allsalary =mysqli_query($connection, $query);

    if($allsalary) {
    	while ($onesalary = mysqli_fetch_assoc($allsalary)) {
    		$salary_list .="<tr>";
    		$salary_list .="<td>{$onesalary['paysheet_no']}</td>";
    		$salary_list .="<td>{$onesalary['name']}</td>";
    		$salary_list .="<td>{$onesalary['month']}</td>";
    		$salary_list .="<td>{$onesalary['staff_no']}</td>";
    		$salary_list .="<td>{$onesalary['b_salary']}</td>";
    		$salary_list .="<td>{$onesalary['loan']}</td>";
    		$salary_list .="<td>{$onesalary['leave_']}</td>";
    		$salary_list .="<td>{$onesalary['ot']}</td>";
    		$salary_list .="<td>{$onesalary['advance']}</td>";
    		$salary_list .="<td>{$onesalary['net_amount']}</td>";
    		$salary_list .="<td><a href = http://localhost/ssms/edit.php>Edit</a></td>";
    		$salary_list .="<td><a href = deletesheet.php?delete={$onesalary['paysheet_no']}>Delete</a></td>";

    		$salary_list .="</tr>";
    	}
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>show salary</title>
    <link rel="stylesheet"  href="css/showsalary.css">
</head>
<body>
	<form action="showsalarys.php" method="POST">
	<header>
        <div class ="appname">Salary Management System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['username']; ?>! <a href="logout.php">Log Out</a></div>
	</header>
	<div>
		<main>
		    <table class="masterline">
		    	<tr>
		    		<th>Paysheet no</th>
		    		<th>Name</th>
		    		<th>Month</th>
		    		<th>Staff No</th>
		    		<th>Basic Salary<br>Rs.</br></th>
		    		<th>Loan<br>Rs.</br></th>
		    		<th>Leave<br>Rs.</br></th>
		    		<th>OT<br>Rs.</br></th>
		    		<th>Advance<br>Rs.</br></th>
		    		<th>Net Amount<br>Rs.</br></th>
		    		<th>Edit</th>
		    		<th>Delete</th>
		    	</tr>
		    	<?php echo $salary_list  ?>
		    </table>
		</main>
	</div>
</body>

</html>