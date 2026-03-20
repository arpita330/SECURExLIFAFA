function refer(){
var paytm = $("#number").val();
if(paytm===""){
enter() 
}else{
var lifafa = $("#lidlid").val();
var type = $("#type").val();
$.ajax({
url : "ref.php",
type : "POST",
data : {num:paytm,lifafaid:lifafa,typ:type},
success : function(datar){
$("#referdata").html(datar);
link()
show()
}
});}
}

setInterval(function(){ 
var lifafa = $("#lidlid").val();
var type = $("#type").val();
$.ajax({
url : "counter.php",
type : "POST",
data : {lifafaid:lifafa,typ:type},
success : function(datau){
$("#usercount").html(datau);
}
});
}, 2000); 

function copy() {
  var copyText = document.getElementById("reflink");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  copied()
}

function crossc() {
       document.getElementById('cct').style.display = 'none';
  } 
  
function show() {
       document.getElementById('cct').style.display = 'block';
  }   
  
document.addEventListener('mouseup', function(e) {
    var cct = document.getElementById('cct');
    if (!cct.contains(e.target)) {
        cct.style.display = 'none';
    }
});  

function copied() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 2000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'success',
title:'Link Copied'})}

function link() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 2000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'success',
title:'Link Generated'})}

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
title:'Enter Paytm Number..!'})}  