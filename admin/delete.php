<?php
include 'db.php';
include 'navbar.php'; 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_ids'])) {
    $delete_ids = $_POST['delete_ids'];

    $ids_to_delete = implode(',', $delete_ids);
    $delete_sql = "DELETE FROM ip_addresses WHERE id IN ($ids_to_delete)";

    if ($conn->query($delete_sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $delete_sql . "<br>" . $conn->error;
    }
}
$select_sql = "SELECT * FROM ip_addresses";
$result = $conn->query($select_sql);
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
        <form method="post" action="">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="selectAll">
                                <label class="form-check-label" for="selectAll">Select All</label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th>IP Address</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Visit Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="delete_ids[]" value="<?php echo $row['id']; ?>">
                                </div>
                            </td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['ip_address']; ?></td>
                            <td><?php echo $row['latitude']; ?></td>
                            <td><?php echo $row['longitude']; ?></td>
                            <td><?php echo $row['visit_time']; ?></td>
                            <td>
                                <a href="index.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-danger">Delete Selected</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("selectAll").addEventListener("change", function () {
            var checkboxes = document.getElementsByName("delete_ids[]");
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked;
            }
        });
    </script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>