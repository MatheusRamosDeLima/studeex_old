const menuList = document.querySelector('#menu-list');
const menuListName = document.querySelectorAll('.list-name');
const mainContent = document.querySelector('#main-content');

function clickMenuButton() {
    menuList.classList.toggle('list-visible');
    menuListName.forEach(listName => {
        listName.classList.toggle('list-visible');
    });
    mainContent.classList.toggle('list-visible');
}