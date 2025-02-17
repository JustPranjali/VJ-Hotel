<?php
session_start();
require('inc/db.php'); // Include database configuration

// Check if the user is logged in
if (!isset($_SESSION['userLogin']) || $_SESSION['userLogin'] !== true) {
    echo "<script>alert('Please log in to view your booking history.'); window.location.href='login.php';</script>";
    exit;
}

$user_id = $_SESSION['userId'];

// Fetch booking details for the logged-in user
$query = "
    SELECT b.*, r.name AS room_name, r.features, r.price_per_night 
    FROM bookings b 
    JOIN rooms r ON b.room_id = r.id 
    WHERE b.user_id = ?
";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php require('inc/header.php'); ?>
    <div class="container mt-5">
        <h2 class="text-center">Booking History</h2>
        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Features</th>
                        <th>Price Per Night</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Booking Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['room_name']); ?></td>
                            <td><?= htmlspecialchars($row['features']); ?></td>
                            <td><?= htmlspecialchars($row['price_per_night']); ?> INR</td>
                            <td><?= htmlspecialchars($row['check_in']); ?></td>
                            <td><?= htmlspecialchars($row['check_out']); ?></td>
                            <td><?= htmlspecialchars($row['created_at']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center mt-4">You have no bookings yet.</p>
        <?php endif; ?>
    </div>
    <?php require('inc/footer.php'); ?>
</body>
</html>