<?php 

    require("init.php")
   
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $title_tag = 'Dajeong Park | Front-end developer, designer' ;
    $partial_css = 'home';
?>
<?php require_once(get_path("partials/global/head.php"));?>

<body>
    <?php require_once(get_path("partials/global/header.php"));?>
    <main id="main">
        <section id="matter-canvas" class="home__main">
            <div class="container">
                <h1 class="home__title flex flex-column justify-center h-100 w-100">
                    <div class="text-reveal">
                        <span class="z-index">
                        Front-
                        </span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">end
                        </span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">Developer</span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">
                        &</span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">Designer</span><br>
                    </div>
                </h1>
                <div class="home__desc flex flex-column justify-center h-100">
                    <p class="h5">
                        to design and develop<br>
                        immersive<br>
                        web experience<br>
                        that fully engage users,<br>
                        creating 
                        an emotional connection<br>
                        with the digital environment<br><br>
                    </p>   
                    <h2 class="desc__h2">
                        <div class="text-reveal">
                            <span>
                            I strive to make
                            </span>
                        </div>
                        <div class="text-reveal">
                            <span>
                            the web a place of
                            </span>
                        </div>
                        
                    </h2>
                </div>
                <div class="home__wonder flex flex-column justify-between">
                    <div class="flex justify-center align-center">
                        <div id="js-circle-animation" class="wonder__circle z-index"></div>     
                        <div id="js-text-animation" class="wonder__circle-text z-index h2">
                                <span>W</span><span>o</span><span>n</span><span>d</span><span>e</span><span>r</span><br> 
                                <span>a</span><span>n</span><span>d</span><br> 
                                <span>E</span><span>x</span><span>c</span><span>i</span><span>t</span><span>e</span><span>m</span><span>e</span><span>n</span><span>t</span><span>!</span>
                        </div>            
                    </div>
                    <div class="wonder__content mt-6 justify-between align-end">
                        <h3 class="desc__h2 flex-grow">
                                through<br>
                                <div class="text-reveal">
                                    <span >Creativity,</span><br>
                                </div>
                                <div class="text-reveal">
                                    <span>Technology, and </span><br>
                                </div>
                                <div class="text-reveal">
                                    <span>Lifelong learning.</span>
                                </div>
                        </h3>
                        <div id="js-color-change" class="home__color text-center mt-3 z-index ">
                            <p id="js-text-change">(don't like the color?)</p>
                            <img src="<?php echo get_url("images/sad-logo.svg")?>" alt="pdj sad face logo">
                            <p class="h6">Click me!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__projects--mobile border-radius">
            <div class="container">
                <div class="grid">
                    <div class="col-12 title">
                        <h2 class="h4">Featured Projects</h2>
                    </div>
                    <div class="projects__cards col-12 z-index">
                        <ul class="grid cards">
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="<?php echo get_url("/projects/note-taking-application-web-development-project.php"); ?>">
                                            <h3 class="h5">Note-taking Web Application</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="<?php echo get_url("/projects/note-taking-application-web-development-project.php"); ?>" class="button-sm">
                                        <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="symmetry.html">
                                            <h3 class="h5">‘SYMMETRY’ Photo Gallery</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="symmetry.html" class="button-sm">
                                            <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="esnes.html">
                                            <h3 class="h5">‘esnes’ Perfume
                                                Launching site</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="esnes.html" class="button-sm">
                                            <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="burgersquad.html">
                                            <h3 class="h5">‘Burger Squad’ Responsive Web design </h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="burgersquad.html" class="button-sm">
                                            <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__projects--desktop border-radius snap">
            <div class="container">
            <div class="projects__drag flex justify-between align-center">
                <div class="flex w-100 justify-between">
                    <div id="dragNote" class="drag__note drag__item" draggable="true" data-index="0">
                    </div>
                    <div id="dragGallery" class="drag__gallery drag__item" draggable="true" data-index="1">
                    </div>
                    <div id="hover-text">sdfsdf</div>
                </div>
                <div class="drag__drop-spot">
                    Drag<br> &<br> Drop Here!
                </div>
                <div class="drag__title-top">Featured</div>
                <div class="drag__title-bottom">Projects</div>
            </div>
            </div>
        </section>
        <div id="matter-container--home" class="matter-container--home"></div>
    </main>
    <footer class="footer border-radius snap">
        <div class="container h-100 flex flex-column justify-between">
            <div class="footer__cta flex flex-column justify-center align-center h2">
                <div id="js-footer-text" class="footer__cta--text text-center">
                    <span>G</span><span>e</span><span>t</span><br><span>I</span><span>n</span><br><span>T</span><span>o</span><span>u</span><span>c</span><span>h</span><span>!</span>
                </div>
                <div class="footer__cta--email text-center mt-3">
                    <a href="mailto:hello@dajeongpark.com" title="dajeong park email contact me!" class="button">hello@dajeongpark.com</a>
                </div> 
            </div>
            <div id="js-color-change--footer" class="footer__color text-center z-index ">
                <p id="js-text-change">(Yellow is ugly!)</p>
                <img src="<?php echo get_url("images/sad-logo.svg")?>" alt="pdj sad face logo">
                <p class="h6">Click me!</p>
            </div>  
            <div class="footer__links flex justify-between align-center">
                <p class="home-footer__copy h6">© <?php echo date("Y")?> Dajeong Park</p>
                <ul class="footer__social flex">
                    <li class="h6">
                        <span>
                            <a href="https://www.linkedin.com/in/dajeong-park-4956bb255/">Linkedin</a>
                        </span>
                    </li>
                    <li class="h6">
                        <span>
                            <a href="https://github.com/dajeongpaak" target="_blank" title="Dajeong Park GitHub">GitHub</a>
                        </span>
                    </li>
                    <li>
                        <a href="#" class="h6">
                           Back To Top
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </footer>
   
   
    
  
    <?php require_once(get_path("/partials/home/js-home-drag-n-drop.php"))?>
    <!-- <script src="scripts/main.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        const circle = document.querySelector('#js-circle-animation');
        const sadLogo = document.querySelector('#js-color-change');
        const tl = gsap.timeline({paused: false});

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


        function randomBGcolor() {
            let x = Math.floor(Math.random() * 256);
            let y = Math.floor(Math.random() * 256);
            let z = Math.floor(Math.random() * 256);
            let bgColor = "rgb(" + x  + ", " + y + ", " + z + ")";

            circle.style.background = bgColor;
        } 
        
      
        let pieceContainer = document.querySelector("#js-text-animation");
        let xPos = window.innerWidth / 2;
        let yPos = window.innerHeight / 2;
        let pieces = gsap.utils.toArray("#js-text-animation span");
        let getintough = gsap.utils.toArray("#js-footer-text span")
      
        pieces.forEach( item => {
            let xRandomPos = gsap.utils.random(-xPos, xPos);
            let yRandomPos = gsap.utils.random(-yPos, yPos);
            let rRandom = gsap.utils.random(-30 , 30);

            tl.to(item, {
                scrollTrigger: {
                    trigger: ".home__wonder",
                    toggleActions: "restart pause reverse none",
                    start: "top 40%",
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

        tl.to( circle, {
            scrollTrigger: {
                trigger: ".home__wonder",
                toggleActions: "restart pause reverse none",
                start: 'top 40%',
                end: 'center bottom',
                scrub: 1,
            },
            ease: "expo",
            scale: 1,
            duration: 0.3,
        })

        getintough.forEach( item => {
            let xRandomPos = gsap.utils.random(-xPos, xPos);
            let yRandomPos = gsap.utils.random(-yPos, yPos);
            let rRandom = gsap.utils.random(-30 , 30);

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


        const matterContainer = document.querySelector("#matter-container--home");
        const mainHeight = document.querySelector("#matter-canvas");
        const SVG_WIDTH_IN_PX = 100;
        const SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH = 0.20;
        var Engine = Matter.Engine,
            Render = Matter.Render,
            Runner = Matter.Runner,
            Bodies = Matter.Bodies,
            Composite = Matter.Composite,
            Body = Matter.Body,
            World = Matter.World;

        var engine = Engine.create(),
            world = engine.world;

        world.gravity.x = 0;
        world.gravity.y = - 0.09;

        let width = matterContainer.clientWidth;
        let height = matterContainer.clientHeight;

        let scaleFactor;
            if (window.innerWidth >= window.innerHeight*0.6) {
                scaleFactor = (window.innerHeight * (SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH - 0.08)) / SVG_WIDTH_IN_PX;
            } else {
                scaleFactor = (width * SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH) / SVG_WIDTH_IN_PX;
            }


        var render = Render.create({
            element: matterContainer,
            engine: engine,
            options: {
                width: width,
                height: mainHeight.clientHeight,
                pixelRatio: 2,  
                wireframes: false,
                background: "transparent"
            }
        });

        var ball = Bodies.circle(width*(1/4), mainHeight.clientHeight*(1/7), scaleFactor*50, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/ball.png",
                    xScale: scaleFactor*0.6,
                    yScale: scaleFactor*0.6
                }
            }
        });

        var logo = Bodies.circle(width*(3/4), mainHeight.clientHeight*(2/5), scaleFactor*50, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/logosm.png",
                    xScale: scaleFactor*0.6,
                    yScale: scaleFactor*0.6
                }
            }
        });
        var ground = Bodies.rectangle(width / 2, matterContainer.clientHeight, 32848, 1, { isStatic: true,
            render: {
                fillStyle:'rgba(255,255,255,1)'
            }});

        var roof = Bodies.rectangle( 0, 0, 34234, 1, {   isStatic: true,
            render: {
                fillStyle: 'rgba(0,0,0,0)'}});

        var leftwall = Bodies.rectangle( 0, 0 , 1 , 11254, {
            isStatic: true,
            render: {
                fillStyle:'rgba(0,0,0,0)'
            }
        });

        var rightwall = Bodies.rectangle( width , height , 1 , 11254, {
            isStatic: true,
            render: {
                fillStyle:'rgba(0,0,0,0)'
            }
        });

        Composite.add(world, [ball, logo, ground, roof, leftwall, rightwall]);

        let mouse = Matter.Mouse.create(render.canvas);
        let mouseConstraint = Matter.MouseConstraint.create(engine, {
            mouse: mouse,
            constraint: {
                stiffness: 0.2,
                render: {
                    visible: false
                }
            }
        });

        Composite.add(world, mouseConstraint);

        mouseConstraint.mouse.element.removeEventListener(
            'mousewheel',
            mouseConstraint.mouse.mousewheel
        );

        mouseConstraint.mouse.element.removeEventListener(
            'DOMMouseScroll',
            mouseConstraint.mouse.mousewheel
        );

        mouseConstraint.mouse.element.removeEventListener(
            'touchstart', 
            mouseConstraint.mouse.mousedown
        );

        mouseConstraint.mouse.element.removeEventListener(
            'touchmove',
            mouseConstraint.mouse.mousemove
        );

        mouseConstraint.mouse.element.removeEventListener(
            'touchend', 
            mouseConstraint.mouse.mouseup
        );

        mouseConstraint.mouse.element.addEventListener(
            'touchstart', 
            mouseConstraint.mouse.mousedown, { passive: true });

        mouseConstraint.mouse.element.addEventListener('touchmove', (e) => {
        if (mouseConstraint.body) {
        mouseConstraint.mouse.mousemove(e);
        }
        }); 

        mouseConstraint.mouse.element.addEventListener('touchend', (e) => {
        if (mouseConstraint.body) {
        mouseConstraint.mouse.mouseup(e);
        }
        });

        Render.run(render);

        var runner = Runner.create();

        Runner.run(runner, engine);
    </script>
</body>

</html>