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

  function bgColor(){
    var augstums = document.getElementsByClassName("content").style.height;
    augstums = "2000px";

  }