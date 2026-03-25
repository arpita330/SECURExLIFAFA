<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
$is_logged_in = isset($_SESSION['number']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SECURExLIFAFA, Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Pavan Cash Loot</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        div.clickEffect {
            position: fixed;
            box-sizing: border-box;
            border-style: solid;
            border-color: green blue red;
            border-radius: 100%;
            animation: clickEffect .4s ease-out;
            z-index: 99999;
            pointer-events: none;
        }
        
        @keyframes clickEffect {
            0% {
                opacity: 1;
                width: .1em;
                height: .1em;
                margin: -.25em;
                border-width: .5rem;
            }
            100% {
                opacity: .2;
                width: 15em;
                height: 15em;
                margin: -7.5em;
                border-width: .03rem;
            }
        }
        
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
            display: inline-block;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #FFC107;
            text-decoration: none;
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
            width: 35px;
            height: 35px;
            filter: brightness(0) invert(1);
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
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: #2D3748;
        }

        .feature-card p {
            color: #4A5568;
            font-weight: 500;
        }

        /* Footer Styling */
        footer {
            background-color: #1A202C;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
        }
        
        /* Navigation Links */
        .nav-link {
            transition: color 0.3s ease;
            text-decoration: none;
        }
        
        .nav-link:hover {
            color: #3B82F6 !important;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.php" class="text-xl font-bold text-gray-800 hover:text-blue-600 transition">SECURExLIFAFA</a>
            <div class="space-x-4">
                <?php if ($is_logged_in): ?>
                    <a href="dashboard.php" class="nav-link text-gray-700 hover:text-blue-600 font-bold">Dashboard</a>
                    <a href="logout.php" class="nav-link text-gray-700 hover:text-red-600 font-bold">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="nav-link text-gray-700 hover:text-blue-600 font-bold">Login</a>
                    <a href="register.php" class="nav-link text-gray-700 hover:text-blue-600 font-bold">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to SECURExLIFAFA</h1>
        <p class="text-lg md:text-xl mb-6">Your gateway to exciting offers and rewards.</p>
        <?php if (!$is_logged_in): ?>
            <a href="register.php" class="cta-button">Get Started</a>
        <?php else: ?>
            <a href="dashboard.php" class="cta-button">Go to Dashboard</a>
        <?php endif; ?>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-10">Why Choose Us?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature Card 1 -->
            <div class="feature-card">
                <div class="text-4xl mb-3">🔒</div>
                <h3>Secure</h3>
                <p>Your data and transactions are fully secure with us.</p>
            </div>
            <!-- Feature Card 2 -->
            <div class="feature-card">
                <div class="text-4xl mb-3">🎁</div>
                <h3>Rewards</h3>
                <p>Earn exciting rewards on every action.</p>
            </div>
            <!-- Feature Card 3 -->
            <div class="feature-card">
                <div class="text-4xl mb-3">😊</div>
                <h3>Easy to Use</h3>
                <p>A simple and user-friendly platform for everyone.</p>
            </div>
        </div>
    </div>

    <!-- Floating Telegram Icon -->
    <a href="https://t.me/SECURE_x_LIFAFA" target="_blank" rel="noopener noreferrer" class="floating-telegram" aria-label="Join us on Telegram">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="35px" height="35px">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.66-.35-1.02.22-1.61.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.06-.2-.07-.06-.18-.04-.26-.02-.11.02-1.84 1.17-5.2 3.44-.49.34-.94.5-1.34.49-.44-.01-1.28-.25-1.91-.45-.77-.25-1.38-.38-1.33-.81.03-.22.34-.45.94-.68 3.7-1.61 6.17-2.67 7.41-3.18 3.53-1.46 4.26-1.71 4.74-1.72.11 0 .34.02.5.15.13.11.17.26.19.4.01.04.02.09.02.14 0 .04.01.09.01.14z"/>
        </svg>
    </a>

    <!-- Footer -->
    <footer>
        <div class="container mx-auto text-center">
            <p class="font-bold">&copy; <?php echo date('Y'); ?> SECURExLIFAFA. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Click effect function
        function clickEffect(e) {
            var d = document.createElement("div");
            d.className = "clickEffect";
            d.style.top = e.clientY + "px";
            d.style.left = e.clientX + "px";
            document.body.appendChild(d);
            d.addEventListener('animationend', function() {
                d.parentElement.removeChild(d);
            });
        }
        document.addEventListener('click', clickEffect);
    </script>

</body>
</html>
