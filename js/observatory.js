let menuButton = document.querySelector('.navbar-toggler');
menuButton.addEventListener('click', menuFixer);

function menuFixer(){
    let mainMenu = document.getElementById('main-nav');
    console.log(mainMenu);
    mainMenu.classList.toggle('sharp')
}