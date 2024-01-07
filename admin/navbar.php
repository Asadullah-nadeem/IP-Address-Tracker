<?php
include 'db.php'; 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">IP Tracker<h1>Hello, <?php echo $_SESSION['name']; ?></h1></a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="create.php">Add IP</a></li>
        <li class="nav-item"><a class="nav-link" href="delete.php">delete</a></li>
        <li class="nav-item"><a class="nav-link" href="update.php">update</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
</nav>
