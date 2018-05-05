<?php

	include_once 'dbh.php';

	if (isset($_POST['signup-submit'])) {

		$firsts = mysqli_real_escape_string($conn, $_POST['firsts']);
		$lasts = mysqli_real_escape_string($conn, $_POST['lasts']);
		$emails = mysqli_real_escape_string($conn, $_POST['emails']);
		$uids = mysqli_real_escape_string($conn, $_POST['uids']);
		$pwds = mysqli_real_escape_string($conn, $_POST['pwds']);

		//Check if fields empty

		if (empty($firsts) || empty($lasts) || empty($emails) || empty($uids) || empty($pwds)) {
		echo "fields empty";
		header("Location: ../signup.php?signup=empty");
		exit();
		} else 	{

			//Check if input characters are valid

			if (!preg_match("/^[a-zA-Z]*$/", $firsts) || !preg_match("/^[a-zA-Z]*$/", $lasts)) {
			echo "Input characters are not valid";
			header("Location: ../signup.php?signup=invalid");
			exit();

			} else 	{

				//Check if email is valid
				if (!filter_var($emails, FILTER_VALIDATE_EMAIL)) {
				echo "email not valid";
				header("Location: ../signup.php?signup=error_email");
				exit();
				} else {

					//Check if User ID is already taken
					
					$results = mysqli_query($conn, "SELECT * FROM users WHERE uid = '$uids'") or die(mysqli_error($conn));
					

					if ( mysqli_num_rows($results) > 0) {
						echo "User ID taken" or die("User ID taken, echo");
						header("Location: ../signup.php?signup=usertaken");
						exit();
					} else {

						//Hashtag the password
						$hashedPwd = password_hash($pwds, PASSWORD_DEFAULT);


						//Insert data into users table

						$sql = "INSERT INTO users ( first, last, email, uid, pwd ) VALUES ('{$firsts}', '{$lasts}', '{$emails}', '{$uids}', '{$hashedPwd}')"; 

						$success = mysqli_query($conn, $sql );

						
				 		if ( $success ){
				      echo "done"; 
				      header("Location: ../signup.php?signup=success");
				      exit();
				    	} else {
				    		mysqli_error();
				    	}
					}

				}

			}

		}
	
	}

?>
	