 <?php session_start();?>
<?php require('inc/connection.php');?>
<?php
//checking if a user is logged in
if(!isset($_SESSION['staffno'])){header('location:index.php');}
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

 		<div class="loggedin"> Welcome <?php echo $_SESSION['username'];?>!<a href="logout.php">Log Out</a></div>
		<img src="img/pic 08.png" class="salary" height="500" width="500" top>
		
		        <a class="button1" href="newuser.php">New user Registion</a>
				<br>
				<a class="button2" href="showsalary.php">View salary sheet</a>
				<br>
				<a class="button3" href="salarymang.php">Salary Management</a>
				
			

		
 	</header>
 
 </body>
 </html>
 