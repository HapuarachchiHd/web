<?php
session_start();

$_SESSION = array();

//Destroy the session.
session_destroy();

//redirect to login page
header("Location: login.html");

exit;
?>