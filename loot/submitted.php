
	       <?php
    

$ref=$_POST['ref'];
$amo=$_POST['amo'];
$ramo=$_POST['ramo'];
$session=$_POST['session'];
$nu=substr(str_shuffle("1234567890"), 0, 4);
$nun=substr(str_shuffle("1234567890"), 0, 4);
$le=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1);
$len=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1);
$oid="$nu$le$nun$len";

    
$nnnn='{"oid":"'.$oid.'","time":"'.$time.'","user":"'.$session.'","amount":"'.$amo.'","paid":"'.$ramo.'"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);


}
$nnn='{"time":"'.$time.'","user":"'.$session.'","amount":"'.$amo.'","paid":"'.$ramo.'"}';
file_put_contents("adofabdjsjsj8272djearning/$oid.json",$nnn);
    

$length="1"; 
$char="bcefhijklmopqr";
$clr=substr(str_shuffle($char), 0, $length);
$color=$$clr;
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
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMontserrat:300,400,500%7CRoboto');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
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
.select100{
    padding:5px 3px;
    width:99%;
    border-radius:5px;
}    
        .input1{
        display: block;
        width: 90%;
        height: 200px;
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
							<a class="active" href="home.php">Home</a>/Order Submitted
						</li>
					</ul>
				</div>
				
			</div>
	     <ul class="box-info">
			
				
			
			<li style="height:100%; border-radius:5px; background:transparent;">
				

      
    
          <div class='control'>

</span>
<center>

    <br>
   <?php
   if(!file_exists("refbdjsjsj8272djearning/$ref.json")){
       $intt='{"user":"'.$session.'","amount":"'.$amo.'","paid":"'.$ramo.'","oid":"'.$oid.'"}';
       file_put_contents("refbdjsjsj8272djearning/$ref.json",$intt);
echo" <b><font color='green' style='font-weight:600;'>Your Add Money Order has been Submitted Successfully... Please wait your fund will get added within 10 minutes to 2 hours after review.</font><br><br>
<b><font color='red' style='font-weight:450;'> Please don't refresh this page... Otherwise your fund will not be added</font></b><br><br><a href='https://telegram.me/earningarmy_xyz'><font class='nnn'>Contact us</font></a>
";
       

 $tex2='🙋🏻‍♂️ *NEW ADD FUND ORDER* 🙋🏻‍♂️
 
🔰 *User :-* `'.$session.'`

💶 *Amount to add :* ₹`'.$amo.'`

✅ *Amount Paid :* ₹'.$ramo.'

📟 *Order id :* `'.$ref.'`

📠 *Reference No. :* `'.$oid.'`

 ';
 $text2=urlencode("$tex2");
 
 $url900='https://api.telegram.org/bot5883262654:AAFCat_IHFFfzjNncFws1caLkdgGkxKJeBs/sendMessage?chat_id=2059751701&text='.$text2.'&parse_mode=markdown';

$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url900);
curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


    $output=curl_exec($ch);
   }else{
    $json_object=file_get_contents("refbdjsjsj8272djearning/$ref.json");
$dec=json_decode($json_object,true);
$ord=$dec['oid'];
if(file_exists("fndccbdjsjsj8272djearning/$ord.txt")){
   echo" <font color='blue' style='font-weight:600;'>Order Already Completed... Fund has added to your Account.</font>"; 
}else{
    echo" <font color='red' style='font-weight:600;'>Order Already Submitted... Please wait 
    ... within 10 minutes to 2 hours your fund will get added to your account if you really paid the amount.</b></font>";
}
    
}

  ?>
<br><br><a href='home.php'><font class='nnn'>Back to Home</font><br></a></div></center>
</div>
<br><br><br><br><br><br><br><br><br></div><br></div>
<script>
function myFunction() {
  var copyText = document.getElementById("num");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Paytm Number Copied");
}
function myFunction1() {
  var copyText = document.getElementById("num1");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Amount to Pay Copied");
}
</script>

</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="sscript.js"></script>
</body>
</html>