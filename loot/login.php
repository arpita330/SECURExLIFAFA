<script>if(performance.navigation.type == 2){
   location.reload(true);
}</script>
<script>
window.onload=function(){
  document.getElementById("linkid").click();
};
</script>

	
	
<?php session_start(); ?>
<?php
$user="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];

$length="1"; 
$char="bcefhijklmopqr";
$clr=substr(str_shuffle($char), 0, $length);
$color=$$clr;

$rdc=$_GET['s'];
if(file_exists("$rdc.php")){
    $rd="$rdc";
}else{ $rd="home";
}
?>

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
	  
 .loaderr {
  border: 7px solid #f3f3f3; /* Light grey */
  border-top: 7px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spinn 2s linear infinite;
}

@keyframes spinn {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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
					<span class="text">Lifafa Tools</span>
				</a>
			</li>
			<li>
				<a href="add-fund-manual.php">
			       	<i class="bx bx-cart" style="color: red; font-weight:900;"></i>
					<span class="text">Giveaway Area</span>
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
							<a class="active" href="home.php">Home</a>/User Login
						</li>
					</ul>
				</div>
				
			</div>
    <ul class="box-info"></ul>

       <br><br>
    	  
    	   

<div id='loginbox'>
     <div style='padding:10px; width:100%; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;'><br>
 <center>    
<form id="form" class="form" action="" method="POST">

  <div class="form-control">
  <input type="text" name="user" class="input"  placeholder="Username" required></div>
     
  <div class="form-control">
  <input type="password" name="pwd" class="input"  placeholder="Password" required>
  </div>

<button type="submit" name="submit" class="submit" value="Login" >Login</button>

</form><br></center></div><br><br>

      <center><b><span class="text">Don’t have account...? <a href="register.php" class="text signup-link"><font color="green">Register</font></a></span></center>


 <?php
   error_reporting(0);
   
   
     if(!isset($_POST['submit'])){
      
      echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="loginfirst.js"></script>';
     }
    if($_POST['submit']){
        $user=$_POST['user'];
        $pwd=$_POST['pwd'];
        $data="ussddbdjsjsj8272djearning/$user.json";
        if(file_exists($data)){
$b1=file_get_contents($data);
$c1=json_decode($b1,true);
$pwd1=$c1['pass'];
$status=$c1['status'];
if($status=="yes"){          if($pwd==$pwd1){
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/login.js"></script>';
            setcookie('user',$user,time()+60*60*24*305);
            echo"<meta http-equiv='refresh' content='1;url=$rd.php'>";    
                        
         }else{
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/wrongpass.js"></script>';            
               
           }}else{
            echo'<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/activate.js"></script> <meta http-equiv="refresh" content="1;url=activate.php?id='.$user.'&pass='.$pwd1.'">';}}
    else{
           echo'<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/not.js"></script>
    <meta http-equiv="refresh" content="1;url=register.php">';
            }}
    ?>
       
       
       </main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script> 
<script src="js/sweetalert.js"></script>
<script src="sscript.js"></script>
</body>
</html>