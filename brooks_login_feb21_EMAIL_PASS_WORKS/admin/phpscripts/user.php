<?php
	function createUSer($fname, $username, $password, $email, $userlvl) {
		include('connect.php');
		$userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$userlvl}', 'no')";
	//echo $userString;
		$userQuery = mysqli_query($link, $userString);
			if($userQuery) {
				sendmessage($email, $username, $password);
				//send email message here. Files from last here. email needs username/password and url admin_login.php. SEPERATE mail.php file. put it in the config file and call to it.
				redirect_to("admin_index.php");
			}else{
				$message = "There was a problem setting up this user. Maybe reconsidder your hiring practices.";
				return $message;
			}

		mysqli_close($link);
	}

//function for creating generated passwords



?>