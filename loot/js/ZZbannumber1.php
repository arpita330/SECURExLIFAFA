 <?php
?>

<html lang="en">
 <head>
  <meta name="google" value="notranslate"> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <!-- Boxicons --> 
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"> 
  <!-- My CSS --> 
  <link rel="stylesheet" href="sstyle.css"> 
  <title>EARNING ARMY</title> 
<link href="https://i.ibb.cXo/gyr8M0z/IMG-20221007-215543-183.jpg" rel="icon" type="image/x-icon"> 
  <style>
	
	 .input{
        display: block;
        width: 75%;
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
        background-color: white;
        outline: none;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);
    }
       input:focus {
  border: solid #047aed 2px;
  border-radius:20px;
  width:80%;
   box-shadow: 1px 1px 8px grey ;
  transition: width 200ms ease-in, box-shadow 200ms ease-in, border 200ms ease-in, border-radius 2000ms ease-in ;
 
}
.submit{
        height: 40px;
        width: 30%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
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
body {
  background-color: #E6E6FA;
  }
 	</style> 
 </head> 
 <body> 
 <?php
 

  
if($_POST){
    $file30="Tokenacceptpudaymentbdjdjkunnibaj/$mid.json";
$zaker30=file_get_contents($file30);
$jso30=json_decode($zaker30,true);
$charge=$jso30['charge'];
$charges=$charge-100;
$amo=$_POST['amo'];
    $amos=$amo+$amo*$charges/100;
    $str="AB1CDE2FG3HI4JK5LM6NO7PQ8RS9TU0VQXYZ".time();
     $str= str_split($str,1);
     $l = count($str);
     $oid='';
     for($i=1;$i<13;$i++){
     $tn = rand(0,$l);
     $oid.=$str[$tn];
     }
    
    echo'
     <br>
  <br>
  <br>
  <br>
  <br> 
  <form method="POST" action="accepts.php"> 
   <center> 
    <br>
    <br>Order id: 
    <font color="red">'.$oid.'</font>
    <br>
    <br>
     <input type="hidden" class="input" placeholder="Enter Amount" min="1" id="amo" name="amo" value="'.$amo.'" oninput="myFunction()" required> 
       <input type="hidden" class="input" placeholder="Enter Amount" min="1" name="oid" value="'.$oid.'" oninput="myFunction()" required> 
         <input type="hidden" class="input" placeholder="Enter Amount" id="amo" name="mid" value="'.$mid.'" oninput="myFunction()" required> 
    <font color="green">Amount to Pay: </font> 
    <font color="red">'.$amos.'  <br><font color="blue">(including user charge). </font></font>
    <br>
    <br> 
    <br>
   </center> 
   <center> 
    <button type="submit" class="submit" name="submit">PAY ₹'.$amos.'</button> 
    <br> 
   </center>
  </form>
  <br>
  <br> 
  <center><font style="font-weight:700" size="2" color="black"> Take Screenshot of this page or save above order id before payment for secure payment.</font></center>';
  
}else{
    echo'

    
  <br> 
  <center> 
   <b> <br><br><br> <br> 
    <div class="control"> 
     <br> 
     <br> 
     <form method="POST" action="" autocomplete="off"> 
      <input type="number" class="input" placeholder="Enter Amount" min="1" id="amo" name="amo" value="" oninput="myFunction()" required> 
      <br>
      <button type="submit" class="submit" name="submit">PAY</button>
     </form>
     <br> 
    </div> <br> <br> <font style="font-weight:700" size="2">This is the accept payment system to accept payments from Users.<br><br> You can create your link by clicking <a class="active" href="https://kunnicampaign.xyz/accept.php"><font color="red" size="2">here</font></a>.<br><br> </font> 
';}
?>
  
    <!-- MAIN --> 
    <!-- CONTENT --> <script>

    function myFunction() {
var amo = document.getElementById("amo").value;

var total = 105*amo/100;        

        document.getElementById("amotopay").innerHTML = total;
}

</script> </b>
  </center>
 </body>
</html>




















