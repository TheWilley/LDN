const boxes = document.querySelectorAll('.alignleft');

// Add style to images with text besides
boxes.forEach(box => {
    console.log(box.closest("p").textContent);
    if(box.closest("p").textContent != "") {
        box.closest("p").style.backgroundColor = '#222222';
        box.closest("p").style.padding = '9px';
        box.closest("p").style.border = '1px solid #414141';
    }
});

// Remove empty lines
Array.prototype.slice.call(document.getElementsByTagName("p")).forEach(element => {
    if(element.innerHTML == "&nbsp;") {
        element.remove();
    }
})