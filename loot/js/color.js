$(document).ready(function(){
  
function loadFund(){
$.ajax({
url : "fund.php",
type : "POST",
success : function(dataf){
$("#loadfund").html(dataf);
$("#loaddfund").html(dataf);
}
});
}

function loadGreen(){
$.ajax({
url : "greenfetch.php",
type : "POST",
success : function(datag){
$("#greenbet").html(datag);      
}
});
}

function loadBlue(){
$.ajax({
url : "bluefetch.php",
type : "POST",
success : function(datab){
$("#bluebet").html(datab);      
}
});
}

function loadRed(){
$.ajax({
url : "redfetch.php",
type : "POST",
success : function(datar){
$("#redbet").html(datar);   
}
});
}


$("#bettt").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
var coluu = $("#c").val();
var ser = $("#serr").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "bet.php",
type : "POST",
data : {betamount:amouu, betcolour:coluu, series:ser},
success : function(data){
if(data == 1){
betplaced()    
}else{
if(data == 2){
nofund()    
}else{
if(data == 3){
lowfund()    
}else{
if(data == 9){
tover()    
}else{
if(data == 15){
notboth()    
}}    
}}}
loadRed()
loadBlue()
loadGreen()
loadFund()
cros()
subshow()
}
});}

});
    
});

function green() {
        document.getElementById('gbetbox').style.display = 'block';
         document.getElementById("clrd").innerHTML = "<input type='hidden' id='c' value='G'><div class='green'>GREEN</div>";
  }    
  
  function blue() {
        document.getElementById('bbetbox').style.display = 'block';
         document.getElementById("clrd").innerHTML = "<input type='hidden' id='c' value='B'><div class='blue'>BLUE</div>";
  }
  
  function red() {
        document.getElementById('gbetbox').style.display = 'block';
        document.getElementById("clrd").innerHTML = "<input type='hidden' id='c' value='R'><div class='red'>RED</div>";
  }    
  

function task() {
alert("YOU HAVE NOT SELECTED ANY COLOUR...!")
}


function am5() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100+5;        
document.getElementById("amount").setAttribute('value', total);
}

function am10() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100+10;        
document.getElementById("amount").setAttribute('value', total);
}

function am20() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100+20;        
document.getElementById("amount").setAttribute('value', total);
}

function am50() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100+50;        
document.getElementById("amount").setAttribute('value', total);
}

function am100() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100+100;        
document.getElementById("amount").setAttribute('value', total);
}

function am200() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100+200;        
document.getElementById("amount").setAttribute('value', total);
}

function amo5() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100-5;  
if( total > 4){
document.getElementById("amount").setAttribute('value', total);}
}

function amo10() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100-10;     
if( total > 4){
document.getElementById("amount").setAttribute('value', total);}
}

function amo20() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100-20;    
if( total > 4){
document.getElementById("amount").setAttribute('value', total);}
}

function amo50() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100-50;    
if( total > 4){
document.getElementById("amount").setAttribute('value', total);}
}

function amo100() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100-100;     
if( total > 4){
document.getElementById("amount").setAttribute('value', total);}
}

function amo200() {
var amo = document.getElementById("amount").value;
var total = 100*amo/100-200;    
if( total > 4){
document.getElementById("amount").setAttribute('value', total);}
}

document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('container');
    if (!container.contains(e.target)) {
        container.style.display = 'none';
    }
});

    function cross() {
       document.getElementById("container").innerHTML = "";
  }    
  

    document.getElementById("bett").onclick = function () {
        location.href = "bet-history.php";
    };


document.addEventListener('mouseup', function(e) {
    var gbetbox = document.getElementById('gbetbox');
    if (!gbetbox.contains(e.target)) {
        gbetbox.style.display = 'none';
    }
});

document.addEventListener('mouseup', function(e) {
    var cct = document.getElementById('cct');
    if (!cct.contains(e.target)) {
        cct.style.display = 'none';
    }
});


    document.getElementById("bett").onclick = function () {
        location.href = "bet-history.php";
    };
    
    document.getElementById("how").onclick = function () {
        document.getElementById('cct').style.display = 'block';
    };
    function crossc() {
       document.getElementById('cct').style.display = 'none';
  } 


    function cros() {
      document.getElementById('gbetbox').style.display = 'none';
  }   
  
function betplaced() {
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
title:'Bet Placed'})}

function notboth() {
const Toast = Swal.mixin({
toast: true,
position: 'top',
showConfirmButton: false,
timer: 5000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('', Swal.stopTimer)
toast.addEventListener('', Swal.resumeTimer)}})
Toast.fire({
icon: 'error',
title:'As you have got colour reward, You cant bet both sides this time..!'})}

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

function lowfund() {
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
title:'Minimum Amount should be ₹5..!'})}  

function tover() {
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
title:'Time Over..!'})}  

function subhide() {
 document.getElementById('sub').style.display = 'none';    
document.getElementById("loader").style.display = 'block';   }

function subshow() {
document.getElementById('sub').style.display = 'block';
 document.getElementById('loader').style.display = 'none';    
}