<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_room'])) {
    // Sanitize and retrieve form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $features = filter_input(INPUT_POST, 'features', FILTER_SANITIZE_STRING);
    $facilities = filter_input(INPUT_POST, 'facilities', FILTER_SANITIZE_STRING);
    $guests_adults = filter_input(INPUT_POST, 'guests_adults', FILTER_SANITIZE_NUMBER_INT);
    $guests_children = filter_input(INPUT_POST, 'guests_children', FILTER_SANITIZE_NUMBER_INT);
    $price_per_night = filter_input(INPUT_POST, 'price_per_night', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Insert data into the database
    $stmt = $con->prepare("INSERT INTO rooms (name, features, facilities, guests_adults, guests_children, price_per_night) VALUES (?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        alert('error', 'Failed to prepare the SQL statement. Error: ' . $con->error);
        return;
    }

    $stmt->bind_param("ssssss", $name, $features, $facilities, $guests_adults, $guests_children, $price_per_night);

    if ($stmt->execute()) {
        echo "<script>alert('Room Added Successfully!'); window.location.href='add_room.php';</script>";
    } else {
        alert('error', 'Failed to add room. Error: ' . $stmt->error);
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Add Room</title>
    <?php require('inc/links.php'); ?>
    <link >
</head>
<body>


    <!-- Sidebar -->
    <?php require('inc/header.php');?>


    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h2 class="mb-4">Add a Room</h2>
        <form method="POST">
            <div class="mb-3">
                <div class="col-lg-10">
                <label class="form-label">Room Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Features (comma-separated)</label>
                <input type="text" name="features" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Facilities (comma-separated)</label>
                <input type="text" name="facilities" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Guests - Adults</label>
                <input type="number" name="guests_adults" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Guests - Children</label>
                <input type="number" name="guests_children" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Night</label>
                <input type="number" name="price_per_night" class="form-control" required>
            </div>
            <button type="submit" name="add_room" class="btn btn-primary">Add Room</button>
        </form>

            </div>
        </div>
    </div>
<?php require('inc/scripts.php'); ?>
</body>
</html>




