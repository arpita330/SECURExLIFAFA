<?php
$user=$_GET['user'];
$emo = "\u{2B50}";
$emo1 = "\u{274C}";
$e2 = "\u{26A1}";
$e3 = "\u{20B9}";
$tg=file_get_contents("ntpc/$user/tg.txt");
$token=$_GET['token'];
$keyy=$_GET['key'];
$paytm=$_GET['paytm'];
$amount=$_GET['amount'];
$comment=$_GET['comment'];
$comm=urlencode($comment);
$type=$_GET['type'];
$nun=substr(str_shuffle("123456789012345678901234567890123456789012345"), 0, 19);
$le=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 7);
$o1="$le$nun";

$key="rvbyur/$user/gateway.json";
if(file_exists("$key"))
{
$deco=file_get_contents($key);
$dcd=json_decode($deco,true);
$tkn=$dcd['token'];
$keey=$dcd['key'];

$gtw=file_get_contents("ntpc/$user/gtw.txt");
if($gtw=="on"){
    $fund=file_get_contents("ntpc/$user/fund.txt");
    if($amount<=$fund){
if($tkn=="$token" and $keey=="$keyy"){
  
$link="https://earnfastpayments.com/api/walletpay/?paytm=$paytm&amount=$amount&comment=$comm&guid=FBBEA-A9974-85129-5676A&orderid=$o1";

$output=file_get_contents($link);
$dc=json_decode($output,true);
$code=$dcd['code'];
$msg=$dcd['message'];

$st1='{"status":"success","message":"Transaction accepted successfully","code":"PPT_200"}';
$st2='{"status":"failed","message":"Mobile Should between 10 to 10 numbers.","code":"PPT_400"}';
$st3='{"status":"failed","message":"Transaction amount Should contain digits between 1 to 100000 numbers.","code":"PPT_400"}';
$st4='{"status":"failed","message":"Your payout service currently OFF! please first ON the service to use this service! For change status to go account dashboard and open setting page","code":"PPT_400"}';
$st5='{"status":"failed","message":"Your mid,mkey and guid is invalid","code":"PPT_400"}';
$st10='{"status":"success","message":"Transfer Successful."}';
$st11='{"status":"failure","message":"Required Parameters Cannot Be Empty."}';
$st12='{"status":"failure","message":"Payment Failed."}';

if($output=="$st12"){$opt="Invalid Number"; echo"$opt";
            $tex5='*'.$emo1.' FAILED PAYMENT ALERT '.$emo1.'*

'.$e2.' *Type* : '.$type.'

'.$e2.' *Paytm Number* : `'.$paytm.'`

'.$e2.' *Amount* : '.$e3.''.$amount.'

'.$e2.' *Fail Reason* : Invalid Number
 ';
 $text5=urlencode("$tex5");
 
 $url905='https://api.telegram.org/bot5284660824:AAEZzGgaglr1Rzfh2comltEIWx9RmSSFb_o/sendMessage?chat_id='.$tg.'&text='.$text5.'&parse_mode=markdown';
 file_get_contents($url905);
}
if($output=="$st11"){$opt="Invalid Amount"; echo"$opt";
            $tex6='*'.$emo1.' FAILED PAYMENT ALERT '.$emo1.'*

'.$e2.' *Type* : '.$type.'

'.$e2.' *Paytm Number* : `'.$paytm.'`

'.$e2.' *Amount* : '.$e3.''.$amount.'

'.$e2.' *Fail Reason* : Invalid Amount
 ';
 $text6=urlencode("$tex6");
 
 $url906='https://api.telegram.org/bot5284660824:AAEZzGgaglr1Rzfh2comltEIWx9RmSSFb_o/sendMessage?chat_id='.$tg.'&text='.$text6.'&parse_mode=markdown';
 file_get_contents($url906);
} 
if($output=="$st4"){$opt="Gateway Off"; echo"$opt";}
if($msg=="Your mid,mkey and guid is invalid"){$opt="Invalid Keys"; echo"$opt";}
if($code=="PPT_000"){$opt="Admin have insufficient balance"; echo"$opt";}

if($output=="$st10"){$opt="Success";
$nfund=$fund-$amount;
file_put_contents("ntpc/$user/fund.txt",$nfund);

date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-y h:i:s A');
$pth="ntpc/$user/transactions.txt";
$tid=file_get_contents("tid.txt");
$acc='1';
$co=$tid+$acc;
file_put_contents("tid.txt",$co);
$nnnn='{"tid":"'.$tid.'","oid":"'.$paytm.'","time":"'.$time.'","amount":"'.$amount.'","type":"'.$type.'"}';
if (file_exists($pth)){
    $pth1=file_get_contents($pth);
$nn=''.$nnnn.'+'.$pth1.'' ;
    file_put_contents("$pth",$nn);
}
else
{
file_put_contents("$pth",$nnnn);

}

$pth11="ntpc/$user/payments.txt";
$nnnn1='{"tid":"'.$tid.'","payment":"'.$paytm.'","time":"'.$time.'","amount":"'.$amount.'","type":"'.$type.'"}';
if (file_exists($pth11)){
    $pth1111=file_get_contents($pth11);
$nn11=''.$nnnn1.'+'.$pth1111.'' ;
    file_put_contents("$pth11",$nn11);
}
else
{
file_put_contents("$pth11",$nnnn1);
 

}
$npm='{"payment":"'.$paytm.'","time":"'.$time.'","amount":"'.$amount.'","type":"'.$type.'"}';
file_put_contents("pmnts/$tid.txt",$npm);

 $tex2='*'.$emo.' NEW PAYMENT ALERT '.$emo.'*

'.$e2.' *Type* : '.$type.'

'.$e2.' *Paytm Number* : `'.$paytm.'`

'.$e2.' *Amount* : '.$e3.''.$amount.'

'.$e2.' *Transaction id* : `'.$tid.'`

'.$e2.' *Wallet Balance* : '.$e3.''.$nfund.'
 ';
 $text2=urlencode("$tex2");
 
 $url900='https://api.telegram.org/bot5284660824:AAEZzGgaglr1Rzfh2comltEIWx9RmSSFb_o/sendMessage?chat_id='.$tg.'&text='.$text2.'&parse_mode=markdown';

$headers[]='user-agent: Mozilla/5.0 (Linux; Android 10; TECNO KE6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36';

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url900);
curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


    $outpur=curl_exec($ch);
    
     $tex23='*'.$emo.' NEW PAYMENT ALERT '.$emo.'*

'.$e2.' *User* : `'.$user.'`

'.$e2.' *Type* : '.$type.'

'.$e2.' *Paytm Number* : `'.$paytm.'`

'.$e2.' *Amount* : '.$e3.''.$amount.'

'.$e2.' *Transaction id* : `'.$tid.'`

'.$e2.' *Wallet Balance* : '.$e3.''.$nfund.'
 ';
 $text23=urlencode("$tex23");
 
 $url90023='https://api.telegram.org/bot5306005770:AAGVO2o0vLvG15Vv8uAu9L4OqUb9B-BQpFk/sendMessage?chat_id=668740508&text='.$text23.'&parse_mode=markdown';

file_get_contents($url90023);
    
$nnc='{"tid":"'.$tid.'","oid":"'.$paytm.'","time":"'.$time.'","amount":"'.$amount.'"}';
file_put_contents("trsncss/$tid.txt",$nnc);

echo"$opt";}







}
else{
 echo"invalid key details";   
    }}else{echo"insufficient Balance";
        $tex3='*'.$emo1.' FAILED PAYMENT ALERT '.$emo1.'*

'.$e2.' *Type* : '.$type.'

'.$e2.' *Paytm Number* : `'.$paytm.'`

'.$e2.' *Amount* : '.$e3.''.$amount.'

'.$e2.' *Wallet Balance* : '.$e3.''.$fund.' 

'.$e2.' *Fail Reason* : insufficient Balance
 ';
 $text3=urlencode("$tex3");
 
 $url901='https://api.telegram.org/bot5284660824:AAEZzGgaglr1Rzfh2comltEIWx9RmSSFb_o/sendMessage?chat_id='.$tg.'&text='.$text3.'&parse_mode=markdown';
 file_get_contents($url901);
    }}else{echo"Gateway off";
        $tex4='*'.$emo1.' FAILED PAYMENT ALERT '.$emo1.'*

'.$e2.' *Type* : '.$type.'

'.$e2.' *Paytm Number* : `'.$paytm.'`

'.$e2.' *Amount* : '.$e3.''.$amount.'

'.$e2.' *Fail Reason* : Gateway off
 ';
 $text4=urlencode("$tex4");
 
 $url902='https://api.telegram.org/bot5284660824:AAEZzGgaglr1Rzfh2comltEIWx9RmSSFb_o/sendMessage?chat_id='.$tg.'&text='.$text4.'&parse_mode=markdown';
 file_get_contents($url902);
    }}
else
{
    echo"invalid response";
}


?>