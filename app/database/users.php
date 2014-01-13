<?php

function user_exists($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '" . $username . "'");
	
	if (mysql_result($query, 0) == 1) {
		return true;
	} else {
		return false;
	}
}

function get_user_id($username) {
	$username = sanitize($username);
	$query = mysql_query("SELECT user_id FROM users WHERE username = '" . $username . "'");
	
	return mysql_result($query, 0, 'user_id');
}
	
function login($username, $password) {
	$user_id = get_user_id($username);
	
	$username = sanitize($username);
	$password = md5($password);
	
	$query = mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'");
	if (mysql_result($query, 0) == 1) {
		return $user_id;
	} else {
		return false;
	}
}

function is_logged_in() {
	if (isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false;
	}
}

function get_user($user_id) {
	$user_id = sanitize($user_id);
	$query = mysql_query("SELECT * FROM users WHERE user_id = '" . $user_id . "'");
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	} else {
		return mysql_fetch_row($query); //Return type array
	}
}

?>