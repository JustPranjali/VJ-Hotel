<?php
$hname = 'localhost';      // Hostname (usually localhost)
$uname = 'root';           // Database username
$pass = '';                // Database password (set your MySQL password)
$db = 'hbwebsite';         // Database name

// Create a connection to the database
$con = mysqli_connect($hname, $uname, $pass, $db);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to filter and sanitize input data
function filteration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);                // Remove unnecessary whitespaces
        $data[$key] = stripslashes($value);       // Remove backslashes
        $data[$key] = htmlspecialchars($value);   // Convert special characters to HTML entities
    }
    return $data;
}

?>