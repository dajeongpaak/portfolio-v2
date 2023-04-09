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
