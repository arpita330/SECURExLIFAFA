function log() {
       document.getElementById('loginbox').style.display = 'block';
       document.getElementById('regbox').style.display = 'none';
       document.getElementById('getbox').style.display = 'none';
       document.getElementById('otpbox').style.display = 'none';
       document.getElementById("ldata").innerHTML = "User Login";
  } 
  
function reg() {
       document.getElementById('regbox').style.display = 'block';
       document.getElementById('loginbox').style.display = 'none';
       document.getElementById('getbox').style.display = 'none';
       document.getElementById('otpbox').style.display = 'none';
       document.getElementById("ldata").innerHTML = "User Registration";
  }  

function get() {
       document.getElementById('getbox').style.display = 'block';
       document.getElementById('regbox').style.display = 'none';
       document.getElementById('loginbox').style.display = 'none';
       document.getElementById('otpbox').style.display = 'none';
       document.getElementById("ldata").innerHTML = "Get Password";
  }   
  
function otp() {
       document.getElementById('otpbox').style.display = 'block';
       document.getElementById('regbox').style.display = 'none';
       document.getElementById('getbox').style.display = 'none';
       document.getElementById('loginbox').style.display = 'none';
       document.getElementById("ldata").innerHTML = "Verify OTP";
  }   

  
$("#login").on("click",function(e){
e.preventDefault();
var user = $("#user").val();
var pass = $("#pass").val();
if(user=="" || pass==""){
enter()   
}else{
logload()    
$.ajax({
url : "userlogin.php",
type : "POST",
data : {username:user, password:pass},
success : function(data){
if(data == 1){
logged()  
redirect()
}else{
if(data == 2){
not()    
}else{
if(data == 3){
invalid()    
}else{
if(data == 4){
banned()    
}else{
if(data == 5){
otp()  
otpsent()
}else{
if(data == 8){
time()    
}else{
if(data == 9){
sr()    
}    
}  
}    
}}}}
logloadd()}
});}

});


$("#register").on("click",function(e){
e.preventDefault();
var userr = $("#userr").val();
var passr = $("#passr").val();
if(userr=="" || passr==""){
enter()   
}else{
regload()
$.ajax({
url : "userregister.php",
type : "POST",
data : {userreg:userr, passreg:passr},
success : function(datar){
if(datar == 1){
registered()  
redirect()
}else{
if(datar == 2){
already()    
}else{
if(datar == 3){
other()    
}else{
if(datar == 4){
alr()    
}    
}}}
regloadd()}
});}

});


$("#gett").on("click",function(e){
e.preventDefault();
var userg = $("#userg").val();
if(userg==""){
enterg()   
}else{
getload()    
$.ajax({
url : "getpass.php",
type : "POST",
data : {usernameg:userg},
success : function(datag){
if(datag == 1){
sent() 
getloadd()
}else{
if(datag == 2){
not()    
}else{
if(datag == 3){
bot()    
}else{
if(datag == 4){
banned()    
}else{if(datag == 5){
freq()  }}    
}}}
}
});}

});

$("#otpv").on("click",function(e){
e.preventDefault();
var otpp = $("#otp").val();
if(otpp==""){
entergo()   
}else{
otpload()
$.ajax({
url : "otpverify.php",
type : "POST",
data : {otp:otpp},
success : function(datar){
if(datar == 1){
logged()  
redirect()
}else{
if(datar == 2){
wrongg()    
}}
otploado()}
});}

});

function redirect() {
location.href = "home.php";    
}

function logged() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'success',
title:'Login Success'})}

function registered() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'success',
title:'Register Success'})}

function wrongg() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Wrong OTP...!'})}  

function otpsent() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'success',
title:'OTP Sent'})}

function sent() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'success',
title:'Password sent via Bot Alert'})}

function enter() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Fill both inputs..!'})}  

function time() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'You can request for OTP only once per 3 minutes..!'})}  

function enterg() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Enter Username First..!'})}  

function sr() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Something went wrong...!'})}  

function entergo() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Enter OTP..!'})}  

function not() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'User not Exists...!'})}  

function invalid() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Wrong Password..!'})}  

function banned() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'You are Banned..!'})}  

function already() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'User already exists..!'})}  

function other() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Set unique Password..!'})} 

function freq() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'Trying Frequently..!'})}  

function alr() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: true,
timer: 18000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'You have registered recently. If want to register again, turn Aeroplane mode on/off and try again..!'})} 

function bot() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 4000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'You have not added Bot Alert. Contact Admin..!'})}  

function getload() {
document.getElementById('lld').style.display = 'none';
document.getElementById('lldd').style.display = 'block';
}

function getloadd() {
document.getElementById('lld').style.display = 'block';
document.getElementById('lldd').style.display = 'none';
}

function logload() {
document.getElementById('logd').style.display = 'none';
document.getElementById('logdd').style.display = 'block';
}

function logloadd() {
document.getElementById('logd').style.display = 'block';
document.getElementById('logdd').style.display = 'none';
}

function regload() {
document.getElementById('regd').style.display = 'none';
document.getElementById('regdd').style.display = 'block';
}

function regloadd() {
document.getElementById('regd').style.display = 'block';
document.getElementById('regdd').style.display = 'none';
}

function otpload() {
document.getElementById('regdo').style.display = 'none';
document.getElementById('regddo').style.display = 'block';
}

function otploado() {
document.getElementById('regdo').style.display = 'block';
document.getElementById('regddo').style.display = 'none';
}