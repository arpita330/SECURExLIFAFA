<?php
$id=$_GET['id'];
$coo=$_COOKIE['tgid'];
$coloo= rand(1,7);
   $ip=$_SERVER['REMOTE_ADDR'];

$file100="tslifbdjsjsj8272djearning/l/$id.json";
if(file_exists($file100)){}else{
echo'
<body><div id="formContent">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> 
<br><br><br><br><br><br><br><br><br><center><div style="font-size: 90%; width: 70%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
<font color="brown" style="font-weight:600;">
	<img src="https://kunnicampaign.xyz/image/files/notexists.png" style="width: 130px; height: 190px;">
	<br><marquee behaviour="Alternate" bgcolor="orange"><h3>Lifafa Id Not Exist</h3></marquee>
         </center>
         </div><center><div style="margin-top:10px; width: 70%; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;"><b><font size="4" color="black"><font color="red">₹<font id="usercount">0</font></font>/<font color="blue">₹</font> Claimed</font></b></div></center></body>
';
return;
}
$data=file_get_contents($file100);
$json=json_decode($data,true);
$title=$json['title'];
$comment=$json['comment'];
$tgid=$json['tgid'];
$peruser=$json['peruser'];
$userr_code=$json['userr_code'];
$userr=$json['userr'];
$urls=$json['url'];
$access=$json['access'];
$username=$json['user'];
$advanced=$json['advanced'];
$tgg=file_get_contents("ntpcbdjsjsj8272djearning/$username/tg.txt");
$dcb=json_decode($tgg,true);
$channel=$dcb['channel1'];
$channel2=$dcb['channel2'];
$channel3=$dcb['channel3'];
$channel4=$dcb['channel4'];

$total=$json['total'];
$ppjj=$json['user'];
$clid=rand(111111,999999);
$at = rand(1,23);

$totalclaim=file_get_contents("tslifbdjsjsj8272djearning/claimuser/$id.txt");
$collect=file_get_contents("tslifbdjsjsj8272djearning/count/$id.txt");
$comi = str_replace(' ', '%20', $comment);
$un=urlencode($channel);

$comi = str_replace(' ', '%20', $comment);
$un=urlencode($channel);
function RemoveSpecialChar($channel)
{
    $res = preg_replace('/[@\.\;\" "]+/', '', $channel);
    return $res;
}
$str1 = $channel;
$str2 = $channel2;
$str4= $channel4;
$str3 = $channel3;

$url="https://api.telegram.org/bot5769017517:AAHlBj1xIuvinghb3GY4NjT3MKTQJYFxvA8/getChatMember?chat_id=@$channel&user_id=$coo";
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
$url2="https://api.telegram.org/bot5769017517:AAHlBj1xIuvinghb3GY4NjT3MKTQJYFxvA8/getChatMember?chat_id=@$channel2&user_id=$coo";
$ch1=curl_init();
curl_setopt($ch1,CURLOPT_URL,$url2);
curl_setopt($ch1,CURLOPT_POST,1);

curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch1,CURLOPT_SSL_VERIFYPEER,false);

$output2=curl_exec($ch1);
$json2=json_decode($output2,true);

curl_close($ch1);


$ok2=$json2["ok"];
$usern=$json2["result"]["user"]["username"];
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

$jydu="https://api.telegram.org/bot5769017517:AAHlBj1xIuvinghb3GY4NjT3MKTQJYFxvA8/getChatMember?chat_id=@$channel3&user_id=$coo";
$jydch1=curl_init();
curl_setopt($jydch1,CURLOPT_URL,$jydu);
curl_setopt($jydch1,CURLOPT_POST,1);

curl_setopt($jydch1,CURLOPT_RETURNTRANSFER,1);

curl_setopt($jydch1,CURLOPT_SSL_VERIFYPEER,false);

$output2p=curl_exec($jydch1);
$json55=json_decode($output2p,true);

curl_close($jydch1);


$ok5=$json55["ok"];
$status3=$json55["result"]["status"];
$statuss3=$json55["error_code"];

