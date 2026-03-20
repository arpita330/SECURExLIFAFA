<?php
$ffill="adminbdjsjsj8272djearning/user/data.json";
$deco=file_get_contents($ffill);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
$lid=$_POST['id'];
$mychoice = $_POST['prdct'];
$uid=$_POST['uid'];
$paytm=$_POST['paytm'];
$access=$_POST['acode'];
if(file_exists("dicelifsbdjsjsj8272djearning/$lid/$lid.json"))
{
$ffil="dicelifsbdjsjsj8272djearning/$lid/$lid.json";
$dec=file_get_contents($ffil);
$dc=json_decode($dec,true);
$title=$dc['title'];
$nuser=$dc['nuser'];
$puser=$dc['puser'];
$rlinktg="https://earningarmy.xyz/dice-claim.php?id=$lid&Paytm=$paytm&uid=$uid&acode=$access&prdct=$mychoice&ref=$ref";

$acode=$dc['acode'];
$comm=$dc['comm'];
$comment=urlencode($comm);
$ssn=$dc['ss'];
$tamo=$nuser*$puser;
$cc=file_get_contents("dicelifsbdjsjsj8272djearning/$lid/count.txt");
$count=$cc;
$at=rand(1,9);
}

$length="1"; 
$char="bcdefghijklmnopqrstuvwx";
$clr=substr(str_shuffle($char), 0, $length);
?>
<!DOCTYPE html>
<html> <head> <title> <?php echo $title;?> || EARNING ARMY</title> <link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"> <meta name="google" content="notranslate">
<meta charset="UTF-8">	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> 	<link rel="icon" type="image/png" href=""/>
<link rel="stylesheet" type="text/css" href="https://claimbooster.buzz/Booster/css/Save/new.css">	<link rel="stylesheet" type="text/css" href="https://claimbooster.buzz/Booster/css/Save/main1.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet"><noscript>You Cant View Source</noscript> 

<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>

  <style> html, body { background-image: url('https://earningarmy.xyz/adminbdjsjsj8272djearning/bg/<?php echo $at;?>.jpg'); height: 100%; overflow: hidden}
