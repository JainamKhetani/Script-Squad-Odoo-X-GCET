<div align="center">

# 🧑‍💼 DayFlow  
## Human Resource Management System  
### *Every workday, perfectly aligned.*

<br/>

<img src="https://img.shields.io/badge/HRMS-System-blue?style=for-the-badge"/>
<img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php"/>
<img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"/>
<img src="https://img.shields.io/badge/HTML-CSS-JS-orange?style=for-the-badge"/>
<img src="https://img.shields.io/badge/Odoo%20Hackathon-Production--Ready-success?style=for-the-badge"/>

<br/><br/>

**DayFlow is a secure, role-based Human Resource Management System (HRMS) that digitizes employee operations, attendance tracking, leave approvals, and payroll visibility using a clean PHP–MySQL architecture.**

</div>

---

## 📌 Table of Contents
- 🌟 Overview  
- 🎯 Problem Statement  
- 💡 Our Solution  
- ✨ Key Features  
- 🔐 Authentication & Roles  
- 📊 Core Modules  
- 🔄 Application Workflow  
- 🏗️ System Architecture  
- 🗄️ Database Design Overview  
- 🔧 Tech Stack  
- 📁 Project Structure  
- 🚀 Getting Started  
- 🧪 Security & Validation  
- 📈 Scalability Considerations  
- 🔮 Future Enhancements  
- 👨‍💻 Team  

---

## 🌟 Overview

**DayFlow** is a web-based **Human Resource Management System (HRMS)** developed to simplify and automate everyday HR activities within an organization.

The system is designed for:
- Small to mid-scale organizations  
- Academic & hackathon projects  
- HR workflow demonstrations  

Instead of relying on spreadsheets, paper records, or email approvals, DayFlow offers a **centralized, structured, and secure digital platform**.

---

## 🎯 Problem Statement

In many organizations, HR processes suffer due to outdated or manual systems. Common issues include:

- ❌ Attendance recorded manually or inconsistently  
- ❌ Leave approvals managed via emails or messages  
- ❌ Employee data scattered across multiple files  
- ❌ No centralized dashboard for HR decision-making  
- ❌ Lack of transparency and accountability  

These inefficiencies increase workload, cause errors, and reduce operational clarity.

---

## 💡 Our Solution

**DayFlow HRMS** addresses these challenges by introducing:

- 🔐 Secure login & session-based authentication  
- 🧑‍💼 Clear role separation between **Admin / HR** and **Employees**  
- 🕒 Structured attendance tracking  
- 🌴 Approval-based leave management  
- 💰 Controlled payroll visibility  
- 📊 Centralized admin dashboard  

The system focuses on **real-world HR logic**, not just CRUD operations.

---

## ✨ Key Features

### 👤 User & Role Management
- Secure login & logout  
- Session-based authentication  
- Role-based access control  
- Protected admin routes  

### 🕒 Attendance Management
- Daily attendance tracking  
- Employee-specific attendance view  
- Organization-wide attendance overview for Admin  

### 🌴 Leave Management
- Leave application with reason & duration  
- Admin approval or rejection  
- Real-time leave status updates  

### 💰 Payroll Module
- Read-only salary view for employees  
- Admin-controlled salary management  
- Centralized payroll records  

### 📊 Admin Dashboard
- Total employees count  
- Pending leave requests  
- Employees currently on leave  
- Recent employee activity summary  

---

## 🔐 Authentication & Roles

### 👨‍💼 Admin / HR
- Access admin dashboard  
- Manage employee records  
- Approve / reject leave requests  
- View attendance and payroll details  
- Monitor organizational HR data  

### 👤 Employee
- View personal profile  
- Apply for leave  
- Track attendance history  
- View salary details  

🔒 **All protected routes are secured using PHP session validation**, ensuring unauthorized users cannot access restricted pages.

---

## 📊 Core Modules

| Module | Description |
|------|------------|
| Authentication | Secure login, logout, and session handling |
| Employee Management | Centralized employee records and status |
| Attendance | Daily attendance tracking & monitoring |
| Leave Management | Approval-based leave workflow |
| Payroll | Salary visibility & admin control |

Each module is designed to operate independently while remaining fully integrated with the system.

---

## 🔄 Application Workflow

1. User logs in as **Admin** or **Employee**
2. Session validation verifies role access
3. Employee can:
   - View profile
   - Apply for leave
   - View attendance & salary
4. Admin can:
   - View dashboard metrics
   - Approve / reject leave
   - Monitor attendance & payroll
5. All actions update the MySQL database in real time

---

## 🏗️ System Architecture

Frontend (HTML / CSS / JavaScript)
↓
PHP Backend (Authentication & Business Logic)
↓
MySQL Database (phpMyAdmin)

yaml
Copy code

### Architectural Benefits
- Clear separation of concerns  
- Secure data flow  
- Easy maintenance  
- Scalable for future enhancements  

---

## 🗄️ Database Design Overview

Key tables used in the system include:
- `employees`
- `attendance`
- `leave_requests`
- `payroll`

Each table is linked using **employee IDs**, ensuring relational integrity and consistency across modules.

---

## 🔧 Tech Stack

| Layer | Technology |
|-----|------------|
| Frontend | HTML5, CSS3, JavaScript |
| Backend | PHP |
| Database | MySQL |
| DB Tool | phpMyAdmin |
| Authentication | PHP Sessions |
| Tools | XAMPP / VS Code / GitHub |

---

## 📁 Project Structure (Improved)

DayFlow-HRMS/
│
├── db.php # Database connection
├── admin_dashboard.php # Admin dashboard & metrics
├── employees.php # Employee management
├── attendance.php # Attendance tracking
├── leave.php # Leave requests & approvals
├── payroll.php # Payroll management
│
├── login.html # Login page
├── logout.php # Logout & session destroy
│
├── assets/
│ ├── css/ # Stylesheets
│ └── images/ # UI images & icons
│
└── README.md # Project documentation

yaml
Copy code

---

## 🚀 Getting Started

### 🔹 Prerequisites
- PHP 8+
- MySQL
- XAMPP / WAMP
- Modern web browser

---

### 🔹 Installation Steps

#### 1️⃣ Clone the repository
```bash
git clone https://github.com/your-username/dayflow-hrms.git
cd dayflow-hrms
2️⃣ Create database
sql
Copy code
CREATE DATABASE dayflow_hrms;
3️⃣ Configure database connection
Edit db.php:

php
Copy code
$conn = new mysqli("localhost", "root", "", "dayflow_hrms");
4️⃣ Run the project
Start Apache & MySQL from XAMPP

Open browser:

bash
Copy code
http://localhost/DayFlow-HRMS/login.html
🧪 Security & Validation
Session-based authentication

Role-level access checks

Protected admin routes

Input sanitization using PHP functions

Secure redirects for unauthorized access

📈 Scalability Considerations
DayFlow is designed to be easily extendable:

New modules can be added without breaking existing logic

Database schema supports reporting & analytics

UI can be upgraded without backend changes

🔮 Future Enhancements
📧 Email & notification alerts

📈 Analytics & reporting dashboard

📄 Salary slip generation (PDF)

📊 Monthly & yearly attendance reports

🔐 Audit logs & enhanced security

🕒 Automated attendance systems

👨‍💻 Team
<div align="center">
Developed collaboratively by a 4-member team
Backend • Database • UI • Integration

</div>
<div align="center">
⭐ Why DayFlow?
Simple • Secure • Scalable • Real-world HR logic • Hackathon-ready

</div> ```
