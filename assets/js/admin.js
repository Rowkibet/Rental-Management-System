const arrowArray = document.querySelectorAll('i');

arrowArray.forEach(arrow => {
    arrow.addEventListener('click', event => {
        const arrowParent = event.target.parentElement.parentElement;
        arrowParent.classList.toggle('visible');
    }); 
});
