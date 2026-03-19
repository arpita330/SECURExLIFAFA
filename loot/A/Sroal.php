<?php
$ffill="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($ffill);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
$lid=$_GET['id'];
$lno=$_COOKIE['lifafano'];
$uidd=$_COOKIE['lifafatgid'];
if($uidd){
   $uid=$uidd; 
}else{
$uid=$_GET['uid'];}
if($uid){
    if(!$uidd){
    setcookie('lifafatgid',$uid,time()+60*60*24*365);}}




if(file_exists("dicelifsbdjsjsj8272djearning/$lid/$lid.json"))
{



$ffil="dicelifsbdjsjsj8272djearning/$lid/$lid.json";
$dec=file_get_contents($ffil);
$dc=json_decode($dec,true);
$title=$dc['title'];
$nuser=$dc['nuser'];
$puser=$dc['puser'];
$rlinkf=$dc['rlink'];
$acode=$dc['acode'];
$advanced=$dc['advanced'];
$ssn=$dc['ss'];
$tgg=file_get_contents("ntpcbdjsjsj8272djearning/$ssn/tg.txt");
$dcb=json_decode($tgg,true);
$tgd="@$tgg";
$tamo=$nuser*$puser;
$cc=file_get_contents("dicelifsbdjsjsj8272djearning/$lid/count.txt");
$count=$cc;
$at=rand(1,9);
}

$length="1"; 
$char="bcdefghijklmnopqrstuvwx";
$clr=substr(str_shuffle($char), 0, $length);
$channel=$dcb['channel1'];
$channel2=$dcb['channel2'];
$channel3=$dcb['channel3'];
$channel4=$dcb['channel4'];
$channel5=$dcb['channel5'];
$channel6=$dcb['channel6'];
$rlink="http://telegram.dog/$channel1";
$comi = str_replace(' ', ' ', $comment);
$un=urlencode($channel);
function RemoveSpecialChar($channel)
{
    $res = preg_replace('/[@\.\;\" "]+/', '', $channel);
    return $res;
}

$str1 = $channel;
$str2 = $channel2;
$str4 = $channel4;
$str3 = $channel3;
$str5 = $channel5;
$str6 = $channel6;
$url="https://api.telegram.org/bot5825920896:AAF69peDqd_jot7NcMwXgCdZGK43lZu25z4/getChatMember?chat_id=@$channel&user_id=$uid";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

$output1=curl_exec($ch);
$json=json_decode($output1,true);
curl_close($ch);
$ok=$json["ok"];
$usern=$json["result"]["user"]["username"];
$fn=$json["result"]["user"]["first_name"];
$ln=$json["result"]["user"]["last_name"];
$status=$json["result"]["status"];
$statuss=$json["error_code"];


if($ok=="true"){
if($status=="creator" xor $status=="administrator" xor $status=="member" ){
$sts="Verified";
}
if($status=="left"){
$sts="You Have Not Joined the Channel";
}}else{
$sts= "Admin has removed bot from Admin";
}

if($channel2){

$url2="https://api.telegram.org/bot5825920896:AAF69peDqd_jot7NcMwXgCdZGK43lZu25z4/getChatMember?chat_id=@$channel2&user_id=$uid";
$ch1=curl_init();
curl_setopt($ch1,CURLOPT_URL,$url2);
curl_setopt($ch1,CURLOPT_POST,1);

curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch1,CURLOPT_SSL_VERIFYPEER,false);

$output2=curl_exec($ch1);
$json2=json_decode($output2,true);

curl_close($ch1);


$ok2=$json2["ok"];
$status2=$json2["result"]["status"];
$statuss2=$json2["error_code"];


