<?php
include $_SERVER["DOCUMENT_ROOT"] . '/battleship/app/init.php';

if (empty($_POST) == false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (empty($username) || empty($password)) {
		$errors[] = "Empty username or password";
	} else if (user_exists($username) == false) {
		$errors[] = "Username does not exist";
	} else {
		$login = login($username, $password);
		if ($login == false) {
			$errors[] = "Incorrect username and password combo";
		} else {
			$_SESSION['user_id'] = $login;
			header("Location: /battleship/index.php");
			exit();
		}
	}
	
	print_r($errors);
}

?>