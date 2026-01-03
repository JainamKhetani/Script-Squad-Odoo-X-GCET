<?php
session_start();
include "db.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';

$sql = "SELECT * FROM users WHERE email=? AND role=? AND is_active=1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $role);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password_hash'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === "ADMIN") {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: employee_dashboard/employee-dashboard.html");
        }
        exit;

    } else {
        echo "Invalid email or password";
    }
} else {
    echo "User not found";
}
?>