if($ok2=="true"){
if($status2=="creator" xor $status2=="administrator" xor $status2=="member" ){
$sts2="Verified";
}
if($status2=="left"){
$sts2="You Have Not Joined the Channel";
}}else{
$sts2= "Admin has removed bot from Admin";
}
}
if($channel3){

$du="https://api.telegram.org/bot5825920896:AAF69peDqd_jot7NcMwXgCdZGK43lZu25z4/getChatMember?chat_id=@$channel3&user_id=$uid";
$dch1=curl_init();
curl_setopt($dch1,CURLOPT_URL,$du);
curl_setopt($dch1,CURLOPT_POST,1);

curl_setopt($dch1,CURLOPT_RETURNTRANSFER,1);

curl_setopt($dch1,CURLOPT_SSL_VERIFYPEER,false);

$output2p=curl_exec($dch1);
$json55=json_decode($output2p,true);

curl_close($dch1);


$ok3=$json55["ok"];
$status3=$json55["result"]["status"];
$statuss3=$json55["error_code"];

if($ok3=="true"){
if($status3=="creator" xor $status3=="administrator" xor $status3=="member" ){
$sts3="Verified";
}
if($status3=="left"){
$sts3="You Have Not Joined the Channel";
}}else{
$sts3= "Admin has removed bot from Admin";
}}
if($channel4){
$ydnn="https://api.telegram.org/bot5825920896:AAF69peDqd_jot7NcMwXgCdZGK43lZu25z4/getChatMember?chat_id=@$channel4&user_id=$uid";
$ydnn1=curl_init();
curl_setopt($ydnn1,CURLOPT_URL,$ydnn);
curl_setopt($ydnn1,CURLOPT_POST,1);

curl_setopt($ydnn1,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ydnn1,CURLOPT_SSL_VERIFYPEER,false);

$outputnp=curl_exec($ydnn1);
$json5nn=json_decode($outputnp,true);

curl_close($ydnn1);


$ok4=$json5nn["ok"];
$status4=$json5nn["result"]["status"];
$statuss4=$json5nn["error_code"];

if($ok4=="true"){
if($status4=="creator" xor $status4=="administrator" xor $status4=="member" ){
$sts4="Verified";
}
if($status4=="left"){
$sts4="You Have Not Joined the Channel";
}}else{
$sts4= "Admin has removed bot from Admin";
}
}

if($channel5){

$url5="https://api.telegram.org/bot5825920896:AAF69peDqd_jot7NcMwXgCdZGK43lZu25z4/getChatMember?chat_id=@$channel5&user_id=$uid";
$ch5=curl_init();
curl_setopt($ch5,CURLOPT_URL,$url5);
curl_setopt($ch5,CURLOPT_POST,1);

curl_setopt($ch5,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch5,CURLOPT_SSL_VERIFYPEER,false);

$output5=curl_exec($ch5);
$json5=json_decode($output5,true);

curl_close($ch5);


$ok5=$json5["ok"];
$status5=$json5["result"]["status"];
$statuss5=$json5["error_code"];


if($ok5=="true"){
if($status5=="creator" xor $status5=="administrator" xor $status5=="member" ){
$sts5="Verified";
}
if($status5=="left"){
$sts5="You Have Not Joined the Channel";
}}else{
$sts5= "Admin has removed bot from Admin";
}
}
if($channel6){

$url6="https://api.telegram.org/bot5825920896:AAF69peDqd_jot7NcMwXgCdZGK43lZu25z4/getChatMember?chat_id=@$channel6&user_id=$uid";
$ch6=curl_init();
curl_setopt($ch6,CURLOPT_URL,$url6);
curl_setopt($ch6,CURLOPT_POST,1);

curl_setopt($ch6,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch6,CURLOPT_SSL_VERIFYPEER,false);

$output6=curl_exec($ch6);
$json6=json_decode($output6,true);

curl_close($ch6);


$ok6=$json6["ok"];
$status6=$json6["result"]["status"];
$statuss6=$json6["error_code"];


if($ok6=="true"){
if($status6=="creator" xor $status6=="administrator" xor $status6=="member" ){
$sts6="Verified";
}
if($status6=="left"){
$sts6="You Have Not Joined the Channel";
}}else{
$sts6= "Admin has removed bot from Admin";
}
}



?>



<!DOCTYPE html>
<html> <head>

 <title> <?php echo $title;?> || EARNING ARMY</title> <link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"> <meta name="google" content="notranslate">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta content="earningarmy.xyz, Advanced Lifafa Giveaway maker site, Play Games to earn Money, Paytm Normal, Dice, Toss Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">

<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>

	<link rel="icon" type="image/png" href="https://i.ibb.co/jr10brk/icon.png"/>
