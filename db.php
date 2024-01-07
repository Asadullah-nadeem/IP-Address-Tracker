<?php
$db_host = 'sql201.infinityfree.com';
$db_user = 'if0_35707373';
$db_password = 'c6sCFS3sfI7';
$db_name = 'if0_35707373_fsdfsd';
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ip_address = $_SERVER['REMOTE_ADDR'];
$current_date = date("Y-m-d H:i:s");
$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : null;
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : null;

$sql = "INSERT INTO ip_addresses (ip_address, visit_time, latitude, longitude) 
        VALUES ('$ip_address', '$current_date', '$latitude', '$longitude')";

if ($conn->query($sql) === TRUE) {
    // echo "Location data successfully stored in the database.";
} else {
    // echo "Error storing location data in the database: " . $conn->error;
}

$conn->close();
?>