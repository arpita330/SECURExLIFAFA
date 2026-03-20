<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['user'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php?s=gateway'>";

}else{
    $user="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
    }
    $fund=file_get_contents("ntpcbdjsjsj8272djearning/$session/fund.txt");
     $gfile="rvbyurbdjsjsj8272djearning/$session/gateway.json";
if(file_exists($gfile)){
    $deco=file_get_contents($gfile);
$dcd=json_decode($deco,true);
$token=$dcd['token'];
$key=$dcd['key'];
}
else{
    $token=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 10);
     $key=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 5);
     $in='{"token":"'.$token.'","key":"'.$key.'"}';
     mkdir("rvbyurbdjsjsj8272djearning/$session");
     file_put_contents("$gfile",$in);
}

if(file_exists("ntpcbdjsjsj8272djearning/$session/gtw.txt")){
     $turn=$_GET['turn'];
    if($turn=="on"){
        file_put_contents("ntpcbdjsjsj8272djearning/$session/gtw.txt",on);
    }
     if($turn=="off"){
        file_put_contents("ntpcbdjsjsj8272djearning/$session/gtw.txt",off);
    }
    $sts=file_get_contents("ntpcbdjsjsj8272djearning/$session/gtw.txt");}
    
    else{file_put_contents("ntpcbdjsjsj8272djearning/$session/gtw.txt",off);
        $sts="off";
    }
   

    ?>

<script>if(performance.navigation.type == 2){
   location.reload(true);
}</script>
<script>
window.onload=function(){
  document.getElementById("linkid").click();
};
</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="EARNING ARMY , Advanced Lifafa Giveawa maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="sstyle.css">

	<title>EARNING ARMY</title>
	<link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"/>
	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	<style>
	      .submit{
        height: 40px;
        width: 50%;
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
    .submit1{
        height: 40px;
        width: 50%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        padding: 0 25px 0 25px;
        background: red;
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
    
    .submitt{
        height: 22px;
        width: 160px;
        border: 0;
        border-radius: 40px;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: center;
    align-items: center;
        background: red;
        font-family: 'Montserrat';
        font-size: 13px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0;
        color: #FFFFFF;
        cursor: pointer;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);
    }
    
    .submitt1{
        height: 22px;
        width: 160px;
        border: 0;
        border-radius: 40px;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: center;
    align-items: center;
        background: green;
        font-family: 'Montserrat';
        font-size: 13px;
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

			<li class="active">
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
						<li>
							<a class="active" href="home.php">Home</a>/Withdraw	</li>
					</ul>
				</div>
			
			</div>
			
			<?php
        if($sts=="off"){
            echo"
            <br><br><font style='font-weight:600' color='red' class='nnn'>WITHDRAW SYSTEM IS OFF</font><br><a href='gateway.php?turn=on'><font style='font-weight:600' class='nnn'><input type='hidden' name='turn' value='on'><button type='submit' class='submitt1'>CLICK TO TURN ON</button></a></font>
            ";
        }else{echo"	<br><br><font style='font-weight:600' color='green' class='nnn'>WITHDRAW SYSTEM IS ON</font><br><a href='gateway.php?turn=off'><font style='font-weight:600' class='nnn'><input type='hidden' name='turn' value='off'><button type='submit' class='submitt' style='font-weight:600' class='nnn'>CLICK TO TURN OFF</button></font></a>
        

        <ul class='box-info'>
         
       
	

		<div style=' padding:10px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;'>
<font color='brown' style='font-weight:600;'>Withdraw</font><br><br>
            <center> <a href='paytouser.php'><button class='submit' style='width:70%;' >Withdraw <i class='bx bx-send' ></i></button></a><br><br>
<a href='payments.php'><button class='submit' style='width:70%;' >History <i class='bx bx-history' ></i></button></a><br>            
            <br>" ;}
  ?>
        
        
				 
				 







		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="sscript.js"></script>
</body>
</html>