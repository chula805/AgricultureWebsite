<?php
    include 'DB.php';
    if(isset($_POST['add_farmers'])){
        
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        if($full_name == "" || empty($full_name)){
            header('location:farmers.php?message=You need to fill in the first name!');
        }

        else{
            $query = "INSERT INTO `users` (`full_name`, `email`, `password`) VALUES ('$full_name', '$email', '$password')";

            $result = mysqli_query($conn,$query);

            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }
            else{
                header('location:farmers.php?insert_msg=You Are Data Has Been Added Succesfully!');
            }
        }
    }

?>


