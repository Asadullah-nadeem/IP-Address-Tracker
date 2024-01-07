<?php
$db_host = 'sql201.infinityfree.com';
$db_user = 'if0_35707373';
$db_password = 'c6sCFS3sfI7';
$db_name = 'if0_35707373_fsdfsd';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
