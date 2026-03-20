<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Register ~ Pavan Cash Loot</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
    <style>
      /* Add your custom styles here as per your requirements */
      body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f3f4f6;
      }
      body {
  font-family: 'Montserrat', sans-serif;
  background-color: #f3f4f6; /* Light gray background */
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

/* Form input styles */
input[type="number"], input[type="password"], input[type="name"]: {
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

input[type="number"]:focus, input[type="password"]:focus, input[type="name"]:focus, {
  border-color: #3F00FF;
  outline: none;
}

/* Container styles */
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

/* Title and text styling */
h2 {
  font-size: 24px;
  font-weight: bold;
  color: #333;
  text-align: center;
}

p {
  color: #777;
  text-align: center;
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
        /* Floating Telegram Icon */
.telegram-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 20px;
    right: 20px;
    background-color: #0088cc;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    line-height: 60px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.telegram-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.telegram-float i {
    font-size: 24px;
    line-height: 60px;
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
        .logout-btn {
            background-color: #FF0000;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .logout-btn:hover {
            background-color: #CC0000;
        }
.separator {
  display: flex;
  align-items: center;
  text-align: center;
  color: #818078;
}

.separator::before,
.separator::after {
  content: '';
  flex: 2;
  border-bottom: 2px solid #818078;
  
}

.separator:not(:empty)::before {
  margin-right: .25em;
}

.separator:not(:empty)::after {
  margin-left: .25em;
}
        /* Preloader Styles */
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .loader {
      position: relative;
    }

    .circular {
      animation: rotate 2s linear infinite;
      height: 50px;
      width: 50px;
    }

    .path {
      stroke: #00ccff;
      stroke-linecap: round;
      animation: dash 1.5s ease-in-out infinite;
    }

    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes dash {
      0% {
        stroke-dasharray: 1, 150;
        stroke-dashoffset: 0;
      }
      50% {
        stroke-dasharray: 90, 150;
        stroke-dashoffset: -35;
      }
      100% {
        stroke-dasharray: 90, 150;
        stroke-dashoffset: -124;
      }
    }
    


      /* Button and other styles (same as you provided earlier) */
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="text-center mb-6">
          <h1 class="text-2xl font-bold mb-4">Welcome !!</h1>
          <p>Welcome! Please Enter Your Details</p>
        </div>
        <div>
          <div class="mb-4">
            <label for="name" class="block text-sm font-bold text-gray-700">Name</label>
            <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter your name" />
          </div>
          <div class="mb-4">
            <label for="number" class="block text-sm font-bold text-gray-700">Number</label>
            <input type="number" id="number" class="w-full p-2 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Enter your number" />
          </div>
          <div class="mb-4">
            <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
            <input type="password" id="password" class="w-full p-2 border border-gray-300 rounded-md placeholder-gray-400 font-bold" placeholder="Create a password" />
          </div>
          <div id="sub">
            <button class="submit logout-btn w-full" onclick="register()">Register</button>
          </div>
        </div>
        <div class="mt-4 text-center text-sm text-gray-500">
          <div class="separator font-bold">OR</div><br>
          <p>Already have an account? <a href="login.php" class="text-blue-600 font-bold">Login</a></p>
        </div>
      </div>
    </div>
  </body>
  
      <!-- Floating Telegram Icon -->
    <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-telegram">
        <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
    </a>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function register() {
      var name = $("#name").val();
      var number = $("#number").val();
      var password = $("#password").val();

      if (name === "" || number === "" || password === "") {
        Swal.fire({
          title: "Ooops..!",
          text: "All fields are required.",
          icon: "error"
        });
      } else {
        $.ajax({
          url: "backend/register.php",
          type: "POST",
          data: { name: name, number: number, password: password },
          success: function (response) {
            if (response == 1) {
              Swal.fire({
                title: "Success!",
                text: "Registration successful.",
                icon: "success"
              }).then(() => {
                window.location.href = "login.php";
              });
            } else if (response == 2) {
              Swal.fire({
                title: "Ooops..!",
                text: "Number already registered.",
                icon: "error"
              });
            } else {
              Swal.fire({
                title: "Ooops..!",
                text: "Something went wrong. Please try again.",
                icon: "error"
              });
            }
          }
        });
      }
    }
  </script>
</html>