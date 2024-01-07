<!-- <?php
include 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS `ip_addresses` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `ip_address` varchar(45) NOT NULL,
    `latitude` decimal(10,8) NOT NULL,
    `longitude` decimal(11,8) NOT NULL,
    `visit_time` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> -->
