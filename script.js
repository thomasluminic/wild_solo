let idBurger = document.getElementById('burger-active');
idBurger.addEventListener('click', (event) => {
    let tooggleMenu = document.getElementById('toggle-menu');
    tooggleMenu.classList.toggle('mobile-menu-hidden');
})