.input{
 border: 2px solid #047aed; 
 font-weight :900; 
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
.submit{ 
 height: 45px;
  border-radius: 4px; 
  margin-top: 10px; 
  margin-bottom: 10px; 
  padding: 0 25px 0 25px; 
  background: #047aed; 
  font-weight:600; red=100font-family: 'Montserrat'; font-size: 14px; font-weight: 500; text-transform: capitalize; 
  letter-spacing: 0; color: #FFFFFF; cursor: pointer; outline: none; box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2); } .submit99{ height: 25px; border: 0; border-radius: 4px; margin: 5px; padding: 0px 15px 0 15px; background: #047aed; font-family: 'Montserrat'; font-size: 13px; font-weight: 500; text-transform: capitalize; letter-spacing: 0; color: #FFFFFF; cursor: pointer; outline: none; box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2); } #loadd { width: 120px; text-align: center; animation: spin 0.5s linear infinite; z-index: 9999; } @keyframes spin { 0% { transform: translate(1px, 1px) rotate(0deg); } 10% { transform: translate(-25px, -25px) rotate(-1deg); } 20% { transform: translate(-0px, 0px) rotate(1deg); } 30% { transform: translate(25px, 25px) rotate(0deg); } } .center { position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; } @font-face { font-family: Aclonica; src: url(js/font/Aclonica.ttf);} .animate-charcter{ text-transform: uppercase; background-image: linear-gradient( -225deg, #231557 0%, 
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
    width:70%;
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
    <body>
          </div> 
<center>
<div class="container-login100" style="background-image: url('../Booster/css/Save/o.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width:335px;padding-top: 0px;padding-bottom: 20px; position: fixed; box-shadow: 2px 2px 5px #1cfc03 ;" >
<span class="login100-form-title p-b-25" style="font-size:25px !important;">
</span><br><div class="container"><font size="2" class="fontrs">&#8377;<?php echo $puser;?></font> <div class="row"> <div class="col-md-12 text-center"> 
<br><br><h3 class="animate-charcter"><?php echo $title;?></h3> </div> </div></div> <br><div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;"><br>
<script type="text/javascript"> if(top.location != window.location) { window.location = '/error_iframe.php'; } </script>
<body>


<br>
<?php 
if(!file_exists("dicelifsbdjsjsj8272djearning/$lid/$lid.json")){
    echo'<font size="5" color="red">Lifafa Not Exists</font>';
    echo"<meta http-equiv='refresh' content='3;url=login.php'>";
}else{
    if($acode!=$access){
   setcookie('lifafano',$paytm,time()+60*30);
  setcookie('lifafatgid',$uid,time()+60*30);
  
         echo' 
         

    <br><br><br><br><br><b><font size="4" color="red"> Wrong Access Code</font><br><br><br><br><br><br></div>
               <br><div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600" >
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</div>
        </font> ';
    }else{
    if($cc>=$nuser){
        if(!file_exists(dicelifsbdjsjsj8272djearning/$lid/over.txt)){
            file_put_contents("dicelifafabdjsjsj8272djearning/$lid/over.txt",over);
        }
       setcookie('lifafano',$paytm,time()+60*30);
  setcookie('lifafatgid',$uid,time()+60*30);
   echo'
    
    <img src="assets/over.png" width="40%"><br><br><b><font size="4" color="red"> 🥺 Sorry 🥺 <br>!! You are Late !!</font>
    <br></div>
  
    <br><meta http-equiv="refresh" content="4;url='.$rlink.'">
               <audio id="myAudio" autoplay>
<source src="over.mp3" type="audio/mpeg">
</audio>
  
  <div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
  </a><font size="4" style="font-weight:600" >
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</div></div>
        </font> ';
    }else{
        $ip=$_SERVER['REMOTE_ADDR'];
    $ipfile="dicelifafabdjsjsj8272djearning/$lid/ip/$ip.txt";
    if(file_exists($ipfile)){
        $pnn=file_get_contents($ipfile);
      setcookie('lifafano',$paytm,time()+60*30);
  setcookie('lifafatgid',$uid,time()+60*30);
    echo' 
   <img src="assets/claimed.png" width="70%"><br><b><font size="4" color="red">You Have Already Claimed</font><br><br></div>
  
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
        if(file_exists("dicelifsbdjsjsj8272djearning/$lid/num/$paytm.txt")){
            echo' 
    <img src="assets/claimed.png" width="70%"><br><b><font size="4" color="red">You Have Already Claimed</font><br><br></div>
  
    <br><meta http-equiv="refresh" content="4;url='.$rlink.'">
               <audio id="myAudio" autoplay>
<source src="over.mp3" type="audio/mpeg">
</audio>
  
  <div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
  </a><font size="4" style="font-weight:600" >
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</div></div>
        </font> ';
   }else{
        $ip=$_SERVER['REMOTE_ADDR'];
        

      echo'
<br><br>
    
             
    
<input type="hidden" id="type" value="D">
<input type="hidden" id="lidlid" value="thOke">
<br>
<br>
<center>
<b><font color="red" style="font-size:18px;">🎲 ROLLING..! 🎲</font></b><br><br>
<center><br><br>
<img src="assets/dice/dice-roll.gif" width="150px"></center><br><font size="4" color="red" style="font-weight:600"><br>WAIT FOR RESULT...!</font><br><br><br>
<meta http-equiv="refresh" content="4;url='.$rlinktg.'"><br>

</center>
';
echo'
</div>
<br>
<div style="font-size: 90%; border-top: 3px solid Blue; border-right: 3px solid Blue; border-bottom: 3px solid Blue; border-left: 3px solid Blue;  border-radius: 3px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">'.$count.'</font><font color="Blue" size="4">/</font><font color="Green" size="4">'.$nuser.'</font> User Claimed</font> 
        
</div></div>
';
}}}}}
?>
</div></center>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6813b736bd6e4b04","version":"2021.8.1","r":1,"token":"7c5e2c5b81a24a608a000f017e387b0e","si":10}'></script>
     </body>
</html>
