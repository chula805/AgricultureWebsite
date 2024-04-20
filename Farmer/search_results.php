<?php

if (isset($_GET['query'])) {

    $searchQuery = $_GET['query'];

    $services = array(
        "Crop Nutrition" => "crop-nutrition.php",
        "Seeds and Planting Material" => "seeds-planting.php",
        "Crop Protection" => "crop-protection.php",
        "Agri Mechanization" => "agri-mechanization.php",
        "Animal Health" => "animal-health.php",
        "Hybrid Flower Seed Exports and Young Plants" => "hybrid-flower.php",
        "Technical Training Workshops" => "training.php",
        "Soil Testing and Analysis" => "soil-testing.php",
        "Organic Farming Certification" => "organic-farming.php"
    );                                                      

    if (array_key_exists($searchQuery, $services)) {
        $serviceUrl = $services[$searchQuery];
        header("Location: $serviceUrl"); 
        exit;
    } else {
        echo "<p>No results found for '$searchQuery'.</p>";
    }
} else {
    echo "<p>No search query provided.</p>";
}
?>
