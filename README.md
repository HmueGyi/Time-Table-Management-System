# TimeTable Management System

## Overview
The TimeTable Management System is a web-based platform designed to allow administrators and faculty to log in and manage the timetable for various departments. The system enables easy access to different departments' faculty information and supports user authentication for both Admin and Faculty members. It also includes a contact form and a Google Map integration for location details.

## Features

- **Admin Login**: Allows administrators to log in and manage timetable settings.
- **Faculty Login**: Faculty members can log in to view their timetable and associated information.
- **Dynamic Faculty Information**: Displays faculty details based on their department and designation.

## Prerequisites

Before you begin, ensure you have met the following requirements:
- **PHP**: Version 7.4 or higher
- **MySQL**: Version 5.7 or higher
- **Bootstrap**: Used for the frontend styling
- **jsPDF**: Used for PDF generation
- **Google Maps API**: For location integration

## Installation

### Step 1: Clone the Repository

Clone the repository to your local server or hosting platform.

```bash
git clone https://github.com/yourusername/timetable-management-system.git
```

### Step 2: Set Up Database

Create a MySQL database named `ttms` and import the relevant tables for the timetable management system. Example SQL schema:

```sql
CREATE DATABASE ttms;

USE ttms;

CREATE TABLE teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    designation VARCHAR(100) NOT NULL
);

-- Add other necessary tables like timetable, users, etc.
```

### Step 3: Update Database Connection

Update the database connection details in the PHP script `connection.php`.

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ttms";
```

### Step 4: Configure Web Server

Ensure that your web server (Apache or Nginx) is set up to serve PHP files and that the necessary permissions are granted to access the database.

### Step 5: Access the Application

Once the setup is complete, you can access the application by navigating to the URL of your server.

```
http://localhost/timetable-management-system/index.php
```

## Usage

1. **Login as Admin**: Click the "Admin Login" button and enter the administrator credentials to manage the system.
2. **Login as Faculty**: Click the "Teacher Login" button to enter faculty credentials and view department-specific timetable details.
3. **Contact Form**: Fill out the contact form to get in touch with the system administrators.
4. **Generate PDF**: Click the "Generate PDF" button to download the timetable as a PDF document.

## Technologies Used

- **PHP** for server-side scripting
- **MySQL** for database management
- **Bootstrap** for responsive front-end design
- **jsPDF** for generating PDF documents
- **Google Maps API** for embedding a location map

## License

This project is open-source and available under the [MIT License](LICENSE).
```

### Customization
- Adjust the database schema as needed to fit your requirements.
- You can change the UI styles and layout by modifying the Bootstrap classes and custom CSS.
