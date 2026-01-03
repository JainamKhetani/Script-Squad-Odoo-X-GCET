<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'EMPLOYEE') {
    header("Location: login.html");
    exit;
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT e.full_name, e.department
        FROM employees e
        JOIN users u ON u.employee_id = e.id
        WHERE u.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$emp = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employee Dashboard | DayFlow HR</title>
<link rel="stylesheet" href="dashboard.css">
</head>
<body>

<!-- ===== SIDEBAR ===== -->
<aside class="sidebar">
    <h2>DayFlow<span>HR</span></h2>

    <nav>
        <a class="active">Dashboard</a>
        <a>Attendance</a>
        <a>Leave</a>
        <a>Payroll</a>
        <a>Profile</a>
    </nav>
</aside>

<!-- ===== MAIN ===== -->
<div class="main">

    <!-- TOP BAR -->
    <div class="topbar">
        <input type="text" placeholder="Search attendance, leaves...">
        <div class="profile">
            <span><?php echo htmlspecialchars($emp['full_name']); ?></span>
        </div>
    </div>

    <!-- KPI CARDS -->
    <div class="kpi">
        <div class="kpi-card blue">
            <h3>Attendance</h3>
            <p>Present Today</p>
        </div>

        <div class="kpi-card green">
            <h3>Leaves</h3>
            <p>2 Remaining</p>
        </div>

        <div class="kpi-card orange">
            <h3>Requests</h3>
            <p>1 Pending</p>
        </div>

        <div class="kpi-card red">
            <h3>Status</h3>
            <p>Active</p>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="panel large">
            <h4>Attendance Overview</h4>
            <div class="placeholder">Graph / Table here</div>
        </div>

        <div class="panel small">
            <h4>Quick Actions</h4>
            <button>Apply Leave</button>
            <button>View Attendance</button>
            <button>View Payroll</button>
        </div>

    </div>

</div>

</body>
</html>
