<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM soiltestingregistration WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    } else{
        header('location:soil-testing.php?delete_msg=You Have Deleted The Data Successfully!.');
    }
}
?>



    <div class="box1">
        <h2>All Registerd Users for Soil Testing and Analysis</h2>
    </div>

    <table class="table table-hover table-bordered table-striped mt-5" >
        <thead style="font-weight:bold; color:#000; text-align:center;">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Farm Name</th>
                <th>Address</th>
                <th>Agriculture Type</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM soiltestingregistration";


            $result = mysqli_query($conn, $query);


            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phoneNumber']; ?></td>
                        <td><?php echo $row['farmName']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['typeOfAgriculture']; ?></td>
                        <td><a href="soil-testing.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    

                    <?php
                }
            }


            ?>

        </tbody>
    </table>


    <?php
        if(isset($_GET['delete_msg'])){
            echo "<h6>".$_GET['delete_msg']."</h6>";
        }
    ?>
<a href="admin.php"><< Back</a>

    <!--footer-->
 <?php include 'includes/footer.php'; ?> 