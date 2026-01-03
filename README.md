<div align="center">

# 🧑‍💼 DayFlow  
## Human Resource Management System  
### *Every workday, perfectly aligned.*

<br/>

<img src="https://img.shields.io/badge/HRMS-System-blue?style=for-the-badge"/>
<img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php"/>
<img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"/>
<img src="https://img.shields.io/badge/Odoo%20Hackathon-Production--Ready-success?style=for-the-badge"/>

<br/><br/>

**DayFlow is a secure, role-based Human Resource Management System (HRMS) that digitizes employee operations, attendance tracking, leave approvals, and payroll visibility using a clean PHP–MySQL architecture.**

</div>

---


## 📌 Table of Contents
- 🌟 [Overview](#-overview)
- 🎯 [Problem Statement](#-problem-statement)
- 💡 [Our Solution](#-our-solution)
- ✨ [Key Features](#-key-features)
- 🔐 [Authentication & Roles](#-authentication--roles)
- 📊 [Core Modules](#-core-modules)
- 🔄 [Application Workflow](#-application-workflow)
- 🏗️ [System Architecture](#-system-architecture)
- 🗄️ [Database Design Overview](#-database-design-overview)
- 🔧 [Tech Stack](#-tech-stack)
- 📁 [Project Structure](#-project-structure-improved)
- 🚀 [Getting Started](#-getting-started)
- 🧪 [Security & Validation](#-security--validation)
- 📈 [Scalability Considerations](#-scalability-considerations)
- 🔮 [Future Enhancements](#-future-enhancements)
- 👨‍💻 [Team](#-team)

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



```text
DayFlow-HRMS/
├── db.php                     # Database connection
├── admin_dashboard.php        # Admin dashboard & metrics
├── employees.php              # Employee management
├── attendance.php             # Attendance tracking
├── leave.php                  # Leave requests & approvals
├── payroll.php                # Payroll management
├── login.html                 # Login page
├── logout.php                 # Logout & session destroy
├── assets/
│   ├── css/
│   └── images/
└── README.md

```
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
git clone https://github.com/JainamKhetani/Script-Squad-Odoo-X-GCET.git
cd Script-Squad-Odoo-X-GCET
```

2️⃣ Create database
SQL
```bash
CREATE DATABASE dayflow_hrms;
```

3️⃣ Configure database connection

Edit db.php:
```bash
$conn = new mysqli("localhost", "root", "", "dayflow_hrms");
```
4️⃣ Run the project

Start Apache & MySQL from XAMPP
Open browser:

```bash
http://localhost/DayFlow-HRMS/login.html
```

> 💡 Default admin credentials can be added directly in the database for initial access.

---

## 🧪 Security & Validation

Security is a core design principle of **DayFlow HRMS**. Since the system handles sensitive employee information such as personal details, attendance records, leave history, and payroll data, strong security mechanisms are implemented at every level of the application.

### 🔐 Session-Based Authentication
DayFlow uses **PHP session-based authentication** to manage user login and identity throughout the application lifecycle.

- User sessions are created upon successful login
- Sessions store user identifiers and role information
- Sessions are destroyed explicitly during logout
- Prevents unauthorized access to protected pages

This approach ensures:
- Secure persistence of login state
- Protection against session hijacking through controlled session handling
- Lightweight authentication without external dependencies

---

### 🛂 Role-Level Access Control

- 👤 User Login  
        ↓  
- 🧾 Role Identified  
        ↓  
- 🧑‍💼 Admin / HR  
  ├─ Manage Employees  
  ├─ Approve / Reject Leave  
  └─ View Attendance & Payroll  

- 👤 Employee  
  ├─ View Personal Profile  
  ├─ View Attendance  
  └─ View Salary  

        ↓  
- 🔎 Role Validation Checks  
  ├─ On Page Load  
  ├─ Before Sensitive Actions  
  └─ Before Admin-Only Modules  

        ↓  
- 🛡️ Access Granted or Denied  

---

### 🚫 Protected Admin Routes
All administrative routes are secured using server-side validation.

- Admin dashboard pages are inaccessible without valid admin session
- Unauthorized access attempts are redirected to the login page
- Direct URL access is blocked for restricted pages

Example protections include:
- Admin dashboards
- Payroll management pages
- Employee management modules

This ensures that sensitive operations remain accessible only to authorized personnel.

---

### 🧼 Input Validation & Sanitization
All user-provided inputs are validated and sanitized to prevent common web vulnerabilities.

Security measures include:
- Trimming and validating form inputs
- Sanitizing text fields using PHP built-in functions
- Escaping output using `htmlspecialchars()` to prevent XSS attacks
- Validating numeric and date inputs before database operations

These practices significantly reduce risks related to:
- Cross-Site Scripting (XSS)
- SQL Injection
- Malicious form submissions

---

### 🔁 Secure Redirect Handling

- 👤 User Request  
        ↓  
- 🔐 Session Check  
        ↓  
- ❌ Unauthorized?  
  ├─ Yes → 🔑 Login Page  
  └─ No  
        ↓  
- ✅ Authorized Access  
        ↓  
- 🖥️ Protected View Rendered
  

| Redirect Rule | Status |
|--------------|--------|
| Session Validation | 🔐 Active |
| Unauthorized Redirect | 🔑 Enabled |
| Loop Prevention | ♻️ Controlled |
| UX Safety | ⭐ Optimized |



---

### 🧠 Summary of Security Practices
- Session-based authentication
- Role-based access control
- Protected admin-only routes
- Input validation & sanitization
- Secure redirect mechanisms

These combined measures make DayFlow a **secure and reliable HRMS platform** suitable for real-world usage.

---

## 📈 Scalability Considerations

DayFlow HRMS is designed with **future scalability and extensibility** in mind. Although currently implemented for academic and hackathon use, the architecture supports growth into a full-fledged enterprise HR system.

---

### 🧩 Modular System Design
Each major feature of DayFlow is implemented as a separate logical module:

- Authentication
- Employee Management
- Attendance
- Leave Management
- Payroll

This modular structure ensures:
- Easy addition of new features
- Minimal impact on existing code
- Improved maintainability

New modules such as performance tracking or recruitment can be integrated seamlessly.

---


### 🗄️ Database Scalability (Flow)

- Employee Data  
        ↓  
- Attendance Records  
        ↓  
- Payroll Information  
        ↓  
- 📊 Analytics & Reports  
        ↓  
- 🗂️ Audit & History Logs



| Database Feature | Status |
|-----------------|--------|
| Relational Integrity | 🔗 Enabled |
| Analytics Expansion | 📈 Ready |
| Historical Storage | 🗂️ Supported |
| Query Optimization | ⚡ Indexed |



---

### 🎨 UI Flexibility
The frontend of DayFlow is decoupled from backend logic.

This allows:
- UI redesigns without backend changes
- Migration to modern UI frameworks in the future
- Easy enhancement of user experience

The separation of concerns ensures long-term adaptability.

---

### ⚙️ Backend Extensibility

- 🧠 Core Backend Logic  
        ↓  
- ➕ New APIs  
        ↓  
- 🔌 Third-Party Integrations  
        ↓  
- 🌐 RESTful Architecture  



| Capability | Support |
|-----------|---------|
| API Expansion | ✅ |
| External Services Integration | ✅ |
| REST Migration | ✅ |
| Enterprise Readiness | ⭐ |


---

### 📊 Performance & Optimization Scope
Future optimizations may include:
- Query optimization
- Caching frequently accessed data
- Pagination for large datasets

These considerations ensure the system remains responsive as usage scales.

---

## 🔮 Future Enhancements

While DayFlow already covers core HR functionalities, several enhancements can further improve usability, automation, and analytical capabilities.

---

### 📧 Email & Notification Alerts


- 👤 Employee Action  
        ↓  
- 📨 Email Alert → 🔔 In-App Notification  
        ↓  
- 👥 Admin / Employee Acknowledgement  


| Trigger Event | Notification Type |
|--------------|------------------|
| Leave Approval / Rejection | 📧 Email + 🔔 In-App |
| Attendance Irregularity | 🔔 In-App |
| Payroll Update | 📧 Email |
| System Updates | 🔔 In-App |



---

### 📈 Analytics & Reporting Dashboard
- Visual dashboards for HR administrators
- Attendance trends and summaries
- Leave usage analysis
- Department-wise employee statistics

Reports can assist in strategic decision-making and compliance audits.

---

### 📄 Salary Slip Generation (PDF)
- Automated generation of salary slips
- Monthly downloadable PDF reports
- Secure access for employees
- Standardized payroll documentation

This enhances transparency and reduces manual payroll processing.

---

### 📊 Attendance Reports
- Monthly and yearly attendance summaries
- Downloadable attendance sheets
- Employee-wise and department-wise reports

#### 📅 Attendance Summary (Monthly / Yearly)

Attendance (%)

100 ┤█████████████████████████████

90 ┤█████████████████████████

80 ┤████████████████████

70 ┤███████████████

60 ┤██████████

50 ┤███████

└─ Jan ─ Feb ─ Mar ─ Apr ─ May ─ Jun

---

#### 👥 Employee-wise Attendance Snapshot

| Employee | Jan | Feb | Mar | Apr | Status |
|--------|-----|-----|-----|-----|--------|
| Emp 01 | ████ | ███ | ████ | ███ | ✅ Regular |
| Emp 02 | ███ | ██ | ███ | ██ | ⚠️ Irregular |
| Emp 03 | ████ | ████ | ████ | ████ | ⭐ Excellent |

---

#### 🏢 Department-wise Attendance Distribution

| Department | Attendance Level |
|-----------|------------------|
| HR | ██████████ 90% |
| IT | ████████ 80% |
| Finance | ███████ 75% |
| Operations | ██████ 70% |

---

#### 📥 Report Availability

| Report Type | Format | Availability |
|------------|--------|--------------|
| Monthly Attendance | PDF / Excel | ✅ Downloadable |
| Yearly Attendance | PDF / Excel | ✅ Downloadable |
| Employee-wise Report | PDF | ✅ Downloadable |
| Department-wise Report | PDF | ✅ Downloadable |


---

### 🔐 Audit Logs & Enhanced Security
- Track admin actions
- Log sensitive operations
- Maintain system audit trails
- Enhanced security monitoring

This improves accountability and system reliability.

---

### 🕒 Automated Attendance Systems
- Integration with biometric devices
- QR-based check-in systems
- Time-based auto attendance
- Integration with IoT devices

This reduces manual attendance entry and improves accuracy.

---

## 👨‍💻 Development Team & Contributions

The DayFlow HRMS project was developed through equal collaboration, with each team member contributing significantly across different phases of design, development, and integration.

---

### 👤 Team Member 1

| Field | Details |
|------|--------|
| 🧑 Name | **Jainam Anilbhai Khetani** |
| 🎓 Role | Development Team Member |
| 🛠️ Key Contributions | Backend development, database schema design, core module integration |
| 🔐 Responsibilities | Authentication logic, session handling, access control |
| 📌 Additional Work | Project coordination, final integration, deployment readiness |

---

### 👤 Team Member 2

| Field | Details |
|------|--------|
| 🧑 Name | **Khushi Ka. Patel** |
| 🎓 Role | Development Team Member |
| 🛠️ Key Contributions | Module integration, feature implementation, system testing |
| 🔐 Responsibilities | Validation checks, error handling, workflow verification |
| 📌 Additional Work | Documentation support, UI flow testing, bug fixing |

---

### 👤 Team Member 3

| Field | Details |
|------|--------|
| 🧑 Name | **Palak Donga** |
| 🎓 Role | Development Team Member |
| 🛠️ Key Contributions | Frontend structure, UI styling, layout consistency |
| 🔐 Responsibilities | Form design, user experience improvements |
| 📌 Additional Work | UI testing, responsiveness checks, visual enhancements |

---

### 👤 Team Member 4

| Field | Details |
|------|--------|
| 🧑 Name | **Jashjoshi** |
| 🎓 Role | Development Team Member |
| 🛠️ Key Contributions | Backend logic implementation, data processing |
| 🔐 Responsibilities | Input validation, secure operations |
| 📌 Additional Work | Debugging, feature optimization, performance checks |

---
### 🤝 Team Collaboration & Project Closure

- ✅ Equal and active participation across all development phases  
- ✅ Clear communication and well-defined responsibility sharing  
- ✅ Collaborative testing, debugging, and feature integration  
- ✅ Joint ownership of design decisions and final project output  

> 🌟 *This project is a result of balanced teamwork, consistent collaboration, and collective accountability, ensuring both technical correctness and real-world relevance.*

---

<div align="center">

## ⭐ Why DayFlow?

**Simple • Secure • Scalable • Practical • Hackathon-Ready  • Odoo x GCET Hackathon**

DayFlow is not just an academic implementation, but a thoughtfully designed HRMS solution that mirrors real organizational workflows.  
It demonstrates strong fundamentals in system design, security, modular development, and team collaboration.

By combining clean architecture with real-world HR logic, DayFlow stands as a reliable foundation for future enhancements and enterprise-level extensions.

</div>

---

<div align="center">

### 🚀 Final Note

*DayFlow represents our commitment to building meaningful, secure, and scalable software through teamwork, discipline, and practical engineering.*

</div>

---


