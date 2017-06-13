




var t=0;
// Get the modal1
var modal1 = document.getElementById('modal-form');

// When the user clicks anywhere outside of the modal1, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
var modal10 = document.getElementById('rawcashewmodal');

// When the user clicks anywhere outside of the modal1, close it
window.onclick = function(event) {
    if (event.target == modal10) {
        modal10.style.display = "none";
    }
}






var modal4 = document.getElementById('proddescmodalbuyer');

// When the user clicks anywhere outside of the modal1, close it
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
var modal5 = document.getElementById('proddescmodal');

// When the user clicks anywhere outside of the modal1, close it
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}


function selectchange()
{
  var base=document.getElementById("basetype").value;

if(base =="All")
{
  var searchbox =document.getElementById("searchtext");
  searchbox.placeholder ="Search for all products";
}
else if(base="Origin")
{
   var searchbox =document.getElementById("searchtext");
  searchbox.placeholder="Enter Origin Country";
}

}

function searchh()
{
  var cashewtype=document.getElementById("cashewsearchtype").value;
  
  var base=document.getElementById("basetype").value;
  var searchbox =document.getElementById("searchtext").value;
  if( base =="All"  )
   { 
        if(cashewtype == "Raw Cashew Requirements" )
        {
            location.href = "file:///C:/Users/Elcot/Desktop/apaar/rawcashewlistre.html";
        }
        if(cashewtype == "Raw Cashew Availability" )
        {
          location.href = "file:///C:/Users/Elcot/Desktop/apaar/rawcashewlistavailability.html";
        }
  
                                        
    }
     if( base =="Origin"  )
   { 
   if(cashewtype == "Raw Cashew Requirements" )
        {
            location.href = "file:///C:/Users/Elcot/Desktop/apaar/rawcashewlistre.html?origin=" + searchbox;
        }
        if(cashewtype == "Raw Cashew Availability" )
        {
          location.href = "file:///C:/Users/Elcot/Desktop/apaar/rawcashewlistavailability.html?origin=" + searchbox;
        }
  
                                        
    }






}
// Instantiate the Bootstrap carousel



function hideLogin()
{
    $('#signnnin').hide();
    $('#registerrr').show();
    $('#labelnewuser').hide();
    $('#labellogin').show();
    $('#regimag').show();
    $('#logimag').hide();
}
function loginandreg()
{
     $('#registerrr').hide();
    $('#modal-form').show();
    $('#labellogin').hide();
    $('#regimag').hide();
    $('#logimag').show();
    $('#loggin').hide();
    $('#labelnewuser').show();
    $('#signnnin').show();

}
function hideregister()
{
     $('#registerrr').hide();
    $('#modal-form').show();
    $('#labelnewuser').show();
$('#signnnin').show();    
$('#labellogin').hide();
$('#regimag').hide();
    $('#signnnin').show();
     $('#logimag').show();



}

function rawcashewmodalhide()
{
     $('#rawcashlistreq').hide();
}
function viewallrawlistreq()
{
   $('#wholebodydoc').hide();
    $('#viewallrawcashewlistreq').show();
}



