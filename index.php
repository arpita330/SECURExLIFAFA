
<?php
// Assuming a session check and user login status for demonstration
session_start();
$is_logged_in = isset($_SESSION['number']); // Check if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Pavan Cash Loot, Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Pavan Cash Loot</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
    <style>
        .hero-section {
            background: linear-gradient(to right, #3F00FF, #6A5ACD);
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .cta-button {
            background-color: #FFD700;
            color: #000;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease-in-out;
        }

        .cta-button:hover {
            background-color: #FFC107;
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

        /* Additional Styling */
        .feature-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .feature-card p {
            color: #4A5568;
            font-weight: bold;
        }

        /* Footer Styling */
        footer {
            background-color: #1A202C;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.php" class="text-xl font-bold text-gray-800">Pavan Cash Loot</a>
            <div>
                <?php if ($is_logged_in): ?>
                    <a href="dashboard.php" class="mr-4 text-gray-700 hover:text-blue-600 font-bold">Dashboard</a>
                    <a href="logout.php" class="text-gray-700 hover:text-red-600 font-bold">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="mr-4 text-gray-700 hover:text-blue-600 font-bold">Login</a>
                    <a href="register.php" class="text-gray-700 hover:text-blue-600 font-bold">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1 class="text-4xl font-bold mb-4">Welcome to Pavan Cash Loot</h1>
        <p class="text-lg mb-6">Your gateway to exciting offers and rewards.</p>
        <?php if (!$is_logged_in): ?>
            <a href="register.php" class="cta-button">Get Started</a>
        <?php else: ?>
            <a href="dashboard.php" class="cta-button">Go to Dashboard</a>
        <?php endif; ?>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Why Choose Us?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Feature Card 1 -->
            <div class="feature-card">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Secure</h3>
                <p class="text-gray-600 font-bold">Your data and transactions are fully secure with us.</p>
            </div>
            <!-- Feature Card 2 -->
            <div class="feature-card">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Rewards</h3>
                <p class="text-gray-600 font-bold">Earn exciting rewards on every action.</p>
            </div>
            <!-- Feature Card 3 -->
            <div class="feature-card">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Easy to Use</h3>
                <p class="text-gray-600 font-bold">A simple and user-friendly platform for everyone.</p>
            </div>
        </div>
    </div>

    <!-- Floating Telegram Icon -->
    <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-telegram">
        <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
    </a>

    <!-- Footer -->
    <footer>
        <div class="container mx-auto text-center font-bold">
            <p>&copy; <?= date('Y') ?> Pavan Cash Loot. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>