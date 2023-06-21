import { useState ,useEffect, useRef } from 'react'

import { Composite, Runner, Mouse, MouseConstraint } from "matter-js"
import Matter from 'matter-js';

import imageHey from '../../../assets/images/hey.png'
import imageIam from '../../../assets/images/iam.png'
import imageName from '../../../assets/images/name.png'
import imageDj from '../../../assets/images/dj.png'
import imageFrontEnd from '../../../assets/images/frontend.png'
import imageCircle from '../../../assets/images/cir-1.png'
import imageCircle2 from '../../../assets/images/cir-2.png'
import imageCircle3 from '../../../assets/images/cir-3.png'







function Hero() {
    const heroRef = useRef();
    // const canvas = useRef();
    const [windowSize, setWindowSize] = useState({
        width: window.innerWidth,
        height: window.innerHeight, 
    })
    //const [ground, setGround] = useState(null);



    useEffect(() => {

        let Engine = Matter.Engine;
        let Render = Matter.Render;
        let Bodies = Matter.Bodies;

        const heroWidth = heroRef.current.clientWidth
        const heroHeight = heroRef.current.clientHeight
  
        let actualPixel = 250
        let expectedRatio = 0.18
        let scaleFactor = 
            heroWidth > heroHeight ? 
            (heroWidth * expectedRatio) / actualPixel : 
            heroHeight * (expectedRatio * 1.25) / actualPixel
        let scaleFactorCircle = scaleFactor * 0.8
        let desktop = heroWidth > heroHeight 
        // create an engine
        var engine = Engine.create(),
            world = engine.world;

        // set physics container width and height
      
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
		    friction: 0.01,
		    frictionAir: 0.00001,
		    restitution: 0.8,
            render: { 
            sprite: { 
                texture: imageHey, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });

        var name = Bodies.rectangle(heroWidth / 1.47, 0, 340 * scaleFactor, 200 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.00001,
            restitution: 0.8,
            render: { 
            sprite: { 
                texture: imageName, 
                xScale: scaleFactor, 
                yScale: scaleFactor }}
            });
    
        var dj = Bodies.circle(heroWidth / 1.2, -200, 130 * scaleFactorCircle, {
            density: 0.04,
            friction: 2,
            frictionAir: 0.000001,
            restitution: 0.1,
            render: { 
            sprite: { 
                texture: imageDj, 
                xScale: scaleFactorCircle, 
                yScale: scaleFactorCircle }}
            });
            
   
        
        var iam = Bodies.rectangle(heroWidth /  4, -200, 340 * scaleFactor, 200 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: { 
            sprite: { 
                texture: imageIam, 
                xScale: scaleFactor, 
                yScale: scaleFactor  }}
            });
    
        var frontend = Bodies.rectangle(heroWidth / 8, -1000, 540 * scaleFactor, 200 * scaleFactor,  {
            density: 0.04,
            friction: 1,
            frictionAir: 0.000001,
            restitution: 0.8,
            timeScale: 0.7,
            render: { 
            sprite: { 
                texture: imageFrontEnd, 
                xScale: scaleFactor * 0.9, 
                yScale: scaleFactor * 0.9 }}
            });
        
        var circle = Bodies.circle(
            heroWidth / 2.85, 
            heroHeight / 1.43, 
            desktop ? 30 : 12, {
            isStatic: true,
            render: { 
            sprite: { 
                texture: imageCircle, 
                xScale: 
                desktop ? 1 : 0.7, 
                yScale: 
                desktop ? 1 : 0.7
            }}
            });
         
        var drag = Bodies.circle(
            heroWidth / 5.3, 
            heroHeight / 2, 
            desktop ? 30 : 12, {
            isStatic: true,
            render: { 
                sprite: { 
                    texture: imageCircle2, 
                    xScale: 
                    desktop ? 1 : 0.7, 
                    yScale: 
                    desktop ? 1 : 0.7 
                    }
                }
            }); 

        var scroll = Bodies.circle(
            heroWidth / 1.95, 
            heroHeight / 1.1 , 
            desktop ? 30 : 12, {
            isStatic: true,
            render: { 
                sprite: { 
                    texture: imageCircle3, 
                    xScale: 
                    desktop ? 1 : 0.7, 
                    yScale: 
                    desktop ? 1 : 0.7 
                    }
                }
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
        Composite.add(world, [hey, iam, dj, name, frontend, circle, drag, scroll, groundBody, leftwall, rightwall,]);

        var canvas = render.canvas;
        const cwidth = canvas.width;
        const cheight = canvas.height;

        console.log(cwidth); // Output: the width value
        console.log(cheight);
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
        console.log(scaleFactor)
        // window.addEventListener("resize", () => handleResize(matterContainer));
        const handleResize = () => {
            setWindowSize({ width: window.innerWidth, height: window.innerHeight });
            const widthHero = heroRef.current.clientWidth
            const heightHero = heroRef.current.clientHeight
            console.log(widthHero)
            const canvashero = document.querySelector("canvas");
            console.log(canvashero)

            canvashero.style.width = `${widthHero}px`
            canvashero.style.height = `${heightHero}px`

   
            // canvashero.style.width = windowSize.width
            // if(heroRef.current) {
            // const heroWidth = ref.current.clientWidth;
            // const heroHeight = ref.current.clientHeight;
            render.canvas.width = widthHero;
            render.canvas.height = heightHero;
            // render.canvas.width = window.innerWidth;
            // render.canvas.height = window.innerHeight;    

            console.log(render.canvas.width, render.canvas.height) 
           // console.log(heroRef.current.clientWidth, heroRef.clientHeight)
            // setWindowSize({ 
            //   // const heroWidth = heroRef.current.clientWidth
            //   // const heroHeight = heroRef.current.clientHeight
            //   width: window.innerWidth,
            //   height: window.innerHeight, 
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
            height: '100dvh',
            width: '100vw',
            cursor: 'grab'
        }}
    >
        <h1 style={{
            position: 'absolute', 
            color: 'transparent'
            }}
        >He there, I ams DJ and I am a front-end developer
        </h1>
    </section>
    
  )
}

export default Hero
