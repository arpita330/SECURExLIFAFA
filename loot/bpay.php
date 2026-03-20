<?php

if($_GET){
 


$amount=$_GET['amount'];
$comment=$_GET['comment'];
$paytm=$_GET['mob'];
$user=$_GET['session'];
$domain=$_SERVER['SERVER_NAME'];
$file2tg="A/gtw.txt";
$zaker2tg=file_get_contents($file2tg);
$jsotg=json_decode($zaker2tg,true);
$addad=$jsotg['add'];
$withdrawad=$jsotg['withdraw'];
$lifafaad=$jsotg['lifafa'];

 	$file1="Kkhbdjjdjdbdnuedjksjdkuuennibsjsaa/$user.json";
$zaker1=file_get_contents($file1);
$jso1=json_decode($zaker1,true);
$baggl=$jso1['bal'];
$bal=file_get_contents("ntpcbdjsjsj8272djearning/$user/fund.txt");
$tgid=file_get_contents("ntpcbdjsjsj8272djearning/$user/bot.txt");

$file3="Jjabdjjdjdbdndeyjksjdeukunnibsjs/$user.json";
$zaker3=file_get_contents($file3);
$jso3=json_decode($zaker3,true);
$tgiued=$jso3['tgid'];
$oid =rand(1111111111111,9999999999999);
$urlenc=urlencode($comment);
$toid = rand(11111,99999);
$ooid = rand(11111111,999999999);
$ltoid = rand(11111,99999);
$looid = rand(111111111,999999999);
date_default_timezone_set('Asia/Kolkata');
  $time = date('d-M h:i A');
  


$zaker="ntpcbdjsjsj8272djearning/$user/fund.txt";

if(file_exists($zaker)){
            
        
$file2="Kkhbdjjdjdbdneudjksjdeuejkunnibsjsaa/$user.json";
$zaker2=file_get_contents($file2);
$jso=json_decode($zaker2,true);
$baeyl=$jso['bal'];
$file3="Jjabdjjdjdbdnurdjksjdkunnibsjs/$user.json";
$zaker2=file_get_contents($file3);
$jso=json_decode($zaker2,true);
$urlenc=urlencode($comment);
$tgiued=$jso['tgid'];

if($amount<'1'){
 
echo'{"status":"failed","payment":"failed","message":"negetivebalance"}';
 
 return;
}

if($bal<$amount){
 
 
echo'
<div style=" padding:10px; background: white; border-top:2px solid blue; border-right:2px solid blue; border-bottom:2px solid blue; border-left:2px solid blue; border-radius:5px;"><b>
 <font color="black" size="3">Paytm Number: <font color="red">'.$paytm.'</font><br>
 <font color="black" size="3">Amount: <font color="blue">₹'.$amount.'</font><br>
 <font color="black" size="3">Status: <font color="red">Failed</font></font></font></font></b><font size="3">
 
 </font></div>
 <br>';

 
 return;
}

if($bal>=$amount){
	
	$ffl="ntpcbdjsjsj8272djearning/$user/fund.txt";
$fun=file_get_contents("$ffl");
$afund=$bal-$amount;
file_put_contents("$ffl",$afund);

	$pth="ntpcbdjsjsj8272djearning/$user/payments.txt";
$nnnn='{"tid":"'.$toid.'","payment":"'.$paytm.'","time":"'.$time.'","amount":"'.$amount.'","type":"paytouser"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);
}

$updatedbal=$bal-$amount;
    
    fopen("Kkhbdjjdjdbdndjksjdjdkunnieubsjsaa/$user.json",'a');
$hiddencoder5='{"bal":"'.$updatedbal.'"}';

file_put_contents("Kkhbdjjdjdbdnduejkdusjeudkunnibsjsaa/$user.json",$hiddencoder5);
fopen("A/gtw.txt",'a');
$withdrawada=$withdrawad+$amount;
$hiddencoder10tg='{"add":"'.$addad.'","withdraw":"'.$withdrawada.'","lifafa":"'.$lifafaad.'"}';
file_put_contents("A/gtw.txt",$hiddencoder10tg);

	$url="https://kunnicampaign.xyz/pay.php?mid=VTFVMVJWWlJQVDA9&mkey=17E56F7F28VV89V&amount=$amount&mob=$paytm&comment=$urlenc&type=Panel_Withdraw";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
     curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


    $output=curl_exec($ch);

    curl_close($ch);
    
    
   
 
$msgt='⚠️ *USER WITHDRAW ALERT* ⚠️

🔰 *User :-* `'.$user.'`

✅ *Paytm Number :* `'.$paytm.'`

💶 *Amount :* ₹`'.$amount.'`

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

$msgt5='⚠️ *NEW WITHDRAW ALERT* ⚠️

✅ *Paytm Number :* `'.$paytm.'`

💶 *Amount :* ₹'.$amount.'

📟 *Transaction id :* `'.$toid.'`

💰 *Wallet Balance :* ₹'.$afund.'
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
<div style=" padding:10px; background: white; border-top:2px solid blue; border-right:2px solid blue; border-bottom:2px solid blue; border-left:2px solid blue; border-radius:5px;"><b>
 <font color="black" size="3">Paytm Number: <font color="red">'.$paytm.'</font><br>
 <font color="black" size="3">Amount: <font color="blue">₹'.$amount.'</font><br>
 <font color="black" size="3">Status: <font color="green">Success</font></font></font></font></b><font size="3">
 
 </font></div>
 <br>';
}else{
	echo'{"status":"failed","message":"EnterPositiveAmount"}';
}
	
}

}
?>