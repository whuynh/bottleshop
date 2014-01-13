<?php 
include 'app/init.php';
include 'incl/header.php';

if (is_logged_in()) {
	$user = get_user($_SESSION['user_id']);
	$_SESSION['user'] = $user;
	
	$team = get_team($_SESSION['user'][6]);
	$_SESSION['team'] = $team;
	
	$board = get_board($_SESSION['team'][2]);
	$_SESSION['board'] = $board;
	
	//$state = get_state($board_id);
	
	echo "<h1>Home</h1>";
	echo "<p>Content goes here</p>";
	echo "<p>User ID: $user[0]</p>";
	echo "<p>Username: $user[1]</p>";
	echo "<p>Encrypted Password: $user[2]</p>";
	echo "<p>Email: $user[3]</p>";
	echo "<p>First Name: $user[4]</p>";
	echo "<p>Last Name: $user[5]</p>";
	echo "<p>Team ID: $user[6]</p>";
	echo "<p>Shots: $user[7]</p>";
	
} else {
	echo "<h1>Welcome to Shaw Battleship</h1>";
	echo "<p>Content goes here</p>";
}

include 'incl/footer.php';
?>