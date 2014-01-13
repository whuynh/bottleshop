<?php
include 'app/init.php';
include 'incl/header.php';
?>

<h1>Opponent's Board</h1>
<?php
	$opponents = get_opponent_boards($_SESSION['board'][1], $_SESSION['team'][2]);
	$_SESSION['opponents'] = $opponents;
	
	for ($i = 0; $i < count($opponents); $i++) {
		display_board($opponents[$i][2], true);
	}
?>


<h1>Your Team's Board</h1>
<?php
	display_board($_SESSION['board'][2], false);
?>

<?php
include 'incl/footer.php';
?>