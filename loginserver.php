<?php
	
	include_once ('server.php');

	
	// User log in check
	
	if (isset($_GET['mail']))
	{
		
		
		
		// receive all input values from the form
		
		$email = $_GET['email'];
		//$password = $_GET['pass'];
		
		
		
		
		
		// form validation: ensure that the form is correctly filled ...
		// by adding (array_push()) corresponding error onto $errors array
		
		
		$query = "INSERT into persons (email) values('$email') ";
		connect('bdtouristation',$query);
		
		// first check the database to make sure
		// a user does  exist with the  user id and password
		
//		
//		$query = "SELECT * FROM account WHERE 	user_id='$userid' and password='$password' LIMIT 1 ";
//		$results=connect('knowledge',$query);
//		$row = mysqli_fetch_array($results);
//		
//		//find user or fill requirement
//		if (count($errors) == 0)
//		{
//			if($row)
//			{
//				$query = "  INSERT into log(user_id) values('$userid')  ";
//				$results=connect('knowledge',$query);
//				
//				
//				header('Location: profile.php');
//			}
//			else
//			{
//				array_push($errors, "User does not exist ");
//			}
//		}
//		
//		
	}
	
	// end login successful  check
