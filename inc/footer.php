<div class="container-fluid bg-white text-dark mt-5 ">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">VJ HOTEL</h3>
            <p>
            At VJ Hotel, we prioritize your comfort and satisfaction. From luxurious rooms to personalized services, we go above and beyond to create unforgettable experiences. Choose us for our prime location, modern facilities, and a dedicated team that makes you feel at home.
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow us</h5>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                 <i class="bi bi-twitter-x me-1"> Twitter</i>
             </a><br>
             <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-facebook me-1"> Facebook</i>
            </a><br>
            <a href="#" class="d-inline-block text-dark text-decoration-none">
                <i class="bi bi-instagram me-1"> Instagram</i>
            </a><br>

        </div>
    </div>
</div>
 
    <div class="text-center bg-dark text-white p-3 m-0 w-100">
        <i class="bi bi-c-circle me-2"></i> Designed and Developed by Pranjali
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    document.querySelector('#loginModal form').addEventListener('submit', function (e) {
        e.preventDefault();

    const formData = new FormData(this);

    fetch('user_login.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                window.location.href = 'index.php'; // Redirect user after successful login
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
});
</script>    