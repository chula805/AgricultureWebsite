<!--header-->
<?php include 'includes/header.php'; ?>

<?php
require 'DB.php';

if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $roles = $_POST["roles"];
  $areaInterest = $_POST["areaInterest"];
  $locations = $_POST["locations"];

  $query = "INSERT INTO training (fullname, email, phoneNumber, role, areaOfInterest, location) VALUES ('$fullname', '$email', '$phoneNumber', '$roles', '$areaInterest', '$locations')";

  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

    <div class="container-fluid bg-training py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Technical Training Workshops</h1>
                    <p class="mb-4 about-banner-para">Offer workshops and training sessions on modern agricultural techniques, pest control, crop management, etc. The Department of Agriculture in Sri Lanka offers Technical Training Workshops to support the agricultural sector and empower farmers with knowledge and skills. Here's a detailed overview:</p>
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
            <h6 class="text-primary text-uppercase">Benefits of Technical Training Workshops:</h6>
        </div>
        <div class="mb-3 pb-2">
          <ul>
            <li>Workshops focus on enhancing technical skills related to crop cultivation, pest management, soil health, and modern agricultural practices.</li>
            <li>Participants gain insights from experts, share experiences with peers, and learn about innovative farming techniques.</li>
            <li>Application of learned techniques can lead to increased crop yields, better quality produce, and overall improved farm productivity.</li>
            <li>Participants can network with fellow farmers, agricultural experts, and industry professionals, fostering collaboration and knowledge exchange.</li>
            <li>Workshops often provide access to resources such as agricultural tools, seeds, and technology that can benefit farming practices.</li>
          </ul>
        </div>
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Eligibility Criteria:</h6>
        </div>
        <p class="mb-4">Eligibility criteria for these workshops may vary based on the specific program or topic being offered. Generally, farmers, agricultural extension officers, agribusiness professionals, and individuals involved in the agricultural sector are eligible to apply.</p>      
    
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Application Process:</h6>
        </div>    
        <div class="mb-3 pb-2">
          <ul>
            <li>The Department of Agriculture announces upcoming workshops through various channels such as its website, social media, local agricultural offices, and newspapers.</li>
            <li>Interested individuals typically need to register for the workshop by filling out an application form. This form may be available online or at designated offices.</li>
            <li>Depending on the popularity of the workshop and available slots, participants may be selected based on criteria such as relevance to their work, geographical location, or first-come-first-served basis.</li>
            <li>Selected participants receive confirmation of their registration along with details about the workshop, including dates, venue, agenda, and any prerequisites.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-2 pb-5">
        <div class="container">
            <div class="mx-auto text-center mt-3" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Register For This Service</h6>
            </div>
            <div class="row g-0">
                <div class="col-lg-12 ">
                    <div class="bg-primary h-100 p-5">
                        <form action="training.php" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="fullname" class="form-control bg-light border-0 px-4" placeholder="Name of Farmer/Applicant" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="phoneNumber" class="form-control bg-light border-0 px-4" placeholder="Your Contact No" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="roles" class="form-control bg-light border-0 px-4" placeholder="Occupation/Role in Agriculture" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                  <select class="form-control bg-light border-0 px-4" name="areaInterest" style="height: 55px;">
                                    <option value="" selected hidden>Area of Interest </option>
                                    <option> Crop Cultivation</option>
                                    <option> Pest Management</option>
                                    <option> Soil Health</option>
                                  </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="locations" class="form-control bg-light border-0 px-4" placeholder="Preferred Workshop Location" style="height: 55px;">
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