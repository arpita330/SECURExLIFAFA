<?php
$oid=$_POST['order_id'];
$gpin="99974810154981001011015";
if($oid==""){
     echo'<meta http-equiv="refresh" content="10 url=https://earningarmy.xyz">';}else{
$a1="adofabdjsjsj8272djearning/$oid.json";
$b1=file_get_contents($a1);
$c1=json_decode($b1,true);
$user=$c1['user'];
$amount=$c1['amount'];
$ammp=$c1['paid'];
$time=$c1['time'];
$tg=file_get_contents("ntpcbdjsjsj8272djearning/$user/bot.txt");

$stlink="https://full2sms.in/gateway/paymentStatus?order_id=$oid&gpin=$gpin";
         $sts=file_get_contents($stlink);
        $c2=json_decode($sts,true);
$stts=$c2['status'];
$ammo=$c2['amount'];
}
if($stts=="success"){
    if($ammo=="$ammp"){
    if(file_exists("fndccbdjsjsj8272djearning/$oid.txt")){
        $stts="already paid";
        echo'<script>alert("Already added the Fund... Click OK to go to wallet")</script>';
echo"<meta http-equiv='refresh' content='0;url=wallet.php'>";
    }else{
        file_put_contents("fndccbdjsjsj8272djearning/$oid.txt",success);
$pth="ntpcbdjsjsj8272djearning/$user/transactions.txt";
$tid=file_get_contents("tid.txt");
$acc='1';
$co=$tid+$acc;
file_put_contents("tid.txt",$co);
$nnnn='{"tid":"'.$tid.'","oid":"'.$oid.'","time":"'.$time.'","amount":"'.$amount.'","type":"Add Fund"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);

}
$nnc='{"oid":"'.$oid.'","time":"'.$time.'","amount":"'.$amo.'","type":"Add Fund"}';
file_put_contents("trsncssbdjsjsj8272djearning/$tid.txt",$nnc);

$nno='{"user":"'.$user.'",tid":"'.$tid.'"}';
file_put_contents("trsncssbdjsjsj8272djearning/orders/$oid.txt",$nno);

$ffl="ntpcbdjsjsj8272djearning/$user/fund.txt";
$fun=file_get_contents("$ffl");
$afund=$fun+$amount;
file_put_contents("$ffl",$afund);

$tfl="ntpcbdjsjsj8272djearning/$user/tfund.txt";
    $tfun=file_get_contents("$tfl");
$tafund=$tfun+$amount;
file_put_contents("$tfl",$tafund);


 $tex2='⚠️ ADD FUND ALERT ⚠️

💸 Fund Added : ₹'.$amount.'

📠 Order id : `'.$oid.'`

📟 Transaction id : `'.$tid.'`

💰 Wallet Balance : ₹'.$afund.'
 ';
 $text2=urlencode("$tex2");
 
 $url900='https://api.telegram.org/bot5744252018:AAGEHVkHtuIefEs6h2v0PkFWWMzmD3Zg7zA/sendMessage?chat_id='.$tg.'&text='.$text2.'&parse_mode=markdown';

$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url900);
curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


    $output=curl_exec($ch);
    
$tex3='⚠️ ADD FUND ALERT ⚠️

🔰 User:- '.$user.'

💸 Fund Added : ₹'.$amount.'

📠 Order id : `'.$oid.'`

📟 Transaction id : `'.$tid.'`

💰 Wallet Balance : ₹'.$afund.'
 ';
 $text3=urlencode("$tex3");
 
 $url9003='https://api.telegram.org/bot5744252018:AAGEHVkHtuIefEs6h2v0PkFWWMzmD3Zg7zA/sendMessage?chat_id=2059751701&text='.$text3.'&parse_mode=markdown';

file_get_contents($url9003);
    
}}else{$stts="invalid";}}


;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>EARNING ARMY</title>
	<meta name="google" value="notranslate">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="EARNING ARMY , Advanced Lifafa Giveaway maker site, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
      <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
		<link rel="stylesheet" href="sstyle.css">
<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMontserrat:300,400,500%7CRoboto');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
.select100{
    padding:5px 3px;
    width:99%;
    border-radius:5px;
}    
                         .kc_fab_main_btn {
  width: 320px;
  color: #FFF;
  font-size: 45px;
  
  transition: .3s;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  bottom: 1%;
  right: 1px;
  position: fixed;
}

.kc_fab_main_btn:focus {
  transform: scale(5);
  transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
}
.nnn {
    margin-left: 40%;
    width: 100%;
    font-family: 'Montserrat';
        font-size: 14px;
        font-weight: 500;
    color: blue;
}
.nn1 {
    width: 100%;
    font-family: 'Montserrat';
        font-size: 14px;
        font-weight: 500;
    color: blue;
}
    .submit{
        height: 50px;
        width: 70%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        margin: 15px 0;
        padding: 0 25px 0 25px;
        background: #047aed;
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
			<li class="active">
				<a href="add-fund-instant.php">
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
							<a class="active" href="home.php">Home</a>/Add Fund/Status
						</li>
					</ul>
				</div>
				
			</div> 
			
			
			<ul class="box-info">
                                     
                         <br>     <br>     <br>
			      <div style=" padding:10px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius: 10px;">
			
    <br><br><center>   <font style="font-size: 1rem;Background: white; border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 10px; padding: 10px;font-weight:900;width:95%;">&#9733; User:- <?php echo $user;?> &#9733;</font></center>
    <br><b><br>
    <font style="font-weight:700">Payment: <font color="Green"><?php echo $stts;?></font><br><?php
    $e3 = "\u{20B9}";
    if($stts=="success"){echo''.$e3.''.$amount.' Successfully Added To Your Wallet<br>Updated Balance: '.$e3.''.$afund.'';}
     if($stts=="failed"){echo'Fund not Added  ';}
      if($stts=="already paid"){echo'Fund already Added';}
    ?><br></font>
    
<br>

</ul>
<br></div></center>
</div>
</div><br></div>

  </main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="sscript.js"></script>
</body>
</html>


