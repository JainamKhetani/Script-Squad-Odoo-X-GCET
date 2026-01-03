<div align="center">
🧑‍💼 DayFlow
Human Resource Management System
Every workday, perfectly aligned.
<br/> <img src="https://img.shields.io/badge/HRMS-Management-blue?style=for-the-badge"/> <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php"/> <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"/> <img src="https://img.shields.io/badge/HTML-CSS-JS-orange?style=for-the-badge"/>

<br/><br/>

A secure, role-based HR management system for employee data, attendance, leave workflows, and payroll visibility.

</div>
📌 Table of Contents

🌟 Overview

🎯 Problem Statement

💡 Solution

✨ Key Features

🏗️ Architecture

🔧 Tech Stack

📁 Project Structure

🚀 Getting Started

🔐 Authentication & Roles

📊 Core Modules

🔮 Future Enhancements

👨‍💻 Team

🌟 Overview

DayFlow is a web-based Human Resource Management System (HRMS) built to digitize and simplify everyday HR operations.

It replaces spreadsheets, manual registers, and email-based approvals with a centralized, real-time, role-driven system.

🎯 Problem Statement

Traditional HR processes suffer from:

❌ Manual attendance tracking
❌ Email-based leave approvals
❌ Scattered employee records
❌ No real-time HR visibility

These issues lead to inefficiency, errors, and poor decision-making.

💡 Our Solution

DayFlow HRMS provides:

✅ Centralized employee data
✅ Role-based access (Admin / Employee)
✅ Attendance & leave workflows
✅ Payroll visibility
✅ Clean admin dashboard

Built with PHP + MySQL, DayFlow focuses on simplicity, security, and real-world usability.

✨ Key Features
👤 User & Role Management

Secure login system

Role-based access control

Session-protected routes

🕒 Attendance Management

Daily attendance records

Admin-wide attendance view

Status-based tracking

🌴 Leave Management

Employee leave application

Admin approval / rejection

Real-time status updates

💰 Payroll Module

Read-only salary view for employees

Admin-controlled payroll management

📊 Admin Dashboard

Total employees

Pending leave requests

Employees on leave

Recent employee activity

🏗️ System Architecture
┌──────────────┐
│  Frontend    │
│ HTML/CSS/JS  │
└──────┬───────┘
       │
       ▼
┌──────────────┐
│ PHP Backend  │
│ Auth & Logic │
└──────┬───────┘
       │
       ▼
┌──────────────┐
│   MySQL DB   │
│ phpMyAdmin  │
└──────────────┘

🔧 Tech Stack
<div align="center">
Layer	Technology
Frontend	HTML5, CSS3, JavaScript
Backend	PHP
Database	MySQL
DB Tool	phpMyAdmin
Auth	PHP Sessions
Tools	XAMPP / VS Code / GitHub
</div>
📁 Project Structure
DayFlow-HRMS/
│
├── db.php
├── admin_dashboard.php
├── employees.php
├── attendance.php
├── leave.php
├── payroll.php
│
├── login.html
├── logout.php
│
├── assets/
│   ├── css/
│   └── images/
│
└── README.md

🚀 Getting Started
🔹 Prerequisites

PHP 8+

MySQL

XAMPP / WAMP

Browser

🔹 Installation
git clone https://github.com/your-username/dayflow-hrms.git
cd dayflow-hrms


Create database:

CREATE DATABASE dayflow_hrms;


Configure db.php:

$conn = new mysqli("localhost", "root", "", "dayflow_hrms");


Run:

http://localhost/DayFlow-HRMS/login.html

🔐 Authentication & Roles
👨‍💼 Admin / HR

✔ Manage employees
✔ Approve/reject leave
✔ View attendance & payroll
✔ Dashboard insights

👤 Employee

✔ View profile
✔ Apply for leave
✔ View attendance
✔ View salary

🔒 All admin routes are session-protected.

📊 Core Modules
Module	Description
Authentication	Secure login & session handling
Employee Management	Central employee records
Attendance	Daily attendance tracking
Leave Management	Approval-based leave system
Payroll	Salary visibility & admin control
🔮 Future Enhancements

🚀 Email & notification alerts
📈 Analytics dashboard
📄 Salary slip generation
📊 Attendance reports
🔐 Audit logs & security hardening

👨‍💻 Team
<div align="center">

Built collaboratively by a 4-member development team

Backend • Database • UI • Integration

</div>
<div align="center">
⭐ Why DayFlow?

Simple. Secure. Real-world HR logic. Hackathon-ready.

</div>
