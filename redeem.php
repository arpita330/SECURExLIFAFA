<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

// Load user data
$file = 'users/users.json';
$users = json_decode(file_get_contents($file), true);
$user = null;

foreach ($users as $usr) {
    if ($usr['number'] == $_SESSION['number']) {
        $user = $usr;
        break;
    }
}

if (!$user) {
    echo "User not found!";
    exit;
}

// Load Lifafa data
$lifafaFile = 'lifafa/lifafa.json';
$data = json_decode(file_get_contents($lifafaFile), true);

// Retrieve the code from the URL
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $message = ""; // Initialize the message variable

    // Find the Lifafa entry
    $lifafa = null;
    foreach ($data as $key => $entry) {
        if ($entry['code'] === $code) {
            $lifafa = &$data[$key];
            break;
        }
    }

    // Check if the Lifafa exists and if it can be redeemed
    if ($lifafa === null) {
        $message = "Invalid Lifafa code.";
        $messageClass = "error-message";
    } elseif ($lifafa['users'] <= 0) {
        $message = "This Lifafa has already been redeemed by all users.";
        $messageClass = "error-message";
    } else {
        // Check if the user has already redeemed this Lifafa
        if (isset($lifafa['redeemed_by']) && in_array($user['number'], $lifafa['redeemed_by'])) {
            $message = "You have already redeemed this Lifafa.";
            $messageClass = "error-message";
        } else {
            // Redeem the Lifafa
            $lifafa['users'] -= 1;
            $lifafa['redeemed_by'][] = $user['number'];  // Track redeemed user

            // Update the user's balance
            $user['balance'] += $lifafa['amount'];

            // Update the Lifafa data and user data
            file_put_contents($lifafaFile, json_encode($data, JSON_PRETTY_PRINT));
            
            // Update users data
            $usersUpdated = false;
            foreach ($users as &$usr) {
                if ($usr['number'] == $user['number']) {
                    $usr['balance'] = $user['balance'];
                    $usersUpdated = true;
                    break;
                }
            }

            if ($usersUpdated) {
                file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
            }

            // Confirmation message
            $message = "You have successfully redeemed this Lifafa and received ₹" . $lifafa['amount'] . ". Your balance is now ₹" . $user['balance'] . ".";
            $messageClass = "success-message";
        }
    }
} else {
    $message = "No Lifafa code provided.";
    $messageClass = "error-message";
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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Lifafa Area ~ Pavan Cash Loot</title>
    	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	<style>
	
	        /* General message box styling */
        .message-box {
            padding: 20px;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 400px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        /* Success message styling */
        .success-message {
            background-color: #28a745;
            color: white;
            border: 2px solid #218838;
        }

        /* Error message styling */
        .error-message {
            background-color: #dc3545;
            color: white;
            border: 2px solid #c82333;
        }

        /* Optional close button */
        .close-btn1 {
            background-color: transparent;
            color: white;
            border: none;
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;
        }

        /* Close button hover effect */
        .close-btn1:hover {
            color: #ddd;
        }
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
            background-color: /*#2d3748*/ #000000;
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
        .note-box {
      border: 2px solid green;
      background-color: #f9fff9; /* Light green background */
      color: green; /* Text color */
      font-weight: bold; /* Bold text */
      padding: 15px;
      border-radius: 5px;
      font-family: Arial, sans-serif;
    }
   /* body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}*/

.container {
    width: 90%;
    max-width: 800px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

h3 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.withdrawal-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f7faff;
    border: 1px solid #dde7f0;
    border-radius: 10px;
    padding: 15px 20px;
    margin-bottom: 15px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
}

.withdrawal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.withdrawal-card strong {
    font-size: 16px;
    color: #2c3e50;
}

.status-approved {
    border-left: 5px solid #27ae60;
}

.status-pending {
    border-left: 5px solid #f39c12;
}

.status-rejected {
    border-left: 5px solid #c0392b;
}

.card-details {
    flex: 1;
}

.card-action {
    margin-left: 20px;
    text-align: right;
}

.card-action button {
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 15px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.card-action button:hover {
    background: #0056b3;
}

.status-label {
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}     
.animated-border {
            padding: 20px;
            background: white;
            border: 3px solid;
            border-radius: 10px;
            border-top-color: green;
            border-right-color: blue;
            border-bottom-color: red;
            border-left-color: blue;
            animation: animateBorderColors 3s linear infinite;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        @keyframes animateBorderColors {
            0% {
                border-top-color: green;
                border-right-color: blue;
                border-bottom-color: red;
                border-left-color: blue;
            }
            25% {
                border-top-color: blue;
                border-right-color: red;
                border-bottom-color: green;
                border-left-color: red;
            }
            50% {
                border-top-color: red;
                border-right-color: green;
                border-bottom-color: blue;
                border-left-color: green;
            }
            75% {
                border-top-color: blue;
                border-right-color: green;
                border-bottom-color: red;
                border-left-color: blue;
            }
            100% {
                border-top-color: green;
                border-right-color: blue;
                border-bottom-color: red;
                border-left-color: blue;
            }
        }
h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/*.form-group {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  position: relative;
}

.form-group span.material-icons {
  position: absolute;
  left: 10px;
  color: #888;
}

.form-group input {
  width: 100%;
  padding: 10px 10px 10px 40px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.toggle-group {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}

.switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 20px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
  border-radius: 20px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  transition: 0.4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #4caf50;
}

input:checked + .slider:before {
  transform: translateX(10px);
}*/

button {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  border: none;
  color: white;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

         /*   font-family: 'Arial', sans-serif;
            background: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }*/

        /* Page Title */
        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            animation: slideDown 1s ease-in-out;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Message Box */
        .message-box {
            padding: 25px;
            border-radius: 12px;
            max-width: 450px;
            width: 100%;
            text-align: center;
            font-size: 18px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            background: #ffffff;
            transition: transform 0.3s ease;
        }

        .message-box:hover {
            transform: scale(1.05);
        }

        /* Success Message */
        .success-message {
            background-color: #28a745;
            color: white;
            border: 2px solid #218838;
            animation: fadeIn 1s ease-in-out;
        }

        /* Error Message */
        .error-message {
            background-color: #dc3545;
            color: white;
            border: 2px solid #c82333;
            animation: fadeIn 1s ease-in-out;
        }

        /* Button Styling */
        .close-btn {
            background-color: #2c3e50;
            color: white;
            padding: 12px 25px;
            border: none;
            font-size: 18px;
            border-radius: 25px;
            margin-top: 15px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .close-btn:hover {
            background-color: #1a242f;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes slideDown {
            0% { transform: translateY(-30px); }
            100% { transform: translateY(0); }
        }

        /* Embossed 3D effect for Confirm button */
        .confirm-btn {
            font-size: 20px;
            font-weight: bold;
            background: linear-gradient(145deg, #ff7e5f, #feb47b);
            border: 2px solid #ff7e5f;
            border-radius: 30px;
            padding: 10px 30px;
            color: white;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1), inset 1px 1px 5px rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .confirm-btn:hover {
            background: linear-gradient(145deg, #feb47b, #ff7e5f);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3), inset 1px 1px 5px rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }

        .confirm-btn:active {
            transform: translateY(2px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.4), inset 1px 1px 5px rgba(255, 255, 255, 0.3);
        }
        
</style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php if (!empty($message)): ?>
        Swal.fire({
            icon: '<?php echo strpos($message, "successfully") !== false ? "success" : "error"; ?>',
            title: '<?php echo strpos($message, "successfully") !== false ? "Success!" : "Error!"; ?>',
            text: '<?php echo $message; ?>',
        });
        <?php endif; ?>
    </script>
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
            <li><i class="fas fa-user-circle"><a href="profile.php"></i>Profile</a></li>
            <li><i class="fas fa-plus"><a href="add_fund.php"></i>Recharge</a></li>
            <li style="background-color: blue;"><i class="fas fa-wallet"><a href="withdraw.php"></i>Withdraw</a></li>
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
    	<!-- CONTENT -->
    	<div class="w-full p-6">
	<section id="content" style="text-bold">
		<!-- NAVBAR -->
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<br>
                                     <br>
 <font color="blue" style="font-weight:600">
			<br><div class='animated-border'>
<font color='red' style='font-weight:bold;'>Claim Normal Lifafa <i class='bx bxs-gift' ></i></font><br><hr><br><br><br><br>
    <!-- Display Message -->
    <?php if (isset($message)): ?>
        <div style="font-weight:bold" class="message-box <?php echo $messageClass; ?>">
            <?php echo $message; ?>
           <!-- <button class="close-btn1" onclick="window.location.href='create.php';">Close</button>-->
        </div>
    <?php endif; ?>
    
        <!-- Button with 3D Effect -->
    <button class="confirm-btn" onclick="window.location.href='create.php';">Go Back</button><br><br><br><br><br><br>
    
 <!--   <form method="GET" action="">
        <label for="code">Enter Lifafa Code:</label>
        <input type="text" id="code" name="code" required>
        <button type="submit">Redeem</button>
    </form>-->

<!-- <form action="claim-lifafa.php" method="POST">
    
    <input type="text" id="lifafa_id" name="lifafa_id"class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Lifafa ID" required><br>

    <input type="text" id="access_code" name="access_code" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Access Code" required><br>

    <button type="submit" class="submit logout-btn w-full font-bold">Claim Lifafa</button>
</form>

<form action="create-lifafa.php" method="POST">
    <input type="text" id="title" name="title" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Your Lifafa Title" required><br><br>


    <input type="number" id="amount" name="amount" min="1" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Per User Amount" required><br><br>


    <input type="number" id="users" name="users" min="1" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Total Users" required><br><br>


    <input type="text" id="comment" name="comment" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Payment Comment" required><br><br>


    <input type="text" id="access_code" name="access_code" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Your Access Code" required><br><br>

    <button type="submit" class="submit logout-btn w-full font-bold">Create Lifafa</button><br><br>
</form> -->
<!-- <form id="createLifafaForm" method="POST">
                    <div class="mb-4">
                        <input type="text" id="lifafa" name="lifafa" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Your Lifafa Title" required>
                    </div>
                    <div class="mb-4">
                        <input type="number" id="amount" name="amount" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Per User Amount" required>
                    </div>
                    <div class="mb-4">
                        <input type="number" id="users" name="users" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Total Users" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" id="comment" name="comment" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Payment Comment" required>
                    </div>
                    <div class="mb-4">
                        <input type="url" id="link" name="link" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Redirect Link" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" id="code" name="code" class="w-full p-3 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Access Code" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="submit logout-btn w-full font-bold">Create Lifafa</button>
                    </div>
                </form> -->
                </div><br><br><br>
</span>

            
            
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
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
    document.addEventListener("DOMContentLoaded", function () {
        const claimLifafaForm = document.getElementById("claimLifafaForm");

        claimLifafaForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Form validation
            const lifafaId = document.getElementById("lifafa_id").value.trim();
            const accessCode = document.getElementById("access_code").value.trim();

            if (!lifafaId || !accessCode) {
                Swal.fire({
                    icon: "error",
                    title: "Oops!",
                    text: "All fields are required!",
                });
                return;
            }

            // AJAX request to claim Lifafa
            const formData = new FormData(claimLifafaForm);
            fetch("claim-lifafa.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => response.text())
                .then((data) => {
                    if (data.includes("claimed successfully")) {
                        Swal.fire({
                            icon: "success",
                            title: "Lifafa Claimed!",
                            text: data,
                        }).then(() => {
                            // Optionally reset the form after success
                            claimLifafaForm.reset();
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: data,
                        });
                    }
                })
                .catch((error) => {
                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        text: "Something went wrong. Please try again.",
                    });
                    console.error("Error:", error);
                });
        });
    });
</script>
    <script>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Handle form submission
  document.getElementById('createLifafaForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent default form submission

    // Collect form data
    const lifafaTitle = document.getElementById('lifafa').value;
    const amount = document.getElementById('amount').value;
    const users = document.getElementById('users').value;
    const comment = document.getElementById('comment').value;
    const link = document.getElementById('link').value;
    const code = document.getElementById('code').value;

    // Prepare the data object to send
    const formData = {
      lifafa: lifafaTitle,
      amount: amount,
      users: users,
      comment: comment,
      link: link,
      code: code
    };

    // Perform client-side validation
    if (!lifafaTitle || !amount || !users || !comment || !link || !code) {
      alert('Please fill in all fields!');
      return;
    }

    // Send the form data to the PHP backend using Fetch API
    fetch('created.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData), // Send data as JSON
    })
    .then(response => response.json()) // Parse the JSON response
    .then(data => {
      if (data.success) {
        alert('Lifafa created successfully!');
        // Optionally, reset the form
        document.getElementById('createLifafaForm').reset();
      } else {
        alert('Error: ' + data.message);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred while creating the Lifafa.');
    });
  });
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
function copyClaimUrl() {
    const claimUrl = document.getElementById('claimUrl');
    claimUrl.select();
    document.execCommand('copy');
    alert('Claim URL copied to clipboard!');
}
</script>
</body>
</html>