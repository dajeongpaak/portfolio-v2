gsap.registerPlugin(ScrollTrigger);
const circle = document.querySelector('#js-circle-animation');
const sadLogo = document.querySelector('#js-color-change');
const sadLogoFooter = document.querySelector('#js-color-change--footer');
const tl = gsap.timeline({ paused: false });

const selectors = [
    ".home__title",
    ".home__desc",
    ".wonder__content"
];

selectors.forEach(selector => {
    gsap.from(`${selector} span`, 1.8, {
        scrollTrigger: {
            trigger: selector,
            toggleActions: "play complete restart reset",
        },
        y: 150,
        ease: "power4.out",
        delay: 1,
        skewY: 10,
        stagger: {
            amount: 0.7
        }
    });
});

sadLogo.addEventListener('click', () => {

    randomBGcolor()
    sadLogo.innerHTML = '';

    let p = document.createElement('p');
    p.innerText = '(There you go!)';
    sadLogo.appendChild(p);

    let logo = document.createElement('img');
    logo.src = "<?php echo get_url("images/happy-logo.svg")?>";
    logo.alt = "pdj happy face logo";
    sadLogo.appendChild(logo);

    let clickMe = document.createElement('p');
    clickMe.innerText = 'Click me!';
    clickMe.className = 'h6';
    sadLogo.appendChild(clickMe);
});

sadLogoFooter.addEventListener('click', () => {

    randomRootColor();
    sadLogoFooter.innerHTML = '';

    let p = document.createElement('p');
    p.innerText = '(There you go!)';
    sadLogoFooter.appendChild(p);

    let logo = document.createElement('img');
    logo.src = "<?php echo get_url("images/happy-logo.svg")?>";
    logo.alt = "pdj happy face logo";
    sadLogoFooter.appendChild(logo);

    let clickMe = document.createElement('p');
    clickMe.innerText = 'Click me!';
    clickMe.className = 'h6';
    sadLogoFooter.appendChild(clickMe);
});

function randomBGcolor() {
    let x = Math.floor(Math.random() * 256);
    let y = Math.floor(Math.random() * 256);
    let z = Math.floor(Math.random() * 256);
    let bgColor = "rgb(" + x + ", " + y + ", " + z + ")";

    circle.style.background = bgColor;
}

var root = document.documentElement;
var colorArr = [
    {
        '--orange': '#5b8001',
        '--light-orange': '#7b9a31',
        '--neon-green-invert': '#e7c0f6',
        '--yellow': '#3e5701',
        '--beige': '#e3fab9',
        '--white': '#faffe7',
    },
    {
        '--orange': '#2745F2',
        '--light-orange': '#5b70e8',
        '--neon-green-invert': '#f2e29b',
        '--yellow': '#415CF2',
        '--beige': '#BDC5F2',
        '--white': '#f3f8fb',
    },
    {
        '--orange': '#ff6300',
        '--light-orange': '#ff883c',
        '--neon-green-invert': '#1b00a1',
        '--yellow': '#ffaf42',
        '--beige': '#fffbf2',
        '--white': '#fff',
    }
];

var i = 0;
function randomRootColor() {
    var colorSet = colorArr[i];
    if (i === colorArr.length - 1) {
        i = 0;
    } else {
        i++
    }

    let colorProp = Object.keys(colorSet);

    colorProp.forEach((property) => {
        root.style.setProperty(`${property}`, `${colorSet[property]}`);
    })
};

let pieceContainer = document.querySelector("#js-text-animation");
let xPos = window.innerWidth / 2;
let yPos = window.innerHeight / 2;
let pieces = gsap.utils.toArray("#js-text-animation span");
let getintough = gsap.utils.toArray("#js-footer-text span")

pieces.forEach(item => {
    let xRandomPos = gsap.utils.random(-xPos, xPos);
    let yRandomPos = gsap.utils.random(-yPos, yPos);
    let rRandom = gsap.utils.random(-30, 30);

    tl.to(item, {
        scrollTrigger: {
            trigger: ".home__wonder",
            toggleActions: "restart pause reverse none",
            start: "top top",
            end: "center bottom",
            scrub: 1,
        },
        x: xRandomPos,
        y: yRandomPos,
        rotate: rRandom,
        duration: 0.5,
        stagger: 1,
        ease: "power2"
    })
})

tl.to(circle, {
    scrollTrigger: {
        trigger: ".home__wonder",
        toggleActions: "restart pause reverse none",
        start: 'top top',
        end: 'center bottom',
        scrub: 1,
    },
    ease: "expo",
    scale: 1,
    duration: 0.3,
})

getintough.forEach(item => {
    let xRandomPos = gsap.utils.random(-xPos, xPos);
    let yRandomPos = gsap.utils.random(-yPos, yPos);
    let rRandom = gsap.utils.random(-30, 30);

    tl.from(item, {
        scrollTrigger: {
            trigger: ".footer",
            toggleActions: "restart pause reverse none",
            start: "top 40%",
            end: "bottom bottom",
            scrub: 1,
        },
        x: xRandomPos,
        y: yRandomPos,
        rotate: rRandom,
        duration: .5,
        stagger: 1,
        ease: "power2"
    })
})


let snaps = gsap.utils.toArray(".snap");

gsap.to(snaps, {
    ease: "expo",
    scrollTrigger: {
        trigger: snaps,
        pin: true,
        pinSpacing: false,
        scrub: 1,
        duration: 1
    },
})
