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
var codeo = $("#code").val();
var nusero = $("#nuser").val();
var pusero = $("#puser").val();
if(codeo == ""){
ecode()    
}else{
if(nusero == "" || nusero < 1){
nuser()    
}else{
if(pusero == "" || pusero < 1){
puser()    
}else{
subhide()
$.ajax({
url : "crtcode.php",
type : "POST",
data : {code:codeo, nuser:nusero, puser:pusero},
success : function(data){
if(data == 1){
something()
}else{
if(data == 2){
nofund()    
}else{
if(data == 3){
already()    
}else{
if(data == 6){
long()    
}else{    
$("#showlifafa").html(data);    
created() 
}}}}
loadFund()
subshow()
}
});
    
}}}

});



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
title:'Code Created'})}

function claimlink() {
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
title:'Link Copied'})}

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

function ecode() {
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
title:'Enter Code..!'})}

function already() {
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
title:'Code already Exists..!'})}

function long() {
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
title:'Max. character limit reached..!'})}

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

function something() {
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
title:'Something went Wrong..!'})}


function cut() {
       document.getElementById('cct').style.display = 'none';
  }

function subhide() {
 document.getElementById('sub').style.display = 'none';    
document.getElementById("loader").style.display = 'block';   }

function subshow() {
document.getElementById('sub').style.display = 'block';
 document.getElementById('loader').style.display = 'none';    
}
