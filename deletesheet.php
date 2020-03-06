<?php session_start(); ?>
<?php require_once('inc/connection.php');?>

<?php
 //check if a user is logged in
  	if (!isset($_SESSION['staff_no'])){
	  //header('Location: index.php');
	}
	else{
		// $del_id = $_Get['delete'];
		// $query = "UPDATE salary SET delet = '1' WHERE paysheet_no  = '$del_id'";
		header('Location: showsalary.php');
	}

//   if(isset($_Get['delete'])){
// 	  //getting the user information
// 	  //$staff_no = mysqli_real_escape_string($connection, $_POST['staff_no']);

// 	    // if ($staff_no == $_SESSION['staff_no']) {
// 	    //   //should not delete current user
// 	    //     header('Location: showsalary.php');
// 	    // }


//         else {
// 	        //deleting the user 
// 			$query = "UPDATE salary SET delet = 1 WHERE staff_no = '$staff_no' LIMIT 1";
		    
// 		    $result_set = mysqli_query($connection, $query);
	        
// 	        if ($result_set){
// 				//user deleted
// 			    header('Location:showsalary.php?msg*user_deleted');
// 		    }  

// 		    else {
// 			 header('Location: showsalary.php?err*delete_failed');
// 			}
			  	
//         }
//     }
?>  

