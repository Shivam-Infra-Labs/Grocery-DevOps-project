
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "shivam", "1234", "grocery");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
