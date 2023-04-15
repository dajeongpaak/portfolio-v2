
<script>
const backBtn = document.querySelector(".back__btn");
let slideIn = document.querySelector('.js-slidein');

backBtn.addEventListener('click', () => {
    window.history.back();
})

gsap.to( slideIn , {
    height: 0,
    ease: "expo",
    duration: 1.5,
})
</script>
