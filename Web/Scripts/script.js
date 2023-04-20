//Navbar on scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    
    document.getElementById("avatar").style.height = "40px";
    document.getElementById("avatar").style.width = "40px";
    
    document.getElementById("wrapper").style.padding = "5px";
    document.getElementById("wrapper2").style.padding = "29px";
    document.getElementById("wrapper").style.paddingRight = "160px";

    
  } else {
    

    document.getElementById("avatar").style.height = "60px";
    document.getElementById("avatar").style.width = "60px";
  
    document.getElementById("wrapper2").style.padding = "50px";

    document.getElementById("wrapper").style.paddingBottom = "100px";
    document.getElementById("wrapper").style.paddingTop = "15px";
    document.getElementById("wrapper2").style.paddingTop = "39px";
    document.getElementById("wrapper").style.paddingRight = "165px";

  
   
  }
}
