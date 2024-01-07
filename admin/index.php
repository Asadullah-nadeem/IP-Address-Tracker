<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="login.php" method="post" class="col-md-6 offset-md-3">
            <h2 class="text-center mb-4">Login System</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-group">
                <label for="uname">User Name :</label>
                <input type="text" name="uname" id="uname" class="form-control" placeholder="User Name" required>
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
                