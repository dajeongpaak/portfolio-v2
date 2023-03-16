<?php 

    require("init.php")
   
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $title_tag = 'Dajeong Park - Front-end developer, designer' ;
    $partial_css = 'home';
?>
<?php require_once(get_path("partials/global/head.php"));?>

<body>
    <?php require_once(get_path("partials/global/header.php"));?>

    <main id="main">
        <section class="home__main">
            <div class="container">
                <div class="home__content flex">
                    <h1 class="home__title flex">
                        <span class="z-index">Front-</span>
                        <span class="z-index">end</span>
                        <span class="z-index">Developer</span>
                        <span class="z-index">&</span>
                        <span class="z-index">Designer</span>
                    </h1>
                </div>
                <div class="home__desc">
                    <div class="flex desc__card z-index">
                        <h2>
                            <span class="desc__h2">I strive <br>to make the web <br> a place of<br></span>
                        <div class="desc__card-anim flex">
                            <span class="drop-shadow z-index">Wonder <br>and<br>
                                excitement!
                            </span>
                            <span class="drop-shadow z-index">Wonder <br>and<br>
                                excitement!
                            </span>
                            <span class="drop-shadow z-index">Wonder <br>and<br>
                                excitement!
                            </span>
                            <span class="drop-shadow z-index">Wonder <br>and<br>
                                excitement!
                            </span> 
                        </div>
                        <span class="desc__h2 text-right">Through creativity,<br> technology, <br>and lifelong learning.</span>
                        </h2>
                    </div>
                </div>
            </div>
         
        </section>
        <section class="home__projects">
            <div class="container">
                <div class="grid">
                    <div class="col-12  title">
                        <h2 class="h4">Featured Projects</h2>
                    </div>
                    <div class="projects__cards col-12 z-index">
                        <ul class="grid">
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="<?php echo get_url("/projects/note-taking-application-web-development-project.php"); ?>">
                                            <h3 class="">Note-taking Web Application</h3>
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
                                            <h3>‘SYMMETRY’ Photo Gallery</h3>
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
                                            <h3>‘esnes’ Perfume
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
                                            <h3>‘Burger Squad’ Responsive Web design </h3>
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

        const tl = gsap.timeline({paused: false});
        tl.to('.desc__card', {
            scrollTrigger: {
                trigger: ".desc__card",
                toggleActions: "restart pause reverse pause",
                markers: true,
                start: 'top 50%',
                end: 'bottom bottom',
                scrub: 2,
            },
            borderRadius: '2rem',
            height: '70vh',
            width: 'unset',
            duration: 15,
        }, {
            
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

        var ball = Bodies.circle(width*(1/4), mainHeight.clientHeight*(1/7), scaleFactor*90, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/ball.png",
                    xScale: scaleFactor,
                    yScale: scaleFactor
                }
            }
        });

        var logo = Bodies.circle(width*(3/4), mainHeight.clientHeight*(2/5), scaleFactor*80, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/logosm.png",
                    xScale: scaleFactor*0.9,
                    yScale: scaleFactor*0.9
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