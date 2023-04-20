//Navbar on scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    
    //ProfileIcon
    document.getElementById("avatar").style.height = "40px";
    document.getElementById("avatar").style.width = "40px";
    
    document.getElementById("logo").style.height = "40px";
    document.getElementById("logo").style.width = "40px";
    document.getElementById("search").style.marginTop = "1%";
    document.getElementById("navbar").style.marginTop = ".9%";
    document.getElementById("navbar").style.marginLeft = "16%";
    
  
  
    //GreyBar
    document.getElementById("wrapper").style.padding = "10px 10px 50px 10px";

  } else {
    
    //ProfileIcon
    document.getElementById("avatar").style.height = "60px";
    document.getElementById("avatar").style.width = "60px";
    document.getElementById("search").style.marginTop = "2%";
    document.getElementById("navbar").style.marginTop = "2%";
    document.getElementById("navbar").style.marginLeft = "17%";
    document.getElementById("logo").style.height = "60px";
    document.getElementById("logo").style.width = "60px";

    
    //GreyBar
    document.getElementById("wrapper").style.padding = "10px 10px 80px 10px";
  
  
 

  
   
  }
}
