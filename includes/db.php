<?php
/**
 * Database Configuration
 */

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'php_template';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Set charset to utf8
$conn->set_charset('utf8');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
