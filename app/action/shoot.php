<?php
include $_SERVER["DOCUMENT_ROOT"] . '/battleship/app/init.php';

if (empty($_POST) == false) {
	echo "GOOD";
	$letter = $_POST['letter'];
	$number = $_POST['number'];
	
	if (empty($letter) || empty($number)) {
		$errors[] = "Empty letter or number";
	} else {
		$_SESSION['opponents'][0][2] = shoot($letter, $number, $_SESSION['opponents'][0][2]);
		update_board($_SESSION['opponents'][0][0], $_SESSION['opponents'][0][2]);
		header("Location: /battleship/play.php");
		exit();
	}
		// NOTES
		//$_SESSION['opponents'][0][2] = shoot($letter, $number, $_SESSION['opponents'][0][2]); //Bit of a hack, choosing the first opponent for now
		//update_board($_SESSION['opponents'][0][0], $_SESSION['opponents'][0][2]); //MAybe throw and If true in here
		//header('Location: play.php');
		//exit();
} else {
	header("Location: /battleship/play.php");
	exit();
}
?>