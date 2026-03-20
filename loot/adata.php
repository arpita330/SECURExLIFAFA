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
<meta content="EARNING ARMY, Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
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

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php?s=adata'>";

}else{
    $user="adminbdjsjsj8272djearning/$session/data.json";
$deco=file_get_contents($user);
$dcdd=json_decode($deco,true);
$dcb=file_get_contents("ntpcbdjsjsj8272djearning/$session/tg.txt");
$dcd=json_decode($dcb,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$channel1=$dcd['channel1'];
$channel2=$dcd['channel2'];
$channel3=$dcd['channel3'];
$channel4=$dcd['channel4'];
$channel5=$dcd['channel5'];
$channel6=$dcd['channel6'];
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
	 .input{
        display: block;
        width: 90%;
        margin: 10px auto;
        text-align: center;
        color: black;
        font-family: 'Montserrat';
        padding: 0;
        font-size: 15px;
        font-weight: 500;
        height: 40px;
        border: 1px solid #047aed;
        border-radius: 4px;
        background-color: #E1F5FE;
        outline: none;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);
    }
       input:focus {
  border: solid green 2px;
  border-radius:20px;
  width:95%;
   box-shadow: 1px 1px 8px grey ;
  transition: width 200ms ease-in, box-shadow 200ms ease-in, border 200ms ease-in, border-radius 2000ms ease-in ;
 
}
    .submit{
        height: 40px;
        width: 60%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        padding: 0 10px 0 10px;
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
			
					
			
			<li class="active">
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
							<a class="active" href="home.php">Home</a>/Channel Data</li>
					</ul>
				</div>
			
			</div>
<br>
		<div style="padding:10px; width:100%; background: white; border-top:3px solid Red;border-right:3px solid Red;border-bottom:3px solid Red;border-left:3px solid Red; border-radius:1px;" style="height:17%; border-radius:1px; background:White;"><b><font color='red'><li style=" border-radius:1px;background-color: white; font-family: 'Montserrat',sans-serif; font-size:15px; padding:10px; "> Enter Your Channel Username without @</font><br>
Ex: My channel link is https://t.me/earning_armi <br>
Then I enter only <font color='blue' >earning_armi</font> here
         </li></div><br>
		
			 <div style="padding:10px; width:100%; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;" style="height:17%; border-radius:1px; background:White;">
    

   <center> <b>
<form action='added.php' method='POST'>
      
    
          <div class='control'>

<?php
if(file_exists($dfile)){
echo"<input  type='text' class='input' placeholder='Channel1 Username without @(optional)' value='$tg' name='tig' required>";
echo"<input  type='text' class='input' placeholder='Channel2 Username without @(optional)' value='$tg' name='tig2' >";
echo"<input  type='text' class='input' placeholder='Channel3 Username without @(optional)' value='$tg' name='tig3' >";
echo"<input  type='text' class='input' placeholder='Channel4 Username without @(optional)' value='$tg' name='tig4' >";
echo"<input  type='text' class='input' placeholder='Channel5 Username without @(optional)' value='$tg' name='tig5' >";
echo"<input  type='text' class='input' placeholder='Channel6 Username without @(optional)' value='$tg' name='tig6' >";
}else{
    echo"<input  type='text' class='input' placeholder='1st Channel Username
' name='tig' value='$channel1' required>";
echo"<input  type='text' class='input' placeholder='2nd Channel Username
' value='$channel2' name='tig2' >";
echo"<input  type='text' class='input' placeholder='3rd Channel Username
' name='tig3' value='$channel3' >";
echo"<input  type='text' class='input' placeholder='4th Channel Username
' name='tig4' value='$channel4' >";
echo"<input  type='text' class='input' placeholder='5th Channel Username
' name='tig5' value='$channel5' >";
echo"<input  type='text' class='input' placeholder='6th Channel Username
' name='tig6' value='$channel6' >";
}
?>

 <button type='submit' class='submit' value='SET'>Set</button></div></form></center></div>
 


				
		
		<br>
			 <div style="padding:10px; width:100%; background: white; border-top:3px solid Red;border-right:3px solid Red;border-bottom:3px solid Red;border-left:3px solid Red; border-radius:1px;" style="height:17%; border-radius:1px; background:White;">
			 
			 <li style=" border-radius:1px;background-color: white; font-family: 'Montserrat',sans-serif; font-size:15px; padding:10px; ">
			 
			 If you have no more extra channels, keep empty the other inputs.
Please Enter all channel username correctly else you will not get claim option on lifafa page..</li>
         </div>
		
		
			<br>
			 <div style="padding:10px; width:100%; background: white; border-top:3px solid Red;border-right:3px solid Red;border-bottom:3px solid Red;border-left:3px solid Red; border-radius:1px;" style="height:17%; border-radius:1px; background:White;"><li style=" border-radius:1px;background-color: white; font-family: 'Montserrat',sans-serif; font-size:15px; padding:10px; ">Make <a href="https://telegram.dog/earmy_verify_bot">@earmy_verify_bot</a> Admin on Your Channel for Advanced Lifafa.
        </li></div>
			
		
</li>
        


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="sscript.js"></script>
</body>
</html>