<?php

session_start();


if (isset($_POST["login"])) {
    
    $adminEmail = "ecolifeadmin@gmail.com";
    $adminPassword = "EcoLife@123";

    $email = $_POST["email"];
    $password = $_POST["password"];

    
    if ($email === $adminEmail) {
      
        if ($password === $adminPassword) {
         
            $_SESSION["user"] = "yes";
           
            header("Location: admin.php");
            exit; 
        } else {
            
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {

        echo "<div class='alert alert-danger'>Email does not match</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
</head>

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

<body>

    <div class="container">
        <?php
            if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
                require_once "DB.php";
                $sql = "SELECT * FROM adminlogin WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: index.php");
                        die();
                    }else{
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                }else{
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }
            }
            ?>

        <form action="signin.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Sign In" name="login" class="btn btn-success">
            </div>
         </form>
    </div>

</body>

</html>