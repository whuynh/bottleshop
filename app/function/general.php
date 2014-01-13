<?php
function sanitize($data) {
	return mysql_real_escape_string($data);
}

function display_board($state, $hidden) {
	echo "<table border='0'>";
	echo "<tr>";
	echo "<td></td>";
	echo "<td>A</td>";
	echo "<td>B</td>";
	echo "<td>C</td>";
	echo "<td>D</td>";
	echo "<td>E</td>";
	echo "<td>F</td>";
	echo "<td>G</td>";
	echo "<td>H</td>";
	echo "<td>I</td>";
	echo "<td>J</td>";
	echo "</tr>";
	for ($y = 0; $y < 10; $y++) {
		echo "<tr>";
		echo "<td>" . ($y + 1) . "</td>";
		for ($x = 0; $x < 10; $x++) {
			$cell = 10 * $y + $x;
			switch ($state[$cell]) {
				case "O":
					echo "<td><img src='img/water.png' alt='water'/></td>";
					break;
				case "X":
					echo "<td><img src='img/miss.png' alt='miss'/></td>";
					break;
				case "S":
					if ($hidden) {
						echo "<td><img src='img/water.png' alt='water'/></td>";
					} else {
						echo "<td><img src='img/ship.png' alt='ship'/></td>"; //hidden ship	
					}
					break;
				case "H":
					echo "<td><img src='img/hit.png' alt='hit'/></td>";
					break;
				default:
					echo "<td>$state</td>"; //Should never reach here
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}

function translate($letter) {
	echo "<p> THE LETTER IS " . $letter . "</p>";
	$letter = strtoupper($letter);
	echo "<p> THE LETTER IS " . $letter . "</p>";
	if ($letter === "A") {
		return 0;
	} else if ($letter === 'B') {
		return 1;
	} else if ($letter === 'C') {
		return 2;
	} else if ($letter === 'D') {
		return 3;
	} else if ($letter === "E") {
		return 4;
	} else if ($letter === "F") {
		return 5;
	} else if ($letter === "G") {
		return 6;
	} else if ($letter === "H") {
		return 7;
	} else if ($letter === "I") {
		return 8;
	} else if ($letter === "J") {
		return 9;
	} else {
		return 0;
	}
}

function shoot($letter, $number, $state) {
	$result = translate($letter);
	echo "<p> THE TRANSLATE IS " . $result . "</p>";
	$position = ((($number - 1) * 10) + $result);
	echo "<p> THE POSITION IS " . $position . "</p>";
	if ($state[$position] === 'S') {
		$state[$position] = "H"; //HIT
	} else {
		$state[$position] = "X"; //MISS
	}
	return $state;
}

?>