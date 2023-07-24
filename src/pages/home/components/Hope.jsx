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
        let Svg = Matter.Svg;
        let Vector = Matter.Vector;
        let Vertices = Matter.Vertices;

        const heroWidth = heroRef.current.clientWidth
        const heroHeight = heroRef.current.clientHeight
  
        let actualPixel = 250
        let expectedRatio = 0.18
        let scaleFactor = 
            heroWidth > heroHeight ? 
            (heroWidth * expectedRatio) / actualPixel : 
            heroHeight * (expectedRatio * 1.15) / actualPixel
        let scaleFactorCircle = scaleFactor * 0.8
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


            
       // create physics elements
        var hey = Bodies.rectangle(heroWidth / 1.11, 0, 200 * scaleFactor ,200 * scaleFactor
,  {
            density: 0.04,
		    friction: 0.1,
		    frictionAir: 0.005,
		    restitution: 0.3,
            render: { 
            sprite: { 
                texture: imageHey, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });

        var name = Bodies.rectangle(heroWidth / 1.47, 0, 340 * scaleFactor, 185 * scaleFactor,  {
            density: 0.04,
            friction: 0.1,
            frictionAir: 0.005,
            restitution: 0.3,
            render: { 
            sprite: { 
                texture: imageName, 
                xScale: scaleFactor, 
                yScale: scaleFactor }}
            });
    
        var dj = Bodies.circle(heroWidth / 1.2, -200, 130 * scaleFactorCircle, {
            density: 0.04,
            friction: 2,
            frictionAir: 0.01,
            restitution: 0.1,
            render: { 
            sprite: { 
                texture: imageDj, 
                xScale: scaleFactorCircle, 
                yScale: scaleFactorCircle }}
            });
            
   
        
        var iam = Bodies.rectangle(heroWidth /  4, -300, 340 * scaleFactor, 185 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.000001,
            restitution: 0.7,
            render: { 
            sprite: { 
                texture: front, 
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
        Composite.add(world, [iam, groundBody, leftwall, rightwall,]);

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
    }, [])

    // useEffect(() => {
       
    // }, [groundBody]) 

 

  return (
    <section
        ref={heroRef}
        style={{ 
            height: "100vh",
            width: '100vw',
            cursor: 'pointer'
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
    style={{opacity: 0}}
     id="Layer_1" xmlns="http://www.w3.org/2000/svg"
	 viewBox="0 0 1366 768">
        <path d="M723.2,330.2v3.3h6.8v18.2h4v-18.2h6.8v-3.3H723.2z"/>
        <path d="M640.8,351.7h4v-9.1h9.2v-3.3h-9.2v-5.8H655v-3.3h-14.1V351.7z"/>
        <path d="M670.6,343.2c0.1-0.1,0.3-0.1,0.4-0.2c1.2-0.5,2-1.3,2.6-2.3c0.6-1,0.9-2.2,0.9-3.6c0-1.4-0.3-2.6-0.9-3.6
            c-0.6-1-1.5-1.8-2.6-2.4c-1.2-0.6-2.6-0.9-4.3-0.9h-8.3v21.5h4v-7.9h4.1l4.3,7.9h4.5L670.6,343.2z M670.1,339
            c-0.3,0.5-0.8,0.9-1.4,1.2c-0.6,0.3-1.4,0.4-2.4,0.4h-3.7v-7.1h3.7c1,0,1.8,0.1,2.4,0.4c0.6,0.3,1.1,0.7,1.4,1.2
            c0.3,0.5,0.5,1.2,0.5,2C670.5,337.9,670.4,338.5,670.1,339z"/>
        <path d="M715.9,344.9h-0.2l-10.4-14.6h-3.6v21.5h4v-14.6h0.2l10.4,14.6h3.6v-21.5h-4V344.9z"/>
        <path d="M696.7,335c-0.9-1.6-2.1-2.9-3.6-3.8c-1.5-0.9-3.3-1.3-5.2-1.3c-1.9,0-3.7,0.4-5.2,1.3c-1.5,0.9-2.7,2.1-3.6,3.8
            c-0.9,1.6-1.3,3.6-1.3,5.9c0,2.3,0.4,4.3,1.3,5.9c0.9,1.6,2.1,2.9,3.6,3.8c1.5,0.9,3.3,1.3,5.2,1.3c1.9,0,3.7-0.4,5.2-1.3
            c1.5-0.9,2.7-2.1,3.6-3.8c0.9-1.6,1.3-3.6,1.3-5.9C698,338.7,697.5,336.7,696.7,335z M693.2,345.1c-0.5,1.1-1.2,2-2.2,2.5
            c-0.9,0.6-2,0.9-3.2,0.9c-1.2,0-2.3-0.3-3.2-0.9c-0.9-0.6-1.6-1.4-2.2-2.5c-0.5-1.1-0.8-2.5-0.8-4.1c0-1.6,0.3-3,0.8-4.1
            c0.5-1.1,1.2-2,2.2-2.5c0.9-0.6,2-0.9,3.2-0.9c1.2,0,2.3,0.3,3.2,0.9c0.9,0.6,1.6,1.4,2.2,2.5c0.5,1.1,0.8,2.5,0.8,4.1
            C694,342.6,693.7,344,693.2,345.1z"/>
    </svg>

    </section>
    
  )
}

export default Hope
