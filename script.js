let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classlist.toggle('fa-times');
    navbar.classlist.toggle('active');
}


// window.onscroll = () =>{
//     menu.classlist.remove('fa-times');
//     navbar.classlist.remove('active');
// };

var swiper = new Swiper(".swiper",{
    direction: 'horizontal',
    loop:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

});

// let loadMoreBtn = document.querySelector('.packages .load-more .btn');
// let currentItem = 3;

// loadMoreBtn.onclick = () =>{
//     let boxes = [...document.querySelectorAll('.packages .boxcontainer .box')];
//     for(var i = currentItem; i < currentItem + 3; i++){
//         boxes[i].style.display = 'inline-block';
//     };
//     currentItem += 3;
//     if(currentItem >= boxes.length){
//         loadMoreBtn.style.display ='none';
//     }
// }




