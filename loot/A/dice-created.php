<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['user'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
    $user="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
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
        width: 100%;
        margin: 10px auto;
        text-align: center;
        color: black;
        font-family: 'Montserrat';
        padding: 0;
        font-size: 15px;
        font-weight: 300;
        height: 40px;
        border: 1px solid #047aed;
        border-radius: 4px;
        background-color: #E1F5FE;
        outline: none;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);
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
					<span class="text">Setting</span>
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
				<a href="code-history.php" class="notification">
				<i class="bx bx-history" style="color: brown;"></i>
				</a>
				<a href="aorders.php" class="notification">
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
							<a class="active" href="home.php">Home</a>/Lifafa Created
						</li>
					</ul>
				</div>
				
			</div>

			
<?php
$fund=file_get_contents("ntpcbdjsjsj8272djearning/$session/fund.txt");
$lid=$_POST['lid'];
$title=$_POST['title'];
$nuser=$_POST['nuser'];
$puser=$_POST['puser'];
$rlink=$_POST['rlink'];
$acode=$_POST['acode'];
$ssn=$_POST['ssn'];
$comm=$_POST['comm'];
$advanced=$_POST['advanced'];
$domain=$_SERVER['SERVER_NAME'];
$tamo=$nuser*$puser;
$file2tg="A/gtw.txt";
$zaker2tg=file_get_contents($file2tg);
$jsotg=json_decode($zaker2tg,true);
$addad=$jsotg['add'];
$withdrawad=$jsotg['withdraw'];
$lifafaad=$jsotg['lifafa'];

