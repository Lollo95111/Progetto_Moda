



//! NABAR




let navbar = document.querySelector("#navbar");
let links = document.querySelectorAll(".nav-link")
// console.log(window)


window.addEventListener('scroll', ()=>{
    console.log(window.scrollY)
    let scrolled = window.scrollY;



    if(scrolled > 100 ){
        navbar.classList.add('navbar-blur' ,'bg-1')
        links.forEach((link) => {
            link.style.color = "white";
            link.addEventListener('mouseenter', ()=>{
                link.style.color = 'black'
                link.style.borderBottom = '2px solid black'
            })
            link.addEventListener('mouseleave', ()=>{
                link.style.color = 'white';
                link.style.borderBottom = "none";
            })

            });
    }
    else{
        navbar.classList.remove('navbar-blur' ,'bg-1')
        links.forEach((link) => {
            link.style.color = "black"; 
            
            link.addEventListener('mouseenter', ()=>{
                link.style.color = 'white'
                link.style.borderBottom = '2px solid white'
            })
            link.addEventListener('mouseleave', ()=>{
                link.style.color = 'black';
                link.style.borderBottom = "none";
            })
            });
            
    }


});









var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


