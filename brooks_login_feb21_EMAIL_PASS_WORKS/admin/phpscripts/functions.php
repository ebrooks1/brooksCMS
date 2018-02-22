<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}


//code I found online here. edited variable/function names. this file uses the string shuffle feature that shuffles this string, and spits out the first 8 characters of this string and sends that to the user in the email. gotta figure out how to do that.
	function genpassword( $length = 8 ) {
   		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
   		 $password = substr( str_shuffle( $chars ), 0, $length );
    	return $password;
	}
	
?>