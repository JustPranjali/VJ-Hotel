<?php
include 'inc/db.php';
include 'essentials.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check for empty input fields
    if (empty($email) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
        exit;
    }

    // Prepare and execute the query
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify the password (direct comparison if not hashed)
        if ($password === $row['password']) {
            $_SESSION['userLogin'] = true;
            $_SESSION['userId'] = $row['id'];
            $_SESSION['userName'] = $row['name'];

            echo json_encode(['status' => 'success', 'message' => 'Login successful']);
            redirect('index.php');
            // header("Location: index.php");
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid password']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No account found with this email']);
    }

    $stmt->close();
}
$con->close();
?>