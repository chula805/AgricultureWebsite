<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>


<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM users WHERE id = '$id'";

        $result = mysqli_query($conn, $query);


            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }
            else{
                $row = mysqli_fetch_assoc($result);

            }
        }
?>

<?php
    if(isset($_POST['update_farmers'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "UPDATE `users` SET `full_name` = '$full_name', `email` = '$email', `password` = '$password' WHERE `id` = '$idnew'";
        
        
        $result = mysqli_query($conn, $query);


            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }

            else{
                header('location:farmers.php?update_msg=You Have Updated The Data Successfully!.');
            }
    
    }
?>

<form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" class="form-control" value="<?php echo $row['full_name'] ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="update_farmers" value="Update">
</form>

<!--footer-->
<?php include 'includes/footer.php'; ?> 