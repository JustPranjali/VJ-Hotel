<?php
session_start();
if (!isset($_SESSION['userLogin']) || $_SESSION['userLogin'] !== true) {
    echo "<script>alert('Please log in to proceed with payment.'); window.location.href='login.php';</script>";
    exit;
}

// Capture booking details from the request
$room_id = $_GET['room_id'] ?? null;
$check_in = $_GET['check_in'] ?? null;
$check_out = $_GET['check_out'] ?? null;

if (!$room_id || !$check_in || !$check_out) {
    echo "<script>alert('Invalid booking details.'); window.location.href='rooms.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center">Dummy Payment Gateway</h2>
        <p class="text-center">This is a dummy payment gateway. Click "Pay" to complete your booking.</p>
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title">Booking Details</h5>
                <p>Room ID: <?= htmlspecialchars($room_id); ?></p>
                <p>Check-in: <?= htmlspecialchars($check_in); ?></p>
                <p>Check-out: <?= htmlspecialchars($check_out); ?></p>
                <form method="POST" action="confirm_booking.php">
                    <input type="hidden" name="room_id" value="<?= htmlspecialchars($room_id); ?>">
                    <input type="hidden" name="check_in" value="<?= htmlspecialchars($check_in); ?>">
                    <input type="hidden" name="check_out" value="<?= htmlspecialchars($check_out); ?>">
                    <button type="submit" class="btn btn-primary w-100">Pay & Book</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>