// burger menu 
const $burger = document.querySelector('.burger')
const $hamburger = $burger.querySelector('.hamburger')
const $menu = $burger.querySelector('.menu')

$hamburger.addEventListener('touchend', (event) =>
{
    $hamburger.classList.toggle('is-active')
    $menu.classList.toggle('shown')
})

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoPlay: 3e3,
    items: 5,
    pagination: !1,
    itemsTablet: [600, 1],
    itemsMobile: !1
})