function proccashewlistre()
{
  alert("hey");
var name=document.getElementById("proccashewlistreqname").value;
var email=document.getElementById("proccashewlistreqemail").value;
var phone=document.getElementById("proccashewlistreqphone").value;
              
var qtyreq=document.getElementById("proccashewlistreqqty").value;             
var targetprice=document.getElementById("proccashewlistreqtargetprice").value;

var type=document.getElementById("proccashewlistreqtype").value;
var size=document.getElementById("proccashewlistsize").value;
var maxdefective=document.getElementById("proccashewlistreqdef").value;
var maxmoisture=document.getElementById("proccashewlistreqmaxmois").value;
var quality=document.getElementById("proccashewlistreqloading").value;

var raworigin=document.getElementById("proccashewraworigin").value;
var pref=document.getElementById("proccashewlistreqpreffered").value;

var Packing=document.getElementById("proccashewlistreqpacking").value;
var nslg=document.getElementById("proccashewlistnsg").value;
var Inspection=document.getElementById("proccashewlistreqinspection").value;
var delivery=document.getElementById("proccashewlistreqpreflandport").value;
var Shipmentmonth=document.getElementById("proccashewlistreqshipmentmonth").value;

var payterms=document.getElementById("proccashewlistreqpayementterms").value;
var fob=document.getElementById("proccashewlistreqfob").checked;
if(fob== true)
{
  fob='t';
}
else
{
  fob='f';
}
var CIF=document.getElementById("proccashewlistreqcif").checked;
if(CIF== true)
{CIF='t';}
else
{
CIF='f';
}
var dataString = "name=" + name +"&email=" +email +"&phone="+ phone +"&qtyreq=" + qtyreq + "&targetprice=" + targetprice + "&raworg=" + raworigin + "&prefland=" + pref + "&type=" + type + "&size=" + size +"&maxdefective=" + maxdefective + "&maxmoist=" + maxmoisture + "&Othherparticles=" + quality + "&packing=" + Packing + "&nslg=" + nslg + "&inspection=" + Inspection + "&delivery=" + delivery + "&Shipmentmonth=" + Shipmentmonth + "&payterms=" + payterms + "&fob=" + fob + "&cif=" + CIF ; 
alert(dataString);
/*
var dataString = "name=" + name +"email" +email +"phone" + phone +"yearofcrop" + yearofcrop + "qtyreq" + qtyreq + "countryoforg" + Countryoforigin + "targetprice" + targetprice + "outurngurantee" + outurngurantee + "nutcount" + nutcount + "maxdef" + maxdefective + "maaxmoist" + maxmoisture + "Othherparticles" + Othherparticles + "Packing" + Packing + "loading" + loading + "inspection" + Inspection + "preflandport" + preflandport + "Shipmentmonth" + Shipmentmonth + "paymentterms" + payterms + "fob" + fob + "cif" + CIF ;
*/
  $.ajax({
        url: 'http://localhost/apaarr_processed_buyer.php',
        type: 'post',
        data: dataString,   
        success: function (result) {
         alert(result);
     }
     

});

}

function rawcashewlistre()
{
var name=document.getElementById("rawcashewlistreqname").value;
var email=document.getElementById("rawcashewlistreqemail").value;
var phone=document.getElementById("rawcashewlistreqphone").value;
var yearofcrop=document.getElementById("rawcashewlistreqyearofcrop").value;
var qtyreq=document.getElementById("rawcashewlistreqqty").value;
var Countryoforigin=document.getElementById("rawcashewlistreqcountryofori").value;
var targetprice=document.getElementById("rawcashewlistreqtargetprice").value;
var outurngurantee=document.getElementById("rawcashewlistreqoutturn").value;
var nutcount=document.getElementById("rawcashewlistreqnutcount").value;
var maxdefective=document.getElementById("rawcashewlistreqdef").value;
var maxmoisture=document.getElementById("rawcashewlistreqmaxmois").value;
var Othherparticles=document.getElementById("rawcashewlistreqotherparticles").value;
var Packing=document.getElementById("rawcashewlistreqpacking").value;
var loading=document.getElementById("rawcashewlistreqloading").value;
var Inspection=document.getElementById("rawcashewlistreqinspection").value;
var preflandport=document.getElementById("rawcashewlistreqpreflandport").value;
var Shipmentmonth=document.getElementById("rawcashewlistreqshipmentmonth").value;
var payterms=document.getElementById("rawcashewlistreqpayementterms").value;
var fob=document.getElementById("rawcashewlistreqfob").checked;
var CIF=document.getElementById("rawcashewlistreqcif").checked;
var dataString = "name=" + name +"&email=" +email +"&phone="+ phone +"&yoc="+ yearofcrop +"&qtyreq=" + qtyreq + "&countryoforg=" + Countryoforigin + "&targetprice=" + targetprice + "&outurngurantee=" + outurngurantee + "&nutcount=" + nutcount +"&maxdefective=" + maxdefective + "&maxmoist=" + maxmoisture + "&Othherparticles=" + Othherparticles + "&packing=" + Packing + "&loding=" + loading + "&inspection=" + Inspection + "&preflandport=" + preflandport + "&Shipmentmonth=" + Shipmentmonth + "&payterms=" + payterms + "&fob=" + fob + "&cif=" + CIF ; 

/*
var dataString = "name=" + name +"email" +email +"phone" + phone +"yearofcrop" + yearofcrop + "qtyreq" + qtyreq + "countryoforg" + Countryoforigin + "targetprice" + targetprice + "outurngurantee" + outurngurantee + "nutcount" + nutcount + "maxdef" + maxdefective + "maaxmoist" + maxmoisture + "Othherparticles" + Othherparticles + "Packing" + Packing + "loading" + loading + "inspection" + Inspection + "preflandport" + preflandport + "Shipmentmonth" + Shipmentmonth + "paymentterms" + payterms + "fob" + fob + "cif" + CIF ;
*/
  $.ajax({
        url: 'http://localhost/apaarr_buyer.php',
        type: 'post',
        data: dataString,
        
        success: function (result) {
         alert(result);
     }



});
}

