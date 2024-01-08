const primaryNav = document.querySelector(".primary-navigation");
const navToggle = document.querySelector(".mobile-nav-toggle");

navToggle.addEventListener("click", () => {
    const visibility = primaryNav.getAttribute("data-visible");
    
    if (visibility === "false") {
        primaryNav.setAttribute("data-visible", true);
    } else if(visibility === "true") {
        primaryNav.setAttribute("data-visible", false);
    }

    console.log(visibility);
})


// on scroll
const header = document.querySelector('header');
const logo = document.querySelector('.logo-1');
const menu = document.querySelector('.mobile-nav-toggle');

function stickynavbar() {
  if (window.scrollY >= 50) {    
    header.classList.add('active-scroll');
  } else {
    header.classList.remove('active-scroll');    
  }
}
window.addEventListener('scroll', stickynavbar);

function logo_change() {
  if (window.scrollY >= 50) {    
    logo.classList.remove('logo-1');
    logo.classList.add('logo-2');    
  } else {
    logo.classList.remove('logo-2');
    logo.classList.add('logo-1');  
  }
}
window.addEventListener('scroll', logo_change);

function menu_change() {
  if (window.scrollY >= 50) {    
    menu.classList.remove('mobile-nav-toggle');
    menu.classList.add('mobile-nav-toggle-2');    
  } else {
    menu.classList.remove('mobile-nav-toggle-2');
    menu.classList.add('mobile-nav-toggle'); 
  }
}
window.addEventListener('scroll', menu_change);