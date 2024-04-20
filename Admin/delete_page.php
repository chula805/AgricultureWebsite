<?php include 'DB.php'; ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    } else{
        header('location:farmers.php?delete_msg=You Have Deleted The Data Successfully!.');
    }
}
?>



