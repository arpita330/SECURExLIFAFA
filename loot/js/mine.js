$(document).ready(function(){


$("#boxa").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:1},
success : function(dataaa){
if(dataaa == 1){
closeboxa()
updata()
}else{
if(dataaa == 2){
overboxa()
updata()
cbox()
}else{
if(dataaa == 3){
closeboxa()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxb").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:2},
success : function(databb){
if(databb == 1){
closeboxb()
updata()
}else{
if(databb == 2){
overboxb()
updata()
cbox()
}else{
if(databb == 3){
closeboxb()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxc").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:3},
success : function(datacc){
if(datacc == 1){
closeboxc()
updata()
}else{
if(datacc == 2){
overboxc()
updata()
cbox()
}else{
if(datacc == 3){
closeboxc()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxd").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:4},
success : function(datadd){
if(datadd == 1){
closeboxd()
updata()
}else{
if(datadd == 2){
overboxd()
updata()
cbox()
}else{
if(datadd == 3){
closeboxd()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxe").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:5},
success : function(dataee){
if(dataee == 1){
closeboxe()
updata()
}else{
if(dataee == 2){
overboxe()
updata()
cbox()
}else{
if(dataee == 3){
closeboxe()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxf").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:6},
success : function(dataff){
if(dataff == 1){
closeboxf()
updata()
}else{
if(dataff == 2){
overboxf()
updata()
cbox()
}else{
if(dataff == 3){
closeboxf()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxg").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:7},
success : function(datagg){
if(datagg == 1){
closeboxg()
updata()
}else{
if(datagg == 2){
overboxg()
updata()
cbox()
}else{
if(datagg == 3){
closeboxg()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxh").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:8},
success : function(datahh){
if(datahh == 1){
closeboxh()
updata()
}else{
if(datahh == 2){
overboxh()
updata()
cbox()
}else{
if(datahh == 3){
closeboxh()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxi").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:9},
success : function(dataii){
if(dataii == 1){
closeboxi()
updata()
}else{
if(dataii == 2){
overboxi()
updata()
cbox()
}else{
if(dataii == 3){
closeboxi()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxj").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:10},
success : function(datajj){
if(datajj == 1){
closeboxj()
updata()
}else{
if(datajj == 2){
overboxj()
updata()
cbox()
}else{
if(datajj == 3){
closeboxj()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxk").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:11},
success : function(datakk){
if(datakk == 1){
closeboxk()
updata()
}else{
if(datakk == 2){
overboxk()
updata()
cbox()
}else{
if(datakk == 3){
closeboxk()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxl").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:12},
success : function(datall){
if(datall == 1){
closeboxl()
updata()
}else{
if(datall == 2){
overboxl()
updata()
cbox()
}else{
if(datall == 3){
closeboxl()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxm").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:13},
success : function(datamm){
if(datamm == 1){
closeboxm()
updata()
}else{
if(datamm == 2){
overboxm()
updata()
cbox()
}else{
if(datamm == 3){
closeboxm()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxn").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:14},
success : function(datann){
if(datann == 1){
closeboxn()
updata()
}else{
if(datann == 2){
overboxn()
updata()
cbox()
}else{
if(datann == 3){
closeboxn()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxo").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:15},
success : function(dataoo){
if(dataoo == 1){
closeboxo()
updata()
}else{
if(dataoo == 2){
overboxo()
updata()
cbox()
}else{
if(dataoo == 3){
closeboxo()
updata()
cbox()
}else{
something()}}}}});}});

$("#boxp").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "openbox.php",
type : "POST",
data : {box:16},
success : function(datapp){
if(datapp == 1){
closeboxp()
updata()
}else{
if(datapp == 2){
overboxp()
updata()
cbox()
}else{
if(datapp == 3){
closeboxp()
updata()
cbox()
}else{
something()}}}}});}});
  
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

function cbox(){
var gseries = $("#gameseries").val();
$.ajax({
url : "overdata.php",
type : "POST",
data : {series:gseries},
success : function(datafo){
$("#cbox").html(datafo);
again()
gamedata()
loadFund()
}
});
}

function gamedata(){
$.ajax({
url : "gamedata.php",
type : "POST",
success : function(datadata){
$("#gamedata").html(datadata);
}
});
}

function updata(){
$.ajax({
url : "getgdata.php",
success : function(datagg){
$("#tamount").html(datagg);
}
});
}

$("#bettt").on("click",function(e){
e.preventDefault();
var amouu = $("#amount").val();
if(amouu<5){
lowfund()    
}else{
subhide()
$.ajax({
url : "betlifafa.php",
type : "POST",
data : {betamount:amouu},
success : function(data){
if(data == 1){
betplaced()
boxhide()
setTimeout(refresh, 1000)
}else{
if(data == 2){
nofund()    
}else{
if(data == 3){
lowfund()    
}else{
if(data == 9){
tover()    
}    
}}}
loadFund()
cros()
subshow()
}
});}

});


$("#stop").on("click",function(e){
e.preventDefault();
over()
$.ajax({
url : "overgame.php",
type : "POST",
success : function(data){
if(data == 1){
claimed()
again()
gamedata()
loadFund()
cbox()
}else{
if(data == 2){
refunded() 
again()
loadFund()
cbox()
}else{
something()
again()
loadFund()
refresh()
}}
}
});

});
    
});


function start() {
        document.getElementById('gbetbox').style.display = 'block';
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
    var cct = document.getElementById('cct');
    if (!cct.contains(e.target)) {
        cct.style.display = 'none';
    }
});

document.addEventListener('mouseup', function(e) {
    var gbetbox = document.getElementById('gbetbox');
    if (!gbetbox.contains(e.target)) {
        gbetbox.style.display = 'none';
    }
});

    document.getElementById("bett").onclick = function () {
        location.href = "lifine-history.php";
    };
    
     document.getElementById("color").onclick = function () {
        location.href = "game.php";
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
title:'Starting Game'})}

function claimed() {
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
title:'Amount Claimed'})}

function refunded() {
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
title:'Refunded'})}

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

function something() {
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
icon: 'error',
title:'Too Fast..!'})}    
  
function subhide() {
 document.getElementById('sub').style.display = 'none';    
document.getElementById("loader").style.display = 'block';   }

function boxhide() {
 document.getElementById('boxx').style.display = 'none';
 document.getElementById('rtx').style.display = 'none';
document.getElementById("loadere").style.display = 'block';   }

function subshow() {
document.getElementById('sub').style.display = 'block';
 document.getElementById('loader').style.display = 'none';    
}  

function closeboxa() {
document.getElementById('box1').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxa() {
document.getElementById('box1').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxb() {
document.getElementById('box2').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxb() {
document.getElementById('box2').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxc() {
document.getElementById('box3').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxc() {
document.getElementById('box3').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxd() {
document.getElementById('box4').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxd() {
document.getElementById('box4').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxe() {
document.getElementById('box5').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxe() {
document.getElementById('box5').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxf() {
document.getElementById('box6').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxf() {
document.getElementById('box6').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxg() {
document.getElementById('box7').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxg() {
document.getElementById('box7').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxh() {
document.getElementById('box8').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxh() {
document.getElementById('box8').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxi() {
document.getElementById('box9').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxi() {
document.getElementById('box9').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxj() {
document.getElementById('box10').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxj() {
document.getElementById('box10').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxk() {
document.getElementById('box11').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxk() {
document.getElementById('box11').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxl() {
document.getElementById('box12').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxl() {
document.getElementById('box12').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxm() {
document.getElementById('box13').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxm() {
document.getElementById('box13').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxn() {
document.getElementById('box14').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxn() {
document.getElementById('box14').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxo() {
document.getElementById('box15').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxo() {
document.getElementById('box15').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function closeboxp() {
document.getElementById('box16').innerHTML = "<img src='dice/opened.png' class='box'> ";
} 

function overboxp() {
document.getElementById('box16').innerHTML = "<img src='dice/empty.png' class='box'> ";
} 

function over() {
document.getElementById('stop').style.display = 'none';
 document.getElementById('overr').style.display = 'block';   
}

function again() {
document.getElementById('stop').style.display = 'none';
 document.getElementById('overr').style.display = 'none'; 
 document.getElementById('again').style.display = 'block';
}

function refresh() {
window.location.reload(); 
}  