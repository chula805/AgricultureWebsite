<?php
include 'DB.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $usermessage = $_POST['usermessage'];

    $sql = "INSERT INTO contact_messages (fullname, email, message) VALUES ('$fullname', '$email', '$usermessage')";

    if (mysqli_query($conn, $sql)) {
        header("Location: thanks.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
