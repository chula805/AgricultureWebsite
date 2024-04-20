
<?php
session_start();
include 'DB.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM officers WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $officer = mysqli_fetch_assoc($result);
    $_SESSION['officer_id'] = $officer['id'];
    header("Location: officer.php");
    exit();
} else {
    echo "Invalid username or password.";
}
?>
