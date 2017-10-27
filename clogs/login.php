<?php
	
	session_start();
	require_once('db_connect.php');
	require_once('functions.php');

	$username = $pass = null;
	global $user_login;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['username']))
			$username = clean($link, $_POST['username']);
		if (isset($_POST['pass_']))
			$pass = clean($link, $_POST['pass_']);

		if (isset($pass) && isset($username)) {
			$q = "SELECT COUNT(*) AS num FROM $user_login WHERE username = '$username'";
			$exec = mysqli_query($link, $q);
			if ($exec){
				$x = mysqli_fetch_object($exec);
				if ($x->num == 1) {
					// user found
					if (is_email_varified($link, $username)){
						$_SESSION['username'] = $username;
						$_SESSION['is_logged_in'] = 1;
						echo "User logged in!";
					}
					else {
						echo "email not varified yet!";
					}
				}
				else{
					echo "invalid user";
				}

			}
		}
	}
		
	
	else
		echo "Wrong Method!";

?>