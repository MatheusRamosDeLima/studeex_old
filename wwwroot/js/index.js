const menuList = document.querySelector('#menu-list');
const mainSection = document.getElementsByTagName('main')[0];

function clickMenuButton() {
    menuList.classList.toggle('list-visible');
    mainSection.classList.toggle('list-visible');
}