if($ok5=="true"){
if($status3=="creator" xor $status3=="administrator" xor $status3=="member" ){
$sts3="Verified";
}
if($status3=="left"){
$sts3="You Have Not Joined the Channel";
}}else{
$sts3= "Admin has removed bot from Admin";
}}
if($channel4){
$jydnn="https://api.telegram.org/bot5769017517:AAHlBj1xIuvinghb3GY4NjT3MKTQJYFxvA8/getChatMember?chat_id=@$channel4&user_id=$coo";
$jydnn1=curl_init();
curl_setopt($jydnn1,CURLOPT_URL,$jydnn);
curl_setopt($jydnn1,CURLOPT_POST,1);

curl_setopt($jydnn1,CURLOPT_RETURNTRANSFER,1);

curl_setopt($jydnn1,CURLOPT_SSL_VERIFYPEER,false);

$outputnp=curl_exec($jydnn1);
$json5nn=json_decode($outputnp,true);

curl_close($jydnn1);


$oknn=$json5nn["ok"];
$status4=$json5nn["result"]["status"];
$statuss4=$json5nn["error_code"];

if($oknn=="true"){
if($status4=="creator" xor $status4=="administrator" xor $status4=="member" ){
$stts4="Verified";
}
if($status4=="left"){
$stts4="You Have Not Joined the Channel";
}}else{
$stts4= "Admin has removed bot from Admin";
}
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title> <?php echo $title;?> || EARNING ARMY</title>
      <meta content="You have recieved a Lifafa , Tap to claim it" name="description">
        <meta name="google" content="notranslate">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://i.ibb.co/QdcmRfg/20220519-120801.jpg" rel="icon" type="image/x-icon"> 

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/new.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
        <style>
        html, body { background-image: url('https://jydlifafa.xyz/lfimages/<?php echo $coloo;?>.jpg'); height: 100%; overflow: hidden}
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
    padding:50px;
    color:Green;
animation: flicker 0.1s infinite alternate;     
}



/* Animate neon flicker */
@keyframes flicker {
    
    0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {  }
    
    20%, 24%, 55% {        
        text-shadow: none;
        box-shadow: none;
    }    
}
.neon{
     padding:50px;
    color:Green;
animation: flicker 0.1s infinite alternate; 
}



