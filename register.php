<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect if already logged in
if (isset($_SESSION['number'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Register for SECURExLIFAFA - Your gateway to exciting rewards and giveaways" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Register ~ SECURExLIFAFA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Click Effect */
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
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        /* Container styles */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .card {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 450px;
            width: 100%;
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Button styles */
        .submit-btn {
            height: 48px;
            border: 0;
            width: 100%;
            border-radius: 12px;
            padding: 0 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            color: white;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        /* Form input styles */
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 14px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            transition: all 0.3s ease;
            background-color: #fff;
            color: #333;
        }
        
        .form-input:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .form-input.error {
            border-color: #f56565;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #4a5568;
            font-size: 14px;
        }
        
        /* Separator */
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            color: #cbd5e0;
            margin: 20px 0;
        }
        
        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 2px solid #e2e8f0;
        }
        
        .separator:not(:empty)::before {
            margin-right: 10px;
        }
        
        .separator:not(:empty)::after {
            margin-left: 10px;
        }
        
        /* Floating Telegram Icon */
        .floating-telegram {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #0088cc 0%, #006699 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            z-index: 1000;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        .floating-telegram:hover {
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            animation: none;
        }
        
        .floating-telegram svg {
            width: 32px;
            height: 32px;
            filter: brightness(0) invert(1);
        }
        
        /* Loader animation */
        .loader {
            width: 20px;
            height: 20px;
            border: 3px solid #fff;
            border-bottom-color: transparent;
            border-radius: 50%;
            display: inline-block;
            animation: rotation 1s linear infinite;
            margin-right: 8px;
        }
        
        @keyframes rotation {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Error message styling */
        .error-message {
            color: #f56565;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }
        
        /* Password strength indicator */
        .password-strength {
            margin-top: 8px;
            height: 4px;
            border-radius: 2px;
            background-color: #e2e8f0;
            overflow: hidden;
        }
        
        .strength-bar {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
        }
        
        .strength-text {
            font-size: 11px;
            margin-top: 5px;
            display: block;
        }
        
        /* Responsive adjustments */
        @media (max-width: 640px) {
            .card {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Welcome!
                </h1>
                <p class="text-gray-600">Please enter your details to register</p>
            </div>
            
            <form id="registerForm" onsubmit="return false;">
                <div class="mb-5">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" class="form-input" placeholder="Enter your full name" autocomplete="name" />
                    <div class="error-message" id="nameError">Please enter your name</div>
                </div>
                
                <div class="mb-5">
                    <label for="number">Mobile Number</label>
                    <input type="tel" id="number" class="form-input" placeholder="Enter your mobile number" maxlength="10" autocomplete="off" />
                    <div class="error-message" id="numberError">Please enter a valid 10-digit mobile number</div>
                </div>
                
                <div class="mb-5">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-input" placeholder="Create a strong password" autocomplete="new-password" />
                    <div class="password-strength">
                        <div class="strength-bar" id="strengthBar"></div>
                    </div>
                    <span class="strength-text" id="strengthText"></span>
                    <div class="error-message" id="passwordError">Password must be at least 6 characters</div>
                </div>
                
                <div class="mb-5">
                    <button type="submit" class="submit-btn" id="registerBtn">
                        Register
                    </button>
                </div>
            </form>
            
            <div class="separator">OR</div>
            
            <div class="text-center">
                <p class="text-gray-600">Already have an account? 
                    <a href="login.php" class="font-semibold" style="color: #667eea; text-decoration: none;">Login here</a>
                </p>
            </div>
        </div>
    </div>
    
    <!-- Floating Telegram Icon -->
    <a href="https://t.me/SECURE_x_LIFAFA" target="_blank" rel="noopener noreferrer" class="floating-telegram" aria-label="Join us on Telegram">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.66-.35-1.02.22-1.61.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.06-.2-.07-.06-.18-.04-.26-.02-.11.02-1.84 1.17-5.2 3.44-.49.34-.94.5-1.34.49-.44-.01-1.28-.25-1.91-.45-.77-.25-1.38-.38-1.33-.81.03-.22.34-.45.94-.68 3.7-1.61 6.17-2.67 7.41-3.18 3.53-1.46 4.26-1.71 4.74-1.72.11 0 .34.02.5.15.13.11.17.26.19.4.01.04.02.09.02.14 0 .04.01.09.01.14z"/>
        </svg>
    </a>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // Click effect
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
        
        // Form validation and submission
        $(document).ready(function() {
            // Real-time validation
            $('#name').on('input', function() {
                if ($(this).val().trim() === '') {
                    $(this).addClass('error');
                    $('#nameError').show();
                } else {
                    $(this).removeClass('error');
                    $('#nameError').hide();
                }
            });
            
            $('#number').on('input', function() {
                var number = $(this).val();
                // Allow only numbers
                $(this).val(number.replace(/[^0-9]/g, ''));
                
                if (number.length !== 10 || number === '') {
                    $(this).addClass('error');
                    $('#numberError').show();
                } else {
                    $(this).removeClass('error');
                    $('#numberError').hide();
                }
            });
            
            // Password strength meter
            $('#password').on('input', function() {
                var password = $(this).val();
                var strength = 0;
                
                if (password.length >= 6) {
                    strength += 1;
                    $('#passwordError').hide();
                    $(this).removeClass('error');
                } else {
                    $('#passwordError').show();
                    $(this).addClass('error');
                }
                
                if (password.match(/[a-z]+/)) strength += 1;
                if (password.match(/[A-Z]+/)) strength += 1;
                if (password.match(/[0-9]+/)) strength += 1;
                if (password.match(/[$@#&!]+/)) strength += 1;
                
                var strengthBar = $('#strengthBar');
                var strengthText = $('#strengthText');
                
                switch(strength) {
                    case 0:
                    case 1:
                        strengthBar.css('width', '20%').css('background-color', '#f56565');
                        strengthText.text('Weak').css('color', '#f56565');
                        break;
                    case 2:
                        strengthBar.css('width', '40%').css('background-color', '#ed8936');
                        strengthText.text('Fair').css('color', '#ed8936');
                        break;
                    case 3:
                        strengthBar.css('width', '60%').css('background-color', '#ecc94b');
                        strengthText.text('Good').css('color', '#ecc94b');
                        break;
                    case 4:
                        strengthBar.css('width', '80%').css('background-color', '#48bb78');
                        strengthText.text('Strong').css('color', '#48bb78');
                        break;
                    case 5:
                        strengthBar.css('width', '100%').css('background-color', '#38a169');
                        strengthText.text('Very Strong').css('color', '#38a169');
                        break;
                }
                
                if (password.length === 0) {
                    strengthBar.css('width', '0');
                    strengthText.text('');
                }
            });
            
            // Form submission
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                
                var name = $('#name').val().trim();
                var number = $('#number').val().trim();
                var password = $('#password').val();
                var isValid = true;
                
                // Validate name
                if (name === '') {
                    $('#name').addClass('error');
                    $('#nameError').show();
                    isValid = false;
                }
                
                // Validate number
                if (number.length !== 10) {
                    $('#number').addClass('error');
                    $('#numberError').show();
                    isValid = false;
                }
                
                // Validate password
                if (password.length < 6) {
                    $('#password').addClass('error');
                    $('#passwordError').show();
                    isValid = false;
                }
                
                if (!isValid) {
                    Swal.fire({
                        title: "Validation Error!",
                        text: "Please fill all fields correctly.",
                        icon: "error",
                        confirmButtonColor: "#667eea"
                    });
                    return;
                }
                
                // Disable button and show loading
                var $btn = $('#registerBtn');
                var originalText = $btn.html();
                $btn.html('<span class="loader"></span> Processing...').prop('disabled', true);
                
                // AJAX request
                $.ajax({
                    url: "backend/register.php",
                    type: "POST",
                    data: { 
                        name: name, 
                        number: number, 
                        password: password 
                    },
                    dataType: 'json',
                    success: function(response) {
                        $btn.html(originalText).prop('disabled', false);
                        
                        if (response.status === 'success') {
                            Swal.fire({
                                title: "Success!",
                                text: response.message || "Registration successful!",
                                icon: "success",
                                confirmButtonColor: "#667eea",
                                timer: 2000,
                                showConfirmButton: true
                            }).then(() => {
                                window.location.href = "login.php";
                            });
                        } else if (response.status === 'exists') {
                            Swal.fire({
                                title: "Account Exists!",
                                text: response.message || "Number already registered.",
                                icon: "error",
                                confirmButtonColor: "#667eea"
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message || "Something went wrong. Please try again.",
                                icon: "error",
                                confirmButtonColor: "#667eea"
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        $btn.html(originalText).prop('disabled', false);
                        console.error("AJAX Error:", error);
                        Swal.fire({
                            title: "Error!",
                            text: "Network error. Please check your connection and try again.",
                            icon: "error",
                            confirmButtonColor: "#667eea"
                        });
                    }
                });
            });
            
            // Prevent paste on number field to ensure validation
            $('#number').on('paste', function(e) {
                e.preventDefault();
                return false;
            });
        });
    </script>
</body>
</html>
