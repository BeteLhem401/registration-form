<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $others = $_POST['others'];

    // Encrypt password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users
    (first_name, last_name, username, email, password, department, gender, others)
    VALUES
    ('$first_name','$last_name','$username','$email','$hashedPassword','$department','$gender','$others')";

    if (mysqli_query($conn, $sql)) {
       header("Location: login.html");
exit();
    } else {
        echo "Registration Failed";
    }

}

?>