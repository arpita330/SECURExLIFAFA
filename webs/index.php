<script>if(performance.navigation.type == 2){
   location.reload(true);
}</script>
<script>
window.onload=function(){
  document.getElementById("linkid").click();
};
</script>


<?php 
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google" value="notranslate">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Pavan Cash Loot , Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
        <link rel="icon" type="image/png" sizes="16x16" href=<?= $logo?>>
      <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/sstyle.css"> 
   <!-- <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <title><?= $title?></title>
    	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	<style>
/*	    .alert {
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
    */
    /* Alert Box Styles */
.alert {
  padding: 20px;
  border-radius: 6px;
  color: white;
  opacity: 1;
  transition: opacity 0.6s ease-in-out, transform 0.4s ease-in-out;
  margin-bottom: 15px;
  position: relative;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Alert Types */
.alert.success {
  background-color: #04AA6D;
  box-shadow: 0 4px 10px rgba(4, 170, 109, 0.3);
}

.alert.info {
  background-color: #2196F3;
  box-shadow: 0 4px 10px rgba(33, 150, 243, 0.3);
}

.alert.warning {
  background-color: #ff9800;
  box-shadow: 0 4px 10px rgba(255, 152, 0, 0.3);
}

.alert.danger {
  background-color: #f44336;
  box-shadow: 0 4px 10px rgba(244, 67, 54, 0.3);
}

/* Close Button */
.closebtn {
  background: none;
  border: none;
  color: white;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.closebtn:hover {
  color: black;
  transform: scale(1.1);
}

/* Fade Out Effect */
.alert.hide {
  opacity: 0;
  transform: translateY(-10px);
  pointer-events: none;
}

/* Submit Button */
.submit {
  height: 45px;
  width: 100%;
  max-width: 300px;
  border: none;
  border-radius: 6px;
  margin: 10px auto;
  padding: 0 20px;
  background: linear-gradient(135deg, #000000, #444444);
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #FFFFFF;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
}

.submit:hover {
  background: linear-gradient(135deg, #222222, #666666);
  box-shadow: 0 5px 12px rgba(0, 0, 0, 0.4);
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
    
    /* Floating Icons Container */
.floating-icons {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 1000;
}

/* Floating Icon Styling */
.floating-icon {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.floating-icon img {
  width: 30px;
  height: 30px;
}

/* Hover Effects */
.floating-icon:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

/* Custom Colors for Each Icon */
.floating-icon.telegram {
  background-color: #0088cc;
}

.floating-icon.whatsapp {
  background-color: #25D366;
}

.floating-icon.instagram {
  background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
}

canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
        }
    </style>
</head>
<body>
    <canvas id="fireworksCanvas"></canvas>
	<!-- SIDEBAR START-->
	<section id="sidebar">
		<a href="home.php" class="brand">
			<img src="<?= $logo?>" width="45px" style="margin:10px; border-radius:50%;">
			<span class="text"><?= $namet?></span></span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="home.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			
			<li>
				<a href="lifafa-tool.php">
					<i class='bx bxs-envelope' style="color: blue;" ></i>
					<span class="text">Giveaway Area</span>
				</a>
			</li>
			
			<li>
				<a href="add-fund-manual.php">
					<i class="bx bx-cart" style="color: red; font-weight:900;"></i>
					<span class="text">Add Fund</span>
				</a>
			</li>
			
			<li>
				<a href="gateway.php">
					<i class="bx bxs-bank"style="color: #1cfc03;" ></i>
					<span class="text">Withdraw</span>
				</a>
						
			</li>
			
			<li>
				<a href="claimcode.php">
					<i class="bx bx-toggle-right" style="color: red;" ></i>
					<span class="text">Claim Code</span>
				</a>
				
			</li>
			
			<li> <a href="music.php"> <i class="bx bxs-music" style="color: Blue;"></i> <span class="text">Songs</span> </a> </li>
			
				<li >
				<a href="game.php">
					<i class="bx bxs-game"style="color: Green;" ></i>
					<span class="text">Game Centre</span>
				</a>
										</a>
			</li>
			
			
			<li>
				<a href="settings.php">
					<i class="bx bxs-cog"style="color: Red;" ></i>
					<span class="text">Settings</span>
				</a>
										</a>
			</li>
			
			<li>
				<a href="<?= $channel_link?>">
					<i class="bx bxl-telegram"style="color: #047aed;" ></i>
					<span class="text">Join Telegram</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">

			<li>
				<a href="logout.php" class="logout"><i class='bx bx-log-out' ></i>	
					<span class="text">Log Out</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR END -->
	
		<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class="bx bx-menu" id="linkid"></i>
			<a href="#" class="nav-link">Categories</a>&nbsp;&nbsp;
			
				<a href="lifafa-history.php" class="notification">
				<i class="bx bx-history" style="color: green;"></i>
				</a>
				<a href="dice-history.php" class="notification">
				<i class="bx bx-history" style="color: brown;"></i>
				</a>
				<a href="code-history.php" class="notification">
				<i class="bx bx-history" style="color: blue;"></i>
				</a>
				<a href="payments.php" class="notification">
				<i class="bx bx-history" style="color: red;"></i>
				</a>
			        <a href="wallet.php" class="notification">
				<i class="bx bx-wallet" ></i>
				</a>
				

		</nav>
		<!-- NAVBAR -->
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
			
					<ul class="breadcrumb">
						
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							Dashboard
						</li>
					</ul>
				</div>
				<a href="<?= $contact?>" class="btn-download"><span class="text"><i class='bx bxs-user' style="color: white;" ></i> Contact</span>
				</a>
			</div>  
			<br>
			
                        	<li>
					       <div style=" padding:5px; background: white ; border-top:3px solid Red;border-right:3px solid Red;border-bottom:3px solid Red;border-left:3px solid Red; border-radius:1px;"> <center>
     <marquee class="notice"><i class="bx bx-star" style="color: blue;"></i> <span class="text"><?= $welcome_name?> <i class="bx bx-star" style="color: blue;"></i></marquee></center></div></span>	
                                     </li>
                                     
                                     <br><hr>

            
            
		</main>
		<!-- MAIN -->
    </section>
    	  <!-- Floating Telegram Icon 
  <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-telegram">
    <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
  </a> -->
  
<!-- Floating Social Icons -->
<div class="floating-icons">
  <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-icon telegram">
    <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
  </a>
  
  <a href="https://wa.me/+919000875047" target="_blank" class="floating-icon whatsapp">
    <img src="https://cdnlogo.com/logo/whatsapp-icon_481.html" alt="WhatsApp">
  </a>
  
  <a href="https://www.instagram.com/PavanCashLoot" target="_blank" class="floating-icon instagram">
    <img src="https://cdnlogo.com/logos/i/92/instagram.svg" alt="Instagram">
  </a>
</div>


    <!-- Add Scripts Here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const canvas = document.getElementById("fireworksCanvas");
        const ctx = canvas.getContext("2d");

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        class Particle {
            constructor(x, y, color, speedX, speedY, size) {
                this.x = x;
                this.y = y;
                this.color = color;
                this.speedX = speedX;
                this.speedY = speedY;
                this.size = size;
                this.alpha = 1;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                this.alpha -= 0.02;
            }

            draw() {
                ctx.globalAlpha = this.alpha;
                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        let particles = [];

        function createFirework(x, y) {
            let colors = ["#ff0000", "#ff4500", "#ffcc00", "#ff69b4", "#00ff00", "#00ffff", "#0000ff"];
            for (let i = 0; i < 50; i++) {
                let speedX = (Math.random() - 0.5) * 5;
                let speedY = (Math.random() - 0.5) * 5;
                let color = colors[Math.floor(Math.random() * colors.length)];
                particles.push(new Particle(x, y, color, speedX, speedY, 3));
            }
        }

        function firewallEffect() {
            for (let i = 0; i < 10; i++) {
                let x = Math.random() * canvas.width;
                let y = canvas.height - 10;
                createFirework(x, y);
            }
        }

        function animate() {
            ctx.globalAlpha = 0.1;
            ctx.fillStyle = "black";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.globalAlpha = 1;

            particles.forEach((particle, index) => {
                particle.update();
                particle.draw();
                if (particle.alpha <= 0) particles.splice(index, 1);
            });

            requestAnimationFrame(animate);
        }

        setInterval(firewallEffect, 500);
        animate();
    </script>
    <script>
document.getElementById("cutt").onclick = function () {
        document.getElementById("alert").innerHTML = "";
    };    
    
document.getElementById("bot").onclick = function () {
        location.href = "botalert.php";
    };    
    
  function link() {
location.href = "linknumber.php";
}
 
</script>

	<script src="js/sscript.js"></script>
</body>
</html>