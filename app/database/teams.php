<?php

function get_team_names() {
	$query = mysql_query("SELECT team_name FROM teams");
	$result = Array();
	while ($row = mysql_fetch_array($query)) {
		$result[] =  $row['team_name'];
	}
	return $result;
}

function get_team($team_id) {
	$team_id = sanitize($team_id);
	$query = mysql_query("SELECT * FROM teams WHERE team_id = '" . $team_id . "'");
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	} else {
		return mysql_fetch_row($query); //Return type array
	}
}

function get_team_name($team_id) {
	$team_id = sanitize($team_id);
	$query = mysql_query("SELECT team_name FROM teams WHERE team_id = '" . $team_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit; //No State, Shouldn't happen
	} else {
		return mysql_result($query, 0);
	}
}

function get_board_id($team_id) {
	$team_id = sanitize($team_id);
	$query = mysql_query("SELECT board_id FROM teams WHERE team_id = '" . $team_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit; //No State, Shouldn't happen
	} else {
		return mysql_result($query, 0);
	}
}

function get_points($team_id) {
	$team_id = sanitize($team_id);
	$query = mysql_query("SELECT points FROM teams WHERE team_id = '" . $team_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit; //No State, Shouldn't happen
	} else {
		return mysql_result($query, 0);
	}
}

function team_exists($team_name) {
	$team_name = sanitize($team_name);
	$query = mysql_query("SELECT COUNT(team_id) FROM teams WHERE team_name = '" . $team_name . "'");
	
	if (mysql_result($query, 0) == 1) {
		return true;
	} else {
		return false;
	}	
}

function insert_team($team_name) {
	$team_name = sanitize($team_name);
	$query = mysql_query();
}

?>