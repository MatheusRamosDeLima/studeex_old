if (window.innerWidth > 900) {
    menuList.classList.add('list-visible');
    menuListName.forEach(listName => {
        listName.classList.add('list-visible');
    });
    mainContent.classList.add('list-visible');
}