const menuList = document.querySelector('#menu-list'),
menuListName = document.querySelectorAll('.list-name'),
mainContent = document.querySelector('#main-content'),
darkBackgroundDiv = document.querySelector('#dark-background-div');

const allElementsToToggle = [menuList, ...menuListName, mainContent, darkBackgroundDiv];
function clickMenuButton() {
    allElementsToToggle.forEach(element => {
        element.classList.toggle('list-visible');
    });
}

function clickDarkBackgroundDiv() {
    allElementsToToggle.forEach(element => {
        element.classList.remove('list-visible');
    });
}