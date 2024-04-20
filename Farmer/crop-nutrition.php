<!--header-->
<?php include 'includes/header.php'; ?>

<?php
require 'DB.php';

if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $landtype = $_POST["landtype"];
  $regno = $_POST["regno"];
  $croppreference = $_POST["croppreference"];
  $ferti_usage_type = $_POST["ferti_usage_type"];
  $ferti_usage_quantity = $_POST["ferti_usage_quantity"];

  $query = "INSERT INTO crop_registration (fullname, email, phoneNumber, landType, regno, cropPreference, ferti_usage_type, ferti_usage_quantity) VALUES ('$fullname', '$email', '$phoneNumber', '$landtype', '$regno', '$croppreference', '$ferti_usage_type', '$ferti_usage_quantity')";

  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

    <div class="container-fluid bg-cropnutrition py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Crop Nutrition (Fertilizer)</h1>
                    <p class="mb-4 about-banner-para">We provide specially formulated fertilizer mixtures and specialty fertilizers for a variety of crops grown in Sri Lanka. These cater to different agro-ecological zones of the country, assisting farmers to achieve a consistent yield through sustainable farming.</p>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="service.php" class="btn btn-secondary py-md-3 px-md-5">Services</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Start -->
    <div class="container-fluid px-5 pt-5">
      <div class="container py-5">
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Benefits of Crop Nutrition Programs:</h6>
        </div>
        <div class="mb-3 pb-2">
          <ul>
            <li><b>Subsidized Fertilizers:</b> Farmers can access fertilizers at reduced prices, making them more affordable and encouraging their proper use for optimal crop growth.</li>
            <li><b>Soil Testing Services:</b>  Farmers receive soil testing facilities to assess nutrient levels, pH, and other important parameters. This helps in formulating precise fertilization strategies tailored to specific soil conditions.</li>
            <li><b>Agronomic Advice: </b> Expert guidance is provided on nutrient management, crop selection, and best agricultural practices to improve yields and sustainability.</li>
            <li><b>Training and Workshops: </b> Farmers may attend workshops, training sessions, and demonstrations to learn about modern farming techniques, nutrient management, and sustainable practices.</li>
            <li><b>Research and Development:</b>The Department of Agriculture conducts research to develop new fertilizers, bio-stimulants, and soil amendments tailored to local agricultural needs.</li>
          </ul>
        </div>
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Eligibility Criteria:</h6>
        </div>
        <p class="mb-4">Eligibility for crop nutrition programs in Sri Lanka typically depends on factors such as:</p>      
        <div class="mb-3 pb-2">
          <ul>
            <li>Proof of farming activity and land ownership/lease</li>
            <li>Registration with the Department of Agriculture or relevant agricultural authority</li>
            <li>Compliance with recommended agronomic practices and environmental standards</li>
          </ul>
        </div>
        <p class="mb-4">Specific eligibility criteria may vary based on the program and region.</p>  
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Application Process:</h6>
        </div>    
        <div class="mb-3 pb-2">
          <ul>
            <li> Farmers need to register with the Department of Agriculture or designated agricultural offices. This may involve providing personal details, land documents, and other relevant information.</li>
            <li>After registration, farmers can inquire about available crop nutrition programs and select the ones suitable for their farming needs.</li>
            <li>Depending on the program, farmers may need to submit additional documents such as soil test reports, crop plans, or subsidy application forms.</li>
            <li>Upon acceptance into the program, farmers receive training, technical support, and access to subsidized inputs as per program guidelines.</li>
            <li>Farmers are expected to follow program guidelines, maintain records, and comply with reporting requirements as specified by the Department of Agriculture.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid pb-3">
        <div class="container">
            <div class="card-group">
                <div class="card">
                  <img src="img/Straight -fertilizer.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Straight Fertilizer</h5>
                  </div>
                </div>
                <div class="card">
                  <img src="img/Specialty-Fertilizer-2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Specialty Fertlizer</h5>
                  </div>
                </div>
                <div class="card">
                  <img src="img/Home-garden.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Home Garden Range</h5>
                  </div>
                </div>
                <div class="card">
                    <img src="img/Blended-fertilizer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Blended Fertilizer</h5>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mt-3" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Register For This Service</h6>
            </div>
            <div class="row g-0">
                <div class="col-lg-12 ">
                    <div class="bg-primary h-100 p-5">
                        <form action="crop-nutrition.php" method="post" autocomplete="off">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="fullname" class="form-control bg-light border-0 px-4" placeholder="Name of Farmer/Applicant" required style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" required style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="phoneNumber" class="form-control bg-light border-0 px-4" placeholder="Your Contact No" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                  <select class="form-control bg-light border-0 px-4" name="landtype" required style="height: 55px;">
                                    <option value="" selected hidden>Select Land Type</option>
                                    <option> Own Land</option>
                                    <option> Lease Agreement</option>
                                  </select>
                                </div>
                                <div class="col-12">
                                    <input type="number" name="regno" class="form-control bg-light border-0 px-4" placeholder="Agricultural Registration No" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                  <select class="form-control bg-light border-0 px-4" name="croppreference" required style="height: 55px;">
                                    <option value="" selected hidden>Select Preferred Crop(s) for Nutrition Program:</option>
                                    <option>  Rice</option>
                                    <option> Vegetables</option>
                                    <option> Fruits</option>
                                    <option>Other</option>
                                  </select>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="ferti_usage_type" class="form-control bg-light border-0 px-4" placeholder="Previous Fertilizer Usage Type" required style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="ferti_usage_quantity" class="form-control bg-light border-0 px-4" placeholder="Previous Fertilizer Usage Quantity" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button name="submit" class="btn btn-secondary w-100 py-3" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

<!--footer-->
<?php include 'includes/footer.php'; ?>