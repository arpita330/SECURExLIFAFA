<?php
session_start();

// Simulated Admin Login Check
if (!isset($_SESSION['admin'])) {
    $_SESSION['admin'] = true; // Simulated admin login
}

// Load withdrawals and user data
function loadWithdrawals() {
    return json_decode(file_get_contents('../withdrawals/withdrawals.json'), true);
}

function saveWithdrawals($withdrawals) {
    file_put_contents('../withdrawals/withdrawals.json', json_encode($withdrawals));
}

function loadUsers() {
    return json_decode(file_get_contents('../users/users.json'), true);
}

function saveUsers($users) {
    file_put_contents('../users/users.json', json_encode($users));
}

$withdrawals = loadWithdrawals();
$users = loadUsers();

// Handle Approval or Rejection
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['request_id'])) {
    $requestId = $_POST['request_id'];
    $action = $_POST['action'];
    $adminNote = $_POST['admin_note'] ?? '';

    foreach ($withdrawals as &$withdrawal) {
        if ($withdrawal['id'] === $requestId) {
            $withdrawal['status'] = $action;
            $withdrawal['admin_note'] = $adminNote;
            $withdrawal['processed_date'] = date("Y-m-d H:i:s");

            // Update user balance if rejected
            if ($action === 'Rejected') {
                foreach ($users as &$user) {
                    if ($user['number'] === $withdrawal['user_id']) {
                        $user['balance'] += $withdrawal['amount'];
                        break;
                    }
                }
                saveUsers($users);
            }

            break;
        }
    }
    saveWithdrawals($withdrawals);

    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Request Updated!',
            text: 'The withdrawal request has been {$action} successfully.',
            confirmButtonText: 'OK'
        });
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f6f9;
}

.container {
    width: 90%;
    max-width: 1000px;
    margin: 30px auto;
    background: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    font-size: 24px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

h2 {
    font-size: 20px;
    margin-top: 30px;
    color: #555;
}

.withdrawal-card {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px 20px;
    margin-bottom: 15px;
    transition: box-shadow 0.3s ease, transform 0.2s ease;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.withdrawal-card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transform: translateY(-3px);
}

.withdrawal-card strong {
    font-size: 16px;
    color: #2c3e50;
    display: block;
    margin-bottom: 5px;
}

textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: none;
    margin-top: 10px;
}

button {
    margin-top: 10px;
    padding: 10px 20px;
    font-size: 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

button[name="action"][value="Approved"] {
    background: #27ae60;
    color: #fff;
}

button[name="action"][value="Approved"]:hover {
    background: #218c54;
}

button[name="action"][value="Rejected"] {
    background: #c0392b;
    color: #fff;
}

button[name="action"][value="Rejected"]:hover {
    background: #a93226;
}

.status-approved {
    border-left: 5px solid #27ae60;
}

.status-rejected {
    border-left: 5px solid #c0392b;
}

.status-pending {
    border-left: 5px solid #f39c12;
}

p {
    text-align: center;
    font-size: 16px;
    color: #666;
    margin-top: 20px;
}
</style>
<body>
<div class="container">
    <h1>Admin Dashboard</h1>
    <h2>Pending Withdrawals</h2>

    <form method="POST">
        <?php
        $hasPending = false;
        foreach ($withdrawals as $withdrawal): ?>
            <?php if ($withdrawal['status'] === 'Pending'): ?>
                <?php $hasPending = true; ?>
                <div class="withdrawal-card">
                    <strong>Request ID:</strong> <?= $withdrawal['id'] ?><br>
                    <strong>User Name:</strong> <?= $withdrawal['name'] ?><br>
                    <strong>Amount:</strong> ₹<?= $withdrawal['amount'] ?><br>
                    <strong>UPI ID:</strong> <?= $withdrawal['upi_id'] ?><br>
                    <strong>Requested On:</strong> <?= $withdrawal['date'] ?><br>
                    <?php if ($withdrawal['note']): ?>
                        <strong>User Note:</strong> <?= $withdrawal['note'] ?><br>
                    <?php endif; ?>
                    <textarea name="admin_note" placeholder="Add Admin Note"></textarea>
                    <input type="hidden" name="request_id" value="<?= $withdrawal['id'] ?>">
                    <button name="action" value="Approved" style="background: #27ae60; color: white;">Approve</button>
                    <button name="action" value="Rejected" style="background: #c0392b; color: white;">Reject</button>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php if (!$hasPending): ?>
            <p>No pending withdrawal requests.</p>
        <?php endif; ?>
    </form>

    <h2>Processed Withdrawals</h2>
    <?php
    $hasProcessed = false;
    foreach ($withdrawals as $withdrawal): ?>
        <?php if ($withdrawal['status'] !== 'Pending'): ?>
            <?php $hasProcessed = true; ?>
            <div class="withdrawal-card <?= 'status-' . strtolower($withdrawal['status']) ?>">
                <strong>Request ID:</strong> <?= $withdrawal['id'] ?><br>
                <strong>User Name:</strong> <?= $withdrawal['name'] ?><br>
                <strong>Amount:</strong> ₹<?= $withdrawal['amount'] ?><br>
                <strong>UPI ID:</strong> <?= $withdrawal['upi_id'] ?><br>
                <strong>Status:</strong> <?= $withdrawal['status'] ?><br>
                <strong>Processed On:</strong> <?= $withdrawal['processed_date'] ?><br>
                <?php if ($withdrawal['admin_note']): ?>
                    <strong>Admin Note:</strong> <?= $withdrawal['admin_note'] ?><br>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if (!$hasProcessed): ?>
        <p>No processed withdrawal requests.</p>
    <?php endif; ?>
</div>
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form');

    forms.forEach((form) => {
        form.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent immediate form submission

            const action = event.submitter.value; // Get the button value (Approved/Rejected)
            const note = form.querySelector('textarea').value || 'No note provided';

            Swal.fire({
                title: `Are you sure you want to ${action} this request?`,
                text: note !== 'No note provided' ? `Note: ${note}` : '',
                icon: action === 'Approved' ? 'success' : 'error',
                showCancelButton: true,
                confirmButtonColor: action === 'Approved' ? '#27ae60' : '#c0392b',
                cancelButtonColor: '#7f8c8d',
                confirmButtonText: `Yes, ${action}!`,
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if confirmed
                }
            });
        });
    });
});
</script>-->
</body>
</html>