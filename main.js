//Search Icon
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
  
  //Dropdown
  function menuToggle(){
    const toggleMenu = document.querySelector('#menu');
    toggleMenu.classList.toggle('active')
  }
  
  window.onscroll = function () { scrollFunction() };
  
  //Navbar on scroll
  function scrollFunction() {
  
    if ((document.body.scrollTop > 80)|| (document.documentElement.scrollTop > 80)) {
  
      //ProfileIcon
      document.getElementById("avatar").style.height = "45px";
      document.getElementById("avatar").style.width = "45px";
      document.getElementById("avatar").style.marginTop = "-2px";
  
      //LogoIcon
      document.getElementById("logo").style.height = "40px";
      document.getElementById("logo").style.width = "40px";
  
      //Search Icon
      document.getElementById("search").style.marginTop = "1%";
  
      //Text
      document.getElementById("navbar").style.marginTop = ".9%";
      document.getElementById("navbar").style.marginLeft = "16%";
  
      //PurpleWrapp
      document.getElementById("wrapper").style.opacity = "1";
      document.getElementById("wrapper").style.padding = "10px 10px 50px 10px";
  
      //dropdown
      document.getElementById("menu").style.top = "60px";
      document.getElementById("action").style.top = "60px";
      document.getElementById("menu").style.right = "85px";
      document.getElementById("action").style.right = "85px";
      document.getElementById("menu").style.top = "65px";
      document.getElementById("action").style.top = "65px";
   
    } else {
  
      //ProfileIcon
      document.getElementById("avatar").style.height = "70px";
      document.getElementById("avatar").style.width = "70px";
      document.getElementById("avatar").style.marginTop = "5px";
  
      //Search Icon
      document.getElementById("search").style.marginTop = "2%";
  
      //Text
      document.getElementById("navbar").style.marginTop = "2%";
      document.getElementById("navbar").style.marginLeft = "17%";
  
      //LogoIcon
      document.getElementById("logo").style.height = "60px";
      document.getElementById("logo").style.width = "60px";
  
      //NavBar
      document.getElementById("wrapper").style.opacity = "0";
      document.getElementById("wrapper").style.padding = "10px 10px 80px 10px";
  
      //dropdown
      document.getElementById("menu").style.top = "95px";
      document.getElementById("action").style.top = "95px";
      document.getElementById("menu").style.right = "95px";
      document.getElementById("action").style.right = "95px";
    }
  
  
  }
  
// Page switcher
window.onload = () => {
    const tab_switchers = document.querySelectorAll('[data-switcher]');

    for (let i = 0; i < tab_switchers.length; i++) {
        const tab_switcher = tab_switchers[i];
        const page_id = tab_switcher.dataset.tab;

        tab_switcher.addEventListener('click', () => {
            document.querySelector('.tabs .tab.is-active').classList.remove('is-active');
            tab_switcher.parentNode.classList.add('is-active');

            SwitchPage(page_id);
        });
    }
}

function SwitchPage (page_id) {
    console.log(page_id);

    const current_page = document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');

    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    next_page.classList.add('is-active');
}