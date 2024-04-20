<!--header-->
<?php include 'includes/header.php'; ?>

<?php
require 'DB.php';

if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $farm_name = $_POST["farm_name"];
  $farmlocation = $_POST["farmlocation"];
  $typeoffarming = $_POST["typeoffarming"];
  $used_inputs = $_POST["used_inputs"];

  $query = "INSERT INTO organicfarmingregistration(fullname, email, phoneNumber, farmName, farmLocation, typeOfFarming, organicInputsUsed) VALUES ('$fullname', '$email', '$phoneNumber', '$farm_name', '$farmlocation', '$typeoffarming', '$used_inputs')";

  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

    <div class="container-fluid bg-organicfarming py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Organic Farming Certification</h1>
                    <p class="mb-4 about-banner-para">Organic farming is an agricultural practice that emphasizes the use of natural inputs and processes to grow crops and raise livestock while minimizing the use of synthetic chemicals, pesticides, and genetically modified organisms (GMOs). Here’s detailed information about organic farming, including its benefits, eligibility criteria, application process, and contact information for further inquiries in Sri Lanka.</p>
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
            <h6 class="text-primary text-uppercase">Benefits of Organic Farming:</h6>
        </div>
        <div class="mb-3 pb-2">
          <ul>
            <li>Organic farming promotes biodiversity, reduces soil erosion, conserves water, and minimizes pollution by avoiding synthetic chemicals.</li>
            <li> Organic products are free from harmful pesticides and chemicals, making them healthier for consumers.</li>
            <li>Practices like crop rotation, composting, and using organic fertilizers enhance soil fertility and structure.</li>
            <li>Organic farming can create job opportunities and improve livelihoods, especially in rural areas.</li>
            <li>There is a growing global demand for organic products, offering farmers better market opportunities and potentially higher prices.</li>
          </ul>
        </div>
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Eligibility Criteria:</h6>
        </div>
        <div class="mb-3 pb-2">
          <ul>
            <li>Farms seeking organic status must be certified by an accredited certification body.</li>
            <li>Farmers must adhere to organic farming standards set by regulatory authorities.</li>
            <li>Detailed records of farming practices, inputs used, and harvests must be maintained.</li>
            <li>Farmers may be required to undergo training in organic farming practices.</li>
          </ul>
        </div>
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Application Process:</h6>
        </div>    
        <div class="mb-3 pb-2">
          <ul>
            <li>Farmers should reach out to a recognized certification body accredited by the Department of Agriculture in Sri Lanka.</li>
            <li>Complete the application form provided by the certification body, including details about your farm, farming practices, and compliance with organic standards.</li>
            <li>The certification body will conduct an on-site inspection of your farm to assess compliance with organic farming practices.</li>
            <li>Based on the inspection and application review, the certification body will decide whether to grant organic certification.</li>
            <li>Organic certification typically requires annual renewal and periodic inspections to ensure ongoing compliance.</li>
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
                        <form action="organic-farming.php" method="post">
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
                                    <input type="text" name="farm_name" class="form-control bg-light border-0 px-4" placeholder="Farm Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="farmlocation" class="form-control bg-light border-0 px-4" placeholder="Farm Location" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                  <select class="form-control bg-light border-0 px-4" name="typeoffarming" style="height: 55px;">
                                    <option value="" selected hidden>Select Type of Farming</option>  
                                    <option> Crop</option>
                                    <option> Livestock</option>
                                  </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="used_inputs" class="form-control bg-light border-0 px-4" placeholder="Organic Inputs Used" style="height: 55px;">
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