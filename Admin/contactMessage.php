<!--header-->
<?php include 'includes/header.php'; ?>
<?php include 'DB.php'; ?>


    <div class="box1">
        <h2>All Contact Messages</h2>
    </div>

    <table class="table table-hover table-bordered table-striped mt-5">
        <thead style="font-weight:bold; color:#000; text-align:center;">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM contact_messages";


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
                        <td><?php echo $row['message']; ?></td>
                    </tr>
                    

                    <?php
                }
            }


            ?>

        </tbody>
    </table>

    <a href="admin.php"><< Back</a>