function proddecmod(s)
{

var self= this;
  if(t==0)
  {
    alert("login to view details");
  }
  else
  {

$("#div-for-badgeeeproc").html('');
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText;
                    res = JSON.parse(res);

                    $("#div-for-badgeeeproc").html($("#viewmoreinfoprocseller").render(res));
            };                }

            xmlhttp.open("GET", "http://localhost/get_full_apaar_seller_querybased.php/?q=" + s, true);
            xmlhttp.send();
  $('#proddescmodal').show();




}}

function proccashpostoffclick(e)
{

  e.preventDefault();
  var formd = new FormData($('#proccashpostoffform')[0]);
  $.ajax({
        url: 'http://localhost/processedcashewpostoff.php',
        type: 'post',
        data: formd ,
        processData :false,
    contentType :false,
    accept :'application/json',
   
        success: function (result) {
         alert(result);
     }



});
  
return false;
}


function listrelogin()
{
  firebase.auth().onAuthStateChanged(firebaseUser =>{
if(firebaseUser)
{
 
}
else
{
  alert("Login to list your requirements");
  location.href = "file:///C:/Users/Elcot/Desktop/apaar/index.html";
}
});


   $('#rawcashlistreq').show();
}

function listselllogin()
{
  firebase.auth().onAuthStateChanged(firebaseUser =>{
if(firebaseUser)
{
 
}
else
{
  alert(" Please ! Login to post your offers");
  location.href = "file:///C:/Users/Elcot/Desktop/apaar/index.html";
}
});


   $('#rawcashpostoff').show();;
}
function listsellloginpost()
{
 
}
function procllogin()
{
  firebase.auth().onAuthStateChanged(firebaseUser =>{
if(firebaseUser)
{
 
}
else
{
  alert(" Please ! Login to list your requirements");
  location.href = "file:///C:/Users/Elcot/Desktop/apaar/index.html";
}
});


   $('#proccashlistreq').show();;
}





function procesedselfunc()
{
   firebase.auth().onAuthStateChanged(firebaseUser =>{
if(firebaseUser)
{
 
}
else
{
  alert(" Please ! Login to post your offers");
  location.href = "file:///C:/Users/Elcot/Desktop/apaar/index.html";
}
});

  $('#proccashpostoff').show();
}


function proddecmodbuyer(s)
{

  var self= this;
  if(t==0)
  {
    alert("login to view details");
  }
  else
  {

$("#div-for-badgeee").html('');
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText;
                    res = JSON.parse(res);

                    $("#div-for-badgeee").html($("#viewmoreinfo").render(res));
            };                }

            xmlhttp.open("GET", "http://localhost/get_full_apaar_buyer.php/?q=" + s, true);
            xmlhttp.send();
  $('#proddescmodalbuyer').show();
  }
}
function processedbuyerinfo(s)
{

  var self= this;
  if(t==0)
  {
    alert("login to view details");
  }
  else
  {

$("#div-for-badgeees").html('');
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText;
                    res = JSON.parse(res);

                    $("#div-for-badgeees").html($("#viewmoreinfoprocessedbuyer").render(res));
            };                }

            xmlhttp.open("GET", "http://localhost/get_full_apaar_procssed_buyer.php/?q=" + s, true);
            xmlhttp.send();
  $('#processedmodalbuyer').show();
  }
}



function processedddecmodbuyer(s)
{

  var self= this;
  if(t==0)
  {
    alert("login to view details");
  }
  else
  {

$("#div-for-badgeee").html('');
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText;
                    res = JSON.parse(res);
alert(res);
                    $("#div-for-badgeee").html($("#viewmoreinfo").render(res));
                }
            };
            xmlhttp.open("GET", "http://localhost/get_full_apaar_seller.php/?q=" + s, true);
            xmlhttp.send();
  $('#proddescmodalbuyer').show();

  }
}
function editrawcashreqrow(id)
{

$("#div-for-badgeee").html('');
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText;
                    res = JSON.parse(res);

                    $("#div-for-badgeee").html($("#viewmoreinfo").render(res));
            };                }

            xmlhttp.open("GET", "http://localhost/get_full_apaar_buyer.php/?q=" + id, true);
            xmlhttp.send();
  $('#proddescmodalbuyer').show();
}

