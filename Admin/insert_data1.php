<?php
    include 'DB.php';
    if(isset($_POST['add_officers'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];


        if($username == "" || empty($username)){
            header('location:field-officer.php?message=You need to fill in the first name!');
        }

        else{
            $query = "INSERT INTO `officers` (`username`,`password`) VALUES ('$username', '$password')";

            $result = mysqli_query($conn,$query);

            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }
            else{
                header('location:field-officer.php?insert_msg=You Are Data Has Been Added Succesfully!');
            }
        }
    }

?>


