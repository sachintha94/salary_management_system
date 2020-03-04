 <?php session_start();?>
<?php require('inc/connection.php');?>
<?php
//checking if a user is logged in
if(!isset($_SESSION[staffno])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>User page</title>
 	<link rel="stylesheet" type="text/css" href="css/main.css">
 </head>

 <body class="user">
 	<header>
 		<div class="appname"> Salary Management System</div>
 		<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>! <a href="logout.php">Log Out</a></div>
 		 <img src="img/pic 08.png" class="salary" height="400" width="400" top>
 		 <div class="salarybox">	
          <form action="http://localhost/ssms/newuser.php">
		<input type="Submit" name="" value="New user Registion " style="margin: 100px"></input>	
		</form>

		<input type="Submit" name="" value="View salary sheet" style="margin: 100px"></input>	
		
		<form action="http://localhost/project/page%2001.php">
		<input type="Submit" name="" value="Salary Management" style="margin: 100px"></input>
		</form>
		
	
	</div>
 	</header>
 
 </body>
 </html>
 