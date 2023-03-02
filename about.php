<?php 
    require("init.php")
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("partials/global/head.php")?>

<body>
    <?php require_once("partials/global/header.php")?>
    <main>
    <canvas id="world"></canvas>

    </main>
    <?php require_once("partials/global/footer.php")?>
    <script src="scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>


    <script>

    var canvas = document.getElementById("world");
        // module aliases
        var Engine = Matter.Engine,
            Render = Matter.Render,
            Runner = Matter.Runner,
            Bodies = Matter.Bodies,
            Composite = Matter.Composite,
            MouseConstraint = Matter.MouseConstraint,
            Mouse = Matter.Mouse,
            World = Matter.World;

        // create an engine
        var engine = Engine.create(),
        world = engine.world;

        // create a renderer
        var render = Render.create({
            canvas: canvas,
            element: document.body,
            engine: engine,
            options: {
                width: window.innerWidth,
                height: window.innerHeight,
                wireframes: false,
                background: '#000',
            }
            
        });

        render.canvas.width = window.innerWidth;
        render.canvas.height = window.innerHeight;

        var width = window.innerWidth;
        var height = window.innerHeight;
        // create two boxes and a ground
        // var boxA = Bodies.rectangle(400, 200, 80, 80);
        // var boxB = Bodies.rectangle(450, 50, 80, 80);
        // var ground = Bodies.rectangle(400, 610, 810, 60, { isStatic: true });


        var css = Bodies.rectangle(width / 3 , 140, 87, 40, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/css.png", 
                xScale: 0.5, 
                yScale: 0.5 }}})
        var sass = Bodies.rectangle(width / 2, 200, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/sass.png", 
                xScale: 0.5, 
                yScale: 0.5 }}})
        var html = Bodies.rectangle(width / 2, 50, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/html.png", 
                xScale: 0.3, 
                yScale: 0.3 }}})
        var js = Bodies.rectangle(width / 3, 250, 180, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/js.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        var php = Bodies.rectangle(width / 2, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/php.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        var figma = Bodies.rectangle(width / 4, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/figma.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        var jquery = Bodies.rectangle(width / 2.5, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/jquery.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        var gsap = Bodies.rectangle(width / 1, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/gsap.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        var responsive = Bodies.rectangle(width / 2.3, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/responsive.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        var matter = Bodies.rectangle(width / 2.1, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
                sprite: { 
                    texture: "images/matter.png", 
                    xScale: 0.4, 
                    yScale: 0.4 }}})
        var adobe = Bodies.rectangle(width / 2.6, 250, 80, 80, {
            density: 0.04,
		    friction: 0.01,
		    frictionAir: 0.000001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: "images/adobe.png", 
                xScale: 0.4, 
                yScale: 0.4 }}})
        // var gsap = Bodies.rectangle(width / 2, 250, 80, 80, {render: { 
        //         sprite: { 
        //             texture: "images/gsap.png", 
        //             xScale: 0.4, 
        //             yScale: 0.4 }},
        //     density: 0.001})
        // var gsap = Bodies.rectangle(width / 2, 250, 80, 80, {render: { 
        //         sprite: { 
        //             texture: "images/gsap.png", 
        //             xScale: 0.4, 
        //             yScale: 0.4 }},
        //     density: 0.001})
            
        var ground = Bodies.rectangle(width / 2, height - 30, width + 10, 1, { isStatic: true,
            render: {
        fillStyle: 'rgba(0,0,0,0)'}});
        var leftwall = Bodies.rectangle( width, height, 1, height*2, { isStatic: true,
            render: {
        fillStyle: '#fff'}});
        var rightwall = Bodies.rectangle( 0, height, 1, height*2, { isStatic: true,
            render: {
        fillStyle: '#fff'}});
        // add all of the bodies to the world
        Composite.add(world, [css, sass, html, js, php, figma, jquery, gsap, responsive, matter, adobe, ground, leftwall, rightwall]);

        // run the renderer
        Render.run(render);

        // create runner
        var runner = Runner.create();

        // run the engine
        Runner.run(runner, engine);
    </script>

    
</body>

</html>