function rawcashewpostre()
{


var name=document.getElementById("rawcashewpostreqname").value;
var email=document.getElementById("rawcashewpostreqemail").value;
var phone=document.getElementById("rawcashewpostreqphone").value;
var yearofcrop=document.getElementById("rawcashewpostreqyearofcrop").value;
var qtyreq=document.getElementById("rawcashewpostreqqty").value;
var Countryoforigin=document.getElementById("rawcashewpostreqcountryofori").value;
var targetprice=document.getElementById("rawcashewpostreqtargetprice").value;
var outurngurantee=document.getElementById("rawcashewpostreqoutturn").value;
var nutcount=document.getElementById("rawcashewpostreqnutcount").value;
var maxdefective=document.getElementById("rawcashewpostreqdef").value;
var maxmoisture=document.getElementById("rawcashewpostreqmaxmois").value;
var Othherparticles=document.getElementById("rawcashewpostreqotherparticles").value;
var Packing=document.getElementById("rawcashewpostreqpacking").value;
var loading=document.getElementById("rawcashewpostreqloading").value;
var Inspection=document.getElementById("rawcashewpostreqinspection").value;
var preflandport=document.getElementById("rawcashewpostreqpreflandport").value;
var Shipmentmonth=document.getElementById("rawcashewpostreqshipmentmonth").value;
var payterms=document.getElementById("rawcashewpostreqpayementterms").value;
var fob=document.getElementById("rawcashewpostreqfob").checked;
var CIF=document.getElementById("rawcashewpostreqcif").checked;
var dataString = "name=" + name +"&email=" + email +"&phone="+ phone +"&yoc="+ yearofcrop +"&qtyreq=" + qtyreq + "&countryoforg=" + Countryoforigin + "&targetprice=" + targetprice + "&outurngurantee=" + outurngurantee + "&nutcount=" + nutcount +"&maxdefective" + maxdefective + "&maxmoist=" + maxmoisture + "&Othherparticles=" + Othherparticles + "&packing=" + Packing + "&loding=" + loading + "&inspection=" + Inspection + "&preflandport=" + preflandport + "&Shipmentmonth=" + Shipmentmonth + "&payterms=" + payterms + "&fob=" + fob + "&cif=" + CIF ; 

/*
var dataString = "name=" + name +"email" +email +"phone" + phone +"yearofcrop" + yearofcrop + "qtyreq" + qtyreq + "countryoforg" + Countryoforigin + "targetprice" + targetprice + "outurngurantee" + outurngurantee + "nutcount" + nutcount + "maxdef" + maxdefective + "maaxmoist" + maxmoisture + "Othherparticles" + Othherparticles + "Packing" + Packing + "loading" + loading + "inspection" + Inspection + "preflandport" + preflandport + "Shipmentmonth" + Shipmentmonth + "paymentterms" + payterms + "fob" + fob + "cif" + CIF ;
*/
  $.ajax({
        url: 'http://localhost/apaarr_seller.php',
        type: 'post',
        data: dataString,
        
        success: function (result) {
         alert(result);
     }



});


}

function signup()
{
    var s;
var signupemail=document.getElementById('signupemailid').value;
var signuppas=document.getElementById('signupenterpass').value;
var signuprep=document.getElementById('signuprepeatpassword').value;
if(signuppas==signuprep)
{
    s= firebase.auth().createUserWithEmailAndPassword(signupemail, signuppas).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
  if (errorCode == 'auth/weak-password') {
    alert('The password is too weak.');
  } else {
    alert(errorMessage);
  }
});
}
else
{
  alert("password and repeat password do not match .");
}
}






function logoutpanel(){
t=0;

  firebase.auth().signOut().then(function() {
  // Sign-out successful.
  $("#processedcashewnut").show();
$("#rawcashewnut").show();
 $("#loginpanel").show();
  $("#logoutpan").hide();
  $("#dashbo").hide();
$("#rawbuyer").show();
$("#rawseller").show();
$("#prbuyer").show();
$("#prseller").show();
$("#rawbuyer").show();
  
window.location = "index.html";
}).catch(function(error) {
  // An error happened.
  console.log("error dude");
});
}

function rawcashewfunc(){

var user = firebase.auth().currentUser;
  
if(t==0)
{}
else
{

$("#div-for-raw-buyer").html('');
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var res = this.responseText;
                    res = JSON.parse(res);

                    if(res)

                    {
                      
                       $("#div-for-raw-buyer").html($("#tab1rawbuyer").render(res));
                      
                     }
                     else
                     {
                       
                     }

                 
                    
                  
                  }
                
            };
            xmlhttp.open("GET", "http://localhost/get_apaar_buyer_tab1.php/?q=\""+ user.email  + "\"" , true);
            xmlhttp.send();


 $("#rawcashewmodal").show();

}

}
function dashboardmodal()
{



 $("#dashboard-modal").show();

}