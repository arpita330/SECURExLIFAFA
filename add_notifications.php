<?php
// Load notifications from the JSON file
$notificationsFile = 'notifications/notifications.json';
$notifications = json_decode(file_get_contents($notificationsFile), true);

// Handle Add Notification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $newNotification = [
        'message' => $_POST['message'],
        'timestamp' => date('Y-m-d H:i:s'),
        'status' => 'unread' // Default status
    ];
    $notifications[] = $newNotification;
    file_put_contents($notificationsFile, json_encode($notifications, JSON_PRETTY_PRINT));
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Notification Added',
            text: 'Your notification was added successfully!',
        }).then(() => {
            window.location.href = 'add_notifications.php';
        });
    </script>";
    exit;
}

// Handle Delete Notification
if (isset($_GET['delete'])) {
    $deleteIndex = $_GET['delete'];
    if (isset($notifications[$deleteIndex])) {
        unset($notifications[$deleteIndex]);
        $notifications = array_values($notifications); // Reindex array
        file_put_contents($notificationsFile, json_encode($notifications, JSON_PRETTY_PRINT));
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Notification Deleted',
                text: 'The notification has been deleted!',
            }).then(() => {
                window.location.href = 'add_notifications.php';
            });
    </script>";
    exit;
    }
}

// Handle Mark as Read/Unread
if (isset($_GET['toggle'])) {
    $toggleIndex = $_GET['toggle'];
    if (isset($notifications[$toggleIndex])) {
        $notifications[$toggleIndex]['status'] = $notifications[$toggleIndex]['status'] === 'read' ? 'unread' : 'read';
        file_put_contents($notificationsFile, json_encode($notifications, JSON_PRETTY_PRINT));
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Status Updated',
                text: 'The notification status has been updated!',
            }).then(() => {
                window.location.href = 'add_notifications.php';
            });
        </script>";
        exit;
    }
}

// Handle Bulk Actions
if (isset($_GET['bulk_action'])) {
    $action = $_GET['bulk_action'];
    if ($action === 'delete_all') {
        $notifications = [];
    } elseif ($action === 'mark_all_read') {
        foreach ($notifications as &$notification) {
            $notification['status'] = 'read';
        }
    } elseif ($action === 'mark_all_unread') {
        foreach ($notifications as &$notification) {
            $notification['status'] = 'unread';
        }
    }
    file_put_contents($notificationsFile, json_encode($notifications, JSON_PRETTY_PRINT));
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Bulk Action Completed',
            text: 'Your selected action has been applied to all notifications.',
        }).then(() => {
            window.location.href = 'add_notifications.php';
        });
    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Notifications</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        textarea {
            width: 300px;
            height: 100px;
            margin-bottom: 10px;
        }
        button {
            background: #333;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #555;
        }
        .notifications-list {
            margin-top: 20px;
        }
        .notification-item {
            background: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .notification-item .actions {
            margin-top: 10px;
        }
        .notification-item .actions button {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            margin-right: 5px;
        }
        .notification-item .actions button.mark-read {
            background: green;
        }
        .notification-item .actions button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h1>Manage Notifications</h1>
    <form action="add_notifications.php" method="post">
        <textarea name="message" placeholder="Enter notification message" required></textarea><br>
        <button type="submit">Add Notification</button>
    </form>

    <h2>Bulk Actions</h2>
    <button onclick="performBulkAction('delete_all')">Delete All</button>
    <button onclick="performBulkAction('mark_all_read')">Mark All as Read</button>
    <button onclick="performBulkAction('mark_all_unread')">Mark All as Unread</button>

    <h2>Existing Notifications</h2>
    <div class="notifications-list">
        <?php foreach ($notifications as $index => $notification): ?>
            <div class="notification-item">
                <strong><?php echo htmlspecialchars($notification['timestamp']); ?>:</strong>
                <p><?php echo htmlspecialchars($notification['message']); ?></p>
                <p>Status: <?php echo htmlspecialchars($notification['status']); ?></p>
                <div class="actions">
                    <button class="mark-read" onclick="toggleStatus(<?php echo $index; ?>)">
                        Mark as <?php echo $notification['status'] === 'read' ? 'Unread' : 'Read'; ?>
                    </button>
                    <button onclick="confirmDelete(<?php echo $index; ?>)">Delete</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        function confirmDelete(index) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This will permanently delete the notification.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `add_notifications.php?delete=${index}`;
                }
            });
        }

        function toggleStatus(index) {
            window.location.href = `add_notifications.php?toggle=${index}`;
        }

        function performBulkAction(action) {
            Swal.fire({
                title: 'Are you sure?',
                text: `This will apply the "${action.replace('_', ' ')}" action to all notifications.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, proceed!',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `add_notifications.php?bulk_action=${action}`;
                }
            });
        }
    </script>
</body>
</html>