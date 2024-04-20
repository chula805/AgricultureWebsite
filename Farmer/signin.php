<!--header-->
<?php include 'includes/header.php'; ?>


<?php
    include 'DB.php';

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $_SESSION["user"] = $email; 
            header("Location: index.php"); 
            exit(); 
        } else {
            $error_message = "Invalid email or password. Please try again.";
        }
    }
?>

<style>
    .container{
        max-width:600px;
        margin: 30px auto 0;
        padding: 50px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .form-group{
      margin-bottom:30px;
    }
</style>

    <div class="container">
        <form action="signin.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Sign In" name="login" class="btn btn-primary">
            </div>
            <?php if (isset($error_message)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
            <?php } ?>
            <p style="margin-top:10px;">Already Not Registered? Please <a href="signup.php"><b>Sign Up</b></a> </p>
        </form>
    </div>
