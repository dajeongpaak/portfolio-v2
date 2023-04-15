var body = document.querySelector('body');
var imgContainer = document.querySelector(".img-container");
var aboutContent = document.querySelector(".about__content");
var insideGap = false;

const tl = gsap.timeline({paused: false});

        tl.from(".about__intro span", 1.8, {
                y: 120,
                ease: "power4.out",
                delay: .3,
                skewY: 7,
                stagger: {
                    amount: 0.5
                }
            })
        
        var root = document.documentElement;

        window.addEventListener('scroll', () => {
        var skills = document.querySelector('#skills');
        var skillsRect = skills.getBoundingClientRect();

        if (skillsRect.top <= window.innerHeight && skillsRect.bottom >= 0) {
            root.style.setProperty("--white", "#000000");
            root.style.setProperty("--black", "#ffffff");
        } else if (skillsRect.bottom > 0) {
            root.style.setProperty("--white", "#ffffff");
            root.style.setProperty("--black", "#000000");
        }
        });
