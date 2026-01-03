<?php
session_start();
require_once "db.php";

/* 🔐 AUTH CHECK */
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'ADMIN') {
    header("Location: login.html");
    exit;
}

/* =======================
   DASHBOARD METRICS
======================= */

// Total Employees
$totalEmployees = $conn->query(
    "SELECT COUNT(*) AS total FROM employees"
)->fetch_assoc()['total'] ?? 0;

// Present Today (Attendance module pending)
$presentToday = 0;

// Pending Leave Requests
$pendingRequests = $conn->query(
    "SELECT COUNT(*) AS total FROM leave_requests WHERE status='pending'"
)->fetch_assoc()['total'] ?? 0;

// Employees On Leave
$onLeave = $conn->query(
    "SELECT COUNT(DISTINCT employee_id) AS total 
     FROM leave_requests 
     WHERE status='approved'"
)->fetch_assoc()['total'] ?? 0;

// Recent Employees
$recentEmployees = $conn->query("
    SELECT full_name, department, designation, is_active
    FROM employees
    ORDER BY created_at DESC
    LIMIT 5
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DayFlow HR | Admin Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f9;
}

.container {
    display: flex;
}

/* SIDEBAR */
.sidebar {
    width: 230px;
    background: #4A70A9;
    min-height: 100vh;
    color: white;
    padding: 20px;
}

.sidebar h2 {
    margin-bottom: 30px;
}

.sidebar a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 10px;
}

.sidebar a:hover {
    background: rgba(255,255,255,0.2);
}

/* MAIN */
.main {
    flex: 1;
    padding: 30px;
}

h1 {
    margin-bottom: 20px;
}

/* STATS */
.stats {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.card h2 {
    margin: 0;
    color: #4A70A9;
}

.card p {
    margin-top: 5px;
    color: #666;
}

/* TABLE */
.table-box {
    background: white;
    padding: 20px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 14px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background: #f0f3f8;
}

.status {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
}

.active {
    background: #e0f6ea;
    color: #2e7d32;
}

.inactive {
    background: #fdecea;
    color: #c62828;
}
</style>
</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>DayFlow HR</h2>
        <a href="admin_dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="employees.php"><i class="fa fa-users"></i> Employees</a>
        <a href="attendance.php"><i class="fa fa-calendar-check"></i> Attendance</a>
        <a href="leave.php"><i class="fa fa-umbrella-beach"></i> Leave</a>
        <a href="payroll.php"><i class="fa fa-money-bill"></i> Payroll</a>
        <a href="login.html"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">

        <h1>Admin Dashboard</h1>

        <!-- STATS -->
        <div class="stats">
            <div class="card">
                <h2><?= $totalEmployees ?></h2>
                <p>Total Employees</p>
            </div>

            <div class="card">
                <h2><?= $presentToday ?></h2>
                <p>Present Today</p>
            </div>

            <div class="card">
                <h2><?= $pendingRequests ?></h2>
                <p>Pending Requests</p>
            </div>

            <div class="card">
                <h2><?= $onLeave ?></h2>
                <p>On Leave</p>
            </div>
        </div>

        <!-- RECENT EMPLOYEES -->
        <div class="table-box">
            <h3>Recent Employees</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Status</th>
                </tr>

                <?php if ($recentEmployees->num_rows > 0): ?>
                    <?php while ($emp = $recentEmployees->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($emp['full_name']) ?></td>
                            <td><?= htmlspecialchars($emp['department']) ?></td>
                            <td><?= htmlspecialchars($emp['designation']) ?></td>
                            <td>
                                <?php if ($emp['is_active'] == 1): ?>
                                    <span class="status active">Active</span>
                                <?php else: ?>
                                    <span class="status inactive">Inactive</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4">No employees found</td></tr>
                <?php endif; ?>
            </table>
        </div>

    </div>
</div>

</body>
</html>
