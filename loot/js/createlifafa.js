function loadFund(){
$.ajax({
url : "fund.php",
type : "POST",
success : function(dataf){
$("#loadfund").html(dataf);
}
});
}

$("#submito").on("click",function(e){
e.preventDefault();
var typeo = $("#type").val();
var titleo = $("#title").val();
var nusero = $("#nuser").val();
var pusero = $("#puser").val();
var commo = $("#comm").val();
var rlinko = $("#rlink").val();
var acodeo = $("#acode").val();
var rusero = $("#ruser").val();
var advo = $("#advanced").val();
var rcomo = $("#rcom").val();
if(titleo == ""){
title()    
}else{
if(nusero == "" || nusero < 1){
nuser()    
}else{
if(pusero == "" || pusero < 1){
puser()    
}else{
subhide()
$.ajax({
url : "createlifafa.php",
type : "POST",
data : {title:titleo, nuser:nusero, puser:pusero, comm:commo, rlink:rlinko, acode:acodeo, ruser:rusero, rcom:rcomo, advanced:advo, type:typeo},
success : function(data){
if(data == 1){
something()
}else{
if(data == 2){
nofund()    
}else{
if(data == 3){
comment()    
}else{
$("#showlifafa").html(data);    
created() 
}}}
loadFund()
subshow()
}
});
    
}}}

});


var clickCount = 0;
function checkClick() {
  if ( clickCount % 2 == 0 ) {
       document.getElementById("spc").innerHTML = "<input type='number' step='any' class='input' id='ruser' min='1' Placeholder='Per Refer' autocomplete='off'><input type='text' class='input' id='rcom' Placeholder='Comment'  maxlength='49' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' autocomplete='off'>";
       document.getElementById("lele").innerHTML = "<br>";
       document.getElementById("lele1").innerHTML = "";
  } else {
      document.getElementById("spc").innerHTML = "";
      document.getElementById("lele").innerHTML = "";
       document.getElementById("lele1").innerHTML = "";
  }

  clickCount++
}

var clickCount1 = 0;
function checkClick1() {
  if ( clickCount1 % 2 == 0 ) {
       document.getElementById("spcc").innerHTML = "<input type='text' class='input' placeholder='Enter Access Code' id='acode' autocomplete='off'>";
       document.getElementById("lele3").innerHTML = "<br>";
       document.getElementById("lele4").innerHTML = "<br>";
  } else {
      document.getElementById("spcc").innerHTML = "";
      document.getElementById("lele3").innerHTML = "<br>";
       document.getElementById("lele4").innerHTML = "";
  }

  clickCount1++
}


function created() {
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
title:'Lifafa Created'})}

function lifafalink() {
var copyText = document.getElementById("num1");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");    
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
title:'Lifafa Link Copied'})}

function short() {
    var copyText = document.getElementById("num2");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
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
title:'Short Link Copied'})}

function code() {
    var copyText = document.getElementById("num3");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
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
title:'Code Copied'})}

function title() {
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
icon: 'error',
title:'Enter Title..!'})}

function nuser() {
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
icon: 'error',
title:'Number of users should be more than 1..!'})}

function puser() {
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
icon: 'error',
title:'Amount per user should be more than 1..!'})}

function nofund() {
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
icon: 'error',
title:'Not Enough Funds..!'})}

function comment() {
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
icon: 'error',
title:'Long Comment..!'})}

function subhide() {
 document.getElementById('sub').style.display = 'none';    
document.getElementById("loader").style.display = 'block';   }

function subshow() {
document.getElementById('sub').style.display = 'block';
 document.getElementById('loader').style.display = 'none';    
}

function cut() {
       document.getElementById('cct').style.display = 'none';
  }
  
function normal() {
document.getElementById('subopt').innerHTML = "<b><font color='blue'>Select Lifafa Type</font></b><table id='switcher'><tr><th>Normal</th><td onclick='dice()'><h3>Dice</h3></td><td onclick='toss()'><h3>Toss</h3></td></tr></table><input type='hidden' id='type' value='lifafa'>";}   
  
function dice() {
document.getElementById('subopt').innerHTML = "<b><font color='blue'>Select Lifafa Type</font></b><table id='switcher'><tr><td onclick='normal()'><h3>Normal</h3></th><th>Dice</th><td onclick='toss()'><h3>Toss</h3></td></tr></table><input type='hidden' id='type' value='dice'>";} 

function toss() {
document.getElementById('subopt').innerHTML = "<b><font color='blue'>Select Lifafa Type</font></b><table id='switcher'><tr><td onclick='normal()'><h3>Normal</h3></td><td onclick='dice()'><h3>Dice</h3></td><th>Toss</th></tr></table><input type='hidden' id='type' value='toss'>";} 