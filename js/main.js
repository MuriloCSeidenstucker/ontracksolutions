jQuery(document).ready(function($){
  //FIXED HEADER
  window.onscroll = function() {
    if(window.pageYOffset > 140) {
      $('header').addClass('active');
    } else {
      $('header').removeClass('active');
    }
  }
});

const navbar = document.querySelector(".navbar-nav");
const button = document.querySelector("button")

button.addEventListener("click", function () {
  if(navbar.style.display == "none") {
    navbar.style.display = "flex";
  } else {
    navbar.style.display = "none";
  }
  
});

