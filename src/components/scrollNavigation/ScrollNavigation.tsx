import { useRef, useLayoutEffect, useEffect } from 'react'
import { Navigate, useNavigate, useMatch, useLocation } from 'react-router-dom'

import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

import styles from './ScrollNavigation.module.scss'

gsap.registerPlugin(ScrollTrigger)

export default function ScrollNavigation({title, navigateTo }: any) {
    const progressRef: any = useRef()
    const navigate = useNavigate();
    // const location = useLocation
    console.log(navigateTo)
    const handleScroll = () => {
      window.scrollTo({
        top: 0, 
        behavior: 'smooth'
      });
    }  

    useEffect(() => {
      const handleGoBack = (e: any) => {
        if(e.state && e.state.goBack) {
          navigate(-1)
        }
      }

      window.history.pushState({ goBack: true }, '');
      window.addEventListener('popstate', handleGoBack);
      return () => {
        window.removeEventListener('popstate', handleGoBack);
      };
    }, [navigate]);
  

    useLayoutEffect(() => { 

        let ctx = gsap.context(() => {
          const tl = gsap.timeline()
          tl.to( '#js-progress-animation', {
              width: '100%',
              duration: 0.01, 
              onComplete: () => {
                console.log(navigateTo)
                // navigate(1)
                navigate(`/work/${navigateTo}`)
              }
            })
    
          ScrollTrigger.create({
            animation: tl,
            trigger: progressRef.current,
            start: "top 30%",
            end: "100% 100%",
            scrub: true,
            pin:  progressRef.current,
          })
        }, progressRef)
    
        return () => ctx.revert()
    
      }, [navigateTo])
 
      
  return (
    <div 
    ref={progressRef}
    className={styles.container}>
    <div className={styles.pin}>
      <div 
        id='js-progress-animation'
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
      <p 
        onClick={handleScroll}
        className={styles.scrollToTop}
    >Scroll To Top</p>
    </div>
</div>
  )
}
