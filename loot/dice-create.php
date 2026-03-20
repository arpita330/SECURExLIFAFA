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
        <link rel="stylesheet" href="css/create.css">
	<title>EARNING ARMY</title>
	<link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"/>
	
	<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['user'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php?s=create'>";

}else{
    $user="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$dcb=file_get_contents("ntpcbdjsjsj8272djearning/$session/tg.txt");
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
    }
  
    
  $tkn=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"), 0, 5);
$fund=file_get_contents("ntpcbdjsjsj8272djearning/$session/fund.txt");
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
    input:invalid {
  border: solid red 1px;
  background-color: #FFCCCB;
}
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
        background: brown;
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
    	    .alert {
  padding: 20px;
  background-color: #f44336;
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

.switches {
  margin: 20px;
}

.switches h1 {
  font-size: 1.5em;
  margin-bottom: 20px;
}

/* ----- end demo code ----- */

.switch {
  display: inline-block;
  height: 34px;
  min-width: 60px;
  position: relative;
  vertical-align: middle;
}

.switch.disabled {
  cursor: default;
  opacity: 0.5;
}

.switch .slider {
  background-color: red;
  border: 1px solid #047aed;
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  height: 34px;
  left: 0;
  padding: 0 20px 5px 40px;
  position: relative;
  right: 0;
  top: 0;
  transition: 0.4s;
}

.switch .slider .on,
.switch .slider .off {
  line-height: 34px;
}

.switch .slider .off {
  display: block;
}

.switch .slider .on {
  display: none;
}

.switch .slider:before {
  background-color: yellow;
  bottom: 4px;
  content: " ";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: all 0.4s;
  width: 26px;
}

.switch .slider.round {
  border-radius: 34px;
}

.switch .slider.round:before {
  border-radius: 50%;
}

.switch input {
  display: none;
}

.switch input:focus + .slider {
  box-shadow: 0 0 1px green;
}

.switch input:checked + .slider {
  background-color: green;
  padding: 0 40px 0 20px;
}

.switch input:checked + .slider:before {
  left: auto;
  right: 4px;
  transition: all 0.4s;
}

.switch input:checked + .slider .on {
  display: block;
}

.switch input:checked + .slider .off {
  display: none;
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
						<li>
							<a class="active" href="home.php">Home</a>/Create Dice Lifafa
						</li>
					</ul>
				</div>
				
			</div>
<?php
if($session){
    $dfile="ntpcbdjsjsj8272djearning/$session/tg.txt";
    if (file_exists($dfile)){}else{
echo '<br><br><div class="alert" >
  <span class="closebtn">&times;</span>  
  <strong>Before Creating Lifafa You have to add your Telegram Channel Username</strong> 
</div>';
echo"<meta http-equiv='refresh' content='2;url=adata.php'>";}
    }
?>
			<ul class="box-info">
<center><b><font color="Blue" style="font-weight:600">Balance: <font Color="Green" size="5"><?php $e3 = "\u{20B9}"; echo "$e3$fund";?></font></font></b></center>
			    <form method="POST" action="dice-created.php">
			 <div style="padding:10px; width:100%; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;"> 	<br>
				<input type="hidden"class='input' name="ssn" value="<?php echo $session;?>">
                <input type="hidden"class='input3' name="lid" value="<?php echo$tkn;?>" Placeholder="Lifafa id">

<li style="height:22px; border-radius:5px; background:transparent;"><input type="text"class='input' name="title" Placeholder="Giveaway Title" ></li>
<li style="height:22px; border-radius:5px; background:transparent;"> <input type="number"class='input' name="nuser" min="1" Placeholder="Total Users" >
</li>
<li style="height:22px; border-radius:5px; background:transparent;"> <input type="number" class="input" name="puser" min="1" Placeholder="Per User Amount" >
</li>
<li style="height:22px; border-radius:5px; background:transparent;"> <input type="text" class="input" name="comm" Placeholder="Payment Comment (Optional)" >
</li>
<li style="height:22px; border-radius:5px; background:transparent;"><input type="text" class="input" placeholder="Redirection Link (Optional)" name="rlink"></li>



<li style="height:22px; border-radius:5px; background:transparent;"><input type="text" class="input" placeholder="Access Code (Optional)" name="acode"></li>
<br><br>




	<div id='lele1'></div>	
<li style="height:22px; border-radius:5px; background:transparent; padding:0px; margin:10px;"><div class="switches">
  <label class="switch">
      <input name="advanced" type="checkbox" data-on="yes" data-off="no" value="no" onclick="checkClick2()">
    <span class="slider round">
      <b><span class="on">Advanced</span>
      <b><span class="off">Advance</span>
    </span>
  </label>
  <div id='lele5'></div>
<li style="height:22px; border-radius:5px; background:transparent; padding:0px; margin:10px;" id="spcc2"> 
</li><div id='lele6'></div>


</li>
		
		
				<li style="height:22px; border-radius:5px; background:transparent;"> <button type="submit" class="submit" name="submit" class="btn btn-primary me-1 mb-1">CREATE</button></li><br>
				</div></form>
			</ul>
		<br><a href='dice-history.php'><font class='submit1' style='font-weight:600' class='nnn'>Dice History</font></a>


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script> 
<script src="js/sweetalert.js"></script>
<script type="text/javascript" src="js/createlifafa.js"></script>
<script>
    var clickCount2 = 0;
function checkClick2() {
  if ( clickCount2 % 2 == 0 ) {
       document.getElementById("spcc2").innerHTML = "<br><br><div style='padding-top:20px; padding-bottom:20px;'><font color='green'><b>Now users will have to must join your added channels, to claim Lifafa<br><br><font color='black' size='2'>Want to Change Channel...? <a href='adata.php'><font color='blue'>CLICK</font></a></font><input type='hidden' id='advanced' value='no'></div>";
       document.getElementById("lele5").innerHTML = "<br><br><br><br><br><br>";
       document.getElementById("lele6").innerHTML = "<br><br><br>";
       
       document.getElementById("lele1").innerHTML = "<br>";
  } else {
      document.getElementById("spcc2").innerHTML = "";
      document.getElementById("lele5").innerHTML = "";
       document.getElementById("lele6").innerHTML = "";
      
       document.getElementById("lele1").innerHTML = "";
  }

  clickCount2++
}
</script>

	<script src="sscript.js"></script>
</body>
</html>