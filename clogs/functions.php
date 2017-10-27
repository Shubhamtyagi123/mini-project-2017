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
		$x = mysqli_fetch_object($exec);

		echo $q;


		if ($x->num == 0)
			return false;

		return true;

	}

	function drop_user($link, $email) {
		global $users_info;
		$q = "DELETE FROM $users_info WHERE email = '$email'";
		if (mysqli_query($link, $q))
			return true;

		return false;
	}

?>