var elements = document.querySelectorAll('.afterload');

for(var i = 0, l = elements.length; i < l; i++) {
    elements[i].setAttribute('src', elements[i].dataset['original']);
    elements[i].classList.remove('afterload');
}