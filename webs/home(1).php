<script>if(performance.navigation.type == 2){
   location.reload(true);
}</script>
<script>
window.onload=function(){
  document.getElementById("linkid").click();
};
</script>
<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit();
}

    $user="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
    

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
    </style>
</head>
<body>
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
						<li> <a class="active" href="home.php">Home</a>/Giveaway Area</li>
						
					</ul>
				</div>
			</div>
			<br>
			
	<li> 	<font color="blue" style="font-weight:600">
			<br><div style=' padding:10px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;'>
<font color='brown' style='font-weight:600;'>Paytm Lifafa <i class='bx bxs-envelope-open' ></i></font><br><br>

            <center> <a href='create.php'><button class='submit1' >Create Paytm Lifafa <i class='bx bx-envelope' ></i></button></a><br><a href='lifafa-history.php'><button class='submit' >History <i class='bx bx-history' ></i></button></a></center></div><br>

<div style=' padding:10px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;'>
<font color='brown' style='font-weight:600;'>Dice Lifafa <i class='bx bxs-envelope-open' ></i></font><br><br>

            <center> <a href='dice-create.php'><button class='submit1' >Create Dice Lifafa <i class='bx bx-envelope' ></i></button></a><br><a href='dice-history.php'><button class='submit' >History <i class='bx bx-history' ></i></button></a></center></div><br>
            
<div style=' padding:10px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;'>
<font color='brown' style='font-weight:600;'>Claim Code <i class='bx bxs-toggle-right' ></i></font><br><br>

            <center> <a href='code-create.php'><button class='submit1' >Create Claim Code <i class='bx bx-toggle-right' ></i></button></a><br><a href='code-history.php'><button class='submit' >History <i class='bx bx-history' ></i></button></a></center></div><br>

</span>
</li>
</ul>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	  <!-- Floating Telegram Icon -->
  <a href="https://t.me/PavanCashLoot" target="_blank" class="floating-telegram">
    <img src="https://cdnlogo.com/logos/t/39/telegram.svg" alt="Telegram">
  </a>
    <!-- Add Scripts Here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
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