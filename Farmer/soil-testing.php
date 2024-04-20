<!--header-->
<?php include 'includes/header.php'; ?>

<?php
require 'DB.php';

if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $farm_name = $_POST["farm_name"];
  $address = $_POST["address"];
  $typeAgriculture = $_POST["typeAgriculture"];

  $query = "INSERT INTO soiltestingregistration(fullname, email, phoneNumber, farmName, address, typeOfAgriculture) VALUES ('$fullname', '$email', '$phoneNumber', '$farm_name', '$address', '$typeAgriculture')";

  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

    <div class="container-fluid bg-soiltesting py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Soil Testing and Analysis</h1>
                    <p class="mb-4 about-banner-para">Offer soil testing services to assess soil health, nutrient levels, and pH balance, along with recommendations for soil improvement. Soil testing and analysis are crucial components of agricultural practices, aiding farmers in understanding the quality and nutrient composition of their soil. In Sri Lanka, the Department of Agriculture offers soil testing services to assist farmers in optimizing crop yields and maintaining soil health. Let's delve into the details:</p>
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
            <h6 class="text-primary text-uppercase">Benefits of Soil Testing and Analysis:</h6>
        </div>
        <div class="mb-3 pb-2">
          <ul>
            <li>Soil tests help determine the nutrient levels in the soil, allowing farmers to apply the right amount and type of fertilizers, thus reducing costs and minimizing environmental impact.</li>
            <li>By understanding soil characteristics such as pH levels, nutrient content, and texture, farmers can make informed decisions about crop selection and management practices, leading to increased yields.</li>
            <li>Regular soil testing helps in monitoring soil health over time, identifying trends such as nutrient depletion or soil acidity, and implementing corrective measures.</li>
            <li> Proper soil management based on accurate analysis promotes sustainable agriculture practices, reducing soil degradation, erosion, and nutrient runoff.</li>
          </ul>
        </div>
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Eligibility Criteria:</h6>
        </div>
        <p class="mb-4">The soil testing services provided by the Department of Agriculture in Sri Lanka are typically available to:</p>      
        <div class="mb-3 pb-2">
          <ul>
            <li>Registered farmers</li>
            <li>Agricultural institutions</li>
            <li>Research organizations</li>
            <li>Extension service providers</li>
            <li>Government agencies involved in agriculture</li>
          </ul>
        </div>
        <div class="mb-3 pb-2">
            <h6 class="text-primary text-uppercase">Application Process:</h6>
        </div>    
        <div class="mb-3 pb-2">
          <ul>
            <li>Interested parties must first register with the Department of Agriculture or the relevant regional agricultural office.</li>
            <li>Farmers or authorized personnel collect soil samples following specific guidelines provided by the Department. These samples should represent the entire agricultural area accurately.</li>
            <li>The collected soil samples are submitted to designated soil testing laboratories affiliated with the Department of Agriculture.</li>
            <li>Trained technicians conduct various tests on the soil samples, including pH measurement, nutrient analysis (nitrogen, phosphorus, potassium, etc.), organic matter content, and soil texture determination.</li>
            <li>Upon completion of the analysis, a detailed soil test report is generated, outlining the nutrient levels, pH, and recommendations for soil amendments or corrective measures.</li>
            <li>Farmers can consult with agricultural experts or extension officers to understand the test results and receive guidance on soil management practices and fertilizer application.</li>
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
                        <form action="soil-testing.php" method="post">
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
                                    <input type="text" name="address" class="form-control bg-light border-0 px-4" placeholder="Address" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                  <select class="form-control bg-light border-0 px-4" name="typeAgriculture" style="height: 55px;">
                                    <option value="" selected hidden>Select Type of Agriculture </option>
                                    <option> Crop Cultivation</option>
                                    <option> Research</option>
                                    <option> Extension Services</option>
                                  </select>
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