<?php
/**
 * Users List Page
 */

$page_title = 'Users List';
include '../templates/header.php';

// Fetch all users
$sql = "SELECT * FROM users ORDER BY created_at DESC";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);

?>

<h1>All Users</h1>

<?php if(isset($_GET['success'])): ?>
    <div class="alert alert-success">
        ✅ Operation completed successfully!
    </div>
<?php endif; ?>

<?php if(count($users) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['phone'] ?? 'N/A') ?></td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $user['id'] ?>" class="btn">Edit</a>
                        <a href="delete_user.php?id=<?= $user['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No users found. <a href="create_user.php">Add your first user</a></p>
<?php endif; ?>

<?php
include '../templates/footer.php';
?>
