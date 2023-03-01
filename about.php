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
            Composite = Matter.Composite;
            MouseConstraint = Matter.MouseConstraint,
            Mouse = Matter.Mouse,
            World = Matter.World,
            Bodies = Matter.Bodies;

        // create an engine
        var engine = Engine.create();

        // create a renderer
        var render = Render.create({
            element: document.body,
            engine: engine,
            option: {
                width: window.innerWidth,
                height: window.innerHeight,
                wireframes: false,
                background: '#000',
            },
            canvas: canvas
        });

        render.canvas.width = window.innerWidth;
        render.canvas.height = window.innerHeight;

        var width = window.innerWidth;
        var height = window.innerHeight;
        // create two boxes and a ground
        // var boxA = Bodies.rectangle(400, 200, 80, 80);
        // var boxB = Bodies.rectangle(450, 50, 80, 80);
        // var ground = Bodies.rectangle(400, 610, 810, 60, { isStatic: true });

        var boxA = Bodies.rectangle(width / 2, 200, 80, 80);
        var boxB = Bodies.rectangle(width / 2, 50, 80, 80);
        var ground = Bodies.rectangle(width / 2, height, width + 10, 1, { isStatic: true });
        // add all of the bodies to the world
        Composite.add(engine.world, [boxA, boxB, ground]);

        // run the renderer
        Render.run(render);

        // create runner
        var runner = Runner.create();

        // run the engine
        Runner.run(runner, engine);
    </script>

    
</body>

</html>