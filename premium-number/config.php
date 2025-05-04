<?php
// Start session
// session_start();

// Set default timezone
date_default_timezone_set('Asia/Kolkata');

// Base URL

// Database configuration for Local
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fancynumber";

// Database configuration for Fancynumber.shop
/* $db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fancynumber"; */

// Create DB connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>