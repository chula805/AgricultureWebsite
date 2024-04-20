<!--header-->
<?php include 'includes/header.php'; ?>


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
    <form action="login_process.php" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" class="form-control" name="username" required><br>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control" name="password" required><br>
        </div>

        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Login" style="color:#fff; font-weight:700;">
        </div>
        <p style="margin-top:10px;">Already Not Registered? Please <a href="signup.php"><b>Sign Up</b></a> </p>
    </form>
</div>

<!--footer-->
<?php include 'includes/footer.php'; ?>
