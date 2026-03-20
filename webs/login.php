<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <title>Login ~ Pavan Cash Loot</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f3f4f6;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f3f4f6;
    }

    .card {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .card img {
      width: 150px;
      margin-bottom: 30px;
    }

    h2 {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }

/* Button styles */
.submit {
  height: 40px;
  border: 0;
  width: 100%;
  border-radius: 8px;
  margin-bottom: 10px;
  padding: 0 10px;
  background: #3F00FF; /* Blue button */
  font-family: 'Montserrat';
  font-size: 14px;
  font-weight: 500;
  text-transform: capitalize;
  color: white;
  cursor: pointer;
  outline: none;
  box-shadow: 0 2px 5px rgba(0, 0, 100, 0.2);
  transition: background-color 0.3s ease-in-out;
}

.submit:hover {
  background-color: #2a00cc; /* Darker shade of blue on hover */
}

.submitt {
  height: 40px;
  border: 0;
  width: 100%;
  border-radius: 8px;
  margin-bottom: 10px;
  padding: 0 10px;
  background: #fff; /* White background */
  font-family: 'Montserrat';
  font-size: 14px;
  font-weight: 500;
  text-transform: capitalize;
  color: black;
  cursor: pointer;
  outline: none;
  box-shadow: 0 2px 5px rgba(0, 0, 100, 0.2);
}

.submitt:hover {
  background-color: #f1f1f1; /* Light gray on hover */
}

    .separator {
      display: flex;
      align-items: center;
      text-align: center;
      color: #818078;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .separator::before,
    .separator::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid #818078;
    }

    .separator:not(:empty)::before {
      margin-right: .25em;
    }

    .separator:not(:empty)::after {
      margin-left: .25em;
    }

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
    /* Login/Register Text */
.text-center {
  text-align: center;
  font-weight: bold;
}

.text-gray-400 {
  color: #777;
}

.text-black {
  color: #000;
}
.center-bold-text {
  text-align: center;
  font-weight: bold;
}
h1 {
  text-align: center;
  font-weight: bold;
  font-size: 100px; /* Adjust size as needed */
}
/* Loader */
.loaderr {
  width: 30px;
  height: 30px;
  border: 5px solid #FFF;
  border-bottom-color: transparent;
  border-radius: 50%;
  display: inline-block;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Separator */
.separator {
  display: flex;
  align-items: center;
  text-align: center;
  color: #818078;
  margin-top: 20px;
  margin-bottom: 20px;
}

.separator::after {
  content: '';
  flex: 1;
  border-bottom: 1px solid #818078;
}

.separator:not(:empty)::before {
  margin-right: .25em;
}

.separator:not(:empty)::after {
  margin-left: .25em;
}

  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="text-center mb-6">
        <h2 class="text-2xl font-bold mb-4 font-bold">Login !!</h2>
        <p class="font-bold" style="color:gray;">Please Enter Your Login Details</p>
      </div>
      <div>
        <div class="mb-4">
          <label for="number" class="block text-sm font-bold text-gray-700">Number</label>
          <input type="number" id="number" class="w-full p-2 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Your Number">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
          <input type="password" id="password" class="w-full p-2 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter Your Password">
        </div>
        <div class="" id="login">
          <button class="submit logout-btn w-full font-bold" onclick="login()">Login</button>
        </div>
      </div>
      <div class="mt-4 text-center text-sm text-gray-500">
        <div class="separator font-bold">OR</div><br>
        <!-- <p class="text-wihte-600 font-bold"> If you have forgotten your password, click here.  <a href="reset_password.html" class="text-blue-600 font-bold">Forgot Password</a></p><br> -->
        <p class="text-wihte-600 font-bold">Don't have an account? <a href="register.php" class="text-blue-600 font-bold">Register</a></p>
      </div>
    </div>
  </div>

  <!-- Floating Telegram Icon -->
  <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-telegram">
    <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
  </a>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function login() {
      var number = $("#number").val();
      var password = $("#password").val();

      if (number === "" || password === "") {
        Swal.fire({
          title: "Ooops..!",
          text: "All fields are required.",
          icon: "error"
        });
      } else {
        $.ajax({
          url: "backend/login.php",
          type: "POST",
          data: { number: number, password: password },
          success: function(response) {
            if (response == 1) {
              Swal.fire({
                title: "Success!",
                text: "Login successful.",
                icon: "success"
              }).then(() => {
                window.location.href = "home.php";
              });
            } else {
              Swal.fire({
                title: "Ooops..!",
                text: "Invalid credentials.",
                icon: "error"
              });
            }
          }
        });
      }
    }
  </script>
</body>
</html>