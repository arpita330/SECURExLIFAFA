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
<meta content="EARNING ARMY , Advanced Lifafa Giveaway maker site, Play Games to earn Money, Paytm Normal, Dice, Toss Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">   
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

$file2tg="A/gtw.txt";
$zaker2tg=file_get_contents($file2tg);
$jsotg=json_decode($zaker2tg,true);
$add=$jsotg['add'];
$withdraw=$jsotg['withdraw'];
$lifafa=$jsotg['lifafa'];



    
     $turn=$_GET['turn'];
    if($turn=="off"){
    fopen("A/gtw.txt",'a');
$hiddencoder10='{"add":"0","withdraw":"0","lifafa":"0"}';

        file_put_contents("A/gtw.txt",$hiddencoder10);
    }
     if($turn=="on"){
        
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
    
@keyframes show_box {
  from{
    opacity: 0;
    transform: translateY(-30%);
  }
  to{
    opacity: 1;
    transform: translateY(0%);
  }
}

.fontrs1 {
          position: absolute;
          top: -20px;
          left: -20px;
          color: white;
          height:90px;
          width:120px;
          padding-bottom:20px;
           padding-right:30px;
            padding-top:45px;
             padding-left:40px;
             border-radius:5px;

          animation: coloranim1 10s infinite;
        }
        
        
        .fontrs2 {
          position: absolute;
          top: -20px;
          right: -20px;
          color: white;
          height:90px;
          width:120px;
           padding-bottom:20px;
           padding-right:40px;
            padding-top:45px;
             padding-left:30px;
             border-radius:5px;
             
          animation: coloranim2 10s infinite;
        }
        
        .fontrs3 {
          position: absolute;
          bottom: -20px;
          left: -20px;
          color: white;
          height:90px;
          width:120px;
          padding-bottom:50px;
           padding-right:30px;
            padding-top:25px;
             padding-left:50px;
             border-radius:5px;
          
          animation: coloranim3 10s infinite;
        }
        
        .fontrs4 {
          position: absolute;
          bottom: -20px;
          right: -20px;
          color: white;
          height:90px;
          width:120px;
          padding-bottom:50px;
           padding-right:50px;
          padding-top:25px;
          padding-left:30px;
          border-radius:5px;
          background: #047aed;
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
    
      .submitt{
        height: 22px;
        width: 160px;
        border: 0;
        border-radius: 40px;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: center;
    align-items: center;
        background: blue;
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
    .submittt{
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
    .dashcard{
         border: none;

    border-radius: 7px;
    box-shadow: rgba(0,0,0,0.2) 0px 2px 8px 0px;
    background: var(--white1);
    width: 80%;
    min-width: 80%;
    padding: 20px;
    height: 200px;
    margin-bottom: 20px;
    margin-left: 39px;
    text-shadow: rgba(0,0,0,0.2) 0px 2px 8px 0px;

 }
 
   .dashcardd{
         border: none;

    border-radius: 7px;
    box-shadow: rgba(0,0,0,0.2) 0px 2px 8px 0px;
    background: var(--white1);
    width: 80%;
    min-width: 80%;
    padding: 20px;
    height: 400px;
    margin-bottom: 20px;
    margin-left: 39px;
    text-shadow: rgba(0,0,0,0.2) 0px 2px 8px 0px;

 }
 .dashcard{
         border: none;

    border-radius: 7px;
    box-shadow: rgba(0,0,0,0.2) 0px 2px 8px 0px;
    background: var(--white1);
    width: 80%;
    min-width: 80%;
    padding: 20px;
    height: 200px;
    margin-bottom: 20px;
    margin-left: 39px;
    text-shadow: rgba(0,0,0,0.2) 0px 2px 8px 0px;

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

.select100{
    padding:5px 3px;
    width:99%;
    border-radius:5px;
}    
	</style>
	 <style>
.krs-div{
text-align: center;
color: #FB6564;
border: 1px solid #FB6564;
          }

      .krs-btn{
color: #FB6564;
border: 1px solid #FB6564;
          }
          
       .krs-btn:hover{
color: #fff;
background: #FB6564;
border: 1px solid #FB6564;
}

input[type="radio"] {
	display: none;
	}
	
#flexRadioDefault1:checked:checked ~ .form-check-label1, #flexRadioDefault2:checked:checked ~ .form-check-label2, #flexRadioDefault3:checked:checked ~ .form-check-label3, #flexRadioDefault4:checked:checked ~ .form-check-label4, #flexRadioDefault5:checked:checked ~ .form-check-label5, #flexRadioDefault6:checked:checked ~ .form-check-label6 {
  border-color: #fb6564;
  background: #008000;
  color: #fff;
}

.inline-flex {
	display: inline-flex;
	}
	
.success {
	background-image: linear-gradient(33deg, red , green);
color: white;
	}
	
.error {
	background-image: linear-gradient(33deg, red , green);
  color: white;
  transition: 1s;
	}
	
.info {
background-color: #2196F3;
color: white;
transition: 1s;
}

.warning {
background-color: #ff9800;
color: white;
}

.alert {
  padding: 20px 0px;
  opacity: 1;
  transition: opacity 0.6s;
  transition: transform 0.6s;
  width: 80%;
  margin: 20px 0px 30px 0px;
  border-radius: 5px ;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  position: relative;
  -moz-animation-delay: .5s;
  -webkit-animation-delay: .5s;
  -o-animation-delay: .5s;
  animation-delay: .5s;
  transition: 1s;
  animation: show_box .5s ease forwards;
}

      .krs2-btn{
color: #FB6564;
border: 1px solid #FB6564;
          }
          
       .krs2-btn:hover{
color: #fff;
background: #FB6564;
border: 1px solid #FB6564;
}

input[type="radio"] {
	display: none;
	}
 #flexRadioDefault2:checked:checked ~ .form-check-label2, #flexRadioDefault4:checked:checked ~ .form-check-label4, #flexRadioDefault5:checked:checked ~ .form-check-label5, #flexRadioDefault6:checked:checked ~ .form-check-label6 {
  border-color: #fb6564;
  background: #ff0000;
  color: #fff;
}
input[type="radio"] {
	display: none;
	}
 #flexRadioDefault3:checked:checked ~ .form-check-label3, #flexRadioDefault3:checked:checked ~ .form-check-label3, #flexRadioDefault40:checked:checked ~ .form-check-label40, #flexRadioDefault50:checked:checked ~ .form-check-label5, #flexRadioDefault60:checked:checked ~ .form-check-label60 {
  border-color: #fb6564;
  background: #0000FF;
  color: #fff;
}

.inline-flex {
	display: inline-flex;
	}
	
.success2 {
	background-image: linear-gradient(33deg, red , green);
color: white;
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

@keyframes show_box {
  from{
    opacity: 0;
    transform: translateY(-30%);
  }
  to{
    opacity: 1;
    transform: translateY(0%);
  }
}

.krs-input{
border-radius: 50px; 
text-align: center; 
border: 1px solid green;
transition: .5s;
}

.krs-input:hover, .krs-input:active{
border: 1px solid #FB6564;
}

.rangeslider{
 width: 80%;
}

.myslider {
    margin-top:5%;
 -webkit-appearance: none;
 background: none ;
 width: 100%;
 height: 30px;
 padding: 16px 5px;
 border: 1px solid #0000FF;
 opacity: 2;
 border-radius:20px;
 /* box-shadow: 3px 6px 12px #eee inset; */
}


.myslider::-webkit-slider-thumb {
 -webkit-appearance: none;
 cursor: pointer;
 background: #FB6564 ;
 width: 20%;
 height: 25px;
 border-radius:200px;
 box-shadow: 5px 10px 20px red inset;
}


.myslider:hover {
 opacity: 1;
}

  </style>
  
   <style>
     .krs3-btn{
color: #FB6564;
border: 1px solid #FB6564;
          }
          
       .krs3-btn:hover{
color: #fff;
background: #FB6564;
border: 1px solid #FB6564;
}

input[type="radio"] {
	display: none;
	}
#flexRadioDefault4:checked:checked ~ .form-check-label4, #flexRadioDefault5:checked:checked ~ .form-check-label5, #flexRadioDefault6:checked:checked ~ .form-check-label6, #flexRadioDefault7:checked:checked ~ .form-check-label7 {
  border-color: #fb6564;
  background: #ff0000;
  color: #fff;
}

.inline-flex {
	display: inline-flex;
	}
	
.success3 {
	background-image: linear-gradient(33deg, red , green);
color: white;
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
				<a href="code-create.php">
					<i class="bx bx-toggle-right" style="color: red;" ></i>
					<span class="text">Create Code</span>
				</a>
				
			</li>
			
			<li>  
			        <a href="music.php"> 
			                <i class="bx bxs-music" style="color: Blue;"></i> 
			                <span class="text">Songs</span>
			        </a>
		        </li>
			
			<li>
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

		<!-- MAIN --><main>
			<div class="head-title">
				<div class="left">
			
					<ul class="breadcrumb">
						
						<li><i class='bx bx-chevron-right' ></i></li>
		                               <li>Dashboard</li>
					</ul>
				</div>
				<a href="https://telegram.me/earningarmy_xyz" class="btn-download"><span class="text"><i class='bx bxs-user' style="color: white;" ></i>  Admin</span>
				</a>
			</div>
<br>
				<li>
					        
					</span>
				</li>
 
 <?php
 
echo"
            <a href='Sjkssjsnnsnkadminpanelarmy.php?turn=off'><font style='font-weight:600' class='nnn'><input type='hidden' name='turn' value='on'><button type='submit' class='submittt' style='font-weight:600' class='nnn'>CLICK TO RESET</button></font></a>
            ";
            
          echo'
<div style=" padding:10px; background: white; border-top:2px solid blue; border-right:2px solid blue; border-bottom:2px solid blue; border-left:2px solid blue; border-radius:5px;"><b>
 <font color="brown" style="font-weight:600;">Today Report</font><br><br><hr>
 <font color="black" size="4">Fund Added : <font color="blue">₹'.$add.'</font><br><hr>
 <font color="black" size="4">Fund Withdraw : <font color="red">₹'.$withdraw.'</font><br><hr>
 <font color="black" size="4">Paytm Lifafa : <font color="green">₹'.$lifafa.'</font><br><hr>
 <font color="black" size="4">Dice Lifafa : <font color="purple">₹'.$dice.'</font><br>
 </b><font size="3">
 
 </font></div>
 ';

  
echo"
            <a href='Sjkssjsnnsnkadminpanelarmy.php?turn=ofN'><font style='font-weight:600' class='nnn'><input type='hidden' name='turn' value='on'><button type='submit' class='submitt' style='font-weight:600' class='nnn'>CLICK TO REFRESH</button></font></a>
            ";
        
                

  


if($_POST){
    $file30="Tokenacceptpsuudaymehehd82ntbdjdjkunnibaj/$mid.json";
$zaker30=file_get_contents($file30);
$jso30=json_decode($zaker30,true);
$users=$_POST['user'];
$amo=$_POST['amo'];
$oid=rand(11111,99999);
$toid=rand(11111,99999);
$bals=file_get_contents("ntpcbdjsjsj8272djearning/$users/fund.txt");
$tgid=file_get_contents("ntpcbdjsjsj8272djearning/$users/bot.txt");
$ffltg="ntpcbdjsjsj8272djearning/$users/fund.txt";
$funtg=file_get_contents("$ffltg");
$tfltg="ntpcbdjsjsj8272djearning/$users/tfund.txt";
    $tfuntg=file_get_contents("$tfltg");
    
$advanced=$_POST['advanced'];

    $amos=$amo+$amo*$charges/100;
    $str="AB1CDE2FG3HI4JK5LM6NO7PQ8RS9TU0VQXYZ".time();
     $str= str_split($str,1);
     $l = count($str);
     $oid='';
     for($i=1;$i<13;$i++){
     $tn = rand(0,$l);
     $oid.=$str[$tn];
     }
     
    if (file_exists("ntpcbdjsjsj8272djearning/$users/countc.txt")){
    $live=file_get_contents("ntpcbdjsjsj8272djearning/$users/countc.txt");}else{
    file_put_contents("ntpcbdjsjsj8272djearning/$users/countc.txt",0);
    $live=file_get_contents("ntpcbdjsjsj8272djearning/$users/countc.txt");
    }
    
    if($advanced=="no"){
    $ffl="ntpcbdjsjsj8272djearning/$users/fund.txt";
$fun=file_get_contents("$ffl");
$afund=$fun+$amo;
file_put_contents("$ffl",$afund);
$tfl="ntpcbdjsjsj8272djearning/$users/tfund.txt";
    $tfun=file_get_contents("$tfl");
$tafund=$tfun+$amo;
file_put_contents("$tfl",$tafund);
$amou=$add+$amo;
fopen("A/gtw.txt",'a');
$hiddencoder10tg='{"add":"'.$amou.'","withdraw":"'.$withdraw.'","lifafa":"'.$lifafa.'"}';
file_put_contents("A/gtw.txt",$hiddencoder10tg);

echo'<script src="sscript.js"></script>';
$pth="ntpcbdjsjsj8272djearning/$users/orders.txt";
$tid=file_get_contents("tid.txt");
$acc='1';
$co=$tid+$acc;
date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-y h:i:s A');

file_put_contents("tid.txt",$co);
$nnnn='{"tid":"'.$tid.'","oid":"'.$oid.'","time":"'.$time.'","amount":"'.$amo.'","type":"Add Fund"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);

}
$nno='{"user":"'.$user.'",tid":"'.$tid.'"}';
file_put_contents("trsncssbdjsjsj8272djearning/orders/$oid.txt",$nno);


$msgt='⚠️ *ADD FUND ALERT* ⚠️

🔰 *User :-* `'.$users.'`

💶 *Amount :* ₹'.$amo.'

📟 *Transaction id :* `'.$toid.'`

💰 *Wallet Balance :* ₹'.$afund.'
' ;
 $tes=urlencode($msgt);
 
 
 
 $url99='https://api.telegram.org/bot5883262654:AAFCat_IHFFfzjNncFws1caLkdgGkxKJeBs/sendMessage?chat_id=2059751701&text='.$tes.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; M2010J19CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.58 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     
$msgt5='
⚠️ *ADD FUND ALERT* ⚠️

💶 *Fund Added :* ₹'.$amo.'

📟 *Transaction id :* `'.$toid.'`

💰 *Wallet Balance :* ₹'.$afund.'

👨🏻‍💻 *From Admin*
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

<div style=" padding:5px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;"> 
			<center><font color="brown" style="font-weight:600;">MONEY ADD</font><hr><br>	      
			</center><center>	
			
<font color="green blue red" size="4" style="font-weight:600">Money Added Successful</font><br><br>
<img src="tick.png" width="50%"><br><br>
<font color="black" size="4" style="font-weight:600"> User :-</font>
<font color="Red" size="4" style="font-weight:600"> '.$users.'</font><br>
<font color="blue" size="4" style="font-weight:600"> Amount: </font><font color="green" size="4" style="font-weight:600"> ₹'.$amo.' </font><br>

<font color="green" size="4" style="font-weight:600"> Successfully Added </font><br>
<font color="blue" size="4" style="font-weight:600"> Currently Balance: </font><font color="green" size="4" style="font-weight:600"> ₹'.$afund.' </font><br>
<br>
</div><br>
    
</div>


';
return;

  }
  if($advanced=="yes"){
    $ffl="ntpcbdjsjsj8272djearning/$users/fund.txt";
$fun=file_get_contents("$ffl");
$afund=$fun-$amo;
file_put_contents("$ffl",$afund);


echo'<script src="sscript.js"></script>';

$msgt='⚠️ *FUND DEDUCTED ALERT* ⚠️

🔰 *User :-* `'.$users.'`

💶 *Amount :* ₹'.$amo.'

📟 *Transaction id :* `'.$toid.'`

💰 *Wallet Balance :* ₹'.$afund.'
' ;
 $tes=urlencode($msgt);
 
 
 
 $url99='https://api.telegram.org/bot5625005114:AAGfmuDDO3Gs_Ar_cRC9eaUUPDgonCZJD74/sendMessage?chat_id=2059751701&text='.$tes.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; M2010J19CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.58 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     
$msgt5='
⚠️ *FUND DEDUCTED ALERT* ⚠️

💶 *Fund Deducted :* ₹'.$amo.'

📟 *Transaction id :* `'.$toid.'`

💰 *Wallet Balance :* ₹'.$afund.'

👨🏻‍💻 *From Admin*
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

<div style=" padding:5px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;"> 
			<center><font color="brown" style="font-weight:600;">MONEY CUT</font><hr><br>	      
			</center><center>	
			
<font color="green blue red" size="4" style="font-weight:600">Money Cuted Successful</font><br><br>
<img src="tick.png" width="50%"><br><br>
<font color="black" size="4" style="font-weight:600"> User :-</font>
<font color="Red" size="4" style="font-weight:600"> '.$users.'</font><br>
<font color="blue" size="4" style="font-weight:600"> Amount: </font><font color="green" size="4" style="font-weight:600"> ₹'.$amo.' </font><br>

<font color="green" size="4" style="font-weight:600"> Successfully Cuted </font><br>
<font color="blue" size="4" style="font-weight:600"> Currently Balance: </font><font color="green" size="4" style="font-weight:600"> ₹'.$afund.' </font><br>
<br>
</div><br>
    
</div>


';
return;

  }


}
if($advanced=="yess"){
echo'<script src="sscript.js"></script>';
echo'

<div style=" padding:5px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;"> 
			<center><font color="brown" style="font-weight:600;">MONEY CHECK</font><hr><br>	      
			</center><center>	
			
<font color="green blue red" size="4" style="font-weight:600">Money Checked Successful</font><br><br>
<img src="tick.png" width="50%"><br><br>
<font color="black" size="4" style="font-weight:600"> User :-</font>
<font color="Red" size="4" style="font-weight:600"> '.$users.'</font><br>

<font color="blue" size="4" style="font-weight:600"> Currently Balance: </font><font color="green" size="4" style="font-weight:600"> ₹'.$funtg.' </font><br>

<font color="blue" size="4" style="font-weight:600"> Lifafa Created: </font><font color="green" size="4" style="font-weight:600">'.$live.' </font><br>

<font color="blue" size="4" style="font-weight:600"> Total Recharge: </font>
<font color="green" size="4" style="font-weight:600">₹'.$tfuntg.' </font><br><br>
</div><br>
    
</div>
';
return;

}

if(!$_POST){
    echo'

    
  <br> 
  <center> 
   <b> <br> <div style=" padding:5px; background: white; border-top:3px solid blue; border-right:3px solid blue; border-bottom:3px solid blue; border-left:3px solid blue; border-radius:10px;"> 
			<font color="brown" style="font-weight:600;">MONEY SYSTEM</font><hr><br>	      
			<center>	      
    <div class="control"> 
     
     <form method="POST" action="" autocomplete="off"> 
     <br><center>
<div class="m-1 inline-flex">
  <input class="m-1 btn btn-outline-success" type="radio" name="advanced" id="flexRadioDefault1" value="no" >
  <label class="m-1 btn btn-outline-success form-check-label1  krs-btn" for="flexRadioDefault1" style="width: 100px;">
  ADD
  </label></div>


			<div class="m-1 inline-flex">
  <input class="m-1 btn btn-outline-success" type="radio" name="advanced" id="flexRadioDefault3" value="yess">
  <label class="form-check-label3  btn btn-outline-success3 krs-btn" for="flexRadioDefault3" style="width: 100px;">
    Check
  </label>
</div>

<div class="m-1 inline-flex">
  <input class="m-1 btn btn-outline-success" type="radio" name="advanced" id="flexRadioDefault2" value="yes">
  <label class="form-check-label2  btn btn-outline-success2 krs2-btn" for="flexRadioDefault2" style="width: 100px;">
    CUT
  </label>
</div>

</center> 
<br> 
     
 <input type="text" class="input" placeholder="Enter Username"  name="user"  required> 
 <input type="text" class="input" placeholder="Enter Amount"  name="amo" > 
 
      <br>
      <button type="submit" class="submit" name="submit">SUBMIT</button>
     </form>
     <br> 
    </div>
';}
?>
  
    <!-- MAIN --> 
    <!-- CONTENT --> <script src="sscript.js"></script>
</b>
  </center>
 </body>
</html>




















