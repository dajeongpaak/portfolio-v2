import { useLayoutEffect, useRef } from 'react';

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

import styles from './Mission.module.scss'

gsap.registerPlugin(ScrollTrigger)

function Mission() {
  const bgAnimation: any = useRef()

  useLayoutEffect(() => {
  
    let ctx = gsap.context(() => {
      gsap.to("#js-animation", {
        width: "200vw",
        height: "120vh",
        scrollTrigger: {
          trigger: bgAnimation.current,
          start: "40% center",
          scrub: 1,
        }     
      }); 
    }, bgAnimation)
  
    return () => ctx.revert()
    
  }, []);

  return (
    <section 
      className={styles.container} 
      ref={bgAnimation}
    >
      <div className={styles.statement}>
          <h2 className='h4'>
          I <span>develop and design</span><br /> 
          engaging user experiences <br /> 
          that brings <br/>
          <span>emotional connection</span> 
         </h2>
      </div>
      <h3 className={`h5 ${styles.values}`}>
          through<br/>
          <span className='h4'>
          Creativity, 
          <br />
          Lifelong Learning,
         <br />
         Technology Skills
         <br />
         & Passion
         </span>
      </h3>
      <div id='js-animation' className={styles.js_animation}></div>
   </section> 
  )
}

export default Mission
