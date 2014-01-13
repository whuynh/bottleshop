<?php
include $_SERVER["DOCUMENT_ROOT"] . '/battleship/app/init.php';

session_start();
session_destroy();
header("Location: /battleship/index.php");
?>