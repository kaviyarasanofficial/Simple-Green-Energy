<?php
session_start(); // Start the session to access session variables

// Check if the user is not logged in (no session variable is set)
if (!isset($_SESSION['email'])) {
    // Redirect to the login page or take other appropriate actions
    exit();
}

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'rectubmx_simplegreen');
define('DB_PASSWORD', '3N2h0DEwaDJ#');
define('DB_NAME', 'rectubmx_simplegreenenergy');

// Establish a database connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the email of the logged-in user from the session
$userEmail = $_SESSION['email'];

// SQL query to select data from the database for the logged-in user
$sql = "SELECT * FROM ATP WHERE email = '$userEmail'";

// Execute the query
$result = $conn->query($sql);

$records = array(); // Create an array to hold the records

if ($result->num_rows > 0) {
    // Loop through the results and store data in the $records array
    while ($row = $result->fetch_assoc()) {
        $records[] = $row;
    }
}

// Close the database connection
$conn->close();
?>
