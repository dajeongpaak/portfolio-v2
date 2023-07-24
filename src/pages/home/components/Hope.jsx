import { useState ,useEffect, useRef } from 'react'

import { Composite, Runner, Mouse, MouseConstraint, Svg, Vector, Vertices } from "matter-js"
import Matter from 'matter-js';
import { SVGPathData } from "pathseg";
import polyDecomp from "poly-decomp";
import { parseSVG } from 'svg-path-properties'
import { svgPathProperties } from "svg-path-properties";
import svgPathToCanvas from "svg-path-to-canvas";


import imageHey from '../../../assets/images/hey.png'
import imageIam from '../../../assets/images/iam.png'
import imageName from '../../../assets/images/name.png'
import imageDj from '../../../assets/images/dj.png'
import imageFrontEnd from '../../../assets/images/frontend.png'
import imageCircle from '../../../assets/images/cir-1.png'
import imageCircle2 from '../../../assets/images/cir-2.png'
import imageCircle3 from '../../../assets/images/cir-3.png'
import front from '../../../assets/images/front.png'
import end from '../../../assets/images/end.png'
import developer from '../../../assets/images/developer.png'
import based from '../../../assets/images/based.png'
import vancouver from '../../../assets/images/vancouver.png'


function Hope() {

    const heroRef = useRef();
    const svgRef = useRef(null);
    const [windowSize, setWindowSize] = useState({
        width: window.innerWidth,
        height: window.innerHeight, 
    })
    //const [ground, setGround] = useState(null);

    // const frontSVG = [
    //     "M82.42,.3V3.65h6.81V22.34h3.96V3.65h6.81V.3h-17.58Z",
    //     "M0,22.34H3.99V12.98H13.15v-3.35H3.99V3.65H14.12V.3H0V22.34Z",
    //     "M29.82,13.61c.14-.06,.28-.12,.42-.19,1.16-.56,2.04-1.36,2.64-2.4,.6-1.04,.9-2.26,.9-3.67s-.3-2.64-.89-3.7c-.59-1.06-1.46-1.88-2.61-2.47-1.15-.59-2.57-.88-4.27-.88h-8.26V22.34h3.99V14.27h4.06l4.33,8.07h4.46l-4.77-8.73Zm-.56-4.29c-.3,.53-.77,.94-1.4,1.22-.63,.28-1.44,.41-2.43,.41h-3.68V3.64h3.66c1,0,1.81,.15,2.44,.44,.63,.29,1.1,.71,1.41,1.27,.31,.56,.46,1.23,.46,2.01s-.15,1.44-.46,1.97Z",
    //     "M75.08,15.32h-.19L64.51,.3h-3.57V22.34h3.99V7.33h.18l10.38,15.01h3.55V.3h-3.97V15.32Z",
    //     "M55.82,5.22c-.89-1.69-2.09-2.98-3.62-3.88-1.52-.9-3.25-1.35-5.18-1.35s-3.66,.45-5.18,1.35c-1.52,.9-2.73,2.19-3.62,3.88-.89,1.69-1.33,3.72-1.33,6.1s.44,4.4,1.33,6.09c.89,1.69,2.09,2.98,3.62,3.88,1.52,.9,3.25,1.35,5.18,1.35s3.66-.45,5.18-1.35c1.52-.9,2.73-2.19,3.62-3.88,.89-1.69,1.33-3.72,1.33-6.1s-.44-4.41-1.33-6.1Zm-3.47,10.33c-.52,1.15-1.24,2.02-2.16,2.61-.92,.59-1.98,.89-3.17,.89s-2.26-.3-3.17-.89c-.92-.59-1.64-1.46-2.16-2.61-.52-1.15-.78-2.56-.78-4.23s.26-3.08,.78-4.23c.52-1.15,1.24-2.02,2.16-2.61,.92-.59,1.98-.89,3.17-.89s2.26,.3,3.17,.89c.92,.59,1.64,1.46,2.16,2.61,.52,1.15,.78,2.56,.78,4.23s-.26,3.08-.78,4.23Z"
    // ]


    useEffect(() => {

        let Engine = Matter.Engine;
        let Render = Matter.Render;
        let Bodies = Matter.Bodies;

        const heroWidth = heroRef.current.clientWidth
        const heroHeight = heroRef.current.clientHeight
  
        let actualPixel = 325
        let expectedRatio = 0.18
        let scaleFactor = 
            heroWidth > heroHeight ? 
            (heroWidth * expectedRatio) / actualPixel : 
            heroHeight * (expectedRatio * 1.15) / actualPixel

        // create an engine
        var engine = Engine.create(),
            world = engine.world;

        
        // create a renderer
        var render = Render.create({
            element: heroRef.current,
            engine: engine,
            options: {
                width: heroWidth,
                height:  heroHeight,
                wireframes: false,
                background: 'transparent',
                pixelRatio: 1,
            }
        });


      //  const frontPath = '#frontPath'
        const SVGwidth = 100
        const frontRatio = 0.2
    //    createSVGBodies()
    //     function createSVGBodies() {
    //         const paths = document.querySelectorAll(frontPath)
    //         paths.forEach((path, index) => {
    //             let vertices = Svg.pathToVertices(path)
    //             let scaleFactor =
    //             (heroWidth * frontRatio) / SVGwidth
    //         })
    //     }

        // createFrontSVG()
        // function createFrontSVG() {
        //     const svgElement = svgRef.current
        //     const paths = Array.from(svgElement.querySelectorAll("path"));
        //     if(svgRef.current) {
        //         paths.forEach((path, index) => {
        //         let vertices = Svg.pathToVertices(path);
        //         let scaleFactor =
        //         (heroWidth * frontRatio) / SVGwidth
        //         vertices = Vertices.scale(vertices, scaleFactor, scaleFactor)
        //         let svgBody = Bodies.fromVertices(
        //             index * SVGwidth, 0, [vertices]
        //         )
        //         console.log(vertices, svgBody, index)
        //      Composite.add(world, [svgBody])
        //     })
       
        // }}

       // const svgElement = svgRef.currentconst 
        // const paths = svgElement.querySelectorAll("path");
        // const bodies = [
        //     Bodies.rectangle(heroWidth / 1.11, 0, 810, 60),
        //     ...[...document.querySelectorAll("svg path")].map(path => {
        //       const body = Bodies.fromVertices(
        //         100, 80, Svg.pathToVertices(path), {}, true
        //       );
        //        let scale = Bodies.scale(body, 0.2, 0.2);
        //       return body;
        //     })
        //   ];
        //     const svgElement = svgRef.current
        //  // const svg = document.getElementById("frontPath");
        //   const svgPaths = Array.from(svgElement.querySelectorAll("path"));
        //   const svgBodyOptions = { isStatic: true, render: { fillStyle: "blue" } };
        //   const bodies = [
        //     Bodies.rectangle(heroWidth / 1.11, 0, 810, 60, { isStatic: true }),
        //     ...Array.from(svgPaths).map((path) => {
        //       const pathData = new SVGPathData(path.getAttribute("d"));
        //       const pathVertices = pathData.toPolygon();
        
        //       // Adjust pathVertices to your required position
        //       const body = Bodies.fromVertices(
        //         100, 80, pathVertices, svgBodyOptions, true
        //       );
        
        //       return body;
        //     }),
        //   ];
        
            
       // create physics elements
        var FRONT = Bodies.rectangle(heroWidth / 1.11, 0, 200 * scaleFactor ,200 * scaleFactor
,  {
            density: 0.04,
		    friction: 0.1,
		    frictionAir: 0.005,
		    restitution: 0.3,
            render: { 
            sprite: { 
                texture: front, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });

        var END = Bodies.rectangle(heroWidth / 1.47, 0, 340 * scaleFactor, 185 * scaleFactor,  {
            density: 0.04,
            friction: 0.1,
            frictionAir: 0.005,
            restitution: 0.3,
            render: { 
            sprite: { 
                texture: end, 
                xScale: scaleFactor, 
                yScale: scaleFactor }}
            });
        
        var DEVELOPER = Bodies.rectangle(heroWidth /  4, -300, 340 * scaleFactor, 185 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.000001,
            restitution: 0.7,
            render: { 
            sprite: { 
                texture: developer, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });

             
        var BASED = Bodies.rectangle(heroWidth /  4, -300, 340 * scaleFactor, 185 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.000001,
            restitution: 0.7,
            render: { 
            sprite: { 
                texture: based, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });

             
        var VANCOUVER = Bodies.rectangle(heroWidth /  4, -300, 340 * scaleFactor, 185 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.000001,
            restitution: 0.7,
            render: { 
            sprite: { 
                texture: vancouver, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });

        var groundBody = Bodies.rectangle(heroWidth / 2, heroHeight, 82854, 1, { 
            isStatic: true,
            render: {
                fillStyle: 'rgba(0,0,0,0)'
            }
        });

        var leftwall = Bodies.rectangle( -30, heroHeight / 2, 30 , heroHeight * 5, { 
            isStatic: true,
            render: {
                fillStyle: 'rgba(0,0,0,0)'
            }
        });

        var rightwall = Bodies.rectangle( heroWidth, heroHeight / 2, 1, heroHeight * 5, {
            isStatic: true,
            render: {
                fillStyle: 'rgba(0,0,0,0)'
            }
        });


        // add all of the bodies to the world
        Composite.add(world, [FRONT, END, DEVELOPER, BASED, VANCOUVER, groundBody, leftwall, rightwall,]);

        var canvas = render.canvas;
        const cwidth = canvas.width;
        const cheight = canvas.height;

        let mouse = Mouse.create(canvas);
        let mouseConstraint = MouseConstraint.create(engine, {
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

       
        // handleResize(heroRef)

        // const debounced = debounce(() => {
        //     console.log('hahahahah')
          
        // }, 3000)
        // debounced()

       
        //  function handleResize(matterContainer) {
        //     // Set canvas size to new values
        //     canvas.width = matterContainer.clientWidth;
        //     canvas.height = matterContainer.clientHeight;

        //     // reposition ground
        //     Matter.Body.setPosition(
        //         ground, Matter.Vector.create(
        //             matterContainer.clientWidth / 2,
        //             matterContainer.clientHeight + THICCNESS / 2
        //         )
        //     );

        //     // Reposition right wall
        //     Matter.Body.setPosition(rightwall,
        //     Matter.Vector.create(
        //     matterContainer.clientWidth + THICCNESS / 2,
        //     matterContainer.clientHeight / 2 
        //         )
        //     );
        // }
    

        function scaleBodies() {
            const allBodies = Composite.allBodies(world)

            allBodies.forEach((body) => {
                if(body.isStatic === true) return;
                const { min, max } = body.bounds
                const bodyWidth = max.x - min.x
                let scaleFactor = 
                heroWidth > heroHeight ? 
                (heroWidth * expectedRatio) / bodyWidth : 
                heroHeight * (expectedRatio * 1.15) / bodyWidth
                
                Matter.Body.scale(body, scaleFactor, scaleFactor)
            })
        }

        // window.addEventListener("resize", () => handleResize(matterContainer));
        const handleResize = () => {
            setWindowSize({ width: window.innerWidth, height: window.innerHeight });
            const widthHero = heroRef.current.clientWidth
            const heightHero = heroRef.current.clientHeight

            const canvashero = document.querySelector("canvas");

            canvashero.style.width = `${widthHero}px`
            canvashero.style.height = `${heightHero}px`

            render.canvas.width = widthHero;
            render.canvas.height = heightHero;

            Matter.Body.setPosition(groundBody, 
                Matter.Vector.create(
                    widthHero / 2,
                    heightHero 
            ))

            Matter.Body.setPosition(rightwall,
                Matter.Vector.create(
                    widthHero ,
                    heightHero / 2
                    )
            );

            scaleBodies()
        
        }

        // const debouncedHandleResize =  debounce(handleResize, 100)
        // if(ground) {

        //     Body.setPosition(
        //         ground, Vector.create(
        //             window.innerWidth / 2,
        //             window.innerHeight
        //         )
        //     );

        // }
    

        window.addEventListener('resize',handleResize )

        // prevent from rendering this component twice by strict mode
        return () => {

            
            // Stop the renderer and runner
            Render.stop(render);
            Runner.stop(runner);

            // Clear the engine and world
            Composite.clear(world);
            Engine.clear(engine);
            render.canvas.remove()
            render.canvas = null
            render.context = null
            window.removeEventListener('resize',handleResize )
            // Remove the event listener when the component unmounts
            
        }
    }, [windowSize])

    // useEffect(() => {
       
    // }, [groundBody]) 

 

  return (
    <section
        ref={heroRef}
        style={{ 
            height: "100vh",
            width: '100vw',
            cursor: 'pointer',
            background: '#1C1C1E'
        }}
    >
        <h1 style={{
            position: 'absolute', 
            color: 'transparent'
            }}
        >Hey there, I am DJ and I am a front-end developer
        </h1>
    <svg 
    ref={svgRef}
    style={{display: 'none'}}
     id="Layer_1" xmlns="http://www.w3.org/2000/svg"
	 viewBox="0 0 1366 768"><path d="M723.2 330.2v3.3h6.8v18.2h4v-18.2h6.8v-3.3h-17.6z"/><path d="M640.8 351.7h4v-9.1h9.2v-3.3h-9.2v-5.8H655v-3.3h-14.1v21.5z"/><path d="M670.6 343.2c.1-.1.3-.1.4-.2 1.2-.5 2-1.3 2.6-2.3.6-1 .9-2.2.9-3.6s-.3-2.6-.9-3.6c-.6-1-1.5-1.8-2.6-2.4-1.2-.6-2.6-.9-4.3-.9h-8.3v21.5h4v-7.9h4.1l4.3 7.9h4.5l-4.7-8.5zm-.5-4.2c-.3.5-.8.9-1.4 1.2-.6.3-1.4.4-2.4.4h-3.7v-7.1h3.7c1 0 1.8.1 2.4.4.6.3 1.1.7 1.4 1.2.3.5.5 1.2.5 2-.1.8-.2 1.4-.5 1.9z"/><path d="M715.9 344.9h-.2l-10.4-14.6h-3.6v21.5h4v-14.6h.2l10.4 14.6h3.6v-21.5h-4v14.6z"/><path d="M696.7 335c-.9-1.6-2.1-2.9-3.6-3.8-1.5-.9-3.3-1.3-5.2-1.3-1.9 0-3.7.4-5.2 1.3s-2.7 2.1-3.6 3.8c-.9 1.6-1.3 3.6-1.3 5.9 0 2.3.4 4.3 1.3 5.9.9 1.6 2.1 2.9 3.6 3.8 1.5.9 3.3 1.3 5.2 1.3 1.9 0 3.7-.4 5.2-1.3s2.7-2.1 3.6-3.8c.9-1.6 1.3-3.6 1.3-5.9 0-2.2-.5-4.2-1.3-5.9zm-3.5 10.1c-.5 1.1-1.2 2-2.2 2.5-.9.6-2 .9-3.2.9-1.2 0-2.3-.3-3.2-.9-.9-.6-1.6-1.4-2.2-2.5-.5-1.1-.8-2.5-.8-4.1 0-1.6.3-3 .8-4.1.5-1.1 1.2-2 2.2-2.5.9-.6 2-.9 3.2-.9 1.2 0 2.3.3 3.2.9.9.6 1.6 1.4 2.2 2.5.5 1.1.8 2.5.8 4.1 0 1.6-.3 3-.8 4.1z"/>
    </svg>

    </section>
    
  )
}

export default Hope
