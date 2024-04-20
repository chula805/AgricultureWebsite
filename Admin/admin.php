
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoLife Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 col-md-3 col-sm-4 sidebar">
                <div class="logo d-flex align-items-center">
                    <img src="img\favicon.png" width="60px" height="60px">
                    <h1 class="pl-2 pt-2">Eco<span>Life</span></h1>
                </div>
                <ul class="nav flex-column mt-5">
                    <li class="nav-item"><a id="dashboardLink" class="nav-link" href="admin.php"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li class="nav-item"><a id="farmersLink" class="nav-link" href="farmers.php"><i class="fas fa-users"></i>Farmers</a></li>
                    <li class="nav-item"><a id="fieldofficerLink" class="nav-link" href="field-officer.php"><i class="fas fa-users"></i>Field Officers</a></li>
                    <li class="nav-item"><a id="messageLink" class="nav-link" href="contactMessage.php"><i class="fas fa-envelope" style="margin-right:10px;"></i>Messages</a></li>
                    <li class="nav-item"><a id="servicesLink" class="nav-link" href="services.php"><i class="fas fa-tractor" style="margin-right:10px;"></i>Services</a></li>
                    <li class="nav-item"><a id="messageLink" class="nav-link" href="signin.php"><i class="fas fa-arrow-left" style="margin-right:10px;"></i>Logout</a></li>
                </ul>

            </div>
            <!-- Main Content -->
            <div class="col-lg-10 col-md-9 col-sm-8 main-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/carousel-1.jpg" class="d-block w-100" alt="Slide 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Savor the Goodness of Organic Fruits</h1>
                                <p>Explore a world of vibrant flavors and nutrients with our selection of premium organic fruits. From succulent berries to juicy tropical delights, experience nature's goodness at its finest.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-2.jpg" class="d-block w-100" alt="Slide 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Unlock the Benefits of Organic Fruits</h1>
                                <p>Discover the natural goodness and health advantages of choosing organic fruits for a nutritious diet. From enhanced flavors to reduced pesticide exposure, organic fruits offer a range of benefits for your well-being.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpg" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Embrace Health with Organic Fruits</h1>
                                <p>Discover the natural goodness and benefits of organic fruits in your diet. Explore a variety of nutrient-rich options that promote well-being and vitality.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll(".nav-link");

            links.forEach(link => {
                link.addEventListener("click", function () {
                    console.log("Link clicked:", this.id);
                    links.forEach(l => l.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>


    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
