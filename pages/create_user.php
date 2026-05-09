<?php
/**
 * Create User Page
 */

$page_title = 'Add New User';
include '../templates/header.php';

$name = $email = $phone = '';
$errors = [];

// Handle form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    // Validation
    if(empty($name)) {
        $errors[] = 'Name is required';
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }

    // If no errors, insert into database
    if(empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param('sss', $name, $email, $phone);
        
        if($stmt->execute()) {
            header('Location: users.php?success=1');
            exit();
        } else {
            $errors[] = 'Error adding user: ' . $stmt->error;
        }
        $stmt->close();
    }
}

?>

<h1>Add New User</h1>

<?php if(!empty($errors)): ?>
    <div class="alert alert-error">
        <?php foreach($errors as $error): ?>
            <p>❌ <?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <div class="form-group">
        <label for="name">Full Name *</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" required>
    </div>

    <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>">
    </div>

    <button type="submit" class="btn">Add User</button>
    <a href="users.php" class="btn">Back to Users</a>
</form>

<?php
include '../templates/footer.php';
?>
