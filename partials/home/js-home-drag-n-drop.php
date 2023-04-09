
<script>
const dragNote = document.querySelector('#dragNote');
const dragGallery = document.querySelector('#dragGallery');
const dragEsnes = document.querySelector('#dragEsnes');
const dragBurger = document.querySelector('#dragBurger');
const dragitems = document.querySelectorAll('.drag__item');
const dropSpot = document.querySelector('.drag__drop-spot');

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
    if (e.target.classList.contains('drag__drop-spot')) {
        e.target.classList.add('drag-over');
    }
});

dropSpot.addEventListener('dragleave', (e) => {
    if (e.target.classList.contains('drag__drop-spot')) {
        e.target.classList.remove('drag-over');
    }
});

dropSpot.addEventListener('dragover', (e) => {
    e.preventDefault();
})

dropSpot.addEventListener('drop', dragDrop);

function dragDrop(e) {
    e.preventDefault();
    const itemId = e.dataTransfer.getData('text/plain');
    let url;

    switch (itemId) {
        case 'dragNote':
            url = '<?php echo get_url("/projects/note-taking-application-web-development-project.php"); ?>'
            break;
        case 'dragGallery':
            url = '#';
            break;
        case 'dragEsnes':
            url = '#';
            break;
        case 'dragBurger':
            url = '#';
            break;
        default:
            url = '#';
            break;
    }

    window.location.href = url;
};


</script>