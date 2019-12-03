/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function responsiveNav() {
    var navbar = document.getElementById("topNav");
    if (navbar.className === "nav_bar") {
      navbar.className += " responsive";
    } else {
      navbar.className = "nav_bar";
    }
  }
 window.onscroll = function() {myFunction()};
  // Get the offset position of the navbar
  var navbar = document.getElementById("topNav");
  var sticky = navbar.offsetTop;
  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }


function chooseButton1(_this) {
  var par=_this.parentNode; 
 while(par.nodeName.toLowerCase()!='tr'){ 
  par=par.parentNode; 
 } 
 var rows = par.rowIndex+1;
  var id = rows+"2";
  if(document.getElementById('choose' + id).style.backgroundColor = "#0071bc"){
  _this.style.backgroundColor = "#0071bc";
  document.getElementById('choose' + id).style.backgroundColor = "#1a2028";
  }else{
    _this.style.backgroundColor = "#0071bc";
  }
}
function chooseButton2(_this) {
  var par=_this.parentNode; 
 while(par.nodeName.toLowerCase()!='tr'){ 
  par=par.parentNode; 
 } 
 var rows = par.rowIndex+1;
  var id = rows+"1";
  if(document.getElementById('choose' + id).style.backgroundColor = "#0071bc"){
  _this.style.backgroundColor = "#0071bc";
  document.getElementById('choose' + id).style.backgroundColor = "#1a2028";
  }else{
    _this.style.backgroundColor = "#0071bc";
  }
}


   


