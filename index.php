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
        <section class="home__main">
            <div class="container">
                <div class="home__title flex">
                    <h1 class="flex flex-column">
                        <span class="z-index">
                            Front-
                        </span>
                        <span class="z-index">end
                        </span>
                        <span class="z-index">Developer</span>
                        <span class="z-index">
                        <span>&</span><br>
                        <span class="z-index">Designer</span>
                    </h1>
                </div>
                <div class="home__desc flex flex-column">
                    <div class="desc__p">
                        to design and develop<br>
                        immersive<br>
                        web experience<br>
                        that fully engage users,<br>
                        creating<br>
                        an emotional connection<br>
                        with the digital environment<br><br>
                    </div>   
                    <h2 class="desc__h2">
                        I strive to make<br>
                        the web a place of<br>
                    </h2>
                </div>
                <div class="home__wonder h-100 flex flex-column justify-evenly">
                    <div class="flex justify-center align-center">
                        <div id="js-circle-animation" class="wonder__circle z-index"></div>     
                        <div id="js-text-animation" class="wonder__circle-text z-index h2">
                                <span>W</span><span>o</span><span>n</span><span>d</span><span>e</span><span>r</span><br> 
                                <span>a</span><span>n</span><span>d</span><br> 
                                <span>E</span><span>x</span><span>c</span><span>i</span><span>t</span><span>e</span><span>m</span><span>e</span><span>n</span><span>t</span><span>!</span>
                        </div>            
                    </div>
                    <div class="wonder__content">
                        <h3 class="desc__h2 flex flex-column">
                                through<br><br>
                                Creativity,<br>
                                Technology,<br>
                                and Lifelong learning.
                        </h3>
                    </div>
                </div>
                <div id="js-color-change" class="home__color flex flex-column align-center z-index">
                        <p id="js-text-change">(don't like the color?)</p>
                        <img src="<?php echo get_url("images/sad-logo.svg")?>" alt="pdj sad face logo">
                        <span class="h6">Click me!</span>
                    </div>
            </div>
        </section>
        <section class="home__projects-mobile mt-6">
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
                                            <i class="fa-solid fa-arrow-right-long"></i>
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
                                            <i class="fa-solid fa-arrow-right-long"></i>
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
                                            <i class="fa-solid fa-arrow-right-long"></i>
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
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div id="matter-container--home" class="matter-container--home"></div>
    </main>

    <?php require_once(get_path("/partials/global/footer.php"))?>
    
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <!-- <script src="scripts/main.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        const circle = document.querySelector('#js-circle-animation');
        const sadLogo = document.querySelector('#js-color-change');
        const tl = gsap.timeline({paused: false});

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

            let clickMe = document.createElement('span');
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
      
        pieces.forEach( item => {
            let xRandomPos = gsap.utils.random(-xPos, xPos);
            let yRandomPos = gsap.utils.random(-yPos, yPos);
            let rRandom = gsap.utils.random(-30 , 30);

            tl.to(item, {
                scrollTrigger: {
                    trigger: ".home__wonder",
                    toggleActions: "restart pause reverse none",
                    start: "top 20%",
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
                // markers: true,
                start: 'top 20%',
                end: 'center bottom',
                scrub: 1,
            },
            ease: "expo",
            scale: 1,
            duration: 0.3,
        })






        const matterContainer = document.querySelector("#matter-container--home");
        const mainHeight = document.querySelector("#main");
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
        var ground = Bodies.rectangle(width / 2, document.body.offsetHeight, 32848, 460, { isStatic: true,
            render: {
                fillStyle:'rgba(0,0,0,0)'
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