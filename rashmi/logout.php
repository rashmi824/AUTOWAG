<?php 

	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {//set a cookie,saved the entry in user device,cookie will expired after the set time//
		setcookie(session_name(), '', time()-86400, '/');
	}

	session_destroy();//destroy the session//

	// redirecting the user to the login page
	header('Location: index.php?logout=yes');

 ?>