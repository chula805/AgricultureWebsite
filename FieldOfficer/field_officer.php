<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>


    <div class="box1">
        <h2>All Field Officers</h2>
    </div>

    <table class="table table-hover table-bordered table-striped mt-5">
        <thead style="font-weight:bold; color:#000; text-align:center;">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM officers";


            $result = mysqli_query($conn, $query);


            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                    </tr>
                    

                    <?php
                }
            }


            ?>

        </tbody>
    </table>

    <?php
        if(isset($_GET['update_msg'])){
            echo "<h6>".$_GET['update_msg']."</h6>";
        }
    ?>

<a href="officer.php"><< Back</a>
  
<!--footer-->
 <?php include 'includes/footer.php'; ?> 