if(!$rlink){
    $rlink="https://telegram.me/$tele";
}
if($title=="" xor $nuser=="" xor $puser==""){ echo"<br><br><br><b><font Color='red'>Giveaway Title, Number of Users & Per User amount can't be empty.</font></b>";}else{
if($tamo<=$fund){
$in='{"lid":"'.$lid.'","title":"'.$title.'","nuser":"'.$nuser.'","puser":"'.$puser.'","rlink":"'.$rlink.'","acode":"'.$acode.'","ss":"'.$ssn.'","comm":"'.$comm.'","advanced":"'.$advanced.'"}';
if(file_exists("dicelifsbdjsjsj8272djearning/$lid/clone$lid.json")){
   
echo"<meta http-equiv='refresh' content='0;url=lifafa-history.php'>";
}else{
date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-y h:i:s A');
$pth="dicentpcbdjsjsj8272djearning/$ssn/mylfs.txt";
$nnnn='{"lid":"'.$lid.'","nuser":"'.$nuser.'","puser":"'.$puser.'","time":"'.$time.'"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);
}
file_put_contents("D/$lid",$nnnn);

mkdir("dicelifsbdjsjsj8272djearning/$lid");
mkdir("dicelifsbdjsjsj8272djearning/$lid/ip");
mkdir("dicelifsbdjsjsj8272djearning/$lid/num");
fopen("A/gtw.txt",'a');
$lifafaada=$lifafaad+$tamo;
$hiddencoder10tg='{"add":"'.$addad.'","withdraw":"'.$withdrawad.'","lifafa":"'.$lifafaada.'"}';
file_put_contents("A/gtw.txt",$hiddencoder10tg);


 $livee=file_get_contents("dicentpcbdjsjsj8272djearning/$ssn/countc.txt");
    file_put_contents("dicentpcbdjsjsj8272djearning/$ssn/countc.txt",$livee+1);


file_put_contents("dicelifsbdjsjsj8272djearning/$lid/$lid.json",$in);
$fund=file_get_contents("ntpcbdjsjsj8272djearning/$session/fund.txt");
$nfund=$fund-$tamo;
file_put_contents("ntpcbdjsjsj8272djearning/$session/fund.txt",$nfund);
$nnfund=file_get_contents("ntpcbdjsjsj8272djearning/$session/fund.txt");
file_put_contents("dicelifsbdjsjsj8272djearning/$lid/clone$lid.json",$in);
$contss="0";
file_put_contents("dicelifsbdjsjsj8272djearning/$lid/count.txt",$contss);
$tgid=file_get_contents("ntpcbdjsjsj8272djearning/$session/bot.txt");
$emo = "\u{2B50}";
$e2 = "\u{26A1}";
$e3 = "\u{20B9}";


if(!$acode){
 $msgt='🧿 *NEW PAYTM DICE LIFAFA CREATED* 🧿

🔰 *User :-* `'.$session.'`

❣️ *Giveaway Title :* `'.$title.'`

💌 *Lifafa Link :* `https://earningarmy.xyz/docelifafa.php?id='.$lid.'`

♻️ *Total Users :* '.$nuser.'

〽️ *Per User :* ₹'.$puser.'

💰 *Available Fund :* ₹'.$nfund.'
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
$msgt5='
🧿 *NEW PAYTM DICE LIFAFA CREATED* 🧿

❣️ *Giveaway Title :* `'.$title.'`

💌 *Lifafa Link :* `https://earningarmy.xyz/lifafa.php?id='.$lid.'`

♻️ *Total Users :* '.$nuser.'

〽️ *Per User :* ₹'.$puser.'

💰 *Available Fund :* ₹'.$nfund.'' ;
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
}else{
$msgt='
🧿 *NEW PAYTM DICE LIFAFA CREATED* 🧿

🔰 *User :-* `'.$session.'`

❣️ *Giveaway Title :* `'.$title.'`

💌 *Lifafa Link :* `https://earningarmy.xyz/lifafa.php?id='.$lid.'`

📤 *Access Code :* `'.$acode.'`

♻️ *Total Users :* '.$nuser.'

〽️ *Per User :* ₹'.$puser.'

💰 *Available Fund :* ₹'.$nfund.'' ;
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
$msgtu='🧿 *NEW PAYTM DICE LIFAFA CREATED* 🧿

❣️ *Giveaway Title :* `'.$title.'`

💌 *Lifafa Link :* `https://earningarmy.xyz/lifafa.php?id='.$lid.'`

📤 *Access Code :* `'.$acode.'`

♻️ *Total Users :* '.$nuser.'

〽️ *Per User :* ₹'.$puser.'

💰 *Available Fund :* ₹'.$nfund.'' ;
 $tesu=urlencode($msgtu);
 
 
 
 $url99='https://api.telegram.org/bot5744252018:AAGEHVkHtuIefEs6h2v0PkFWWMzmD3Zg7zA/sendMessage?chat_id='.$tgid.'&text='.$tesu.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; M2010J19CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.58 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);
   }
if($advanced){
    echo'
    	<center><br><br><li style=" Color: red; background-color: white; font-family: "Montserrat",sans-serif; font-size:16px; padding:10px; ">Make This Bot <a href="https://telegram.dog/earmy_verify_bot">@earmy_verify_bot</a><br> Admin On Your Channel. No Need Any Permission.
        </font> </div></center>
		
		
</li>
    ';
}

echo"   
<center>

<ul class='box-info'>
			  Dice Lifafa Link
				<div style='border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px; padding:10px; background: white; margin-top:-18px;'><li style='height:22px; border-radius:1px; background:transparent;'><input type='text' readonly id='num'class='input' value='https://earningarmy.xyz/lifafa.php?id=$lid'></li><li style='height:22px; border-radius:1px; background:transparent;'>
<button class='submit' id='submit' onclick='myFunction()'>Copy</button></li></div>";

echo " <hr>Lifafa id<div style='border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px; padding:10px; background: white; margin-top:-18px;'><li style='height:22px; border-radius:1px; background:transparent;'><input type='text' readonly id='num2'class='input' value='$lid'></li><li style='height:22px; border-radius:1px; background:transparent;'>
<button class='submit' id='submit' onclick='myFunction2()'>Copy</button></li></div>";
if($acode){
    echo " <hr>Access Code<div style='border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px; padding:10px; background: white; margin-top:-18px;'><li style='height:22px; border-radius:1px; background:transparent;'><input type='text' readonly id='num3'class='input' value='$acode'></li><li style='height:22px; border-radius:1px; background:transparent;'>
<button class='submit' id='submit' onclick='myFunction3()'>Copy</button></li></div>";
}
echo"
<br> <b>Available Fund: <font Color='Green' size='3'>&#8377;$nnfund</font></b>
";}
}else{
    echo"<br><br><br><b><font Color='red'>Insufficient Balance. . . !! </font></b>";
}}

?>

<script>
function myFunction() {
  var copyText = document.getElementById("num");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Lifafa Link Copied");
}
function myFunction1() {
  var copyText = document.getElementById("num1");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Refer Link Copied");
}
function myFunction2() {
  var copyText = document.getElementById("num2");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Lifafa id for Editing Lifafa details... Copied");
}
function myFunction3() {
  var copyText = document.getElementById("num3");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Access Code Copied");
}
function myFunction4() {
  var copyText = document.getElementById("num4");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Check Refer Link Copied");
}
</script>
				</li><br>
				
			</ul>
		


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="sscript.js"></script>
</body>
</html>