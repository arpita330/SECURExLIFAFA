<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['user'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php?s=lifafa-history'>";

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
    <meta name="google" value="notranslate">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="EARNING ARMY , Advanced Lifafa Giveaway maker site, Payment Gateway, Play Games to earn Money, Paytm Dice Toss Form Giveaway, Lifafa with Refer & Earn, Best tools to manage your Lifafas" name="description">	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="sstyle.css">

	<title>EARNING ARMY</title>
	<link href="https://i.ibb.co/jr10brk/icon.png" rel="icon" type="image/x-icon"/>
	<style>div.clickEffect{position:fixed;box-sizing:border-box;border-style:solid;border-color: green blue red;border-radius:100%;animation:clickEffect .4s ease-out;a-index 99999}@keyframes clickEffect{0%{opacity:1;width:.1em;height:.1em;margin:-.25em;border-width:.5rem}100%{opacity:.2;width:15em;height:15em;margin:-7.5em;border-width:.03rem}}</style><script>function clickEffect(e){var d=document.createElement("div");d.className="clickEffect";d.style.top=e.clientY+"px";d.style.left=e.clientX+"px";document.body.appendChild(d);d.addEventListener('animationend',function(){d.parentElement.removeChild(d)}.bind(this))}document.addEventListener('click',clickEffect);</script>
	<style>
	
	table { 
    font-weight: 500;
    width: 100%; 
    table-layout: fixed;
    border-collapse: collapse; 
    margin: 0 auto;
}
/* Zebra striping */
tr:nth-of-type(odd) { 
    background: #b8e2fc; 
}
th { 
    background: red; 
    color: #fff; 
    font-weight: 600; 
}
td, th { 
    padding: 4px; 
    border: 1px solid blue; 
    text-align: left; 
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
        background-color: #b8e2fc;
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
    input:invalid {
  border: solid red 1px;
  background-color: #FFCCCB;
}
    .submit{
        height: 20px;
        width: 60px;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        background: blue;
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
    .submit1{
        height: 20px;
        width: 60px;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        background: red;
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
    	    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.switches {
  margin: 20px;
}

.switches h1 {
  font-size: 1.5em;
  margin-bottom: 20px;
}

/* ----- end demo code ----- */

.switch {
  display: inline-block;
  height: 34px;
  min-width: 60px;
  position: relative;
  vertical-align: middle;
}

.switch.disabled {
  cursor: default;
table { 
    font-weight: 500;
    width: 100%; 
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
    padding: 4px; 
    border: 1px solid blue; 
    text-align: left; 
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
    input:invalid {
  border: solid red 1px;
  background-color: #FFCCCB;
}
    .submit{
        height: 20px;
        width: 60px;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
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
    
    	    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.switches {
  margin: 20px;
}

.switches h1 {
  font-size: 1.5em;
  margin-bottom: 20px;
}

/* ----- end demo code ----- */

.switch {
  display: inline-block;
  height: 34px;
  min-width: 60px;
  position: relative;
  vertical-align: middle;
}

.switch.disabled {
  cursor: default;
  opacity: 0.5;
}

.switch .slider {
  background-color: red;
  border: 1px solid #047aed;
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  height: 34px;
  left: 0;
  padding: 0 20px 5px 40px;
  position: relative;
  right: 0;
  top: 0;
  transition: 0.4s;
}

.switch .slider .on,
.switch .slider .off {
  line-height: 34px;
}

.switch .slider .off {
  display: block;
}

.switch .slider .on {
  display: none;
}

.switch .slider:before {
  background-color: blue;
  bottom: 4px;
  content: " ";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: all 0.4s;
  width: 26px;
}

.switch .slider.round {
  border-radius: 34px;
}

.switch .slider.round:before {
  border-radius: 50%;
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

.fontrs {
          position: absolute;
          top: 2px;
          right: 4px;
          color: white;
          padding-top: 1px;
          padding-right: 4px;
          border-radius: 5px;
          padding-bottom: -0.5px;
          padding-left: 4.5px;
          background:red;
          box-shadow: 2px 2px 5px #000 ;
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
							<a class="active" href="home.php">Home</a>/Lifafa History
						</li>
					</ul>
				</div>
				
			</div>
			
			<ul> 
			
<br><br>

     
         <table>
            <thead>
              <tr>
                <th>Lifafa id</th>
                <th>Amount/User</th>
                <th>Lifafa</th>
                <th>Tool</th>
                <th>Time</th>
                <th>Status</th>
              </tr>
            </thead>
            
            
            
            
              <tbody>
            
             <?php
$txn="ntpcbdjsjsj8272djearning/$session/mylfs.txt";
if(file_exists("$txn")){
$file=file_get_contents("$txn");
$pro = explode("+",$file);
for($i = 0; $i < count($pro); $i++){
if(!empty($pro[$i])){

$json=json_decode($pro[$i],true);
$lid=$json['lid'];
$nuser=$json['nuser'];
$puser=$json['puser'];
$time=$json['time'];

if(file_exists("lifsbdjsjsj8272djearning/$lid/over.txt")){$ttt="Over &#10060;";
}else{
  $ttt="Active &#9989;";
}
$edit="https://earningarmy.xyz/edt.php?id=$lid";
$linkk="https://earningarmy.xyz/lifafa.php?id=$lid";
echo"
            
            
             <tr> 
                <td data-label='Lifafa id'><b>$lid</b></td>
              
                <td data-label='Amount/User'><b>$puser/$nuser</b></td>
                 <td data-label='Lifafa'><a href='$linkk'><button class='submit'>Link</button></a></td>
                 
                <td data-label='Edit'><a href='$edit'><button class='submit1'>Edit</button></a></td>
                
                <td data-label='Time'><b><font size='2'>$time </font></b></td>
                
                <td data-label='Status'><b>$ttt </b></td>
              </tr>          
              
              

";
}}}
else{echo"<center> 
<br><img src='lifafahistory.png' width='40%'><br><br>
<b><font color='red' size='4'>!! NO LIFAFA CREATED !!</font> </center>";}
?>			 
        </tbody>
        
         </table>  <br>
          
          
          
          

</ul>
	


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="sscript.js"></script>
</body>
</html>