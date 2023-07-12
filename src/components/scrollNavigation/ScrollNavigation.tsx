import { useRef, useLayoutEffect, useEffect } from 'react'
import { Navigate, useNavigate, useMatch, useLocation } from 'react-router-dom'

import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { debounce } from 'lodash'

import styles from './ScrollNavigation.module.scss'

gsap.registerPlugin(ScrollTrigger)

export default function ScrollNavigation({title, navigateTo, navigatePrev }: any) {
    const progressRef: any = useRef()
    const animRef: any = useRef()
    const navigate = useNavigate();
    // const location = useLocation

    console.log(navigateTo)
    const handleScroll = () => {
      window.scrollTo({
        top: 0, 
        behavior: 'smooth'
      });
    }  

    useLayoutEffect(() => { 

      const handleNavigate = debounce(() => {
          if (
            animRef.current &&
            animRef.current.style.width === '100%'
          ) {
            console.log(navigateTo);
            // navigate(1);
            navigate(`/work/${navigateTo}`);
          }
        }, 100);
      
        let ctx = gsap.context(() => {
          const tl = gsap.timeline()
          tl.to(  '#js-progress-animation', {
              width: '100%',
              onComplete: handleNavigate,
            })
      
          ScrollTrigger.create({
            animation: tl,
            trigger: progressRef.current,
            start: "top 30%",
            end: "+=3000px",
            scrub: true,
            pin:  progressRef.current,
          })
        }, progressRef)
    
        return () => {
          handleNavigate.cancel()
          ctx.revert()
        }
      }, [])
 
      
  return (
    <div 
    ref={progressRef}
    className={styles.container}>
    <div className={styles.pin}>
      <div 
        id='js-progress-animation'
        ref={animRef}
        className={styles.progressBar}
      >
      </div>
      <div className={styles.nextProject}>
        <h2>Next Project</h2>
        <p>Scroll Down To Navigate</p>
      </div>
      <div className={styles.nextProject__title}>
        <h3 className='h2'>{title}</h3>
      </div>
      <div className={styles.prevProject}>
        <div onClick={() => navigate(`/work/${navigatePrev}`)}
          className='h5'
        >
          Previous Project
        </div>
        <p 
          onClick={handleScroll}
          className={styles.scrollToTop}
      >Scroll To Top</p>
      </div>
     
    </div>
</div>
  )
}
