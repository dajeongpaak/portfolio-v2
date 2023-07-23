import { useRef, useLayoutEffect } from 'react'
import { useNavigate, useLocation, redirect } from 'react-router-dom'

import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { debounce } from 'lodash'

import styles from './ScrollNavigation.module.scss'

gsap.registerPlugin(ScrollTrigger)

export default function ScrollNavigation({title, navigateTo, navigatePrev }: any) {
    const progressRef: any = useRef()
    const animRef: any = useRef()
    const isAnimationComplete = useRef(false);
    const navigate = useNavigate()
    const location = useLocation()

    const handleScroll = () => {
      window.scrollTo({
        top: 0, 
        behavior: 'smooth'
      });
    }  
    console.log(location.pathname)
    useLayoutEffect(() => { 


      const handleNavigate = debounce(() => {
          if (
            animRef.current &&
            animRef.current.style.width ===
            '100%' && 
            isAnimationComplete.current) {
            if (location.pathname !== `/work/${navigateTo}`){
            navigate(`/work/${navigateTo}`);
          }}
        }, 100);

   
      
        let ctx = gsap.context(() => {


          const tl = gsap.timeline()
          tl.to(  '#js-progress-animation', {
              width: '100%',
              onComplete: () => {
                isAnimationComplete.current = true;
                handleNavigate()
              }
            })
      
          ScrollTrigger.create({
            animation: tl,
            trigger: progressRef.current,
            start: "top 30%",
            end: "+=1500px",
            scrub: true,
            pin:  progressRef.current,
          })
        }, progressRef)
        console.log(isAnimationComplete.current)
        return () => {
          handleNavigate.cancel()
          ctx.revert()

        }
      }, [isAnimationComplete])
 
      
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
