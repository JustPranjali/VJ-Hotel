<?php
require('inc/db_config.php'); 
require('inc/essentials.php'); 
adminLogin(); 

// Fetch all bookings with relevant details from the database
$bookings = $con->query("
    SELECT 
        b.id, 
        b.check_in, 
        b.check_out, 
        b.created_at, 
        r.name AS room_name, 
        u.name AS user_name 
    FROM bookings b 
    JOIN rooms r ON b.room_id = r.id 
    JOIN users u ON b.user_id = u.id
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - View Bookings</title>
    <?php require('inc/links.php'); ?>
</head>
<body>
<?php require('inc/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4">
        <h2 class="mb-4">All Bookings</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>User Name</th>
                <th>Room Name</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Booking Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($booking = $bookings->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $booking['id']; ?></td>
                    <td><?php echo $booking['user_name']; ?></td>
                    <td><?php echo $booking['room_name']; ?></td>
                    <td><?php echo $booking['check_in']; ?></td>
                    <td><?php echo $booking['check_out']; ?></td>
                    <td><?php echo $booking['created_at']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
    
</div>

<?php require('inc/scripts.php'); ?>
</body>
</html>