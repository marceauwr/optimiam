const animation = bodymovin.loadAnimation({
    container: document.querySelector('#anim'),
    renderer: 'svg', 
    loop: true,
    autoplay: true,
    path: 'data.json'
})