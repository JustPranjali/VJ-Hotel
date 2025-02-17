<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VJ HOTEL</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <?php require('inc/scripts.php'); ?>
    <style>
        input[type=number] {
          -moz-appearance: textfield;
        }
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px){
            .availability-form{
            margin-top: 25px;
            padding: 0 35px;
            /* position: relative; */
        }
        }

    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<!--Carousel-->
<div class="container-fluid px-lg-4 mt-4 ">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
               <img src="./images/carousel/image1.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
               <img src="./images/carousel/image2.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
               <img src="./images/carousel/image3.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
               <img src="./images/carousel/image4.jpg" class="w-100 d-block">
            </div>
        </div>
    </div>
</div>

<!-- Check availability form -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500" >Check-in</label>
                    <input type="date" class="form-control shadow-none">  
                    </div>

                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500" >Check-out</label>
                    <input type="date" class="form-control shadow-none">  
                    </div>

                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500" >Adult</label>
                    <select class="form-select" aria-label="Default select example">
                       <!-- <option selected>Open this select menu</option> -->
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                    </select>

                    </div>

                    <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight: 500" >Children</label>
                    <select class="form-select" aria-label="Default select example">
                       <!-- <option selected>Open this select menu</option> -->
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                    </select>

                    </div>
                    <div class="col-lg-1 mb-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>        
        </div>
    </div>  
</div>

<!-- Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOM</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350rem; margin: auto;">
                <img src="images/rooms/1.webp" class="card-img-top d-block" alt="...">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">200 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        2 Rooms
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Bathroom
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Balcony
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Sofa
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Wifi
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Television
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        AC
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Room heater
                    </span>
                  </div>
                  <div class="guests mb-4">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        5 Adults
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        2 Children
                    </span>

                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                    
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                     <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                     <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350rem; margin: auto;">
                <img src="images/rooms/1.webp" class="card-img-top d-block" alt="...">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">200 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        2 Rooms
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Bathroom
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Balcony
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Sofa
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Wifi
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Television
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        AC
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Room heater
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        5 Adults
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        2 Children
                    </span>

                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                    
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                     <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                     <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350rem; margin: auto;">
                <img src="./images/rooms/3.jpg" class="card-img-top d-block" alt="...">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">200 per night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        2 Rooms
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Bathroom
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Balcony
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        1 Sofa
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Wifi
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Television
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        AC
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Room heater
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        5 Adults
                    </span>
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        2 Children
                    </span>

                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                    
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                     <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                     <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
</div>

<!-- Facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./images/facilities/ac.svg" width="80px">
            <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./images/facilities/oven.svg" width="80px">
            <h5 class="mt-3">Oven</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./images/facilities/spa.svg" width="80px">
            <h5 class="mt-3">Spa</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./images/facilities/TV.svg" width="80px">
            <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none" > More Facilities >>></a>
        </div>
    </div>
</div>

<!-- Testimonals -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonals</h2>

<div class="container mt-5">
    <div class="swiper swiper-testimonals">
        <div class="swiper-wrapper">

          <div class="swiper-slide bg-white p-4">
           <div class="profile d-flex align-items-center p-4">
            <img src="./images/facilities/customers.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
           </div>
           <p>
            Good place.
            Lovely staff.
           </p>
           <div class="rating ">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
           </div>
        </div>

        <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
             <img src="./images/facilities/customers.svg" width="30px">
             <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>
             Good place.
             Lovely staff.
            </p>
            <div class="rating ">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </div>
         </div>

         <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
             <img src="./images/facilities/customers.svg" width="30px">
             <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>
             Good place.
             Lovely staff.
            </p>
            <div class="rating ">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </div>
         </div>

         <div class="swiper-slide bg-white p-4">

            <div class="profile d-flex align-items-center p-4">
             <img src="./images/facilities/customers.svg" width="30px">
             <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>
             Good place.
             Lovely staff.
            </p>
            <div class="rating ">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </div>
         </div>

        <!-- <div class="swiper-pagination"></div> -->
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none" > Know More >>></a>
    </div>
    
</div>

<!-- Reach us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-0 col-md-8 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded " height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.963818670672!2d72.85363002520394!3d19.021315932172094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf26f4972d21%3A0x2c50185364aca4c1!2sVeermata%20Jijabai%20Technological%20Institute!5e0!3m2!1sen!2sin!4v1730433368325!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5>
                <a href="tel: +917507925281" class="d-inline-block wb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +917507925281
                </a>
                <br>
                <a href="tel: +917507925281" class="d-inline-block wb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +917507925281
                </a>
            </div>
        
        <!-- <div class="col-lg-4 col-md-4"> -->
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow Us</h5>
                <a href="#" class="d-inline-block mb-3">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter-x"> Twitter</i>
                   </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                     <i class="bi bi-facebook">  Facebook</i>
                    </span>
                 </a>
                 <br>
                 <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                     <i class="bi bi-instagram">  Instagram</i>
                    </span>
                 </a>
                
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<?php require('inc/footer.php'); ?>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay:1500,
        disableOnInteration: false,
      }
      
    });

    var swiper = new Swiper(".swiper-testimonals", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:"true",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
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