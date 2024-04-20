<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM organicfarmingregistration WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    } else{
        header('location:organic-farming.php?delete_msg=You Have Deleted The Data Successfully!.');
    }
}
?>


    <div class="box1">
        <h2>All Registerd Users for Organic Farming Certification</h2>
    </div>

    <table class="table table-hover table-bordered table-striped mt-5" >
        <thead style="font-weight:bold; color:#000; text-align:center;">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Farm Name</th>
                <th>Farm Location</th>
                <th>Farm Type</th>
                <th>Used Organical Inputs</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM organicfarmingregistration";


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
                        <td><?php echo $row['farmLocation']; ?></td>
                        <td><?php echo $row['typeOfFarming']; ?></td>
                        <td><?php echo $row['organicInputsUsed']; ?></td>
                        <td><a href="organic-farming.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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