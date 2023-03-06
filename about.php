<?php 
    require("init.php")
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("partials/global/head.php")?>

<body>
    <?php require_once("partials/global/header.php")?>
    <main id="about-main">
    
        <section>
            <div class="img-container z-index">
                <img src="images/DJ.jpg" alt="photograph of dajeong park">
            </div>
            <div class="container">
                <div class="grid">
                    <div class="about__content col-12 z-index">
                        <div class="about__intro flex h3 ">
                            <div>Hey there! I’m</div>
                            <span class="drop-shadow">Dajeong</span>
                            <div>but you can call me</div>
                            <span class="drop-shadow">DJ</span>
                        </div>
                        <div class="about__desc">
                            <p>
                            I'm a  front-end developer from Korea, currently based in Vancouver, and in training to become a professional in the field.
                            </p>
                            <br>
                            <p>
                            I'm on a mission to make the web a more fun and immersive place, one website at a time. With the true passion for crafting user journeys that feel like exciting adventures, 
                            I'm always looking for ways to make web browsing a more engaging experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="skills" class="skills__title z-index"></div>
        </section>
        <div id="matter-container" class="matter-container">
            <!-- <h2>SKILLS</h2> -->
        </div>
    </main>
    <footer class="footer about-footer">
        <div class="container">
            <div class="grid">
                <div class="footer__content col-12">
                    <ul>
                        <li>
                            <span>
                                <a href="https://www.linkedin.com/in/dajeong-park-4956bb255/">Linkedin</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href="tel:2368692819">236-869-2819</a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <a href="mailto:dajeong2019@gmail.com">dajeong2019@gmail.com</a>
                            </span>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
        <span class="footer__copy h6">© Dajeong Park 2023</span>
    </footer>
    <script src="scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
   
    <script>
    const matterContainer = document.querySelector("#matter-container");
    const mainHeight = document.querySelector("#about-main");
    const THICCNESS = 60
    const SVG_WIDTH_IN_PX = 100;
    const SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH = 0.38

        // module aliases
        var Engine = Matter.Engine,
            Render = Matter.Render,
            Runner = Matter.Runner,
            Bodies = Matter.Bodies,
            Composite = Matter.Composite,
            Body = Matter.Body,
            Svg = Matter.Svg,
            Vector = Matter.Vector,
            Vertices = Matter.Vertices,
            World = Matter.World;

        // create an engine
        var engine = Engine.create(),
        world = engine.world;

        // create a renderer
        var render = Render.create({
            element: matterContainer,
            engine: engine,
            options: {
                width: matterContainer.clientWidth,
                height: mainHeight.clientHeight,
                // pixelRatio: 2,
                wireframes: false,
                background: 'transparent'
            }
        });

        render.canvas.height = mainHeight.clientHeight;
        let scaleFactor;
            if (matterContainer.clientWidth >= matterContainer.clientHeight) {
                scaleFactor = (matterContainer.clientHeight * (SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH - 0.1)) / SVG_WIDTH_IN_PX;
            } else {
                scaleFactor = (matterContainer.clientWidth * SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH) / SVG_WIDTH_IN_PX;
            }

     
        let ScaleCircle = scaleFactor/4.5;
        let ScaleRec = scaleFactor/4;
        let startingPoint =  (mainHeight.clientHeight)*3 /5;
        
        var css = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 80, scaleFactor * 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/css.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec}}
        });

        var sass = Bodies.circle(300, startingPoint, scaleFactor * 45,  {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/sass.png", 
                xScale: ScaleCircle, 
                yScale: ScaleCircle }}
            });

        var figma = Bodies.circle(300, startingPoint, scaleFactor * 45,  {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/figma.png", 
                xScale: ScaleCircle, 
                yScale: ScaleCircle }}
            });

        var matter = Bodies.circle(300, startingPoint, scaleFactor * 45,  {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/matter.png", 
                xScale: ScaleCircle, 
                yScale: ScaleCircle }}
            });

        var php = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 100, scaleFactor * 100, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/php.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec}}
        });

        var gsap = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 80, scaleFactor * 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/gsap.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec}}
        });

        var jquery = Bodies.polygon(matterContainer.clientWidth / 2, startingPoint, 3, scaleFactor *53, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/jquery.png", 
                xScale: ScaleCircle, 
                yScale: ScaleRec}}
        });

        var js = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 150, scaleFactor * 100, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/js.png", 
                xScale: scaleFactor/2.7, 
                yScale: scaleFactor/2.2}}
        });

        var responsive = Bodies.rectangle(matterContainer.clientWidth / 4 , startingPoint , scaleFactor * 100, scaleFactor * 100, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/responsive.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec}}
        });

        var htmlR = Bodies.circle(300, startingPoint, scaleFactor * 50,  {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/html.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec }}
            });
         

        var cssR = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 80, scaleFactor * 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/css.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec}}
        });

        var html = Bodies.circle(300, startingPoint, scaleFactor * 50,  {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/html.png", 
                xScale: ScaleRec, 
                yScale: ScaleRec }}
            });
         
                
        var roof = Bodies.rectangle(0, 0, 82854, THICCNESS, { isStatic: true,
            render: {
        fillStyle: 'rgba(0,0,0,0)'}});
        var ground = Bodies.rectangle(matterContainer.clientWidth / 2, mainHeight.clientHeight + THICCNESS / 2, 82854, THICCNESS, { isStatic: true,
            render: {
        fillStyle: 'rgba(0,0,0,0)'}});
        var leftwall = Bodies.rectangle( 0 - THICCNESS / 2, matterContainer.clientHeight / 2, THICCNESS , matterContainer.clientHeight * 5, { isStatic: true,
            render: {
        fillStyle: 'rgba(0,0,0,0)'}});
        var rightwall = Bodies.rectangle( matterContainer.clientWidth + THICCNESS / 2, matterContainer.clientHeight / 2, THICCNESS, matterContainer.clientHeight * 5, { isStatic: true,
            render: {
        fillStyle: 'rgba(0,0,0,0)'}});

        // add all of the bodies to the world
        Composite.add(world, [sass, figma, matter, php, gsap, jquery, js, responsive, html, cssR, ground, leftwall, rightwall]);

        var canvas = render.canvas;

        let mouse = Matter.Mouse.create(canvas);
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

        
        // run the renderer
        Render.run(render);

        // create runner
        var runner = Runner.create();

        // run the engine
        Runner.run(runner, engine);

        
        function handleResize(matterContainer) {
            // Set canvas size to new values
            canvas.width = matterContainer.clientWidth;
            canvas.height = matterContainer.clientHeight;

            // reposition ground
            Matter.Body.setPosition(
                ground, Matter.Vector.create(
                    matterContainer.clientWidth / 2,
                    matterContainer.clientHeight + THICCNESS / 2
                )
            );

            // Reposition right wall
            Matter.Body.setPosition(rightwall,
            Matter.Vector.create(
            matterContainer.clientWidth + THICCNESS / 2,
            matterContainer.clientHeight / 2 
                )
            );
        }

        window.addEventListener("resize", () => handleResize(matterContainer));

        var body = document.querySelector('body');
        var gap = document.querySelector('#skills-gap');
        var imgContainer = document.querySelector(".img-container");
        var aboutContent = document.querySelector(".about__content");
        var insideGap = false;

        window.addEventListener('scroll', function() {
        var body = document.querySelector('body');
        var skills = document.querySelector('#skills');
        var skillsRect = skills.getBoundingClientRect();

        if (skillsRect.top <= window.innerHeight && skillsRect.bottom >= 0) {
            body.classList.add('background-change');
            imgContainer.classList.add('background-change');
            aboutContent.classList.add('background-change')
        } else if (skillsRect.bottom > 0) {
            body.classList.remove('background-change');
            imgContainer.classList.remove('background-change');
            aboutContent.classList.remove('background-change');
        }

        console.log(skillsRect.top, skillsRect.bottom, window.innerHeight)
        });
    </script>
   
</body>

</html>