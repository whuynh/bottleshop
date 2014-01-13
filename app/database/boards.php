<?php
/*
function get_board_id($match_id, $team_id) { //TEST
	$match_id = sanitize($match_id);
	$team_id = sanitize($team_id);
	$query = mysql_query("SELECT board_id FROM boards WHERE match_id = '" . $match_id . "' AND team_id = '" . $team_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit;
		//No Boards, Team does not have a board, maybe generate one?
	} else {
		return mysql_result($query, 0);
	}
}*/

function get_opponent_boards($match_id, $board_id) {
	$match_id = sanitize($match_id);
	$board_id = sanitize($board_id);
	$query = mysql_query("SELECT * FROM boards WHERE match_id = '" . $match_id . "' AND board_id <> '" . $board_id . "'");
	
	$result = Array();
	while ($row = mysql_fetch_array($query)) {
		$result[] =  $row;
	}
	return $result;
	}

function get_board($board_id) {
	$board_id = sanitize($board_id);
	$query = mysql_query("SELECT * FROM boards WHERE board_id = '" . $board_id . "'");
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	} else {
		return mysql_fetch_row($query); //Return type array
	}

}

function get_state($board_id) { //TEST
	$board_id = sanitize($board_id);
	$query = mysql_query("SELECT state FROM boards WHERE board_id = '" . $board_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit; //No State, Shouldn't happen
	} else {
		return mysql_result($query, 0);
	}
}

function get_match_id($board_id) {
	$board_id = sanitize($board_id);
	$query = mysql_query("SELECT match_id FROM boards WHERE board_id = '" . $board_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit; //No State, Shouldn't happen
	} else {
		return mysql_result($query, 0);
	}
}

function update_board($board_id, $state) {
	$board_id = sanitize($board_id);
	$state = sanitize($state);
	$query = mysql_query("UPDATE boards SET state = '" . $state . "' WHERE board_id = '" . $board_id . "'");
	
	if (!$query) {
		echo 'Could not run query: ' . mysql_error();
		exit; //No State, Shouldn't happen
	} else {
		return true;
	}
}


?>