<link rel="stylesheet" type="text/css" href="https://claimbooster.buzz/Booster/css/Save/new.css">	<link rel="stylesheet" type="text/css" href="https://claimbooster.buzz/Booster/css/Save/main1.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet"><noscript>You Cant View Source</noscript> 
<style> html, body { background-image: url('https://earningarmy.xyz/adminbdjsjsj8272djearning/bg/<?php echo $at;?>.jpg'); height: 100%; }
.input{
 border: 2px solid #047aed; 
 font-weight :900; 
 }
       input:focus {
  border: solid blue 2px;
  border-radius:20px;
  width:95%;
   box-shadow: 1px 1px 8px green ;
  transition: width 200ms ease-in, box-shadow 200ms ease-in, border 200ms ease-in, border-radius 2000ms ease-in ;
 
}
 #loadd {
      
      width: 120px;
      text-align: center;
      animation: spin 0.5s linear infinite;
      z-index: 9999;
    }
    @keyframes spin {
      0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-25px, -25px) rotate(-1deg); }
  20% { transform: translate(-0px, 0px) rotate(1deg); }
  30% { transform: translate(25px, 25px) rotate(0deg); }
    }
    .center {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }
        .content {
  border: 2px dashed blue;
  padding: .5em;}
  :root {
  /* Base font size */
  font-size: 10px;   
  
  /* Set neon color */
  --neon-text-color: blue;
  --neon-border-color: blue ;
}
.neon{
    padding:10px;
    color:yellow;
animation: flicker 0.1s infinite alternate;     
}



/* Animate neon flicker */
@keyframes flicker {
    
    0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
      
        
        box-shadow:
            0 0 .5rem red,
            inset 0 0 .5rem blue,
            0 0 0rem var(--neon-border-color),
            inset 0 0 0rem var(--neon-border-color),
            0 0 0rem var(--neon-border-color),
            inset 0 0 4rem var(--neon-border-color);        
    }
    
    20%, 24%, 55% {        
        text-shadow: none;
        box-shadow: none;
    }    
}
.neon{
    padding:10px;
    color:yellow;
animation: flicker 1.5s infinite alternate;     
}



/* Animate neon flicker */
@keyframes flicker {
    
    0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
      
        
        box-shadow:
            0 0 .5rem red,
            inset 0 0 .5rem blue,
            0 0 0rem var(--neon-border-color),
            inset 0 0 0rem var(--neon-border-color),
            0 0 0rem var(--neon-border-color),
            inset 0 0 4rem var(--neon-border-color);        
    }
    
    20%, 24%, 55% {        
        text-shadow: none;
        box-shadow: none;
    }    
}
.loaderr {
  border: 30px solid #f3f3f3; /* Light grey */
  border-top: 30px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 200px;
  height: 200px;
  animation: spinn 2s linear infinite;
}
.submi{ 
 height: 25px;
  width: 100px;
  border-radius: 4px; 
  margin-top: 4px; 
  margin-bottom: 1px; 

  background: red; 
  font-weight:600; red=100font-family: 'Montserrat'; font-size: 14px; font-weight: 500; text-transform: capitalize; 
  }
    
    .submit11{ 
 height: 45px;
  border-radius: 4px; 
  margin-top: 10px; 
  margin-bottom: 10px; 
  padding: 0 25px 0 25px; 
  background: blue; 
  font-weight:600;
  red=100font-family: 'Montserrat';
  font-size: 14px; font-weight: 500; text-transform: capitalize; 
  letter-spacing: 0; color: #FFFFFF; 
  cursor: pointer; 
  outline: none; 
  box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2); }
  
.submit{ 
 height: 25px;
  width: 100px;
  border-radius: 4px; 
  margin-top: 4px; 
  margin-bottom: 1px; 

  background: #1cfc03; 
  font-weight:600; red=100font-family: 'Montserrat'; font-size: 14px; font-weight: 500; text-transform: capitalize; 
  }
  
   .submit99{ height: 25px; border: 0; border-radius: 4px; margin: 5px; padding: 0px 15px 0 15px; background: #047aed; font-family: 'Montserrat'; font-size: 13px; font-weight: 500; text-transform: capitalize; letter-spacing: 0; color: #FFFFFF; cursor: pointer; outline: none; box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2); } #loadd { width: 120px; text-align: center; animation: spin 0.5s linear infinite; z-index: 9999; } @keyframes spin { 0% { transform: translate(1px, 1px) rotate(0deg); } 10% { transform: translate(-25px, -25px) rotate(-1deg); } 20% { transform: translate(-0px, 0px) rotate(1deg); } 30% { transform: translate(25px, 25px) rotate(0deg); } } .center { position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; } @font-face { font-family: Aclonica; src: url(js/font/Aclonica.ttf);} .animate-charcter{ text-transform: uppercase; background-image: linear-gradient( -225deg, #231557 0%, 
  #44107a 29%, #ff1361 67%, #fff800 100% );
   background-size: auto auto;
    background-clip: border-box; 
    background-size: 200% auto;
  color: #fff; 
  background-clip: text; text-fill-color: transparent; -webkit-background-clip: text; -webkit-text-fill-color: transparent; 
  animation: textclip 2s linear infinite; display: inline-block; font-size: 20px; font-family: Aclonica;
   }
