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
      <?php
          include 'DB.php';

          if(isset($_POST['submit'])){
              
              $fullname = $_POST['fullname'];
              $email = $_POST['email'];
              $password = $_POST['password'];

              if($fullname == "" || empty($fullname)){
                  header('location:signup.php?message=You need to fill in the first name!');
              }

              else{
                  $query = "INSERT INTO `users` (`full_name`, `email`, `password`) VALUES ('$fullname', '$email', '$password')";

                  $result = mysqli_query($conn,$query);

                  if(!$result){
                      die("Query Failed: " . mysqli_error($conn));
                  }
                  else{
                      header('location:signup.php?insert_msg=You Are Data Has Been Added Succesfully!');
                  }
              }
          }

      ?>
      <form action="signup.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="fullname" placeholder="Full Name:" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email:" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password:" required>
        </div>
        <div class="form-btn">
          <input type="submit" class="btn btn-primary" value= "Sign Up" name="submit">
        </div>
        <p style="margin-top:10px;">Already Have An Account? Please <a href="signin.php"><b>Sign In</b></a> </p>
      </form>

      <?php
        if(isset($_GET['insert_msg'])){
            echo "<h5>".$_GET['insert_msg']."</h5>";
        }
      ?>

      <?php
        if(isset($_GET['message'])){
            echo "<h5>".$_GET['message']."</h5>";
        }
      ?>
    </div>
