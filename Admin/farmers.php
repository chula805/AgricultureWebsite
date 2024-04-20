<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>


    <div class="box1">
        <h2>All Farmers</h2>
        <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Add Farmers</button>
    </div>

    <table class="table table-hover table-bordered table-striped mt-5">
        <thead style="font-weight:bold; color:#000; text-align:center;">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM users";


            $result = mysqli_query($conn, $query);


            if(!$result){
                die("Query Failed: " . mysqli_error($conn));
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                        <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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
    <form action="insert_data.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Farmer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="add_farmers" value="Add">
                </div>
                </div>
            </div>
        </div>
    </form>

    <a href="admin.php"><< Back</a>
<!--footer-->
 <?php include 'includes/footer.php'; ?> 