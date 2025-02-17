<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VJ  Hotel - About</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>  
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
        
    </style>

</head>
<body class="bg-light">

 <?php require('inc/header.php'); ?> 

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Welcome to VJ Hotel, where comfort meets elegance. Nestled in the heart of the city, we offer world-class amenities, exceptional service, and a serene ambiance to ensure a delightful stay for every guest.
    </p>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 cold-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">WHY US?</h3> 
            <p>
            At VJ Hotel, we prioritize your comfort and satisfaction. From luxurious rooms to personalized services, we go above and beyond to create unforgettable experiences. Choose us for our prime location, modern facilities, and a dedicated team that makes you feel at home.
                
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="./images/about/Screenshot 2024-11-03 at 8.12.02 AM.png" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/hotel.svg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>
        </div>    

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/customers.svg" width="70px">
                <h4 class="mt-3">200+ CUSTOMERS</h4>
            </div>
        </div>    

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/rating.svg" width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
            </div>
        </div>    

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/staff.svg" width="70px">
                <h4 class="mt-3">200+ STAFF</h4>
            </div>
        </div>    

    </div>
</div>

<h3 class="my-5 fw-bold">MANAGEMENT TEAM</h3>

<div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/random guy.jpg" class="w-100">
            <h5>Random name</h5>
          </div>

          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/random guy.jpg" class="w-100">
            <h5>Random name</h5>
          </div>

          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/random guy.jpg" class="w-100">
            <h5>Random name</h5>
          </div>

          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/random guy.jpg" class="w-100">
            <h5>Random name</h5>
          </div>
          
        

</div>


<!-- Footer -->
 <?php require('inc/footer.php'); ?> 

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


 <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        loop: true,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
            slidesPerView:1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
      }
    });
  </script> 

</body>
</html>