<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['number'])) {
    header("Location: index.php");
    exit;
}

// Load user data from users.json
$file = 'users/users.json';
if (!file_exists($file)) {
    die("User data file not found!");
}

$users = json_decode(file_get_contents($file), true);
$user = null;

// Find the logged-in user
foreach ($users as &$usr) {
    if ($usr['number'] == $_SESSION['number']) {
        $user = &$usr;
        break;
    }
}

if (!$user) {
    echo "User not found!";
    exit;
}

$balance = $user['balance'];
$Name = $user['name'];
$Number = $user['number'];
$id = $user['id'];
// Handle logo delete request
if (isset($_POST['delete_logo'])) {
    // Default logo path
    $defaultLogo = 'uploads/profile_logos/default.png';

    // Check if the user has a custom logo
    if (!empty($user['logo']) && $user['logo'] !== $defaultLogo) {
        // Delete the existing logo file
        if (file_exists($user['logo'])) {
            unlink($user['logo']); // Remove the file
        }
        // Reset the logo to default
        $user['logo'] = $defaultLogo;

        // Save updated user data back to users.json
        file_put_contents('users/users.json', json_encode($users, JSON_PRETTY_PRINT));

        // Redirect to refresh the page
        header("Location: profile.php");
        exit;
    }
}
// Handle logo upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_logo'])) {
    $file = $_FILES['profile_logo'];

    // Validate the uploaded file
    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (in_array($file['type'], $allowedMimeTypes)) {
        $uploadDir = 'uploads/profile_logos/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
        }

        // Generate a unique name for the uploaded file
        $fileName = uniqid() . '-' . basename($file['name']);
        $filePath = $uploadDir . $fileName;

        // Save the uploaded file
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            $user['logo'] = $filePath; // Update user logo in the JSON array

            // Save updated user data back to users.json
            file_put_contents('users/users.json', json_encode($users, JSON_PRETTY_PRINT));

            // Redirect to refresh and show the new logo
            header("Location: profile.php");
            exit;
        } else {
            $error = "Failed to upload the logo. Please try again.";
        }
    } else {
        $error = "Only JPG, PNG, and GIF files are allowed.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Pavan Cash Loot , Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
      <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
<!--	<link rel="stylesheet" href="assets/css/sstyle.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Profile ~ Pavan Cash Loot</title>
    	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	<style>
	    .alert {
  padding: 20px;
  background-color: red;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
/* start style*/
.submit{
        height: 40px;
        width: 80%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        padding: 0 25px 0 25px;
        background: black;
        font-family: 'Montserrat';
        font-size: 14px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0;
        color: #FFFFFF;
        cursor: pointer;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);
    }
        /* Sidebar and Layout */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 250px;
            background-color: #000000;
            color: white;
            padding-top: 20px;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            padding: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            font-weight: bold;
        }

        .sidebar li i {
            margin-right: 10px;
        }

        .sidebar li:hover {
            background-color: red;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
        }

        .sidebar .user-info {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #4A5568;
        }

        .sidebar .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .sidebar .user-info .user-name {
            font-weight: bold;
            color: white;
        }

        .sidebar .user-info .user-number {
            color: #A0AEC0;
        }

        /* Profile Dropdown */
        .profile-dropdown {
            position: relative;
            cursor: pointer;
        }

        .profile-dropdown img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .profile-dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #A0AEC0;
            color: white;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 180px;
        }

        .profile-dropdown:hover .profile-dropdown-menu {
            display: block;
        }

        .profile-dropdown-menu a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            border-bottom: 1px solid #4A5568;
        }

        .profile-dropdown-menu a:hover {
            background-color: red;
        }

        /* Gray Card Color */
        .card {
            background-color: #EDF2F7;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Header styles */
        .header {
            background-color: #000000;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .header .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        /* Mobile and Tablet Responsiveness */
        @media (max-width: 768px) {
            .content-container {
                margin-left: 0;
            }

            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .content-container {
                margin-left: 0;
            }

            .card {
                margin-bottom: 15px;
            }

            .header .logo {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .balloon {
                width: 40px;
                height: 40px;
            }

            .profile-btn {
                font-size: 14px;
            }

            .card-header {
                font-size: 1rem;
            }
        }


/* Button Styles*/
    .btn {
        display: inline-flex;
        align-items: center;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        color: white;
        text-transform: uppercase;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn i {
        margin-right: 8px;
    }

    .btn:hover {
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    /* Gray Button */
    .btn-gray {
        background-color: #4A5568;
    }

    .btn-gray:hover {
        background-color: #2D3748;
    }

    /* Red Button */
    .btn-red {
        background-color: #F56565;
    }

    .btn-red:hover {
        background-color: #E53E3E;
    }

    /* Green Button */
    .btn-green {
        background-color: #48BB78;
    }

    .btn-green:hover {
        background-color: #38A169;
    }

    /* Blue Button */
    .btn-blue {
        background-color: #4299E1;
    }

    .btn-blue:hover {
        background-color: #3182CE;
    }

    /* Yellow Button */
    .btn-yellow {
        background-color: #ECC94B;
    }

    .btn-yellow:hover {
        background-color: #D69E2E;
    }

    /* Pink Button */
    .btn-pink {
        background-color: #F687B3;
    }

    .btn-pink:hover {
        background-color: #ED64A6;
    }


    .action-btn {
        display: inline-flex;
        align-items: center;
        padding: 12px 24px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        color: white;
        text-transform: uppercase;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .action-btn i {
        margin-right: 8px;
        font-size: 1.2rem;
    }

    .action-btn:hover {
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    /* Blue Button (Edit) */
    .action-btn-blue {
        background-color: #3B82F6;
    }

    .action-btn-blue:hover {
        background-color: #2563EB;
    }

    /* Red Button (Delete) */
    .action-btn-red {
        background-color: #EF4444;
    }

    .action-btn-red:hover {
        background-color: #DC2626;
    }

    /* Green Button (Save) */
    .action-btn-green {
        background-color: #10B981;
    }

    .action-btn-green:hover {
        background-color: #059669;
    }

    /* Gray Button (Close) */
    .action-btn-gray {
        background-color: #6B7280;
    }

    .action-btn-gray:hover {
        background-color: #4B5563;
    }

    /* Yellow Button (Add User) */
    .action-btn-yellow {
        background-color: #F59E0B;
    }

    .action-btn-yellow:hover {
        background-color: #D97706;
    }

    /* Orange Button (Settings) */
    .action-btn-orange {
        background-color: #FB923C;
    }

    .action-btn-orange:hover {
        background-color: #F97316;
    }
        .button-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 columns */
            gap: 15px; /* Spacing between buttons */
        }
        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none; /* Remove underline */
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .button i {
            margin-right: 8px;
        }
        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .button-red {
            background-color: #e53e3e;
        }
        .button-green {
            background-color: #38a169;
        }
        .button-blue {
            background-color: #3182ce;
        }
        .button-yellow {
            background-color: #d69e2e;
        }
        .button-gray {
            background-color: #4a5568;
        }
        .button-pink {
            background-color: #d53f8c;
        }
          footer {
            background-color: #000000;
            color: white;
            padding: 5px 0;
            text-align: center;
        }
        .footer-icons {
            margin-bottom: 5px;
        }
        .footer-icons a {
            color: white;
            font-size: 24px;
            margin: 0 15px;
            transition: color 0.3s ease;
        }
        .footer-icons a:hover {
            color: #38a169; /* Green color on hover */
        }
        .footer-bottom {
            margin-top: 20px;
            font-size: 14px;
        }
        .footer-bottom span {
            font-weight: bold;
        }
        .support-row {
            margin-top: 15px;
            font-size: 16px;
        }
        .support-row a {
            color: #d69e2e;
            text-decoration: none;
            font-weight: bold;
        }
        .support-row a:hover {
            text-decoration: underline;
        }
                /* Floating Telegram Icon */
        .floating-telegram {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #0088cc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            z-index: 1000;
        }

        .floating-telegram img {
            width: 60%;
            height: 60%;
        }

        .floating-telegram:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }
        /* Form input styles */
input[type="number"], input[type="password"], input[type="file"]: {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 8px;
  width: 100%;
  margin-top: 8px;
  font-size: 14px;
  background-color: #fff;
  color: #333;
  transition: border 0.3s ease-in-out;
}

input[type="number"]:focus, input[type="password"]:focus, input[type="file"]:focus, {
  border-color: #3F00FF;
  outline: none;
}
        
</style>
</head>
<body class="bg-gray-100">

    <!-- Header Menu Bar -->
    <div class="header">
        <div class="text-white cursor-pointer" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <div class="logo text-white">
            <span>Pavan Cash Loot</span>
        </div>
        <div class="profile-dropdown">
            <img src="<?= htmlspecialchars($user['logo'] ?? 'uploads/profile_logos/default.png') ?>" alt="Profile Logo">
            <div class="profile-dropdown-menu" >
                <a href="#"><?= htmlspecialchars($user['name']) ?> <?= htmlspecialchars($user['number']) ?></a>
                <a  href="profile.php">Profile</a>
                <a  href="settings.php">Settings</a>
                <a onclick="confirmLogout()">Logout</a>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <div class="close-btn" onclick="toggleSidebar()"><i class="fas fa-times-circle"></i></div>
        <!-- User Info Section -->
        <div class="user-info">
            <img src="<?= htmlspecialchars($user['logo'] ?? 'uploads/profile_logos/default.png') ?>" alt="User Profile">
            <div>
                <div class="user-name"><?= htmlspecialchars($user['name']) ?></div>
                <div class="user-number font-bold"><?= htmlspecialchars($user['number']) ?></div>
            </div>
        </div>
        
        <ul>
            <div class="user-name font-bold" style="text-align: center;">Services</div>
            <li><i class="fas fa-grip-horizontal"><a href="dashboard.php"></i>Dashboard</a></li>
            <li style="background-color: blue;"><i class="fas fa-user-circle"><a href="profile.php"></i>Profile</a></li>
            <li><i class="fas fa-plus"><a href="add_fund.php"></i>Recharge</a></li>
            <li><i class="fas fa-wallet"><a href="withdraw.php"></i>Withdraw</a></li>
            <li><i class="fas fa-sliders-h"><a href="api.php"></i>Api Settings</a></li>
            <li><i class="fas fa-ban"><a href="ban_upi.php"></i>Ban UPI</a></li>
            <div class="user-name font-bold" style="text-align: center;">Others</div>
            <li><i class="fas fa-exchange-alt"><a href="transactions.php"></i>Transaction History</a></li>
            <li><i class="fas fa-gear"></i> <a href="settings.php"></i>Settings</a></li>
            <li><i class="fab fa-telegram-plane"></i><a href="https://t.me/Pro_Bots_Maker"></i> Contact Us</a></li>
            <li><i class="fab fa-telegram"></i><a href="https://t.me/PavanCashLoot"></i> Join Telegram Channel</a></li>
            <li><i class="fas fa-sign-out-alt"></i><a href="logout.php"></i> Logout</a></li>
            
        </ul>
    </div>

    <!-- Content Area -->    
   <div class="w-full p-6">
	<section id="content" style="text-bold">
		<main>
		    
    <font color="blue" style="font-weight:bold">
			<br><div style=' padding:10px; background: white; border-top:3px solid Blue;border-right:3px solid Blue;border-bottom:3px solid Blue;border-left:3px solid Blue; border-radius:10px;'>
<font color='brown' style='font-weight:bold;'>Upload Profile Logo <i class="fas fa-file-upload"></i></font><br>

<br>
            <center>
            
            <?php if (isset($error)) { ?>
                <div class="bg-red-500 text-white p-4 rounded mb-4"><?= $error ?></div>
            <?php } ?>

            <!-- Logo Upload Form -->
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <input type="file" name="profile_logo" id="profile_logo" accept="image/jpeg, image/png, image/gif" class=" mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" style ="
  padding: 10px;
  border: 2px solid #333;
  border-radius: 8px;
  width: 100%;
  margin-top: 8px;
  font-size: 14px;
  background-color: #fff;
  color: #333;
  transition: border 0.3s ease-in-out;   border-color: #3F00FF;
  outline: none;" required onchange="previewLogo(event)">
                </div>

                <div>
                    <button type="submit" class='submit' style='font-weight:bold;'>Update Logo</button>
                </div>
            </form>
            </center><br>
</div><br><hr>
            	<font color="blue" style="font-weight:bold">
			<br><div style=' padding:10px; background: white; border-top:3px solid Blue;border-right:3px solid Blue;border-bottom:3px solid Blue;border-left:3px solid Blue; border-radius:10px;'>
<font color='brown' style='font-weight:bold;'>Current Logo <i class="fas fa-user-tie"></i></font><br>

<br>
            <center> 

             <div class="mt-6">
                <div class="flex items-center">
                    <img src="<?= htmlspecialchars($user['logo'] ?? 'uploads/profile_logos/default.png') ?>" alt="Profile Logo" class="w-16 h-16 rounded-full object-cover">
                </div>
            </div>
        <!-- Add this below the "Current Logo" section -->
<div class="mt-6">
    <button id="deleteLogoBtn" class="submit" style='font-weight:bold;'>
        Delete Logo
    </button>
</div> <br>

<!-- Hidden form to handle delete request -->
<form id="delete_logo" method="POST" style="display: none;">
    <input type="hidden" name="delete_logo">
</form>
</div></center><br>
</div><br><hr>
</main>
</section>
</div>

                <!-- Button Section -->
<!-- Action Buttons with Href Links 
<div class="w-full p-6">
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 text-center">
         Edit Button (Link) 
        <a href="#editSection" class="action-btn action-btn-blue">
            <i class="material-icons">edit</i> Edit
        </a>-->

        <!-- Delete Button (Link) 
        <a href="#deleteSection" class="action-btn action-btn-red">
            <i class="material-icons">delete</i> Delete
        </a>-->

        <!-- Save Button (Link) 
        <a href="#saveSection" class="action-btn action-btn-green">
            <i class="material-icons">save</i> Save
        </a>-->

        <!-- Close Button (Link) 
        <a href="#closeSection" class="action-btn action-btn-gray">
            <i class="material-icons">close</i> Close
        </a>-->

        <!-- Add User Button (Link)
        <a href="#addUserSection" class="action-btn action-btn-yellow">
            <i class="material-icons">person_add</i> Add User
        </a>-->

        <!-- Settings Button (Link)
        <a href="#settingsSection" class="action-btn action-btn-orange">
            <i class="material-icons">settings</i> Settings
        </a>
    </div>
</div>-->
 </div>
  <!-- Footer Section -->
    <footer>
        <!-- Social Icons -->
      <!--  <div class="footer-icons">
            <a href="https://www.linkedin.com" target="_blank">
                <i class="material-icons">telegram</i>
            </a>
        </div> -->

        <!-- Footer Bottom Section -->
        <div class="footer-bottom" style="font-weight: bold;">
            <p class="text-bold" style="color: white;">&copy; <span id="year"></span> Pavan Cash Loot. All Rights Reserved.</p>
        </div>
    
        <!-- Support Row Section -->
        <div class="support-row" style="font-weight: bold;">
            <p>Need Help? <a href="mailto:support@pavancashloot.site">Contact Support</a></p>
        </div> 
    </footer>
        <!-- Floating Telegram Icon -->
    <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-telegram">
        <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
    </a>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>

    document.getElementById('deleteLogoBtn').addEventListener('click', function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to delete your logo? This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the hidden form to trigger PHP logic
                document.getElementById('delete_logo').submit();
            }
        });
    });
        // Function to confirm logout
        function confirmLogout() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will be logged out of your account.',
                icon: 'warning', // Options: success, error, warning, info, question
                showCancelButton: true,
                confirmButtonText: 'Yes, Logout',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#f44336',
                cancelButtonColor: '#4CAF50',
                background: '#f9fafb',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to logout page
                    window.location.href = 'logout.php'; // Change this URL to your logout page
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire('Cancelled', 'You are still logged in.', 'info');
                }
            });
        }
    
        
        
        // Set the current year dynamically
        document.getElementById('year').textContent = new Date().getFullYear();
        
        // Sidebar Toggle Function
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
        }
        
    </script>

</body>
</html>