<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VJ  Hotel - Facilities</title>
    <?php require('inc/links.php'); ?>
    <style>
        .pop:hover{
            border-top-color:var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>    

</head>
<body class="bg-light">

 <?php require('inc/header.php'); ?> 

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    We take pride in creating a welcoming environment where you can relax and focus on what matters most to you. Browse through our facilities and see why VJ Hotel is your perfect home away from home!
    </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="./images/facilities/wifi.svg" width="40px">
                  <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>
                Stay connected with our high-speed WiFi, available throughout the hotel for your convenience. 
                Whether for work or leisure, enjoy uninterrupted internet access.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="./images/facilities/ac.svg" width="40px">
                  <h5 class="m-0 ms-3">AC</h5>
                </div>
                <p>
                Experience ultimate comfort with our fully air-conditioned rooms, ensuring a cool and relaxing environment during your stay.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="./images/facilities/TV.svg" width="40px">
                  <h5 class="m-0 ms-3">TV</h5>
                </div>
                <p>
                Unwind with our in-room entertainment featuring flat-screen TVs equipped with satellite channels for your favorite shows and movies.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="./images/facilities/spa.svg" width="40px">
                  <h5 class="m-0 ms-3">SPA</h5>
                </div>
                <p>
                Pamper yourself at our on-site spa offering rejuvenating massages and therapies to help you relax and recharge.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="./images/facilities/1.svg" width="40px">
                  <h5 class="m-0 ms-3">Water heater</h5>
                </div>
                <p>
                Enjoy hot showers any time of the day with our efficient water heating system, providing consistent warm water in all rooms.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="./images/facilities/oven.svg" width="40px">
                  <h5 class="m-0 ms-3">Oven</h5>
                </div>
                <p>
                    Make use of our in-room oven facilities for quick meal preparation, perfect for those who prefer home-style cooking.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
 <?php require('inc/footer.php'); ?> 


</body>
</html>