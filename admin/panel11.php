<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

// Load user data
$file = '../users/users.json';
$users = json_decode(file_get_contents($file), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Enhanced User Management</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .action-btn-red {
            background-color: #ef4444;
        }
        .action-btn-red:hover {
            background-color: #dc2626;
        }
        .action-btn-green {
            background-color: #10b981;
        }
        .action-btn-green:hover {
            background-color: #059669;
        }
        .action-btn-gray {
            background-color: #6b7280;
        }
        .action-btn-gray:hover {
            background-color: #4b5563;
        }
        .action-btn-blue {
            background-color: #3B82F6;
        }
        .action-btn-blue:hover {
            background-color: #2563EB;
        }
        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }
        .search-input {
            padding: 10px;
            width: 70%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .user-card {
            background-color: #4A5568;
            color: white;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .user-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Panel - Enhanced User Management</h1>
    </div>
    
    <!-- Search Bar with Filters -->
    <div class="search-bar">
        <input type="text" id="search-user" class="search-input" placeholder="Search by Name, Number, or Status...">
        <select id="filter-status" class="search-input">
            <option value="">Filter by Status</option>
            <option value="active">Active</option>
            <option value="suspended">Suspended</option>
            <option value="banned">Banned</option>
        </select>
    </div>

    <!-- User List Section -->
    <div class="container">
        <div class="user-cards">
            <?php foreach ($users as $user): ?>
                <div class="user-card">
                    <h3><?= $user['name'] ?></h3>
                    <p>Number: <?= $user['number'] ?></p>
                    <p>Status: <?= ucfirst($user['status']) ?></p>
                    <p>Balance: ₹<?= $user['balance'] ?></p>

                    <!-- Action Buttons -->
                    <button class="action-btn-blue" onclick="handleAction('add', '<?= $user['number'] ?>')">Add Funds</button>
                    <button class="action-btn-red" onclick="handleAction('cut', '<?= $user['number'] ?>')">Cut Funds</button>
                    <button class="action-btn-green" onclick="handleAction('suspend', '<?= $user['number'] ?>')">Suspend</button>
                    <button class="action-btn-red" onclick="handleAction('ban', '<?= $user['number'] ?>')">Ban User 🚫</button>
                    <button class="action-btn-gray" onclick="handleAction('delete', '<?= $user['number'] ?>')">Delete User</button>
                    <button class="action-btn-gray" onclick="viewUserDetails('<?= $user['number'] ?>')">View Details</button>
                    <button class="action-btn-blue" onclick="viewActivityHistory('<?= $user['number'] ?>')">View Activity</button>
                    <button class="action-btn-green" onclick="resetPassword('<?= $user['number'] ?>')">Reset Password</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- System Settings Update Form -->
    <div class="container">
        <h3>Update System Settings</h3>
        <form method="post" action="update_settings.php">
            <label for="default_balance">Default User Balance: ₹</label>
            <input type="number" id="default_balance" name="default_balance" value="1000" required>
            
            <label for="min_password_length">Minimum Password Length:</label>
            <input type="number" id="min_password_length" name="min_password_length" value="8" required>
            
            <button type="submit" class="action-btn-green">Update Settings</button>
        </form>
    </div>

    <!-- Scripts for handling actions -->
    <script>
        function handleAction(action, number) {
            let actionText = '';
            let actionUrl = '';

            if (action === 'add') {
                actionText = 'Add Funds';
                actionUrl = 'add_funds.php?number=' + number;
            } else if (action === 'cut') {
                actionText = 'Cut Funds';
                actionUrl = 'cut_funds.php?number=' + number;
            } else if (action === 'suspend') {
                actionText = 'Suspend User';
                actionUrl = 'suspend_user.php?number=' + number;
            } else if (action === 'ban') {
                actionText = 'Ban User 🚫';
                actionUrl = 'ban_user.php?number=' + number;
            } else if (action === 'delete') {
                actionText = 'Delete User';
                actionUrl = 'delete_user.php?number=' + number;
            }

            Swal.fire({
                title: `Are you sure?`,
                text: `You are about to ${actionText} for user #${number}`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: `Yes, ${actionText}!`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = actionUrl;
                }
            });
        }

        function viewUserDetails(number) {
            Swal.fire({
                title: `User Details for #${number}`,
                text: 'Here you can see the user’s personal details and manage their account.',
                icon: 'info',
            });
        }

        function viewActivityHistory(number) {
            Swal.fire({
                title: `Activity History for #${number}`,
                text: 'Here you can see the user’s login history and account activity.',
                icon: 'info',
            });
        }

        function resetPassword(number) {
            Swal.fire({
                title: `Reset Password for #${number}`,
                text: 'Are you sure you want to reset the user’s password?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Reset Password'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'reset_password.php?number=' + number;
                }
            });
        }

        // Search Functionality with Filter
        document.getElementById('search-user').addEventListener('input', function(event) {
            let searchQuery = event.target.value.toLowerCase();
            let filterStatus = document.getElementById('filter-status').value;
            let userCards = document.querySelectorAll('.user-card');
            
            userCards.forEach(card => {
                let userName = card.querySelector('h3').innerText.toLowerCase();
                let userNumber = card.querySelector('p').innerText.toLowerCase();
                let userStatus = card.querySelector('p').innerText.toLowerCase();
                
                if ((userName.includes(searchQuery) || userNumber.includes(searchQuery)) && 
                    (filterStatus === '' || userStatus.includes(filterStatus))) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>