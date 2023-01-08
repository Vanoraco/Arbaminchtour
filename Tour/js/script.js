let menu;
menu = document.querySelector('#menu-btn');

let navbar;
navbar = document.querySelector('.header .navbar');

menu.onclick = () => { 
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active')
 };

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

let loadMoreBtn = document.querySelector('.destination .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll('.destination .box-container .box')];
   for(var i = currentItem ; i < currentItem + 3; i++) {
     boxes[i].style.display = 'inline-block';
   }
  currentItem += 1;
    if(currentItem == 5) {
     loadMoreBtn.style.display = 'none';
    }
     
}

