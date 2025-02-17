<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VJ Hotel - Rooms</title>
    <?php require('inc/links.php'); ?> 
</head>
<body class="bg-light">

<?php 
require('inc/header.php'); 
require('inc/db.php'); // Include the database configuration file
?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">

        <!-- Filters Section -->
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
              <div class="container-fluid flex-lg-column align-items-stretch">
                   <h4 class="mt-2">FILTERS</h4>
                   <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropDown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropDown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                            <label class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none mb-3">  
                            <label class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none">  
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                            <div class="mb-2">
                               <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3 me-1">
                               <label class="form-check-label" for="f1">WiFi</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3 me-1">
                                <label class="form-check-label" for="f2">Television</label>
                             </div>
                             <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3 me-1">
                                <label class="form-check-label" for="f3">Room Heater</label>
                             </div>
                        </div>

                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                            <div class="d-flex">
                                <div>
                                    <label class="form-label">Adult</label>
                                    <input type="number" class="form-control shadow-none mb-3">
                                </div>
                                <div>
                                    <label class="form-label mx-3">Children</label>
                                    <input type="number" class="form-control shadow-none mx-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </nav>
        </div>

       <!-- Rooms Section -->
<div class="col-lg-9 col-md-12 px-4 px-lg-0">
    <?php
    // Fetch all rooms from the database
    $rooms = $con->query("SELECT * FROM rooms");

    // Dynamically generate cards for each room
    while ($room = $rooms->fetch_assoc()) {
        echo "
        <div class='card mb-4 border-0 shadow'>
            <div class='row g-0 p-3 align-items-center'>
                <div class='col-md-5 mb-lg-0 mb-md-0 mb-3 px-0'>
                    <img src = 'images/rooms/1.webp' class='img-fluid rounded'>
                </div>
                <div class='col-md-5 px-lg-3 px-md-3 px-0'>
                    <h5 class='mb-3'>{$room['name']}</h5>
                    <div class='features mb-3'>
                        <h6 class='mb-1'>Features</h6>
                        <span class='badge bg-light text-dark mb-3 text-wrap lh-base'>{$room['features']}</span>
                    </div>
                    <div class='facilities mb-4'>
                        <h6 class='mb-1'>Facilities</h6>
                        <span class='badge bg-light text-dark mb-3 text-wrap lh-base'>{$room['facilities']}</span>
                    </div>
                    <div class='guests'>
                        <h6 class='mb-1'>Guests</h6>
                        <span class='badge bg-light text-dark mb-3 text-wrap lh-base'>{$room['adults']} Adults</span>
                        <span class='badge bg-light text-dark mb-3 text-wrap lh-base'>{$room['children']} Children</span>
                    </div>
                </div>
        <div class='col-md-2 text-center'>
            <h6 class='mb-4'>{$room['price_per_night']} per night</h6>
    
    <!-- Booking Form -->
            <form method='GET' action='dummy_payment.php'>
                <input type='hidden' name='room_id' value='{$room['id']}'>
                <div class='mb-2'>
                    <label for='check_in_{$room['id']}' class='form-label'>Check-in</label>
                    <input type='date' id='check_in_{$room['id']}' name='check_in' class='form-control shadow-none' required>
                </div>
                <div class='mb-2'>
                    <label for='check_out_{$room['id']}' class='form-label'>Check-out</label>
                    <input type='date' id='check_out_{$room['id']}' name='check_out' class='form-control shadow-none' required>
                </div>
                <button type='submit' class='btn btn-sm w-100 text-white custom-bg shadow-none mb-2'>Pay & Book</button>
            </form>
            <a href='contact.php?room_id={$room['id']}' class='btn btn-sm w-100 btn-outline-dark shadow-none'>More Details</a>
        </div>
            </div>
        </div>";
    }
    ?>
</div>

<!-- Footer -->
<?php require('inc/footer.php'); ?> 
<?php require('inc/scripts.php');?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>