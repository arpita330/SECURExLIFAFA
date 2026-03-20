
    <script>

if(performance.navigation.type == 2){
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

}else{
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
		
			<li> <a href="music.php"> <i class="bx bxs-music" style="color: Blue;"></i> <span class="text">Songs</span> </a> 
			</li>
			
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
							<a class="active" href="home.php">Home</a>/Claim Code Created
						</li>
					</ul>
				</div>
				
			</div>
			
			    
			<center>
	<?php
	   if($_POST){
   	$amo=$_POST['amountt'];
   	$code=$_POST['setc'];
   	$ttl=$_POST['ttl'];
   	$msg=$_POST['msg'];
$totamopay=$amo*$ttl;
	$file2="bhanuusersbalance/$user.json";
$zaker2=file_get_contents($file2);
$jso=json_decode($zaker2,true);
$baltg=$jso['bal'];
$bal=file_get_contents("$ffile/fund.txt");

$file4="tamo/$user.json";
$zaker4=file_get_contents($file4);
$jso4=json_decode($zaker4,true);
$tamo=$jso4['tamo'];

$tgid=file_get_contents("ntpcbdjsjsj8272djearning/$user/bot.txt");



	if($totamopay<'0'){
echo'<script src="sscript.js"></script>';
echo"
<br><br><b><font color='red' size='3'>PLEASE ENTER A POSOTIVE VALUE <br></font></div>";
  return;
	}
	
	if($bal<$totamopay){
	echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/insufficient.js"></script>';
      echo'<script src="sscript.js"></script>';
echo"
<br><br><b><font color='red' size='3'>Insufficient Balance...!<br>Please Recharge...!</font></div>

<meta http-equiv='refresh' content='2 url=code-create.php'>";
  return;
  
	}else{
if(file_exists("couponsbolte/$code.json")){
   
echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/alreadyexist.js"></script>';
  echo'<script src="sscript.js"></script>';
echo"
<br><br><b><font color='red' size='3'>This Code Already Exists...!<br>Creat New Code </font></div>

<meta http-equiv='refresh' content='2 url=code-create.php'>";
  return;
  
}else{
 if($bal>=$totamopay){
  	$str=$code;{
    $coupon=$str;
    }
    
    $fund=file_get_contents("ntpcbdjsjsj8272djearning/$user/fund.txt");
$nfund=$fund-$totamopay;
file_put_contents("ntpcbdjsjsj8272djearning/$user/fund.txt",$nfund);


$updatedbal=$bal-$totamopay;
    
    fopen("bhanuusersbalance/$user.json",'a');
$hiddencoder5='{"bal":"'.$updatedbal.'"}';

file_put_contents("bhanuusersbalance/$user.json",$hiddencoder5);

$tamocc=$tamo+$totamopay;
fopen("tamo/$user.json",'a');
$hiddencoder3='{"tamo":"'.$tamocc.'"}';

file_put_contents("tamo/$user.json",$hiddencoder3);
fopen("coupon/claim/$coupon.json",'a');
$hiddencoder10='{"totalclaim":"0"}';

file_put_contents("coupon/claim/$coupon.json",$hiddencoder10);

fopen("couponsbolte/$coupon.json",'a');
$hiddencoder6='{"amo":"'.$amo.'","code":"'.$code.'","limit":"'.$ttl.'","msg":"'.$msg.'"}';

file_put_contents("couponsbolte/$coupon.json",$hiddencoder6);
$totallifafas=$totallifafa+1;
date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-y h:i:s A');
$pth="ntpcbdjsjsj8272djearning/$user/mycode.txt";
$nnnn='{"lid":"'.$code.'","nuser":"'.$ttl.'","puser":"'.$amo.'","time":"'.$time.'"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);
}

$msgt='🧿 *NEW CLAIM CODE CREATED* 🧿

🔰 *User :-* `'.$user.'`

💠 *Code :* `'.$code.'`

♻️ *Total Users :* '.$ttl.'

〽️ *Per User :* ₹'.$amo.'

💰 *Available Fund :* ₹'.$updatedbal.'

' ;
 $tes=urlencode($msgt);
 
 
 
 $url99='https://api.telegram.org/bot5744252018:AAGEHVkHtuIefEs6h2v0PkFWWMzmD3Zg7zA/sendMessage?chat_id=2059751701&text='.$tes.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; M2010J19CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.58 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     

$msgt5='🧿 *NEW CLAIM CODE CREATED* 🧿

💠 *Code :* `'.$code.'`

♻️ *Total Users :* '.$ttl.'

〽️ *Per User :* ₹'.$amo.'

💰 *Available Fund :* ₹'.$updatedbal.'
' ;
 $tes5=urlencode($msgt5);
 
 
 
 $url99='https://api.telegram.org/bot5744252018:AAGEHVkHtuIefEs6h2v0PkFWWMzmD3Zg7zA/sendMessage?chat_id='.$tgid.'&text='.$tes5.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; M2010J19CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.58 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     



echo'
<br><br><br><div style="padding:10px; width:95%; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px; position:absolute; top:100px; left:50%; top 50%; transform: translate(-50%,19%); box-shadow: 10px 10px 80px grey ;">
	     			       
<br><center><b><font size="3"color="red"> Congratulations...🥳</font><br><b><font size="3"color="green">Claim Code Created Successful...✅</font><br><br><b><font size="3"color="blue">Your Code is</font><br> 
<input type="text" class="input"readonly id="copy"name="copy"  value="'.$coupon.'" required>
<center>
<input class="submit" type="submit"onclick="myFunction()" value="Copy" name="submit1"> </center><br><br>
<b><font color="Blue">Available Fund : </b><b><font color="Green" size="3"> &#8377;'.$updatedbal.'</font></b></font><br><br></div></center>' ;

}
}}
  	
  }
  	

  ?>
   <script>

function myFunction() {
  var copyText = document.getElementById("copy");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Claim Code Copied Sucsesfully... Click Ok");
}
</script>
 
	<script>
var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
    
        
 document.getElementById("color").onclick = function () {
        location.href = "bcrtcode.php";
    };
  </script>

	<script src="sscript.js"></script>
</body>
</html>