<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EcoLife</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="EcoLife Web" name="keywords">
    <meta content="EcoLife" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-left">
                    <a href="index.php" class="navbar-brand ">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Eco</span>Life</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-end">
                    <!-- Search Bar -->
                    <form action="search_results.php" method="GET" class="search-form mr-5">
                        <div class="search-bar mr-5">
                            <input type="text" name="query" placeholder="Search..." id="searchInput">
                            <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>


                    <a href="signin.php" class="btn-top py-md-3 px-md-5 ml-5">Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span style="color: #000;">Eco</span>Life</h1>
        </a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon" style="background-color: #000;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a>
                <a href="service.php" class="nav-item nav-link <?php echo ($currentPage == 'service.php') ? 'active' : ''; ?>">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo ($currentPage == '.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Information</a>
                    <div class="dropdown-menu m-0">
                        <a href="news.php" class="dropdown-item">News & Events</a>
                        <a href="blog.php" class="dropdown-item">Our Blogs</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    