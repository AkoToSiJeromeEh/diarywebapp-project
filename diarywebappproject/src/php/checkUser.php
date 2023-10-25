<?php

	session_start();
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

		$username = $_SESSION['Username'];
		$UserID = $_SESSION['UserID'];
	
		
	}
?>