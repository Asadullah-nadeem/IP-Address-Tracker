<?php
include 'db.php';
include 'navbar.php'; 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ip_address = $_POST['ip_address'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $sql = "INSERT INTO ip_addresses (ip_address, latitude, longitude) VALUES ('$ip_address', '$latitude', '$longitude')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add IP Address</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add IP Address</h2>
        <form method="post">
            <div class="form-group">
                <label for="ip_address">IP Address:</label>
                <input type="text" class="form-control" id="ip_address" name="ip_address" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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