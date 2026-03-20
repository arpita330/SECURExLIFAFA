<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_SESSION['number'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php?s=lifafa-tool'>";

}else{
    $user="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
    }
    
   

    ?>
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
      <script>
window.onload=function(){
  document.getElementById("linkid").click();
};
</script> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
		<link rel="stylesheet" href="css/sstyle.css">

	<title>EARNING ARMY</title>   
  <link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"> 
	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	<style>
	      .submit{
        height: 40px;
        width: 200px;
        border: 0;
        border-radius: 4px;
        margin-top: 10px;
        margin-bottom: 10px;
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
    
     .submit1{
        height: 40px;
        width: 80%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        padding: 0 25px 0 25px;
        background: Black;
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
	</style>
</head>
<body>
      
	<!-- SIDEBAR -->
      	
	<section id="sidebar">
		<a href="home.php" class="brand">
			<img src="https://i.ibb.co/jr10brk/icon.png" width="45px" style="margin:10px; border-radius:50%;">
			<span class="text">EARNING ARMY</span></span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="home.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			
			<li class="active">
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
					<i class="bx bxs-game"style="color: green;" ></i>
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
				<a href="https://telegram.me/earning_armi">
				<i class="bx bxl-telegram"style="color: #047aed;" ></i>
					<span class="text">Join Telegram</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">

			<li>
				<a href="logout.php" class="logout">
					<i class='bx bx-log-out' ></i>
					<span class="text">Log Out</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



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
	

	<script src="js/sscript.js"></script>
</body>
</html>