const btnHamburger = document.querySelector('#hamburger');
const hamburgerList = document.querySelector('.hamburger-list');
const hamburgerListWrapper = document.querySelector('.hamburger-list-wrapper');

btnHamburger.addEventListener('click', event => {
    hamburgerListWrapper.classList.toggle('open');
    setTimeout(() => {
        hamburgerList.classList.toggle('open');
    }, 300);
    event.stopPropagation();
});

hamburgerListWrapper.addEventListener('click', event => {
    hamburgerList.classList.remove('open');
    setTimeout(() => {
        hamburgerListWrapper.classList.remove('open');
    }, 300);
    event.stopPropagation();
});