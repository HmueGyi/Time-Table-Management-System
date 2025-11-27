# Time Table Management System

## Overview
The Time Table Management System is a web-based application designed to streamline the process of creating and managing timetables for educational institutions. It provides features for administrators, teachers, and students to interact with the system efficiently. The system aims to reduce manual effort, minimize errors, and ensure efficient utilization of resources.

## Features
- **Classroom Management**: Add, update, and delete classrooms.
- **Subject Management**: Manage subjects and their details.
- **Teacher Management**: Add and manage teacher profiles.
- **Timetable Generation**: Automatically generate timetables based on predefined rules.
- **PDF Export**: Download generated timetables in PDF format.
- **Role-Based Access**: Ensure secure access for administrators, teachers, and students.
- **Responsive Design**: Access the system on various devices with a user-friendly interface.

## Technologies Used
- **Backend**: PHP for server-side scripting.
- **Database**: MySQL for data storage and retrieval.
- **Frontend**: HTML, CSS, JavaScript for the user interface.
- **Frameworks**: Bootstrap for responsive design.

## Installation
Refer to the [Installation Guide](install.md) for detailed steps to set up the system.

## System Architecture
The system follows a three-tier architecture:
1. **Presentation Layer**: User interface built with HTML, CSS, and JavaScript.
2. **Business Logic Layer**: PHP scripts for processing user requests and interacting with the database.
3. **Data Layer**: MySQL database for storing application data.

## Folder Structure
- `files/`: Contains PHP scripts for various functionalities.
  - `addclassrooms.php`: Script for managing classrooms.
  - `addsubjects.php`: Script for managing subjects.
  - `generatetimetable.php`: Script for generating timetables.
  - `connection.php`: Database connection configuration.
- `assets/`: Includes CSS, JavaScript, fonts, and images.
  - `css/`: Stylesheets for the application.
  - `js/`: JavaScript files for interactivity.
  - `img/`: Images used in the application.
- `ttms.sql`: Database schema for the application.

## Usage
1. **Administrator**:
   - Add classrooms, subjects, and teachers.
   - Allocate subjects and classrooms to teachers.
   - Generate and download timetables.
2. **Teacher**:
   - View allocated subjects and classrooms.
   - Download personal timetables.
3. **Student**:
   - View class timetables.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Contact
For any queries or support, please contact the development team at [support@example.com](mailto:support@example.com).