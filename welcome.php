<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>

<div class="welcome-container">

    <div class="card">
        <h1>Welcome 👋</h1>

        <h2>
            <?php echo $_SESSION['username']; ?>
        </h2>

        <p>You successfully logged into your system.</p>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</div>

</body>
</html>