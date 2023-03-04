<?php 
    require("init.php")
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("partials/global/head.php")?>

<body>
    <?php require_once("partials/global/header.php")?>
    <main id="main">
        <div id="matter-container--home" class="matter-container--home"></div>
        <section class="home__main">
            <div class="container">
                <div class="grid">
                    <!-- <div class="home__elem-1">
                        <img src="images/ball.png" alt="a ball shpaped element in homepage">
                    </div>
                    <div class="home__elem-2">
                        <img src="images/main-logo.png" alt="logo element">
                    </div> -->
                    <div class="home__content  col-12 flex">

                        <div class="home__title">
                            <h1>Front-end Developer</h1>
                        </div>
                        <div class="home__desc">
                            <h2 class="p">I strive to make<br>The web a place of<br>
                                <span class="drop-shadow">Wonder and
                                    excitement!
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__projects">
            <div class="container">
                <div class="grid">
                    <div class="col-12 button title">
                        <h2>Featured Projects</h2>
                    </div>
                    <div class="projects__cards col-12">
                        <ul>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="note-taking-application.html">
                                            <h3>Note-taking Web Application</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="note-taking-application.html" class="button-sm">
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
    </main>
    <?php require_once("partials/global/footer.php")?>
    <script src="scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>

    <script>
        const matterContainer = document.querySelector("#matter-container--home");
        const mainHeight = document.querySelector("#main");
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
        world.gravity.y = 0;

        let width = matterContainer.clientWidth;
        let height = matterContainer.clientHeight;

        var render = Render.create({
            element: matterContainer,
            engine: engine,
            options: {
                width: width,
                height: mainHeight.clientHeight,
                wireframes: false,
                background: "transparent"
            }
        });

        var ball = Bodies.circle(100, 100, 40, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/ball.png",
                    xScale: 0.15,
                    yScale: 0.15
                }
            }
        });

        var logo = Bodies.circle(100, 100, 40, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/main-logo.png",
                    xScale: 0.15,
                    yScale: 0.15
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
                stiffness: 0.2
            }
        });

        // var touch = MatterTouch.create(engine);
        // var mouseConstraint = Matter.MouseConstraint.create(engine, {
        //   mouse: Matter.Mouse.create(render.canvas),
        //     constraint: {
        //     stiffness: 0.2,
        //     render: {
        //         visible: false
        // }}, plugins: {
        //         wrap: MatterWrap,
        //         touch: touch
        //     }
        // });
        Composite.add(world, mouseConstraint);

        mouseConstraint.mouse.element.removeEventListener(
            "mousewheel",
            mouseConstraint.mouse.mousewheel
        );

        mouseConstraint.mouse.element.removeEventListener(
            "DOMMouseScroll",
            mouseConstraint.mouse.mousewheel
        );

        mouseConstraint.mouse.element.removeEventListener('touchstart', mouseConstraint.mouse.mousedown);
mouseConstraint.mouse.element.removeEventListener('touchmove', mouseConstraint.mouse.mousemove);
mouseConstraint.mouse.element.removeEventListener('touchend', mouseConstraint.mouse.mouseup);

mouseConstraint.mouse.element.addEventListener('touchstart', mouseConstraint.mouse.mousedown, { passive: true });
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