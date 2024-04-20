<?php
include 'DB.php';

$name = $_POST['name'];
$email = $_POST['email'];
$queryText = $_POST['query'];
$fieldOfficerId = $_POST['field_officer'];

$insertQuery = "INSERT INTO queries (farmer_name, farmer_email, query, field_officer_id) 
                VALUES ('$name', '$email', '$queryText', '$fieldOfficerId')";

if (mysqli_query($conn, $insertQuery)) {
    header("Location: query_submission_success.php");
    exit();
} else {
    echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
