

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Users</title>
    <?php require('inc/links.php'); // Include any CSS or JS links ?>
</head>
<body>
<!-- Header -->
<?php require('inc/header.php');?>

<!-- User Table -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4">
        <h2 class="mb-4">Registered Users</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Date of Birth</th>
                <th>Registered At</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($users->num_rows > 0) {
                while ($user = $users->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['address']); ?></td>
                        <td><?php echo htmlspecialchars($user['pincode']); ?></td>
                        <td><?php echo htmlspecialchars($user['dob']); ?></td>
                        <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="7" class="text-center">No users found</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
    
</div>

<!-- Footer Scripts -->
<?php require('inc/scripts.php'); ?>
</body>
</html>