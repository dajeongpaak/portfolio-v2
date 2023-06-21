
import { useEffect, useState } from 'react'

import Lenis from '@studio-freight/lenis'

function useScrollSmooth() {

    // useEffect(() => {
    //     const lenis = new Lenis({
    //       lerp: 1,
    //       duration: 1.5,
    //       easing: (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t)), // https://easings.net/
    //       smooth: true,
    //       //direction: 'horizontal'
    //     });
    
    //     //get scroll value
    //     lenis.on("scroll", (e: MouseEvent ) => {
    //       console.log(e);
    //     });
    
    //     function scrollTo(time: any) {
    //       lenis.scrollTo(time);
    //       requestAnimationFrame(scrollTo);
    //     }
    
    //     requestAnimationFrame(scrollTo);
    
    //     return () => lenis.destroy();
    //   }, []);

    useEffect(() => {
      const lenis = new Lenis({
        lerp: 0.1, // Adjust the lerp value for smoother scrolling
        duration: 1.5,
        easing: (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t)),
        smooth: true,
      });
  
      lenis.on('scroll', (e: MouseEvent) => {
        // Handle the scroll event here
        // You can use e.clientX and e.clientY for smooth scrolling based on the mouse position
        const offsetX = (e.clientX / window.innerWidth) * 1000;
        const offsetY = (e.clientY / window.innerHeight) * 1000;
        window.scrollTo(offsetX, offsetY);
      });
  
      function scrollTo(time:any) {
        lenis.scrollTo(time);
        requestAnimationFrame(scrollTo);
      }
  
      requestAnimationFrame(scrollTo);
  
      return () => lenis.destroy();
    }, []);
  
  return (
    <>
      
    </>
  )
}

export default useScrollSmooth
