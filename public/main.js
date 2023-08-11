
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






















//! WELCOME SWIPER





var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });








  //! SHOP SWIPER


  