.fontrs { position: absolute
; 
top: -20px; right: -20px;
 color: white; padding-top: 30px; padding-right: 30px; border-radius: 50px; 
padding-bottom: 15px;
 padding-left: 15px; 
 animation: coloranim 20s infinite; box-shadow: 2px 2px 5px #000 ; 
} 
.submit99{
        height: 25px;
        border: 0;
        border-radius: 4px;
        margin: 5px;
        padding: 0px 15px 0 15px;
        background: #047aed;
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

.toss {
width:80px;
margin-right:5px;
margin-left:5px;
}

.selected {
width:85px;
border:solid blue 5px;
border-radius:5px;
margin-right:5px;
margin-left:5px;
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


        </style>
    </head>
    <body>
          <img src='https://i.ibb.co/yqdcgjF/IMG-20221203-231651.jpg' id='loadd'class='center'></div> 
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
<center>

<div class="container-login100" style="background-image: url('admin/bg/<?php echo$clr;?>.jpg');
padding-bottom:100%;">

<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width:400px;padding-top: 0px;padding-bottom: 20px; position: fixed; top:25%;">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>
<br>

<?php 

if(!file_exists($file100)){
    echo'<font size="5" color="red">INVALID LIFAFA</font>';
    echo"<meta http-equiv='refresh' content='3;url=home.php'>";
    return;
}

if(!$_POST){
    if($advanced=="yes"){
if(!$coo){

echo' <div style="font-size: 90%; border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 1px; padding: 10px;"><input class="input" id="num"  input type="tel" name="num"  placeholder="Enter Paytm Number" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" value="" required>
<input class="input" id="acode"  input type="text" name="acode"  placeholder="Enter Access Code"required>';

echo"<a href='http://telegram.dog/IP_AREA_tossverifier_bot?start=$id'><button class='submit' style='font-weight:999'> VERIFY </button></a><a href='http://telegram.dog/$str1'>";
		echo"		<font color='red'size='3'><br>AFTER VERIFY </font><br>
		
	 <a href='https://ip-area.xyz/toss.php?id=$id&tg=$coo'><button class='submitt'> Refresh</button></a></div>
	";
	$tgi=$_GET['tg'];
setcookie('tgid',$tgi,time()+60*60*24*365);

return;
}
if($sts=="Admin has removed bot from Admin"){
echo'
<div class="content">
 <font size="6" class="neon">'.$title.'</font></div>
<div style="font-size: 90%; border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 echo'<font size="4" color="red">Bot Removed ❌</font>';
 return;
 
}
if($sts2=="Admin has removed bot from Admin"){
echo'
<div class="content">
 <font size="6" class="neon">'.$title.'</font></div>
<div style="font-size: 90%; border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 1px; padding: 10px;">
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 echo'<font size="4" color="red">Bot Removed ❌</font>';
 return;
 
}
if($sts3=="Admin has removed bot from Admin"){
echo'
<div class="content">
 <font size="6" class="neon">'.$title.'</font></div>
<div style="font-size: 90%; border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 echo'<font size="4" color="red">Bot Removed ❌</font>';
 return;
 
}
if($stts4=="Admin has removed bot from Admin"){
echo'
<div class="content">
 <font size="6" class="neon">'.$title.'</font></div>
<div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 echo'<font size="4" color="red">Bot Removed ❌</font>';
 return;
 
}

if($status=="left"){
echo'
<div class="content">
 <font size="6" class="neon">'.$title.'</font></div>
<div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 

	
if($status=="left"){
	echo"<a href='http://telegram.dog/$str1'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 1</a>";
	

}
if($status2=="left"){
echo"<a href='http://telegram.dog/$str2'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 2</a>";
	
}

if($status3=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 3</a>";
}

if($status4=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 4</a>";
}
    return;
}

if($status2=="left"){
echo' <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
  
 <font size="4" class="neon">'.$title.'</font><br><br>
<br><br><div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 

	
if($status=="left"){
	echo"<a href='http://telegram.dog/$str1'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 1</a>";
	

}
if($status2=="left"){
echo"<a href='http://telegram.dog/$str2'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 2</a>";
	
}

if($status3=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 3</a>";
	

}
if($status4=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 4</a>";
}
    return;
}

if($status3=="left"){
echo' <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
  
 <font size="4" class="neon">'.$title.'</font><br><br>
<br><br><div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 

	
if($status=="left"){
	echo"<a href='http://telegram.dog/$str1'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 1</a>";
	

}
if($status2=="left"){
echo"<a href='http://telegram.dog/$str2'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 2</a>";
	
}

if($status3=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 3</a>";
	

}
if($status4=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 4</a>";
}
    return;
}
if($status4=="left"){
echo' <div style="font-size: 90%; border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 1px; padding: 10px;">
  
 <font size="4" class="neon">'.$title.'</font><br><br>
<br><br><div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" placeholder="Enter Paytm Number" required>';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}
 
 

	
if($status=="left"){
	echo"<a href='http://telegram.dog/$str1'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 1</a>";
	

}
if($status2=="left"){
echo"<a href='http://telegram.dog/$str2'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 2</a>";
	
}

if($status3=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 3</a>";
	

}
if($status4=="left"){
echo"<a href='http://telegram.dog/$str3'><button type='text' class='submit99' style='font-weight:999' required readonly>JOIN CHANNEL 4</a>";
}}}

    if($total<=$totalclaim){
   
        echo' <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">

        
        <font size="4" class="neon">'.$title.'</font><br><br><br><br>
        
        <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
        
        <img src="https://infotecharmy.in/lifafa/over.png" width="50%"><br><br><br><font size="4" color="red"> Lifafa is Over !!</font><meta http-equiv="refresh" content="3;url='.$urls.'"></div><br><br><br><br>
               <a href="https://telegram.dog/'.$str1.'"> <img src="telegram.png" style="width:10%;
     right:1px;
  bottom: 10%;
  position: fixed;"></a><div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">&#8377;'.$totalclaim.'</font>
        <font color="Black" size="4">/</font>
        <font color="Green" size="4">&#8377;'.$total.'</font> Claimed
        </font>  ';
    }else{
     
$ipfile="tslif/claim/$id/$ip.txt";
    if(file_exists($ipfile)){
        
        echo' <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
        <font size="4" class="neon">'.$title.'</font><br><br><img src="https://infotecharmy.in/lifafa/claimed.png" width="50%"><br><br><font size="4" color="red"> You Have Already Claimed<br>
               
      <meta http-equiv="refresh" content="3;url='.$urls.'">
        </font><br><br><br><br> <br>  
     
'; 
    }else
    {
        if($access){
            
     echo'
  ';}else
  {
 echo'
       ';}echo'
  
  <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
  
 <font size="4" class="neon">'.$title.'</font><br><br>
<br><br><div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    
    <form method="POST" action="">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="number"  style="font-weight:999;" class="input" name="paytm" value="'.$paytmn.'" placeholder="Enter Paytm Number" required>

<div id="coin">

         <input type="hidden" name="prdct" required> 
         
      
        <img src="assets/toss/2.png" onclick="first()" class="toss">
         <img src="assets/toss/1.png"  onclick="tail()" class="toss"> </div><br>
        ';
    if($access){
        echo'
 <input type="text"  style="font-weight:999;" class="input" name="acode" placeholder="Access Code" required>';}else{
 echo'
 <input type="hidden" name="access" value="">';}

 if($advanced=="yes"){
   
         if($sts=="Verified"){
     echo'
    <button type="submit" class="submit" name="submit" style="font-weight:999;">CLAIM &#8377;'.$peruser.'</button></form><br><font size="3" color="green"> <b>Verified- '.$fn.' '.$ln.' &#9989; </b></font><br>';}
         
       
     
 }else{
     echo'
   
    <button type="submit" class="submit" name="submit" style="font-weight:999;">CLAIM &#8377;'.$peruser.'</button></form>';}
 }

echo'
</div><br><br>

<div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
    <font size="4" style="font-weight:600">
        <font color="red" size="4">&#8377;'.$totalclaim.'</font>
        <font color="Black" size="4">/</font>
        <font color="Green" size="4">&#8377;'.$total.'</font> Claimed
        </font> 
</div>
';}}
if($_POST){
  $acode=$_POST['acode']; 
   $num=$_POST['paytm']; 
   $mychoice=$_POST['prdct'];
   
$totalclaim=file_get_contents("tslif/claimuser/$id.txt");
$collect=file_get_contents("tslif/count/$id.txt");
$comi = str_replace(' ', '%20', $comment);



    $coofile="tslif/claim/$id/$coo.txt";
    $claimfile="tslif/claim/$id/$num.txt";
    
    if(file_exists($claimfile)){
        
      echo' <div style="font-size: 90%; border-top: 3px solid Orange; border-right: 3px solid Blue; border-bottom: 3px solid Green; border-left: 3px solid Blue;  border-radius: 1px; padding: 10px;">
        <font size="4" class="neon">'.$title.'</font><br><br><img src="https://infotecharmy.in/lifafa/claimed.png" width="50%"><br><br><font size="4" color="red"> You Have Already Claimed<br>
               
      <meta http-equiv="refresh" content="3;url='.$urls.'">
        </font><br><br><br><br> <br>  
    
'; 
 return;
    }
if($total<=$totalclaim){
echo'
<div style="margin-top:10px; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;">
    <img src="https://infotecharmy.in/lifafa/over.png" width="50%"><br><br><br><br><b><font size="4" color="red"> Lifafa Over<br><font size="5" color="blue"> <?php echo $claimfile;?></font></font></b><font size="4" color="red"></div><br><br>

</font></div><div style="margin-top:10px; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;"><b><font size="4" color="black"><font color="red">₹<font id="usercount">'.$totalclaim.'</font></font>/<font color="blue">₹'.$total.'</font> Claimed</font></b></div><meta http-equiv="refresh" content="5;url='.$urls.'">';

	echo"<meta http-equiv='refresh' content='2;url=http://telegram.dog/$str1'>";
return;
}


if ($acode!=$access) {	
    echo'<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
    <br><br>
    
    
    
    
<input type="hidden" id="type" value="N">
 <input type="hidden" id="lidlid" value="cFN8D">
<input type="hidden" id="number" value="8591790611"><b><br><br><br><font color="red" size="4">WRONG ACCESS CODE</font><br><br><br><br><br><br></b>

</div><div style="margin-top:10px; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;"><b><font size="4" color="black"><font color="red">₹<font id="usercount">'.$totalclaim.'</font></font>/<font color="blue">₹'.$total.'</font> Claimed</font></b></div>
  ';
      echo"<meta http-equiv='refresh' content='100'>";
  
      
      return;
}
if ($acode==$access) {	
if(file_exists($claimfile)){
echo'
<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
    <br><br>
    
    
    
    
<input type="hidden" id="type" value="N">
 <input type="hidden" id="lidlid" value="FVjsf">
<input type="hidden" id="number" value="8591790611"><br><br><img src="https://infotecharmy.in/lifafa/claimed.png" width="50%"><br><br><br><br><b><font size="4" color="red"> You Already Claimed<br><font size="5" color="blue"> <?php echo $claimfile;?></font></font></b><font size="4" color="red"><br><br>

</font></div>'; 
echo'<audio autoplay="autoplay" src="https://jydlifafa.xyz/limages/Congo.mp3">
 	  	<div id="simpleToast">
  <i class="fas fa-exclamation-triangle"></i><span id="message"></span>
</div>';

return;
}
if(file_exists($ipfile)){
	echo'
<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
    <br><br>
    
    
    
    
<input type="hidden" id="type" value="N">
 <input type="hidden" id="lidlid" value="FVjsf">
<input type="hidden" id="number" value="8591790611"><br><br><img src="https://infotecharmy.in/lifafa/claimed.png" width="50%"><br><br><br><br><b><font size="4" color="red"> You Already Claimed<br><font size="5" color="blue"> <?php echo $claimfile;?></font></font></b><font size="4" color="red"><br><br>

</font></div>'; 


return;

}
if(file_exists($coofile)){
	echo'
<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
    <br><br>
    
    
    
    
<input type="hidden" id="type" value="N">
 <input type="hidden" id="lidlid" value="FVjsf">
<input type="hidden" id="number" value="8591790611"><br><br><img src="https://infotecharmy.in/lifafa/claimed.png" width="50%"><br><br><br><br><b><font size="4" color="red"> You Already Claimed<br><font size="5" color="blue"> <?php echo $claimfile;?></font></font></b><font size="4" color="red"><br><br>

</font></div>'; 


return;

}

    $r=rand(1,2);

if(!$mychoice){
	$radio = "1";
	}else{
		$radio = $mychoice;
		} 
if($radio!=$r){
           echo'<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
              <div effect="ripple" class="dashcarda rupees"> <center><img src="assets/toss/toss.gif" style="width: 150px; height: 150px;" data-src="assets/toss/'.$r.'.png" id="autoClickBtn"> </center>
<h2 id="resultClass" class="fw-bold m-3 alert info" style="border-radius: 50px; font-size: 14px;">Getting Result In <div id="count" style="display: inline-flex;">3</div>s</h2></div>

<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
<br><font size="4" color="red" style="font-weight:600"><br>Wrong Prediction</font></div><br>

 <script>
    document.querySelectorAll("img").forEach((item) => {
  item.addEventListener("click", (event) => {
    const image = event.target.getAttribute("data-src");
    event.target.setAttribute("src", image);
  });
});


</script>


';

    $msgt='❌ DICE LIFAFA ❌

⚡ Paytm Number : '.$num.'

⚡ Amount : ₹'.$peruser.'

⚡ User : '.$fn.''.$ln.'

⚡ Total Users : '.$total.'

⚡ TG Username: '.$usern.'

⚡ Ip : '.$ip.'

⚡ Lifafa id : `'.$userr_code.'`

⚡ CLAIM ID : '.$clid.'

⚡ SELECTED : '.$mychoice.'

⚡ Claimed: ₹'.$count.'/₹'.$total.'' ;
 $tes=urlencode($msgt);
 
 
 
 $url99='https://api.telegram.org/bot/sendMessage?chat_id=5200072125&text='.$tes.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     

$msgtt='❌ *FAILED PREDICTION* ❌

⚡ User : '.$fn.''.$ln.'

⚡ Lifafa id : `'.$userr_code.'`

⚡ SELECTED : '.$mychoice.'

⚡ Claimed : ₹'.$totalclaim.'/₹'.$total.'' ;
 $tess=urlencode($msgtt);
 
 
 
 $url999='https://api.telegram.org/bot/sendMessage?chat_id='.$tgid.'&text='.$tess.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url999);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);
		   
 mkdir("tslif/claim/$id");

file_put_contents("tslif/claim/$id/$ip.txt",$claim6);
file_put_contents("tslif/claim/$id/$num.txt",$claim6);

}else{

		   
 mkdir("tslif/claim/$id");

$claim6=$totalclaim+$peruser;
file_put_contents("tslif/claimuser/$id.txt",$claim6);
file_put_contents("tslif/claim/$id/$ip.txt",$claim6);
file_put_contents("tslif/claim/$id/$num.txt",$claim6);

$count=$collect+1;
file_put_contents("tslif/count/$id.txt",$count);
//gateway here 
$urlen=urlencode($title);
$urlenc=urlencode($urls);
$url="https://full2sms.in/api/v1/disburse/paytm?mid=JWB&mkey=fmE&guid=gh&amount=$peruser&mobile=$num&info=$comi";


$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
     curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


    $output=curl_exec($ch);
    

    curl_close($ch);
    echo' 
<div style="font-size: 90%; border-top: 3px solid blue; border-right: 3px solid blue; border-bottom: 3px solid red; border-left: 3px solid red;  border-radius: 3px; padding: 10px;">
            <div effect="ripple" class="dashcarda rupees"> <center><img src="assets/toss/toss.gif" style="width: 150px; height: 150px;" data-src="assets/toss/'.$r.'.png" id="autoClickBtn"> </center>
<h2 id="resultClass" class="fw-bold m-3 alert info" style="border-radius: 50px; font-size: 14px;"> <div id="count" style="display: inline-flex;">3</div>s</h2>
<br><img src="https://infotecharmy.in/lifafa/yay.gif" width="60%">
</div><br><font size="4" style="font-weight:600"><br>Congrats!!! You have won <font color="green">₹'.$peruser.' Paytm Cash</font>, Successfully sent to <font color="green">'.$num.'</font></font><br>
<meta http-equiv="refresh" content="6;url='.$urls.'"><br>


</div></div>
  <center><div style="margin-top:10px; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;"><b><font size="4" color="black"><font color="red">₹<font id="usercount">'.$count.'</font></font>/<font color="blue">₹'.$total.'</font> Claimed</font></b></div></center></div>
  
 <script>
    document.querySelectorAll("img").forEach((item) => {
  item.addEventListener("click", (event) => {
    const image = event.target.getAttribute("data-src");
    event.target.setAttribute("src", image);
  });
});


</script>

';
echo'<audio autoplay="autoplay" src="https://jydlifafa.xyz/limages/Congo.mp3">
 	  	<div id="simpleToast">
  <i class="fas fa-exclamation-triangle"></i><span id="message"></span>
</div>';
    $msgt='⭐  CLAIMED LIFAFA ⭐

⚡ Paytm Number : '.$num.'

⚡ Amount : ₹'.$peruser.'

⚡ User : '.$fn.''.$ln.'

⚡ Total Users : '.$total.'

⚡ TG Username: '.$usern.'

⚡ Ip : '.$ip.'

⚡ Lifafa id : `'.$userr_code.'`

⚡ CLAIM ID : '.$clid.'

⚡ SELECTED : '.$mychoice.'

⚡ Claimed: ₹'.$count.'/₹'.$total.'' ;
 $tes=urlencode($msgt);
 
 
 
 $url99='https://api.telegram.org/botw/sendMessage?chat_id=5200072125&text='.$tes.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url99);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     

$msgtt='⭐ *LIFAFA CLAIMED* ⭐

⚡ User : '.$fn.''.$ln.'

⚡ CLAIM ID : '.$clid.'

⚡ Amount : ₹'.$peruser.'

⚡ Lifafa id : `'.$userr_code.'`

⚡ SELECTED : '.$mychoice.'

⚡ Claimed : ₹'.$count.'/₹'.$total.' 
';


 $tess=urlencode($msgtt);
 
 
 
 $url999='https://api.telegram.org/bot5/sendMessage?chat_id='.$tgid.'&text='.$tess.'&parse_mode=markdown';
$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url999);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output=curl_exec($ch);     

}}
}
?>
<script>
    
    function first() {
        document.getElementById("coin").innerHTML = '<input type="hidden" name="prdct" value="2" required><img src="assets/toss/2.png" class="selected"><img src="assets/toss/1.png" onclick="tail()" class="toss">';
}
  
function tail() {
        document.getElementById("coin").innerHTML = '<input type="hidden" name="prdct" value="1" required><img src="assets/toss/2.png" onclick="first()" class="toss"><img src="assets/toss/1.png" class="selected">';
         }
        
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
var rangeslider = document.getElementById("sliderRange");
var output = document.getElementById("demo");
output.innerHTML = rangeslider.value;

rangeslider.oninput = function() {
output.innerHTML = this.value;
}
</script>
</body>
</html>
   
