<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['user'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
    }
    $key="rvbyurbdjsjsj8272djearning/$session/gateway.json";
$deco=file_get_contents($key);
$dcd=json_decode($deco,true);
$tkn=$dcd['token'];
$keey=$dcd['key'];
$typ="Bulk Payment";
$type=urlencode($typ);

    $paytm=$_POST['paytm'];
     $amount=$_POST['amount'];
     $comment=$_POST['comment'];
      $comm=urlencode($comment);
      
      $url="https://ip-area.xyz/api.php?user=$session&token=$tkn&key=$keey&paytm=$paytm&amount=$amount&comment=$comm&type=$type";
      
      

$b='linear-gradient(135deg, #D4145A 0%, #FBB03B 51%, #D4145A 100%)';
$c='linear-gradient(135deg, #009245 0%, #FCEE21 51%, #009245 100%)';
$e='linear-gradient(135deg, #614385 0%, #516395 51%, #614385 100%)';
$f='linear-gradient(135deg, #02AABD 0%, #00CDAC 51%, #02AABD 100%)';
$h='linear-gradient(135deg, #FF5F6D 0%, #FFC371 51%, #FF5F6D 100%)';
$i='linear-gradient(135deg, #11998E 0%, #38EF7D 51%, #11998E 100%)';
$j='linear-gradient(135deg, #EA8D8D 0%, #A890FE 51%, #EA8D8D 100%)';
$k='linear-gradient(135deg, #D8B5FF 0%, #1EAE98 51%, #D8B5FF 100%)';
$l='linear-gradient(135deg, #FF61D2 0%, #FE9090 51%, #FF61D2 100%)';
$m='linear-gradient(135deg, #4E65FF 0%, #92EFFD 51%, #4E65FF 100%)';
$o='linear-gradient(135deg, #868F96 0%, #596164 51%, #868F96 100%)';
$p='linear-gradient(135deg, #09203F 0%, #537895 51%, #09203F 100%)';
$q='linear-gradient(135deg, #764BA2 0%, #667EEA 51%, #764BA2 100%)';
$r='linear-gradient(135deg, #2E3192 0%, #1BFFFF 51%, #2E3192 100%)';
$length="1"; 
$char="bcefhijklmopqr";
$clr=substr(str_shuffle($char), 0, $length);
$color=$$clr;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $name;?>

</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link href="<?php echo $logo;?>" rel="icon" type="image/x-icon"/>

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
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMontserrat:300,400,500%7CRoboto');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
.select100{
    padding:5px 3px;
    width:99%;
    border-radius:5px;
}    
h1{
    text-align: center;
    margin-bottom: 40px;
}
table { 
    font-weight: 500;
    width: 80%; 
    table-layout: fixed;
    border-collapse: collapse; 
    margin: 0 auto;
}
/* Zebra striping */
tr:nth-of-type(odd) { 
    background: #f2f2f2; 
}
th { 
    background: #E74C3C; 
    color: #fff; 
    font-weight: 600; 
}
td, th { 
    padding: 12px; 
    border: 1px solid #ccc; 
    text-align: left; 
    text-align: center
}
/*Mobile View*/
@media 
only screen and 
    (max-width: 760px){
    td, tr { 
        display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	tr {
        border: 0px solid blue;
        border-radius: 10px;
    }
    tr + tr{
        
        margin-top: 1.5em;
    }
	td { 
		/* make like a "row" */
		border-bottom: 2px solid blue; 
		border-radius: 5px;
		position: relative;
		padding-left: 50%; 
        background-color: #F8D9D5;
        text-align: left; 
	}
	
	td:before { 
        content: attr(data-label);
        display: inline-block;
        line-height: 1.5;
	    margin-left: -100%;
        width: 100%;
		white-space: nowrap;
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
	   
<div class="limiter">
<div class="container-login100" style="background-image:<?php echo $color;?>; padding-top:0px;">
 
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="padding-top: 0px;padding-bottom: 20px;">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>


    

<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
        <center>

</span>
<center>
<div style="border-top: 3px solid #ff00e4; border-right: 3px solid #1cfc03; border-bottom: 3px solid #ff00e4; border-left: 3px solid #1cfc03;  border-radius: 1px; padding: 10px; font-family: 'Montserrat',sans-serif; font-size:16px; box-shadow: 0 5px 10px 0 rgba(0, 0, 100,.2);">
    <br><br>
<center>   <font style="font-size: 1rem; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;font-weight:900;width:95%;">&#9733; User:- <?php echo $session;?> &#9733;</font></center><b><br>
  
<br>

<div class='db-l' style=' background: #ffcccb; color: blue; font-size: 14px; padding: 3px 0px 0px 0px; text-align: center;'> <marquee style='font-weight:400;'>PLEASE DON'T REFRESH THIS PAGE... JUST CLICK "Back to Wallet" AFTER CHECKING PAYMENT STATUS. YOU MAY FACE HUGE LOSS IF YOU REFRESH THIIS PAGE...!</marquee> 					</div><br><br>
        <?php
         $myArray=explode(',',$paytm);
    foreach($myArray as $item) {
     $p1_1=str_replace("{paytm}",$item,$link);
$url=file_get_contents(str_replace("{amount}",$amount,$p1_1));
echo"
  <table>
            <thead>
              <tr>
                <th>Number</th>
             <th>Amount</th>
                <th>Payment</th>
              </tr>
            </thead>
            <tbody>
             <tr> 
                <td data-label='Number'><font color='black'><b>$item</b></font></td>
                <td data-label='Amount'><b>&#8377;$amount </b></td>
                <td data-label='Payment'><b>$url </b></td>
              </tr>            </tbody>
          </table><br>
";}
 $ffile="ntpc/$session";
    $fund=file_get_contents("$ffile/fund.txt");

        ?>
<br> <font style="font-weight:600">
        Balance: <font color="red" size="5"> &#8377;<?php echo $fund;?></font><br></font>

<br><br><a href='home.php'><font class='nnn' style='font-weight:600' >Back to Home</font><br><br></a><br></div></center>
</div>
</div><br></div>
