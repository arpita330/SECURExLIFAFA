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
    <meta name="google" value="notranslate">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="EARNING ARMY , Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
      <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="sstyle.css">

	<title>EARNING ARMY</title>
	<link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"/>
	
<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['user'];
$user = $_COOKIE['user'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}
else{
    $ffill="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($ffill);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
    }
    
    
    
    $ffile="ntpcbdjsjsj8272djearning/$session";
    if( is_dir("$ffile") === false)
{mkdir("$ffile");}

if(file_exists("$ffile/fund.txt")){$fund=file_get_contents("$ffile/fund.txt");}
else{file_put_contents("$ffile/fund.txt",0);
    $fund=file_get_contents("$ffile/fund.txt");
}

if (file_exists("ntpcbdjsjsj8272djearning/$session/countc.txt")){
    $live=file_get_contents("ntpcbdjsjsj8272djearning/$session/countc.txt");}else{
    file_put_contents("ntpcbdjsjsj8272djearning/$session/countc.txt",0);
    $live=file_get_contents("ntpcbdjsjsj8272djearning/$session/countc.txt");
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

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="sstyle.css">

	<title>EARNING ARMY</title>
	<link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"/>
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
				<a href="https://telegram.me/earning_armi">
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
							Dashboard
						</li>
					</ul>
				</div>
				<a href="https://telegram.me/earningarmy_xyz" class="btn-download"><span class="text"><i class='bx bxs-user' style="color: white;" ></i> Contact</span>
				</a>
			</div>  
			<br>
			
                        	<li>
					       <div style=" padding:5px; background: white ; border-top:3px solid Red;border-right:3px solid Red;border-bottom:3px solid Red;border-left:3px solid Red; border-radius:1px;"> <center>
     <marquee class="notice"><i class="bx bx-star" style="color: blue;"></i> <span class="text">WELCOME TO EARNING ARMY <i class="bx bx-star" style="color: blue;"></i></marquee></center></div></span>	
                                     </li>
                                     
                                    <br><hr>
			
<?php
if($session){
    $dfile="ntpcbdjsjsj8272djearning/$session/bot.txt";
    $tfl="ntpcbdjsjsj8272djearning/$user/tfund.txt";
    $tfun=file_get_contents("$tfl");
    if (file_exists($dfile)){}else{
echo '<br><div class="alert" >
  <span class="closebtn">&times;</span>  
  <strong>Firstly have to set Bot Alert to get all Panel notifications via our Bot</strong><br>
  <a href="botalert.php" ><b><span color="white" size="3">CLICK TO SET</span></b></a>
</div>';
}
    }
?>
		<br><div style=' padding:10px; background: white; border-top:3px solid Blue;border-right:3px solid Blue;border-bottom:3px solid Blue;border-left:3px solid Blue; border-radius:10px; '>
		
       <font style="font-weight:600">
       <i class="bx bx-user-circle"style="color: Blue;"></i> User : <font color="#ff00e4" size="4"> <?php echo$session;?></font><br><hr>
       
       <font  style="font-weight:600">
       <i class="bx bx-wallet"style="color: Blue;" ></i> Balance : <font color="Green" size="4"> ₹<?php echo $fund;?></font><br><hr>
       
       <font style="font-weight:600">
       <i class="bx bx-medal"style="color: Blue;" ></i> Lifafa Created : <font color="Orange" size="4"> <?php echo$live;?></font><br><hr>
       
      <font style="font-weight:600"> 
     <i class="bx bx-money"style="color: Blue;"></i> Total Recharge : <font color="Red" size="4"> ₹<?php echo $tfun;?></font><br>
     
     </div>

		<br><hr>
				      
 <font color="blue" style="font-weight:600">
			<br><div style=' padding:10px; background: white; border-top:3px solid Blue;border-right:3px solid Blue;border-bottom:3px solid Blue;border-left:3px solid Blue; border-radius:10px;'>
<font color='brown' style='font-weight:600;'>Wallet <i class='bx bxs-wallet' ></i></font><br>

<br>
            <center> <a href='add-fund-manual.php'><button class='submit' >Add Fund +</button></a><br><br><a href='gateway.php'><button class='submit' >Withdraw <i class='bx bx-send' ></i></button></a><br></center><br>
</div><br>
            
            <hr>
            
            
            	<font color="blue" style="font-weight:600">
			<br><div style=' padding:10px; background: white; border-top:3px solid Blue;border-right:3px solid Blue;border-bottom:3px solid Blue;border-left:3px solid Blue; border-radius:10px;'>
<font color='brown' style='font-weight:600;'>Giveaway <i class="bx bxs-envelope"></i></font><br>

<br>
            <center> <a href='create.php'><button class='submit' >Create Paytm Lifafa <i class='bx bx-envelope-open' ></i></button></a><br>
            <br><a href='dice-create.php'><button class='submit' >Create Dice Lifafa <i class='bx bx-envelope-open' ></i></button></a><br>
            <br><a href='code-create.php'><button class='submit' >Create Claim Code <i class='bx bx-toggle-right' ></i></button></a></center><br>
</div><br><hr>

                 <font color="blue" style="font-weight:600">
                        <br><div style=' padding:10px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;'>
			
<font color='brown' style='font-weight:600;'>Tools <i class="bx bxs-bar-chart-alt-2"></i></font><br>

<br>
            <center> <a href='botalert.php'><button class='submit' >Bot Alert <i class="bx bx-bot"></i></button></a><br><br><a href='adata.php'><button class='submit' >Channel Data <i class="bx bx-data"></i></button></a></center> <br></div>
</span>

            
            
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
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

	<script src="sscript.js"></script>
</body>
</html>