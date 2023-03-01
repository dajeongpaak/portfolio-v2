const dragNote = document.querySelector('#dragNote');
const dragGallery = document.querySelector('#dragGallery');
const dragEsnes = document.querySelector('#dragEsnes');
const dragBurger = document.querySelector('#dragBurger');
const dragitems = document.querySelectorAll('.drag-item');
const dropSpot = document.querySelector('.drop-spot');

for (const dragitem of dragitems) {
    dragitem.addEventListener('dragstart', dragStart);
    dragitem.addEventListener('dragend', dragEnd);
}

function dragStart(e) {
    e.dataTransfer.setData('text/plain', e.target.id);
    this.style.filter = 'blur(2px)';
}

function dragEnd() {
    this.style.filter = 'blur(0)';
}

dropSpot.addEventListener('dragenter', (e) => {
    if (e.target.classList.contains('drop-spot')) {
        e.target.classList.add('drag-over');
    }
});

dropSpot.addEventListener('dragleave', (e) => {
    if (e.target.classList.contains('drop-spot')) {
        e.target.classList.remove('drag-over');
    }
});

dropSpot.addEventListener('dragover', (e) => {
    e.preventDefault();
})

dropSpot.addEventListener('drop', dragDrop);

// function dragDrop(e) {
//     e.preventDefault();
//     // window.location.href = "https://www.google.com";
// };
function dragDrop(e) {
    e.preventDefault();
    const itemId = e.dataTransfer.getData('text/plain');
    let url;

    switch (itemId) {
        case 'dragNote':
            url = 'https://www.google.com';
            break;
        case 'dragGallery':
            url = 'https://www.yahoo.com';
            break;
        case 'dragEsnes':
            url = 'https://www.bcit.ca';
            break;
        case 'dragBurger':
            url = 'https://www.naver.com';
            break;
        default:
            url = 'https://www.google.com';
            break;
    }

    window.location.href = url;
};

// console.log(noteDrag);