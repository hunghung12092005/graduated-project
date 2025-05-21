<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="header text-center p-3 border-bottom">
            <img src="https://www.einfosoft.com/templates/admin/luxuria/source/light/assets/images/logo.png" alt="Luxuria Logo" class="rounded-circle" >
            <span class="fw-bold" >Luxuria</span>
        </div>
        <div class="profile text-center p-3 border-bottom">
            <img src="https://www.einfosoft.com/templates/admin/luxuria/source/light/assets/images/admin.jpg" alt="Profile Picture" class="rounded-circle" >
            <p class="mb-0 text-muted">admin</p>
            <p class="text-muted">admin@163.com</p>
            <div class="icons d-flex justify-content-center mt-2">
                <i class="bi bi-person mx-2"></i>
                <i class="bi bi-pencil mx-2"></i>
                <i class="bi bi-bookmark-check mx-2"></i>
                <i class="bi bi-box-arrow-right mx-2"></i>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-grid"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-house-door"></i> Occupancy <span class="badge bg-danger">5</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-book"></i> Bookings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-building"></i> Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-people"></i> Staffs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-gear"></i> Departments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-house"></i> Housekeeping</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-calendar"></i> Leave Management</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <div class="navbar-top">
            <div class="d-flex align-items-center">
                <i class="bi bi-globe"></i>
                <i class="bi bi-bell mx-3"></i>
                <span>admin</span>
            </div>
        </div>

        <!-- Dynamic Content -->
        @yield('content')
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-top');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        
    </script>
</body>
</html>