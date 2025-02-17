<?php
require('inc/db.php');
session_start();

if (!isset($_SESSION['userLogin']) || $_SESSION['userLogin'] !== true) {
    echo "<script>alert('Please log in to confirm booking.'); window.location.href='login.php';</script>";
    exit;
}

$user_id = $_SESSION['userId'];
$room_id = $_POST['room_id'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$created_at = date('Y-m-d H:i:s');

if (!$room_id || !$check_in || !$check_out) {
    echo "<script>alert('Invalid booking details.'); window.location.href='rooms.php';</script>";
    exit;
}

// Save booking details in the database
$stmt = $con->prepare("INSERT INTO bookings (user_id, room_id, check_in, check_out, created_at) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iisss", $user_id, $room_id, $check_in, $check_out, $created_at);

if ($stmt->execute()) {
    echo "<script>alert('Payment successful! Room booked successfully.'); window.location.href='history.php';</script>";
} else {
    echo "<script>alert('Failed to confirm booking. Please try again.'); window.location.href='rooms.php';</script>";
}
?>