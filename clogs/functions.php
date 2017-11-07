<?php

	require_once('tables.php');

	function clean($link, $str) {
		$data = trim($str);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return mysqli_escape_string($link, $data);
	}

	function user_present($link, $email) {

		global $users_info;
		$q = "SELECT COUNT(*) as num  FROM $users_info WHERE email = '$email'";
		$exec = mysqli_query($link, $q);
		
		if ($exec){
			$x = mysqli_fetch_object($exec);
			if ($x->num == 0)
				return false;
		}

		return true;
	}

	function drop_user($link, $email) {
	
		global $users_info;
		$q = "DELETE FROM $users_info WHERE email = '$email'";
		if (mysqli_query($link, $q))
			return true;

		return false;
	}

	function is_email_varified($link, $username) {

		global $user_login;
		$q = "SELECT is_email_varified FROM $user_login WHERE username = '$username'";
		$exec = mysqli_query($link,$q);
	
		if ($exec){
			$x = mysqli_fetch_object($exec);
			if ($x->is_email_varified == 1)
				return true;
		}

		return false;
	}

	function get_user_name($link, $username) {

		global $users_info;
		$q = "SELECT CONCAT(f_name,' ', l_name) AS name from $users_info WHERE email = '$username'";
		$row = mysqli_query($link, $q);
		if ($row && (mysqli_num_rows($row) == 1)) {
			$x = mysqli_fetch_object($row);
			return ', '.$x->name;
		}

		return $q;

	}
?>