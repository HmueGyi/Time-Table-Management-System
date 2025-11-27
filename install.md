# Installation Guide

## Prerequisites
- A web server (e.g., Apache, Nginx) with PHP installed.
- MySQL database server.
- A web browser.

## Steps
1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```
2. Import the database:
   - Open your MySQL client or phpMyAdmin.
   - Import the `ttms.sql` file to create the required database and tables.
3. Configure the database connection:
   - Open `files/connection.php`.
   - Update the database credentials (host, username, password, database name).
4. Deploy the application:
   - Place the project folder in your web server's root directory.
   - Ensure the `files/` directory has appropriate permissions.
5. Access the application:
   - Open your web browser and navigate to `http://<your-server-address>/Time-Table-Management-System`.

## Troubleshooting
- Ensure the database credentials are correct.
- Check the web server logs for errors.