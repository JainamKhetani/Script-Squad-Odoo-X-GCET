<?php
session_start();
include "db.php";

/* Fetch Leave Requests */
$sql = "
SELECT 
    e.full_name,
    lt.type_name,
    lr.start_date,
    lr.end_date,
    lr.reason,
    lr.status
FROM leave_requests lr
JOIN employees e ON lr.employee_id = e.id
JOIN leave_types lt ON lr.leave_type_id = lt.id
ORDER BY lr.created_at DESC
";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Leave Management | DayFlow HR</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#f4f6f9;
}

/* ===== Layout ===== */
.wrapper{
    display:flex;
}

/* ===== Sidebar ===== */
.sidebar{
    width:240px;
    background:#4A70A9;
    min-height:100vh;
    padding:20px;
    color:#fff;
}

.sidebar h2{
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:#fff;
    text-decoration:none;
    padding:12px;
    border-radius:6px;
    margin-bottom:10px;
}

.sidebar a:hover,
.sidebar a.active{
    background:rgba(255,255,255,0.2);
}

/* ===== Main ===== */
.main{
    flex:1;
    padding:30px;
}

.page-title{
    font-size:26px;
    font-weight:600;
    margin-bottom:25px;
}

/* ===== Card ===== */
.card{
    background:#fff;
    border-radius:12px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    padding:20px;
}

/* ===== Table ===== */
table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#f1f3f6;
    padding:14px;
    text-align:left;
    font-size:14px;
}

td{
    padding:14px;
    border-bottom:1px solid #eee;
}

tr:last-child td{
    border-bottom:none;
}

/* ===== Status Badges ===== */
.badge{
    padding:6px 14px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.pending{
    background:#fff3cd;
    color:#856404;
}

.approved{
    background:#d4edda;
    color:#155724;
}

.rejected{
    background:#f8d7da;
    color:#721c24;
}

.empty{
    text-align:center;
    color:#888;
    padding:20px;
}
</style>
</head>

<body>

<div class="wrapper">

    <!-- ===== Sidebar ===== -->
    <div class="sidebar">
        <h2>DayFlow HR</h2>
        <a href="admin_dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
        <a href="employees.php"><i class="fa fa-users"></i> Employees</a>
        <a href="attendance.php"><i class="fa fa-calendar-check"></i> Attendance</a>
        <a href="leave.php" class="active"><i class="fa fa-umbrella-beach"></i> Leave</a>
        <a href="payroll.php"><i class="fa fa-money-bill-wave"></i> Payroll</a>
        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- ===== Main Content ===== -->
    <div class="main">
        <div class="page-title">
            <i class="fa fa-umbrella-beach"></i> Leave Management
        </div>

        <div class="card">
            <table>
                <tr>
                    <th>Employee Name</th>
                    <th>Leave Type</th>
                    <th>Duration</th>
                    <th>Reason</th>
                    <th>Status</th>
                </tr>

                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['full_name']) ?></td>
                            <td><?= htmlspecialchars($row['type_name']) ?></td>
                            <td>
                                <?= date("d M Y", strtotime($row['start_date'])) ?>
                                →
                                <?= date("d M Y", strtotime($row['end_date'])) ?>
                            </td>
                            <td><?= htmlspecialchars($row['reason']) ?></td>
                            <td>
                                <span class="badge <?= $row['status'] ?>">
                                    <?= ucfirst($row['status']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="empty">No leave requests found</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>

</div>

</body>
</html>
