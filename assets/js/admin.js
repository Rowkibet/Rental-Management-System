const menuArray = document.querySelectorAll('.drop-down-menu');

menuArray.forEach(menu => {
    menu.addEventListener('click', () => {
        menu.classList.toggle("visible");
    });   
});
