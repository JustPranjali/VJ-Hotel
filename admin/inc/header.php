<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="me-0 h-font">VJ HOTEL</h3>
    <a class="btn btn-light btn-sm" href="logout.php">Log Out</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary dashboard-menu" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light ">ADMIN PANEL</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard.php">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="add_room.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_bookings.php">Booked Rooms</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>