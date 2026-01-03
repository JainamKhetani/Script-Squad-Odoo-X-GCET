<?php
session_start();
require_once "db.php";

/* AUTH CHECK */
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'ADMIN') {
    header("Location: login.html");
    exit;
}

/* FETCH ALL EMPLOYEES */
$result = $conn->query("
    SELECT employee_code, full_name, department, designation, is_active
    FROM employees
    ORDER BY full_name ASC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DayFlow HR | Employees</title>
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

/* SIDEBAR (same as dashboard) */
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

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.page-header h1 {
    margin: 0;
}

/* GRID */
.employee-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 25px;
}

/* CARD */
.employee-card {
    background: white;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.employee-card:hover {
    transform: translateY(-6px);
}

.avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #4A70A9;
    color: white;
    font-size: 26px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
}

.employee-name {
    font-size: 18px;
    font-weight: 600;
}

.employee-code {
    font-size: 13px;
    color: #777;
    margin-bottom: 10px;
}

.employee-info {
    font-size: 14px;
    margin-bottom: 6px;
    color: #444;
}

/* STATUS */
.status {
    display: inline-block;
    margin-top: 12px;
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

/* BUTTON */
.add-btn {
    background: #4A70A9;
    color: white;
    border: none;
    padding: 12px 18px;
    border-radius: 8px;
    cursor: pointer;
}

.add-btn:hover {
    background: #3a5a89;
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

        <div class="page-header">
            <h1>Employees</h1>
            <button class="add-btn">+ Add Employee</button>
        </div>

        <div class="employee-grid">

            <?php if ($result->num_rows > 0): ?>
                <?php while ($emp = $result->fetch_assoc()): 
                    $initials = strtoupper(substr($emp['full_name'], 0, 1));
                ?>
                    <div class="employee-card">
                        <div class="avatar"><?= $initials ?></div>

                        <div class="employee-name">
                            <?= htmlspecialchars($emp['full_name']) ?>
                        </div>

                        <div class="employee-code">
                            <?= htmlspecialchars($emp['employee_code']) ?>
                        </div>

                        <div class="employee-info">
                            <strong>Department:</strong> <?= htmlspecialchars($emp['department']) ?>
                        </div>

                        <div class="employee-info">
                            <strong>Designation:</strong> <?= htmlspecialchars($emp['designation']) ?>
                        </div>

                        <?php if ($emp['is_active'] == 1): ?>
                            <span class="status active">Active</span>
                        <?php else: ?>
                            <span class="status inactive">Inactive</span>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No employees found.</p>
            <?php endif; ?>

        </div>

    </div>
</div>

</body>
</html>
