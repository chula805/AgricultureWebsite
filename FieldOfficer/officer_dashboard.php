<!--header-->
<?php include 'includes/header.php'; ?>


<?php
session_start();
include 'DB.php';

if (!isset($_SESSION['officer_id'])) {
    header("Location: login.php");
    exit();
}

$officerId = $_SESSION['officer_id'];

$query = "SELECT * FROM queries WHERE field_officer_id='$officerId'";
$result = mysqli_query($conn, $query);
?>

<h1>Assigned Queries</h1>
<table class="table table-hover table-bordered table-striped mt-5">
    <thead style="font-weight:bold; color:#000; text-align:center;">
        <tr>
            <th>Query ID</th>
            <th>Farmer Name</th>
            <th>Email</th>
            <th>Query</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['farmer_name']}</td>";
            echo "<td>{$row['farmer_email']}</td>";
            echo "<td>{$row['query']}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<a href="officer.php"><< Back</a>

<!--footer-->
<?php include 'includes/footer.php'; ?> 