<?php 

    require("init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'about';
    $title_tag = 'ABOUT | Dajeong Park';
?>
<?php require_once(get_path("partials/global/head.php"));?>
<body>
    <?php require_once(get_path("partials/global/header.php"));?>
    
    <main id="matter-main">
        <section>
            <div class="container">
                <div class="grid h-100">
                    <div class="col-12 col-7-sm col-5-lg img-container z-index">
                        <img src="images/DJ.jpg" alt="photograph of dajeong park">
                    </div>
                    <div class="col-12 col-5-8-lg">
                        <div class="grid">
                            <div class="about__content col-12 z-index">
                                <h1 class="about__intro flex h2">
                                    <div class="text-reveal">
                                        <span>Hey there! I’m</span>
                                    </div>
                                    <div class="text-reveal">
                                        <span class="drop-shadow">Dajeong</span>
                                    </div>
                                    <div class="text-reveal">
                                        <span>but you can call me</span>
                                    </div>
                                    <div class="text-reveal">
                                        <span class="drop-shadow">DJ</span>
                                    </div>
                                </h1>
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
                    <div id="skills" class="col-12 skills__title z-index"></div>
                </div>
            </div>
            <!-- background-color change trigger -->
            
        </section>
       
        <div id="matter-container" class="matter-container">
        </div>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"))?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>

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
        
    const matterContainer = document.querySelector("#matter-container");
    const mainHeight = document.querySelector("#matter-main");
    const THICCNESS = 60;
    const SVG_WIDTH_IN_PX = 100;
    const SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH = 0.4;

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

        // render.canvas.height = mainHeight.clientHeight;
        let scaleFactor;
            if (window.innerWidth >= window.innerHeight*0.8) {
                scaleFactor = (window.innerHeight * (SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH - .7)) / SVG_WIDTH_IN_PX;
            } else {
                scaleFactor = (matterContainer.clientWidth * SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH) / SVG_WIDTH_IN_PX;
            }

        let ScaleCircle = scaleFactor/5;
        let ScaleRec = scaleFactor/4.2;
        let startingPoint =  (mainHeight.clientHeight)*3 /5;
        
        var sass = Bodies.circle(300, startingPoint, scaleFactor * 40,  {
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

        var figma = Bodies.circle(300, startingPoint, scaleFactor * 40,  {
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

        var matter = Bodies.circle(300, startingPoint, scaleFactor * 40,  {
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

        var php = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 80, scaleFactor * 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/php.png", 
                xScale: ScaleRec/1.2, 
                yScale: ScaleRec/1.2}}
        });

        var gsap = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 70, scaleFactor * 70, {
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

        var adobe = Bodies.rectangle(matterContainer.clientWidth / 1.3 , startingPoint , scaleFactor * 80, scaleFactor * 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/adobe.png", 
                xScale: ScaleRec/2.35, 
                yScale: ScaleRec/2.35}}
        });

        var jquery = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 70, scaleFactor * 70, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/jquery.png", 
                xScale: ScaleRec/2.7, 
                yScale: ScaleRec/2.7}}
        });

        var js = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 110, scaleFactor * 70, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/js.png", 
                xScale: ScaleRec*1.2, 
                yScale: ScaleRec*1.4}}
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

        var bootstrap = Bodies.rectangle(matterContainer.clientWidth / 4 , startingPoint , scaleFactor * 80, scaleFactor * 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/bootstrap.png", 
                xScale: ScaleRec/2.1, 
                yScale: ScaleRec/2.1}}
        });

        var css = Bodies.rectangle(matterContainer.clientWidth / 2 , startingPoint , scaleFactor * 77, scaleFactor * 77, {
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
        Composite.add(world, [sass, figma, matter, php, gsap, jquery, js, responsive, html, adobe, css,bootstrap, ground, leftwall, rightwall]);

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
        var imgContainer = document.querySelector(".img-container");
        var aboutContent = document.querySelector(".about__content");
        var insideGap = false;
        

        window.addEventListener('scroll', function() {
        var body = document.querySelector('body');
        var skills = document.querySelector('#skills');
        var dropShadows = document.querySelectorAll('.drop-shadow');
        var menus = document.querySelectorAll('.hamburger');
        var logoChange = document.querySelector('#logoOrange');
        var logoBlack = document.querySelectorAll('.st2');
        var logoWhite = document.querySelector('#logoWhite');
        var navColor = document.querySelector(".main-nav--mobile");
        var skillsRect = skills.getBoundingClientRect();

        if (skillsRect.top <= window.innerHeight && skillsRect.bottom >= 0) {
            body.classList.add('--bg-change');
            imgContainer.classList.add('--bg-change');
            aboutContent.classList.add('--bg-change');
            dropShadows.forEach( item =>
              item.classList.add('--bg-change'));
            menus.forEach( item =>
            item.classList.add('--bg-change'));
            logoChange.style.fill = "#e4ff5e";
            logoBlack.forEach( item =>
            item.style.fill = "#fff");
            navColor.style.backgroundColor = "#000";
            navColor.style.border = "1px solid #fff";
            logoWhite.style.fill = "#000";
        } else if (skillsRect.bottom > 0) {
            body.classList.remove('--bg-change');
            imgContainer.classList.remove('--bg-change');
            aboutContent.classList.remove('--bg-change');
            dropShadows.forEach( item =>
              item.classList.remove('--bg-change'));
            menus.forEach( item =>
            item.classList.remove('--bg-change'));
            logoChange.style.fill = "#f15822";
            logoBlack.forEach( item =>
            item.style.fill = "#010101");
            navColor.style.backgroundColor = "#fff";
            navColor.style.border = "1px solid #000";
            logoWhite.style.fill = "#fff";
        }
        });
    </script>
   
</body>

</html>