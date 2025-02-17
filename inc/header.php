

<?php
session_start();
include 'links.php';
include 'scripts.php';
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybMyC7jv84nWgPFKx4e1iX1218XtW7DlMXwoiDf3eVpXimsKk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81rKzWDo2eM7u4KDLDKDrS4WeFLLr7O8RsyWxrsIroSUeNKNru03EalNU" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">VJ HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon shadow-none"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <?php if (isset($_SESSION['userLogin']) && $_SESSION['userLogin'] === true): ?>
          <!-- Show when user is logged in -->
          <div class="dropdown">
                <button class="btn btn-outline-dark shadow-none dropdown-toggle" type="button" id="profileMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenu">
                    <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                    <li><a class="dropdown-item" href="history.php">History</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>

          </div>
        <?php else: ?>
          <!-- Show when user is not logged in -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
          </button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal-->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="login-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                    </h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" name="email" type="email" class="form-control shadow-none" required>
                    </div>
                    
                    <!-- Password Field -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" name="password" type="password" class="form-control shadow-none" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                    </div>
                    
                    <!-- Error Message Display -->
                    <div id="login-error" class="alert alert-danger mt-3 d-none"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="register-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhar card, passport, driving license, etc.) that will be required during check-in.</span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" type="text" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="phonenum" type="number" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control shadow-none" required></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input name="pincode" type="number" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input name="dob" type="date" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input name="pass" type="password" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input name="cpass" type="password" class="form-control shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
    document.querySelector('#register-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('register.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                location.reload(); // Reload the page after successful registration
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
});
</script>