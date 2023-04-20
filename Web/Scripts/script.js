//Navbar on scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("avatar").style.height = "40px";
    document.getElementById("avatar").style.width = "40px";
    document.getElementById("wrapper").style.padding = "5px";
    document.getElementById("navbar").style.paddingBottom = "100px";
    document.getElementById("wrapper").style.paddingRight = "160px";
    document.getElementById("logo").style.fontSize = "28px";
    
  } else {
    

    document.getElementById("avatar").style.height = "60px";
    document.getElementById("avatar").style.width = "60px";
    document.getElementById("wrapper").style.padding = "15px";
    document.getElementById("wrapper").style.paddingRight = "165px";
    document.getElementById("navbar").style.paddingLeft = "100px";
    document.getElementById("logo").style.fontSize = "35px";
   
  }
}
