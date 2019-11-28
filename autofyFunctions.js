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

  
  
  var elem1 = document.getElementById("Colorbg2");
  var filter = parseInt(window.getComputedStyle(elem1).height);
  

  var elem2 = document.getElementById("Colorbg3");
  var carboxes = parseInt(window.getComputedStyle(elem2).height);

var content=document.getElementById('Colorbg').style.height;
var container=document.getElementById('container').style.height;



if(filter>carboxes)
{
  var a=0;
  a = filter + 230;
document.getElementById('container').style.height=a + "px";
document.getElementById('Colorbg').style.height=a + "px";
}
else 
{
  var
  b=0;
  b = carboxes + 230;
  document.getElementById('container').style.height=b + "px";
document.getElementById('Colorbg').style.height=b + "px";
}


function chooseButton1(_this) {
  if(document.getElementById('choose2').style.backgroundColor = "#8a8a8a"){
  _this.style.backgroundColor = "#8a8a8a";
  document.getElementById('choose2').style.backgroundColor = "#0071bc";
  }else{
    _this.style.backgroundColor = "#8a8a8a";
  }
}
function chooseButton2(_this) {
  if(document.getElementById('choose1').style.backgroundColor = "#8a8a8a"){
  _this.style.backgroundColor = "#8a8a8a";
  document.getElementById('choose1').style.backgroundColor = "#0071bc";
  }else{
    _this.style.backgroundColor = "#8a8a8a";
  }
}


