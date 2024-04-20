    <!--header-->
    <?php include 'includes/header.php'; ?>

    <!-- Fixed user icon -->
    <div class="fixed-icon">
        <button id="user-icon" class="btn btn-primary"><i class="fas fa-user"></i></button>
    </div>

    <!-- User form -->
    <div id="user-form" class="user-form">
        <form action="submit_query.php" method="post"> 
            <button type="submit" class="btn btn-primary">Enter Your Query</button>
        </form>
    </div>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4">Savor the Goodness of Organic Fruits</h1>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3">Read More</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4">Unlock the Benefits of Organic Fruits</h1>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3">Read More</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4">Embrace Health with Organic Fruits</h1>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3">Read More</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100">
                        <img class="img-fluid mt-auto mx-auto" src="img/Home-about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">We Provide The Necessary Advice For Your Organic Farming</h1>
                    </div>
                    <p class="mb-4">We provide expert advice for organic farming based on three key principles: prioritize soil health, promote biodiversity, and practice responsible water management.</p>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                            <i class="fas fa-headset display-1 text-secondary"></i>
                            <h4>100% Correct Advices</h4>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Award Winning</h4>
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-leaf display-1 text-secondary"></i>
                            <h4>Environmental Sustainability</h4>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-users display-1 text-secondary"></i>
                            <h4>Community Engagement</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid bg-facts facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white" >Farm Consultant</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">50</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Awards </h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">2000</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-primary text-uppercase">Services</h6>
                        <h1 class="display-5">EcoLife Services</h1>
                    </div>
                    <p class="mb-4">Our ecological farming website provides training in organic farming, soil conservation, pest management, and efficient irrigation. We offer personalized consultations, essential farming tools, and foster collaboration among farmers and experts for environmental sustainability and food security.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fas fa-seedling display-1 text-primary mb-3"></i>
                        <h4>Organic Farming Consultation</h4>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fab fa-pagelines display-1 text-primary mb-3"></i>
                        <h4>Sustainable Agriculture Workshops</h4>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fas fa-tools display-1 text-primary mb-3"></i>
                        <h4>Farming Tools/Resources </h4>
                       </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fas fa-globe display-1 text-primary mb-3"></i>
                        <h4>Sustainable Practices </h4>
                         </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fas fa-handshake display-1 text-primary mb-3"></i>
                        <h4>Community Engagement </h4>
                         </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Testimonial Start -->
    <section class="container-fluid testimonial bg-light py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Testimonials</h6>
                <h1 class="display-5">What Our Customers Say</h1>
            </div>
            <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-item">
                            <img src="img/testimonial-1.png" class="testimonial-img" alt="Testimonial Image">
                            <p class="mb-4 testimonial-para">"Being a soil Scientist, I understand the critical role soil health plays in sustainable agriculture. This website has been a treasure trove of information, offering insights into organic soil management, composting techniques, and soil conservation practices. It's empowering to see farmers adopt these methods for healthier crops and ecosystems."</p>
                            <h5 class="mb-0 testimonial-name">Surangi Perera</h5>
                            <p class="testimonial-designation">Soil Scientist</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="Testimonial Image">
                            <p class="mb-4 testimonial-para">"As an agricultural extension officer, I'm constantly looking for resources to support farmers in adopting eco-friendly practices. This website has been a game-changer, providing comprehensive training materials, innovative tools, and expert advice. The collaboration and knowledge exchange facilitated here are driving positive change in our agricultural communities."</p>
                            <h5 class="mb-0 testimonial-name">Nimala Priyantha</h5>
                            <p class="testimonial-designation">Agricultural Extension Officer</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="Testimonial Image">
                            <p class="mb-4 testimonial-para">"As a farm manager, I have witnessed firsthand the positive impact of embracing ecological farming practices. Our farm has seen increased yields, improved soil health, and reduced environmental impact. The resources and guidance provided by this website have been invaluable in implementing sustainable techniques and achieving success."</p>
                            <h5 class="mb-0 testimonial-name">Saman Bandara</h5>
                            <p class="testimonial-designation">Farm Manager</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" style="color: #000;" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Our Latest News</h6>
                <h1 class="display-5">News and Events</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/news-1.jpg" alt="">
                        <a class="blog-overlay" href="news1.php">
                            <h4 class="text-white">EcoLife Wins 3 Prestigious Awards at the NCE Awards!</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/news-2.jpg" alt="">
                        <a class="blog-overlay" href="news2.php">
                            <h4 class="text-white">EcoLife Agri-Tech 2024</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/news-3.jpg" alt="">
                        <a class="blog-overlay" href="news3.php">
                            <h4 class="text-white">EcoLife Agriculture’s Agri Equipment Division</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
    <!--footer-->
    <?php include 'includes/footer.php'; ?>

    <style>
    .fixed-icon {
        position: fixed;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    .user-form {
        display: none;
        position: fixed;
        top: 50%;
        right: 80px;
        transform: translateY(-50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const userIcon = document.getElementById('user-icon');
        const userForm = document.getElementById('user-form');

        userIcon.addEventListener('click', function () {
            userForm.style.display = userForm.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>