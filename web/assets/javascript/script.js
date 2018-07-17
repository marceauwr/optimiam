// burger menu 
const $burger = document.querySelector('.burger')
const $hamburger = $burger.querySelector('.hamburger')
const $menu = $burger.querySelector('.menu')

$hamburger.addEventListener('touchstart', (event) =>
{

    event.preventDefault()

    $burger.classList.toggle('active')
    $menu.classList.toggle('shown')
})
