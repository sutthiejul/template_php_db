<?php
/**
 * Home Page
 */

include 'includes/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PHP Template with Database</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f4f4f4;
        }
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        nav h1 {
            font-size: 1.5rem;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            transition: opacity 0.3s;
        }
        nav a:hover {
            opacity: 0.7;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 20px;
        }
        .hero {
            text-align: center;
            padding: 3rem 0;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .hero h1 {
            color: #667eea;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin: 0 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #764ba2;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .feature-card {
            background: white;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .feature-card h3 {
            color: #667eea;
            margin-bottom: 0.5rem;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>PHP Template</h1>
            <div>
                <a href="index.php">Home</a>
                <a href="pages/users.php">Users</a>
                <a href="pages/create_user.php">Add User</a>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="hero">
            <h1>Welcome to PHP Template with Database! 🚀</h1>
            <p>A simple yet powerful template for building PHP applications with database integration.</p>
            <a href="pages/users.php" class="btn">View Users</a>
            <a href="pages/create_user.php" class="btn">Add New User</a>
        </div>

        <div class="features">
            <div class="feature-card">
                <h3>✅ Database Ready</h3>
                <p>MySQLi connection and prepared statements for secure database operations.</p>
            </div>
            <div class="feature-card">
                <h3>✅ CRUD Operations</h3>
                <p>Create, Read, Update, and Delete operations fully implemented.</p>
            </div>
            <div class="feature-card">
                <h3>✅ Clean Structure</h3>
                <p>Well-organized file structure for easy maintenance and scalability.</p>
            </div>
            <div class="feature-card">
                <h3>✅ Reusable Templates</h3>
                <p>Header, footer, and other components are reusable across pages.</p>
            </div>
            <div class="feature-card">
                <h3>✅ Security</h3>
                <p>Input validation and prepared statements to prevent SQL injection.</p>
            </div>
            <div class="feature-card">
                <h3>✅ Easy to Learn</h3>
                <p>Perfect for beginners learning PHP and database integration.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; <?= date('Y') ?> PHP Template with Database. All rights reserved.</p>
    </footer>
</body>
</html>
