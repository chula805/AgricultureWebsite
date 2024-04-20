<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>
<?php include 'DB.php'; ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM officers WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    } else{
        header('location:field-officer.php?delete_msg=You Have Deleted The Data Successfully!.');
    }
}
?>

    <div class="box1">
        <h2>All Field Officers</h2>
        <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Add Officers</button>
    </div>

    <table class="table table-hover table-bordered table-striped mt-5">
        <thead style="font-weight:bold; color:#000; text-align:center;">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
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
                        <td><a href="update_page_2.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                        <td><a href="field-officer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    

                    <?php
                }
            }


            ?>

        </tbody>
    </table>

    <?php
        if(isset($_GET['insert_msg'])){
            echo "<h6>".$_GET['insert_msg']."</h6>";
        }
    ?>
    <?php
        if(isset($_GET['message'])){
            echo "<h6>".$_GET['message']."</h6>";
        }
    ?>
    <?php
        if(isset($_GET['update_msg'])){
            echo "<h6>".$_GET['update_msg']."</h6>";
        }
    ?>
    <?php
        if(isset($_GET['delete_msg'])){
            echo "<h6>".$_GET['delete_msg']."</h6>";
        }
    ?>
    
    <!-- Modal -->
    <form action="insert_data1.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Officer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="add_officers" value="Add">
                </div>
                </div>
            </div>
        </div>
    </form>

    <a href="admin.php"><< Back</a>
<!--footer-->
 <?php include 'includes/footer.php'; ?> 