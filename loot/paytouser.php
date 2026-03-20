<?php
error_reporting(0);
session_start();

$user = $_COOKIE['user'];
$bal=file_get_contents("ntpcbdjsjsj8272djearning/$user/fund.txt");

if(!$user){
    header("Location: login.php");
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
		<link rel="stylesheet" href="sstyle.css">

	<title>EARNING ARMY</title>   
  <link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"> 
	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	
	<style>
	
	     	.input1{
        display: block;
        width: 90%;
        height: 180px;
        margin: 5px auto;
        text-align: center;
        color: black;
        font-family: 'Montserrat';
        padding: 0;
        font-size: 15px;
        font-weight: 500;
        height: 50px;
        border: 1px solid #047aed;
        border-radius: 4px;
        background-color: #E1F5FE;
        outline: none;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);
}
 
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
     .submit1{
        height: 40px;
        width: 75%;
        border: 0;
        border-radius: 4px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 0 25px 0 25px;
        background: #047aed;
        font-family: 'Halvetica';
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
						     <a class="active" href="home.php">Home</a>/Withdraw
						</li>
					</ul>
				</div>
				
			</div>
<br>
				<li>
					       
		
		
				<center><br><font color="blue" style="font-weight:600">
        Balance: <font color="green" size="5"> ₹<?php echo $bal; ?> </font><br><br>
        </font></center>
        	      
				      <center>

		    <!DOCTYPE html>
<html>
 <head>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bulk Payout</title>
 </head>
 <body>
  
  <div class="bone">
   <?php
   echo '<script> var d="https://telegram.dog/earning Website"</script>';
  if(isset($_POST['submit'])){
    echo '<script> var d="https://telegram.dog/Earning Lifafa"</script>';
    $amo=$_POST['amo'];
    $co=$_POST['co'];
    $users=urlencode($user);
    
$comment=str_replace(' ',' ',$co);
$urlenc=urlencode($comment);
    $numbers=$_POST['paytm'];
    $myArray=explode(',',$numbers);
    echo '<script> var dom="https://telegram.dog/earning army="</script>';
    foreach($myArray as $num) {
  echo "<p> ".file_get_contents('https://earningarmy.xyz/bpay.php?amount='.$amo.'&mob='.$num.'&comment='.$urlenc.'&session='.$users.'')."</p>";
 }
   }else{
    echo '<script> var dom="tg://resolve/?domain="</script>';
   ?>
   <form class="form" method="post" action="">
      <center><div style="padding:10px; width:95%; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue;border-left:3px solid blue; border-radius:10px;">
			
			<br> <textarea type="number" style="height:80px;padding-top:5px;" class="input1" min="1" placeholder="Enter Paytm Number" name="paytm" required=""></textarea>
<input type="number" step="any" class="input" placeholder="Amount per User" min="1" name="amo" required="">
<input type="text" class="input" placeholder="Payment Comment" name="co">
<input type="hidden" class="input" value="bulk" name="type">
    <button type="submit" class="submit" name="submit" value="PAY">SUBMIT</button></form><br>
   </form><br>
   </div>
</center>
</div></center>


   <b><br><br><font size="3" color="red">For Bulk Payment</font><br> <font color="blue" size="2">Enter paytm number seperated by comma <font color="red">,</font><br> <font color="black">Example:</font> 1234567890<font color="red">,</font>2345678901<font color="red">,</font>3456789012<font color="red">,</font> </font></b>



   <?php } ?>
   
   
  


		
			</ul>



		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
<script>
function myFunction() {
  var copyText = document.getElementById("num");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Api Link Copied");
}</script>
		<script src="sscript.js"></script>
</body>
</html>













