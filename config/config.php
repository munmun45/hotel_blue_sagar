<?php
// Database connection details
$servername = "localhost"; // Your database host
$username = "u112926345_hotelbluesagar";        // Your database username
$password = "r^1~AX*syYpJ";            // Your database password
$dbname = "u112926345_hotelbluesagar"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Uncomment this line if you want to confirm the connection for testing purposes
    // echo "Connected successfully";
}

?>
