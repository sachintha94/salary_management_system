<?php session_start();?>
<?php require('inc/connection.php');?>

<?php

// check for form submision
if (isset($_POST['submit'])) {
	$errors = array();



//check if the username and password has been entered
if (!isset($_POST['username'] ) || strlen(trim($_POST['username'])) < 1){
	$errors[] = 'username is Missing / Invalid';
}
if (!isset($_POST['password'] ) || strlen(trim($_POST['password'])) < 1){
	$errors[] = 'Password is Missing / Invalid';
}

//check if there are any error in the form
  if(empty($errors)) {

  	    //save username and passwod into variables
  	    $username = mysqli_real_escape_string($connection, $_POST['username']);
  	    $password = mysqli_real_escape_string($connection, $_POST['password']);
  	  
		$query ="SELECT * FROM login WHERE u_name = '$username' AND password = '$password'";
	
  	
		$result_set = mysqli_query($connection, $query);

  	    if ($result_set)
  	    {	
		
  	    	//query succesful
  	      	if (mysqli_num_rows($result_set) == 1){
  	     	//valid user found
  	      		$user = mysqli_fetch_assoc($result_set);
  	      		$_SESSION['staffno'] = $user[staff_no];
  	      		$_SESSION['username'] = $user[u_name];
  	      	

  	     		//redirect to user.php	
  	      		header('Location:user.php');
  	      	}else{
  	     		//user name and password invalid 	
  	      		$errors[] = 'Invalid username / password';}
        } else{
          	$errors[] = 'Database query failed'; 
        }
      }
	}	
?>

<!DOCTYPE html>
<html>
<head> 
 	<title>login-school salary management system</title>
 	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="index">
	<form action="index.php" method="POST">
	<header class="topic">SALARY MANAGEMENT SYSTEM</header>

		<?php
		if (isset($errors) && !empty($errors)) {
			echo '<p class="error"> Invalid Username / Password </p>';
		} 


		?>
		
		<div class="loginbox">

			<img src="img/pic03.png" class="avatar">
			<h1>Login Here</h1>
            
			<form>
				<p>Username </p>
				<input type="text" id="Username" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input type="Password" id="Password" name="password" placeholder="Enter Password">
				
               
				<input type="Submit" name="submit" value="Login"></input> 

			</form>
				
			</form>
	
		<img src="img/pic 06.png" class="fog">
		</form>
	 </div> <!-- .login--> 

</body>
</html>
<?php mysqli_close($connection); ?>