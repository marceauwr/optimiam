// burger menu 
const $burger = document.querySelector('.burger')
const $hamburger = $burger.querySelector('.hamburger')
const $menu = $burger.querySelector('.menu')

$hamburger.addEventListener('touchstart', (event) =>
{

    event.preventDefault()

    $hamburger.classList.toggle('is-active')
    $menu.classList.toggle('shown')
})
