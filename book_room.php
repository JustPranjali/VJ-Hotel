<?php
require('inc/db.php'); // Include the database configuration file
require('inc/essentials.php'); // Include any utility functions
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userLogin']) || $_SESSION['userLogin'] !== true) {
    echo "<script>alert('Please log in to book a room.'); window.location.href='login.php';</script>";
    exit;
}

// Handle booking request
if (isset($_GET['room_id']) && isset($_POST['check_in']) && isset($_POST['check_out'])) {
    $room_id = $_GET['room_id'];
    $user_id = $_SESSION['userId']; // Use the session variable for user ID
    $check_in = $_POST['check_in']; // Retrieve check-in date from form
    $check_out = $_POST['check_out']; // Retrieve check-out date from form
    $created_at = date('Y-m-d H:i:s'); // Current timestamp

    // Validate the dates
    if (strtotime($check_in) >= strtotime($check_out)) {
        echo "<script>alert('Check-out date must be later than check-in date.'); window.location.href='rooms.php';</script>";
        exit;
    }

    // Insert booking details into the bookings table
    $stmt = $con->prepare("INSERT INTO bookings (user_id, room_id, check_in, check_out, created_at) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Database query failed: " . $con->error);
    }

    $stmt->bind_param("iisss", $user_id, $room_id, $check_in, $check_out, $created_at);
    if ($stmt->execute()) {
        echo "<script>alert('Room booked successfully!'); window.location.href='history.php';</script>";
    } else {
        echo "<script>alert('Failed to book the room. Please try again.'); window.location.href='rooms.php';</script>";
    }
    $stmt->close();
} else {
    echo "<script>alert('Invalid request. Please provide check-in and check-out dates.'); window.location.href='rooms.php';</script>";
}
?>