@keyframes textclip { to { background-position: 200% center; }}.smt { background-color:white; width:70%; padding-bottom:5px; font-size:18px;
 font-weight:500; color:red;}
.fontrs { position: absolute
; 
top: -20px; right: -20px;
 color: white; padding-top: 30px; padding-right: 30px; border-radius: 50px; 
padding-bottom: 15px;
 padding-left: 15px; 
 animation: coloranim 20s infinite; box-shadow: 2px 2px 5px #000 ; 
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
    .submittt{
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
.smt {
    background:transparent;
    width:75%;
    padding-bottom:5px;
    font-size:18px;
    font-weight:500;
    border:transparent;
    color:red;
}
.fontrs1 {
 position: absolute; 
bottom: -20px;

 left: -20px; color: white; 
 padding-top: 5px; padding-right: 15px;
  border-radius: 30px; padding-bottom: 22px; padding-left: 30px; animation: coloranim 20s infinite; box-shadow: 2px 2px 5px #000 ; } @keyframes coloranim { 0% {background: red;} 17% {background: #ff00e4;} 34% {background: purple;} 56% {background: blue;} 70% {background: #1cfc03;} 85% {background: #ADFF2F;} 100% {background: red;}}
</style>


    </head>
    
<center>

<body> <div>
<center>
<div class="container-login100" style="background-image: url('../Booster/css/Save/o.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width: 335px; padding-top: 10px;padding-bottom: 20px; position: fixed; box-shadow: 2px 2px 5px #9ACD32 ;" >
<span class="login100-form-title p-b-25" style="font-size:25px !important;">
</span><br><div class="container"><font size="2.5" class="fontrs">&#8377;<?php echo $puser;?></font> <div class="row"> <div class="col-md-12 text-center"> 
<br><h3 class="animate-charcter"><?php echo $title;?></h3> </div> </div></div>
 <br><br><br><div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid blue; border-left: 3px solid blue;  border-radius: 3px; padding: 10px;"><br>
<script type="text/javascript"> if(top.location != window.location) { window.location = '/error_iframe.php'; } </script>
<body>
  <div><img src='assets/lifafa.png' id='loadd'class='center'></div> 
  <script>
      document.onreadystatechange = function() {
          if (document.readyState !== "complete") {
              document.querySelector(
                "body").style.visibility = "hidden";
              document.querySelector("#loadd").style.visibility = "visible";
          } else {
              document.querySelector(
                "#loadd").style.display = "none";
              document.querySelector(
                "body").style.visibility = "visible";
          }
      };
  </script>
<br>
<?php 
if(!file_exists("dicelifsbdjsjsj8272djearning/$lid/$lid.json")){
    echo'<img src="assets/notexists.png" width="50%"><br><b><font size="4" color="red">Lifafa Not Exists</font>';
    echo"<meta http-equiv='refresh' content='3;url=home.php'>";
}else{
    if($cc>=$nuser){
        file_put_contents("dicelifsbdjsjsj8272djearning/$lid/over.txt",over);
        echo'
    
    <img src="assets/over.png" width="50%"><br><b><font size="4" color="red">!! Lifafa is Over !!</font>
    <br></div>
  
    <br><meta http-equiv="refresh" content="4;url='.$rlink.'">
               <audio id="myAudio" autoplay>
<source src="over.mp3" type="audio/mpeg">
</audio>
  
  <div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid blue; border-left: 3px solid blue;  border-radius: 3px; padding: 10px;">
  </a><font size="4" style="font-weight:600" >
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</div></div>
        </font> ';
    }else{
        $ip=$_SERVER['REMOTE_ADDR'];
    $ipfile="dicelifsbdjsjsj8272djearning/$lid/ip/$ip.txt";
    if(file_exists($ipfile)){
        $pnn=file_get_contents($ipfile);
        echo'
    <img src="assets/claimed.png" width="70%"><br><b><font size="4" color="red">You Have Already Claimed</font>
    <br><br></div>
  
    <br><meta http-equiv="refresh" content="4;url='.$rlink.'">
               <audio id="myAudio" autoplay>
<source src="over.mp3" type="audio/mpeg">
</audio>
  
  <div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
  </a><font size="4" style="font-weight:600" >
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</div></div>
        </font> ';
    }else
    {
        
  echo'
  
  
    <form method="POST" action="dice-claim.php">
    <input type="hidden" name="id" value="'.$lid.'">
    <input type="hidden" name="uid" value="'.$uid.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" 
 value="'.$lno.'"  title="Please enter exactly 10 digits" required>';
    if($acode){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}else{
 echo'
 <input type="hidden" name="acode" value="">';}
 if($advanced){
     if($uid)
     {
if($sts=="Admin has removed bot from Admin"){
if($sts=="Admin has removed bot from Admin"){
echo"<a href='http://telegram.dog/$str1'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN</a>";}

if($sts2=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str2'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN</a>";}

if($sts3=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str3'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN</a>";}
if($sts4=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str4'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN</a>";}
if($sts5=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str5'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN</a>";}
if($sts6=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str6'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}

echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';

 return;
 
}
if($sts2=="Admin has removed bot from Admin"){
 
if($sts=="Admin has removed bot from Admin"){
echo"<a href='http://telegram.dog/$str1'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts2=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str2'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts3=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str3'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts4=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str4'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts5=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str5'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
if($sts6=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str6'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';

 return;
 
}

if($sts3=="Admin has removed bot from Admin"){
 if($sts=="Admin has removed bot from Admin"){
echo"<a href='http://telegram.dog/$str1'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts2=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str2'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts3=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str3'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts4=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str4'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts5=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str5'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
if($sts6=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str6'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';

 return;
 


 
}
if($sts4=="Admin has removed bot from Admin"){
 if($sts=="Admin has removed bot from Admin"){
echo"<a href='http://telegram.dog/$str1'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts2=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str2'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts3=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str3'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts4=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str4'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts5=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str5'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
if($sts6=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str6'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';

 return;
 



 
}

if($sts5=="Admin has removed bot from Admin"){
 if($sts=="Admin has removed bot from Admin"){
echo"<a href='http://telegram.dog/$str1'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts2=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str2'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts3=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str3'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts4=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str4'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts5=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str5'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
if($sts6=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str6'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';

 return;
 

}
if($sts6=="Admin has removed bot from Admin"){
 if($sts=="Admin has removed bot from Admin"){
echo"<a href='http://telegram.dog/$str1'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts2=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str2'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}

if($sts3=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str3'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts4=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str4'><button type='text' class='submitt' style='font-weight:999' required readonly>BOT IS NOT ADMIN </a>";}
if($sts5=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str5'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
if($sts6=="Admin has removed bot from Admin"){

echo"<a href='http://telegram.dog/$str6'><button type='text' class='submitt' style='font-weight:999' required readonly> BOT IS NOT ADMIN </a>";}
echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';

 return;
 

}



if($status=="left"){
echo'</form>
             <br><br><b><font size="3" color="red"> You Have Not Joined all Channels </font><br>
             ';
             
             
    
	if($status=="left"){ echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{	

if($ok=="true"){echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{ }}

if($status2=="left"){
echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
	
}else{if($ok2=="true"){echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status3=="left"){
echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok3=="true"){echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status4=="left"){
echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok4=="true"){echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status5=="left"){
echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok5=="true"){echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status6=="left"){
echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok6=="true"){echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	


}else{}}



echo'<center><br><br><a href="'.$refresh.'?id='.$lid.'&uid='.$uid.'"><font size="3" color="black">After Joining : <font size="3" color="blue">CLICK HERE</font></a></font><br><br></center>';
 echo'<center><br><br><b><font size="3" color="red" class="" >Join As:- '.$fn.'</font><br><br></center>';
  
 echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';  return;
}


if($status2=="left"){
echo'</form>
             <br><br><b><font size="3" color="red"> You Have Not Joined all Channels </font><br>
             ';
             
             
         





	if($status=="left"){ echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{	

if($ok=="true"){echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{ }}

if($status2=="left"){
echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
	
}else{if($ok2=="true"){echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status3=="left"){
echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok3=="true"){echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status4=="left"){
echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok4=="true"){echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status5=="left"){
echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok5=="true"){echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status6=="left"){
echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok6=="true"){echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}



echo'<center><br><br><a href="'.$refresh.'?id='.$lid.'&uid='.$uid.'"><font size="3" color="black">After Joining : <font size="3" color="blue">CLICK HERE</font></a></font><br><br></center>';
  echo'<center><br><br><b><font size="3" color="red" class="" >Join As:- '.$fn.'</font><br><br></center>';
  
  echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';  return;
}




if($status3=="left"){
echo'</form>
             <br><br><b><font size="3" color="red"> You Have Not Joined all Channels </font><br>
             ';
             
             
         





	if($status=="left"){ echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{	

if($ok=="true"){echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{ }}

if($status2=="left"){
echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
	
}else{if($ok2=="true"){echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status3=="left"){
echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok3=="true"){echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status4=="left"){
echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok4=="true"){echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status5=="left"){
echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok5=="true"){echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status6=="left"){
echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok6=="true"){echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}



echo'<center><br><br><a href="'.$refresh.'?id='.$lid.'&uid='.$uid.'"><font size="3" color="black">After Joining : <font size="3" color="blue">CLICK HERE</font></a></font><br><br></center>';
 echo'<center><br><br><b><font size="3" color="red" class="" >Join As:- '.$fn.'</font><br><br></center>';
  
 echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';  return;
}






if($status4=="left"){
echo'</form>
             <br><br><b><font size="3" color="red"> You Have Not Joined all Channels </font><br>
             ';
             
             
         





	if($status=="left"){ echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{	

if($ok=="true"){echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{ }}

if($status2=="left"){
echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
	
}else{if($ok2=="true"){echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status3=="left"){
echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok3=="true"){echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status4=="left"){
echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok4=="true"){echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status5=="left"){
echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok5=="true"){echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status6=="left"){
echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok6=="true"){echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}



echo'<center><br><br><a href="'.$refresh.'?id='.$lid.'&uid='.$uid.'"><font size="3" color="black">After Joining : <font size="3" color="blue">CLICK HERE</font></a></font><br><br></center>';
 echo'<center><br><br><b><font size="3" color="red" class="" >Join As:- '.$fn.'</font><br><br></center>';
  
 echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';  return;
}


if($status5=="left"){
echo'</form>
             <br><br><b><font size="3" color="red"> You Have Not Joined all Channels </font><br>
             ';
             
             
         





	if($status=="left"){ echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{	

if($ok=="true"){echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{ }}

if($status2=="left"){
echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
	
}else{if($ok2=="true"){echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status3=="left"){
echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok3=="true"){echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status4=="left"){
echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok4=="true"){echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status5=="left"){
echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok5=="true"){echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";


}else{}}

if($status6=="left"){
echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok6=="true"){echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}



echo'<center><br><br><a href="'.$refresh.'?id='.$lid.'&uid='.$uid.'"><font size="3" color="red">After Joining : <font size="3" color="blue">CLICK HERE</font></a></font><br><br></center>';
  echo'<center><br><br><b><font size="3" color="red" class="" >Join As:- '.$fn.'</font><br><br></center>';
  echo'


</div> <br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';  return;
}


if($status6=="left"){
echo'</form>
             <br><br><b><font size="3" color="red"> You Have Not Joined all Channels </font><br>
             ';
             
             
         





	if($status=="left"){ echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{	

if($ok=="true"){echo"<center><a href='http://telegram.dog/$str1'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{ }}

if($status2=="left"){
echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
	
}else{if($ok2=="true"){echo"<center><a href='http://telegram.dog/$str2'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status3=="left"){
echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok3=="true"){echo"<center><a href='http://telegram.dog/$str3'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status4=="left"){
echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{if($ok4=="true"){echo"<center><a href='http://telegram.dog/$str4'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}
if($status5=="left"){
echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok5=="true"){echo"<center><a href='http://telegram.dog/$str5'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}

if($status6=="left"){
echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submi' style='font-weight:999' required readonly><font color='white'>Join</font></a></center>";
}else{
if($ok6=="true"){echo"<center><a href='http://telegram.dog/$str6'><button type='text' class='submit' style='font-weight:999' required readonly><font color='white'>Joined</font></a></center>";
	

}else{}}



echo'<center><br><br><a href="'.$refresh.'?id='.$lid.'&uid='.$uid.'"><font size="3" color="red">After Joining : <font size="3" color="blue">CLICK HERE</font></a></font><br><br></center>';
  echo'<center><br><br><b><font size="3" color="red" class="" >Join As:- '.$fn.'</font><br><br></center>';
  echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';  return;
}



     }else{
        echo'
       </form><br><b><font size="3" color="red">Verify your account first</b><br><br> <font color="black" size="2">Click VERIFY button below, start the bot and open link from bot.</font></font><br>
    <a href="https://telegram.me/earmy_verify_bot?start='.$lid.'"><button class="submit11" style="font-weight:999;">VERIFY</button></a>';
    echo'


</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';    
    return;
    }
 }
 {
 echo'
<div id="dice"><input type="hidden" name="prdct" required="">
<img src="https://kunnicampaign.xyz/dice/1.png" onclick="dice1()" class="dice">
<img src="https://kunnicampaign.xyz/dice/2.png" onclick="dice2()" class="dice">
<img src="https://kunnicampaign.xyz/dice/3.png" onclick="dice3()" class="dice"><br>
<img src="https://kunnicampaign.xyz/dice/4.png" onclick="dice4()" class="dice">
<img src="https://kunnicampaign.xyz/dice/5.png" onclick="dice5()" class="dice">
<img src="https://kunnicampaign.xyz/dice/6.png" onclick="dice6()" class="dice"></div>
';

 echo"
<div id='sub1'>
        <button disabled class='submitm' style='font-weight:999; background:grey;'>ROLL DICE</button>
      </div><br>
     "; 
}
   if($advanced){
   echo'<center><br><br><b><font size="3" color="green" class="" >Verifyed:- '.$fn.'</font><br><br></center>';
  }
 echo'






</div><br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
</div>
';}}}
?>
</div></center>


</script><script>
    document.querySelectorAll("img").forEach((item) => {
  item.addEventListener("click", (event) => {
    const image = event.target.getAttribute("data-src");
    event.target.setAttribute("src", image);
  });
});


</script>

<script>

function autoClick(){alert("I am loaded and automatically clicked");}
        var count = 3;  
            var interval = setInterval(function () {
                document.getElementById("count").innerHTML = count;
                count--;
                if (count === -1) {

                    clearInterval(interval); 
                    document.getElementById("autoClickBtn").click() ;
                    document.getElementById("resultClass").click() ;
                   document.getElementById("resultClass").innerHTML = "<?php echo $resmes; ?>";
                   
                   

                }

            }, 1000 );

</script>
     <script>
    document.querySelectorAll("img").forEach((item) => {
  item.addEventListener("click", (event) => {
    const image = event.target.getAttribute("data-src");
    event.target.setAttribute("src", image);
  });
});


</script>

<script>

function autoClick(){alert("I am loaded and automatically clicked");}
        var count = 2;  
            var interval = setInterval(function () {
                document.getElementById("count").innerHTML = count;
                count--;
                if (count === -2) {

                    clearInterval(interval); 
                    document.getElementById("autoClickBtn").click() ;
                    document.getElementById("resultClass").click() ;
                   document.getElementById("resultClass").innerHTML = "<?php echo $resmes; ?>";
                   
                   

                }

            }, 1000 );

</script>

<script>
const reswin = document.getElementById("resultClass");
reswin.addEventListener("click", function () {
reswin.classList.replace("info", "<?php echo $resclass; ?>");
})
</script>
<script>
   var seconds_left = 4;
var interval = setInterval(function() {
    document.getElementById('timer_div').innerHTML = --seconds_left;

    if (seconds_left <= 0)
    {
        document.getElementById('timer_div').innerHTML = '0';
        clearInterval(interval);
    }
}, 1000);
  </script>
  <script>
var rangeslider = document.getElementById("sliderRange");
var output = document.getElementById("demo");
output.innerHTML = rangeslider.value;

rangeslider.oninput = function() {
output.innerHTML = this.value;
}
</script>



  <script>
var rangeslider = document.getElementById("sliderRange");
var output = document.getElementById("demo");
output.innerHTML = rangeslider.value;

rangeslider.oninput = function() {
output.innerHTML = this.value;
}
</script>
  <script>

document.getElementById("refr").onclick = function () {
window.location.reload();
    };
    
document.getElementById("joinn").onclick = function () {
location.href = "https://telegram.me/kunnicampaign";
    };

function refreshPage(){
    window.location.reload();
} 
</script> 
  <script type="text/javascript">
function dice1() {
         document.getElementById("dice").innerHTML = '<input type="hidden" name="prdct" value="1" required><img src="https://kunnicampaign.xyz/dice/1.png" class="selected"><img src="https://kunnicampaign.xyz/dice/2.png" onclick="dice2()" class="dice"><img src="https://kunnicampaign.xyz/dice/3.png" onclick="dice3()" class="dice"><br><img src="https://kunnicampaign.xyz/dice/4.png" onclick="dice4()" class="dice"><img src="https://kunnicampaign.xyz/dice/5.png" onclick="dice5()" class="dice"><img src="https://kunnicampaign.xyz/dice/6.png" onclick="dice6()" class="dice">';
         document.getElementById("sub1").innerHTML = '<button type="submit" class="submitm" name="claim" style="font-weight:999;">ROLL DICE</button></form>';}
  
function dice2() {
         document.getElementById("dice").innerHTML = '<input type="hidden" name="prdct" value="2" required><img src="https://kunnicampaign.xyz/dice/1.png" onclick="dice1()" class="dice"><img src="https://kunnicampaign.xyz/dice/2.png" class="selected"><img src="https://kunnicampaign.xyz/dice/3.png" onclick="dice3()" class="dice"><br><img src="https://kunnicampaign.xyz/dice/4.png" onclick="dice4()" class="dice"><img src="https://kunnicampaign.xyz/dice/5.png" onclick="dice5()" class="dice"><img src="https://kunnicampaign.xyz/dice/6.png" onclick="dice6()" class="dice">';
         document.getElementById("sub1").innerHTML = '<button type="submit" class="submitm" name="claim" style="font-weight:999;">ROLL DICE</button></form>';}
         
function dice3() {
         document.getElementById("dice").innerHTML = '<input type="hidden" name="prdct" value="3" required><img src="https://kunnicampaign.xyz/dice/1.png" onclick="dice1()" class="dice"><img src="https://kunnicampaign.xyz/dice/2.png" onclick="dice2()" class="dice"><img src="https://kunnicampaign.xyz/dice/3.png" class="selected"><br><img src="https://kunnicampaign.xyz/dice/4.png" onclick="dice4()" class="dice"><img src="https://kunnicampaign.xyz/dice/5.png" onclick="dice5()" class="dice"><img src="https://kunnicampaign.xyz/dice/6.png" onclick="dice6()" class="dice">';
         document.getElementById("sub1").innerHTML = '<button type="submit" class="submitm" name="claim" style="font-weight:999;">ROLL DICE</button></form>';}
         
function dice4() {
         document.getElementById("dice").innerHTML = '<input type="hidden" name="prdct" value="4" required><img src="https://kunnicampaign.xyz/dice/1.png" onclick="dice1()" class="dice"><img src="https://kunnicampaign.xyz/dice/2.png" onclick="dice2()" class="dice"><img src="https://kunnicampaign.xyz/dice/3.png" onclick="dice3()" class="dice"><br><img src="https://kunnicampaign.xyz/dice/4.png" class="selected"><img src="https://kunnicampaign.xyz/dice/5.png" onclick="dice5()" class="dice"><img src="https://kunnicampaign.xyz/dice/6.png" onclick="dice6()" class="dice">';
         document.getElementById("sub1").innerHTML = '<button type="submit" class="submitm" name="claim" style="font-weight:999;">ROLL DICE</button></form>';}
         
function dice5() {
         document.getElementById("dice").innerHTML = '<input type="hidden" name="prdct" value="5" required><img src="https://kunnicampaign.xyz/dice/1.png" onclick="dice1()" class="dice"><img src="https://kunnicampaign.xyz/dice/2.png" onclick="dice2()" class="dice"><img src="https://kunnicampaign.xyz/dice/3.png" onclick="dice3()" class="dice"><br><img src="https://kunnicampaign.xyz/dice/4.png" onclick="dice4()" class="dice"><img src="https://kunnicampaign.xyz/dice/5.png" class="selected"><img src="https://kunnicampaign.xyz/dice/6.png" onclick="dice6()" class="dice">';
         document.getElementById("sub1").innerHTML = '<button type="submit" class="submitm" name="claim" style="font-weight:999;">ROLL DICE</button></form>';} 
         
function dice6() {
         document.getElementById("dice").innerHTML = '<input type="hidden" name="prdct" value="6" required><img src="https://kunnicampaign.xyz/dice/1.png" onclick="dice1()" class="dice"><img src="https://kunnicampaign.xyz/dice/2.png" onclick="dice2()" class="dice"><img src="https://kunnicampaign.xyz/dice/3.png" onclick="dice3()" class="dice"><br><img src="https://kunnicampaign.xyz/dice/4.png" onclick="dice4()" class="dice"><img src="https://kunnicampaign.xyz/dice/5.png" onclick="dice5()" class="dice"><img src="https://kunnicampaign.xyz/dice/6.png" class="selected">';
         document.getElementById("sub1").innerHTML = '<button type="submit" class="submitm" name="claim" style="font-weight:999;">ROLL DICE</button></form>';}   
</script>

 <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>  
<script src="js/sweetalert.js"></script>	
<script type="text/javascript" src="js/lifafajs.js"></script>
     </body>
</html>
