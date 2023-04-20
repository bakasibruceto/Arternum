//Navbar on scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    
    //ProfileIcon
    document.getElementById("avatar").style.height = "40px";
    document.getElementById("avatar").style.width = "40px";
    //document.getElementById("search").style.height = "40px";
    //document.getElementById("search").style.width = "40px";
    
    //GreyBar
    document.getElementById("wrapper").style.padding = "10px 10px 50px 10px";

  } else {
    
    //ProfileIcon
    document.getElementById("avatar").style.height = "60px";
    document.getElementById("avatar").style.width = "60px";
    //document.getElementById("search").style.height = "60px";
    //document.getElementById("search").style.width = "60px";
    
    //GreyBar
    document.getElementById("wrapper").style.padding = "10px 10px 70px 10px";
  
  
 

  
   
  }
}
