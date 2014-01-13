<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require 'function/general.php';
require 'database/connect.php';
require 'database/users.php';
require 'database/boards.php';
require 'database/teams.php';
?>