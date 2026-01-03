<?php
include "db.php";


$employee_id = $_POST['employee_id'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$role = $_POST['role'] ?? '';


if ($password !== $confirm_password) {
    die("Passwords do not match");
}

if (strlen($password) < 6) {
    die("Password must be at least 6 characters");
}


$password_hash = password_hash($password, PASSWORD_BCRYPT);


$sql = "INSERT INTO users (employee_id, email, password_hash, role, is_verified)
        VALUES (?, ?, ?, ?, 1)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $employee_id, $email, $password_hash, $role);

if ($stmt->execute()) {
    echo "Signup successful. You can now login.";
} else {
    echo "Signup failed. Email may already exist.";
}
?>