<div align="center">

# 🧑‍💼 DayFlow  
## Human Resource Management System  
### *Every workday, perfectly aligned.*

<br/>

<img src="https://img.shields.io/badge/HRMS-System-blue?style=for-the-badge"/>
<img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php"/>
<img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"/>
<img src="https://img.shields.io/badge/HTML-CSS-JS-orange?style=for-the-badge"/>
<img src="https://img.shields.io/badge/Hackathon-Ready-success?style=for-the-badge"/>

<br/><br/>

**A secure, role-based Human Resource Management System that digitizes employee data, attendance, leave workflows, and payroll visibility.**

</div>

---

## 📋 Table of Contents
- 🌟 Overview  
- 🎯 Problem Statement  
- 💡 Our Solution  
- ✨ Key Features  
- 🏗️ System Architecture  
- 🔧 Tech Stack  
- 📁 Project Structure  
- 🚀 Getting Started  
- 🔐 Authentication & Roles  
- 📊 Core Modules  
- 🔮 Future Enhancements  
- 👨‍💻 Team  

---

## 🌟 Overview

**DayFlow** is a web-based **Human Resource Management System (HRMS)** designed to streamline daily HR operations for organizations.

It replaces manual registers, spreadsheets, and email-based approvals with a **centralized, real-time, role-driven platform**.

---

## 🎯 Problem Statement

Traditional HR processes often involve:

- ❌ Manual attendance tracking  
- ❌ Email-based leave approvals  
- ❌ Scattered employee records  
- ❌ No real-time visibility for HR  

These issues lead to inefficiency, data inconsistency, and delayed decision-making.

---

## 💡 Our Solution

**DayFlow HRMS** provides a simple yet powerful solution with:

- 🔐 Secure session-based authentication  
- 🧑‍💼 Clear role separation (Admin / Employee)  
- 🕒 Attendance and leave management  
- 💰 Payroll visibility with admin control  
- 📊 Dashboard-driven HR insights  

Built using **PHP + MySQL**, DayFlow focuses on **clarity, security, and real-world HR workflows**.

---

## ✨ Key Features

### 👤 User & Role Management
- Secure login system  
- Role-based access control  
- Session-protected routes  

### 🕒 Attendance Management
- Daily attendance tracking  
- Admin-wide attendance view  
- Status-based records  

### 🌴 Leave Management
- Leave application by employees  
- Admin approval / rejection  
- Real-time status updates  

### 💰 Payroll Module
- Read-only salary view for employees  
- Admin-controlled payroll management  

### 📊 Admin Dashboard
- Total employees  
- Pending leave requests  
- Employees on leave  
- Recent employee activity  

---

Frontend (HTML / CSS / JavaScript)
↓
PHP Backend (Authentication & Business Logic)
↓
MySQL Database (phpMyAdmin)


---

## 🔧 Tech Stack

| Layer | Technology |
|------|-----------|
| Frontend | HTML5, CSS3, JavaScript |
| Backend | PHP |
| Database | MySQL |
| DB Tool | phpMyAdmin |
| Authentication | PHP Sessions |
| Tools | XAMPP / VS Code / GitHub |

---

## 📁 Project Structure


## 🏗️ System Architecture

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
│ ├── css/
│ └── images/
│
└── README.md


---

## 🚀 Getting Started

### 🔹 Prerequisites
- PHP 8+
- MySQL
- XAMPP / WAMP
- Web Browser

---

### 🔹 Installation Steps

#### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/dayflow-hrms.git
cd dayflow-hrms
```

####2️⃣ Create Database
```bash
CREATE DATABASE dayflow_hrms;
```

####3️⃣ Configure Database
Edit db.php:
```bash
$conn = new mysqli("localhost", "root", "", "dayflow_hrms");
```

####4️⃣ Run the Project
Start Apache & MySQL from XAMPP
Open browser:
```bash
http://localhost/DayFlow-HRMS/login.html
```

🔐 Authentication & Roles
👨‍💼 Admin / HR

Access admin dashboard

Manage employees

Approve / reject leave

View attendance & payroll

👤 Employee

View personal profile

Apply for leave

View attendance

View salary

🔒 All protected routes are secured using PHP session validation.

📊 Core Modules
Module	Description
Authentication	Secure login & session handling
Employee Management	Centralized employee records
Attendance	Daily attendance tracking
Leave Management	Approval-based leave workflow
Payroll	Salary visibility & admin control
🔮 Future Enhancements

📧 Email & notification alerts

📈 Analytics & reporting dashboard

📄 Salary slip generation

📊 Monthly / yearly attendance reports

🔐 Audit logs & enhanced security

👨‍💻 Team
``` bash
<div align="center">

Built collaboratively by a 4-member development team

Backend • Database • UI • Integration

</div>
<div align="center">
⭐ Why DayFlow?

Simple • Secure • Real-world HR logic • Hackathon-ready

</div> ```
