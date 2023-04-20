// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "1px";
    document.getElementById("logo").style.fontSize = "25px";
    document.getElementById("navbar").style.paddingLeft = "90px";
  } else {
    document.getElementById("navbar").style.padding = "28px";
    document.getElementById("logo").style.fontSize = "35px";
    document.getElementById("navbar").style.paddingLeft = "100px";
  }
}
