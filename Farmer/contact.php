<!--header-->
<?php include 'includes/header.php'; ?>

<?php include 'DB.php'; ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5">
                        <form action="process.php" method="post" name="emailContact" autocomplete="off">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="fullname" class="form-control bg-light border-0 px-4" placeholder="Your Name" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="usermessage" class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button name="submit" class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class=" h-100 p-5" style="border: 2px solid #ffbb00; border-radius: 20px;">
                        <h2 class="text-black mb-4">Get In Touch</h2>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt fs-4 "></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-black">Address</h5>
                                <span class="text-black">Department of Agriculture, P.O.Box. 01,Peradeniya</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-open fs-4"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-black">Email</h5>
                                <span class="text-black">
                                    info@ecolife.gov.lk</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-phone-vibrate fs-4"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-black">Call</h5>
                                <span class="text-black">+94 812 388331 / 32/ 34</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<!--footer-->
<?php include 'includes/footer.php'; ?>