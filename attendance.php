<?php
session_start();
require_once "db.php";

/* AUTH CHECK */
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'ADMIN') {
    header("Location: login.html");
    exit;
}

/* FETCH ATTENDANCE DATA */
$sql = "
    SELECT 
        e.full_name,
        e.employee_code,
        a.attendance_date,
        a.status,
        a.check_in,
        a.check_out,
        a.working_hours
    FROM attendance a
    JOIN employees e ON a.employee_id = e.id
    ORDER BY a.attendance_date DESC
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DayFlow HR | Attendance</title>
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
    padding: 20px;
    color: white;
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

.sidebar a:hover,
.sidebar a.active {
    background: rgba(255,255,255,0.2);
}

/* MAIN */
.main {
    flex: 1;
    padding: 30px;
}

h1 {
    margin-bottom: 25px;
}

/* TABLE */
.table-box {
    background: white;
    padding: 25px;
    border-radius: 16px;
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

/* STATUS BADGES */
.status {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
    text-transform: capitalize;
}

.present {
    background: #e0f6ea;
    color: #2e7d32;
}

.absent {
    background: #fdecea;
    color: #c62828;
}

.leave {
    background: #fff4e5;
    color: #ef6c00;
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

    <!-- MAIN -->
    <div class="main">
        <h1>Attendance</h1>

        <div class="table-box">
            <table>
                <tr>
                    <th>Employee</th>
                    <th>Employee Code</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Working Hours</th>
                </tr>

                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['full_name']) ?></td>
                            <td><?= htmlspecialchars($row['employee_code']) ?></td>
                            <td><?= htmlspecialchars($row['attendance_date']) ?></td>
                            <td>
                                <span class="status <?= $row['status'] ?>">
                                    <?= htmlspecialchars($row['status']) ?>
                                </span>
                            </td>
                            <td><?= $row['check_in'] ?? '-' ?></td>
                            <td><?= $row['check_out'] ?? '-' ?></td>
                            <td><?= $row['working_hours'] ?? '-' ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No attendance records found.</td>
                    </tr>
                <?php endif; ?>

            </table>
        </div>
    </div>
</div>

</body>
</html>
