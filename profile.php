<?php
session_start();
include 'inc/db.php';

// Check if the user is logged in
if (!isset($_SESSION['userLogin']) || $_SESSION['userLogin'] !== true) {
    header('Location: index.php');
    exit;
}

// Fetch user details from the database
$stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['userId']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found!";
    exit;
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="css/common.css">
    <?php require ('inc/header.php')?>
    <?php require('inc/links.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">My Profile</h2>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Details</h4>
                <p class="card-text"><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p class="card-text"><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?></p>
                <p class="card-text"><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
                <p class="card-text"><strong>Pincode:</strong> <?php echo htmlspecialchars($user['pincode']); ?></p>
                <p class="card-text"><strong>Date of Birth:</strong> <?php echo htmlspecialchars($user['dob']); ?></p>
            </div>
        </div>
    </div>

    <?php require ('inc/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>