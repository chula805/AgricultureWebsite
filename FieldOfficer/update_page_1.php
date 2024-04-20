<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>


<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM officers WHERE id = '$id'";

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
    if(isset($_POST['update_officers'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE `officers` SET `username` = '$username', `password` = '$password' WHERE `id` = '$idnew'";
        
        
        $result = mysqli_query($conn, $query);


            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }

            else{
                header('location:field_officer.php?update_msg=You Have Updated The Data Successfully!.');
            }
    
    }
?>

<form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="update_officers" value="Update">
</form>

<!--footer-->
<?php include 'includes/footer.php'; ?> 