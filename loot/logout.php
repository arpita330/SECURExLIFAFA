<?php
$user=$_COOKIE['user'];

if(!isset($_COOKIE['user'])){

echo" <div class='login-box'><h3 class='variablecolor' >Please Login";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
$echo = $_SERVER["HTTP_HOST"];
$host = $echo;
unset($_COOKIE['user']); setcookie("user", "$user", time() - 300,"/"); 

echo'<script>alert("Logged out Successfully... Click OK")</script>';

echo"<meta http-equiv='refresh' content='0;url=login.php'>";
}
?>