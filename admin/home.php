<?php
include 'db.php';
include 'navbar.php'; 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $query = "SELECT * FROM ip_addresses WHERE ip_address LIKE '%$searchTerm%'";
} else {
    $query = "SELECT * FROM ip_addresses";
}

$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Addresses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>IP Addresses</h2>

        <!-- Search Form -->
        <form class="form-inline mb-3">
            <input type="text" class="form-control mr-sm-2" name="search" placeholder="Search by IP Address">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IP Address</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Visit Time</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['ip_address']; ?></td>
                        <td><?php echo $row['latitude']; ?></td>
                        <td><?php echo $row['longitude']; ?></td>
                        <td><?php echo $row['visit_time']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>