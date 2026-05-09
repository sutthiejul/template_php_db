# PHP Template with Database

A simple yet powerful PHP template with MySQLi database integration for CRUD operations.

## Features

✅ MySQLi Database Connection
✅ Prepared Statements (SQL Injection Prevention)
✅ CRUD Operations (Create, Read, Update, Delete)
✅ Input Validation
✅ Reusable Templates (Header, Footer)
✅ Clean Code Structure
✅ Error Handling
✅ Perfect for Learning PHP & Database

## Project Structure

```
template_php_db/
├── includes/
│   └── db.php                (Database connection)
├── templates/
│   ├── header.php
│   └── footer.php
├── pages/
│   ├── users.php             (List users)
│   └── create_user.php       (Add user)
├── index.php                 (Home page)
├── config.php                (Configuration)
└── README.md
```

## Installation

### 1. Clone the repository
```bash
git clone https://github.com/sutthiejul/template_php_db.git
cd template_php_db
```

### 2. Create Database

Open phpMyAdmin or MySQL CLI and run:

```sql
CREATE DATABASE php_template;

USE php_template;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### 3. Configure Database

Edit `includes/db.php` and update your database credentials:

```php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'your_password';
$db_name = 'php_template';
```

## Usage

### Run the PHP Development Server

```bash
php -S localhost:8000
```

Then open your browser and navigate to:
```
http://localhost:8000
```

## Features & Pages

### Home Page (`index.php`)
- Welcome message
- Quick access to features

### Users List (`pages/users.php`)
- Display all users in a table
- View user details
- Edit and Delete options

### Add User (`pages/create_user.php`)
- Form to add new user
- Input validation
- Email uniqueness check
- Success/error messages

## Database

### Users Table Structure

| Column | Type | Description |
|--------|------|-------------|
| id | INT (Auto Increment) | Primary Key |
| name | VARCHAR(100) | User's full name |
| email | VARCHAR(100) | User's email (Unique) |
| phone | VARCHAR(20) | User's phone number |
| created_at | TIMESTAMP | Creation date |
| updated_at | TIMESTAMP | Last update date |

## Security

✅ **Prepared Statements**: Prevents SQL injection attacks
✅ **Input Validation**: Validates user input before processing
✅ **HTMLSpecialChars**: Escapes output to prevent XSS attacks
✅ **Email Validation**: Uses PHP filter functions

## License

MIT License - Feel free to use this template for your projects!
