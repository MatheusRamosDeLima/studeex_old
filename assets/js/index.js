const menuList = document.querySelector('#menu-list'),
menuListName = document.querySelectorAll('.list-name'),
mainContent = document.querySelector('#main-content');

const allElementsToToggle = [menuList, ...menuListName, mainContent];
function clickMenuButton() {
    allElementsToToggle.forEach(element => {
        element.classList.toggle('list-visible');
    });
}