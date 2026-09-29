<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$conn = get_db_connection();
$result = $conn->query("SELECT * FROM enquiries ORDER BY created_at DESC");
$enquiries = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];

require_once __DIR__ . '/admin-header.php';
?>

<div class="admin-page">
    <div class="container admin-container">
        <div class="admin-topbar">
            <h1>Wedding Enquiries Dashboard</h1>
            <a href="logout.php" class="btn btn-secondary">Logout</a>
        </div>

        <div class="admin-summary">
            <div class="summary-card"><strong><?php echo count($enquiries); ?></strong><span>Total Enquiries</span></div>
            <div class="summary-card"><strong><?php echo $conn->query("SELECT COUNT(*) as c FROM enquiries")->fetch_assoc()['c']; ?></strong><span>Visitors</span></div>
        </div>

        <div class="table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bride Name</th>
                        <th>Groom Name</th>
                        <th>Wedding Date</th>
                        <th>No. of Persons</th>
                        <th>Mobile</th>
                        <th>Submitted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($enquiries)): ?>
                        <tr>
                            <td colspan="7" class="text-center">No enquiries yet.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($enquiries as $row): ?>
                            <tr>
                                <td><?php echo (int)$row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['bride_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['groom_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['wedding_date']); ?></td>
                                <td><?php echo htmlspecialchars($row['no_of_persons']); ?></td>
                                <td><?php echo htmlspecialchars($row['mobile_no']); ?></td>
                                <td><?php echo htmlspecialchars(date('d M Y', strtotime($row['created_at']))); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/admin-footer.php'; ?>
