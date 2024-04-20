<!--header-->
<?php include 'includes/header.php'; ?>

<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: Arial, sans-serif;
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container textarea,
    .form-container select {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Responsive styling */
    @media only screen and (max-width: 600px) {
        .form-container {
            width: 90%;
        }
    }
</style>

<?php
include 'DB.php';
?>

<form action="submit_query_process.php" method="POST" class="form-container">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="query">Query:</label>
    <textarea id="query" name="query" required></textarea><br>

    <label for="field_officer">Select Field Officer:</label>
    <select id="field_officer" name="field_officer" required>
    <?php
    $query = "SELECT id, username FROM officers";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($officer = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $officer['id'] . '">' . $officer['username'] . '</option>';
        }
    } else {
        echo '<option value="">No officers available</option>';
    }
    ?>
</select><br>
<br>

    <input type="submit" value="Submit" class="btn-submit">
</form>

<!--footer-->
<?php include 'includes/footer.php'; ?> 