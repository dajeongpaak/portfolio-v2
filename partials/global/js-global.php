<script>
const menuOpen = document.querySelector('#js-menu-open');
const jsMenu = document.querySelector('#js-menu');
const hamburgers = document.querySelectorAll('.hamburger');
const menuList = document.querySelector('#menuList');


menuOpen.addEventListener('click', () => {

    jsMenu.classList.toggle('js-menu--hidden');

    for (const hamburger of hamburgers) {
        hamburger.classList.toggle('active');
    }

    menuList.classList.toggle('main-nav__list--hidden');
    document.body.classList.toggle('no-scroll');
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos - 1) {
        if(window.innerWidth < 1024 ) {
            document.getElementById("js-navBar--mobile").style.top = "0";
        } else{
            document.getElementById("js-navBar--desktop").style.top = "0";
        }
    } else {
        if(window.innerWidth < 1024) {
            document.getElementById("js-navBar--mobile").style.top = "-6rem";
        } else {
            document.getElementById("js-navBar--desktop").style.top = "-6rem";
        }
        
       
    }
    prevScrollpos = currentScrollPos;
}

const videos = document.querySelectorAll('.js-video');
const videoContainer = document.querySelector('.project__video');

window.addEventListener("load", () => {
    videos.forEach(video => {
        video.play();
        video.classList.add('loading');
    });
});
      
</script>


