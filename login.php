<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            session_start();

$_SESSION['username'] = $user['username'];

echo "Login Successful ✅";
header("refresh:2; url=welcome.php");

        } else {

            echo "Wrong Password";
        }

    } else {

        echo "User Not Found";
    }
}
?>