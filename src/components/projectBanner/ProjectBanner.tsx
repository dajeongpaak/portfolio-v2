import { useLayoutEffect, useRef } from 'react';
import { Link } from 'react-router-dom';

import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

import styles from './ProjectBanner.module.scss'
import LazyImg from '../../config/lazyLoading/LazyImg';
import LazySrc from '../../config/lazyLoading/LazySrc';
interface ProjectBannerType {
  
    src: typeof import("*.png")
    placeholderSrc: typeof import("*.webp")
    src_m: typeof import("*.png")
    placeholderSrc_m: typeof import("*.webp")
    name: string;
    timeline: string;
    stacks: string[];
    role: string[];
    site: string;
    github: string;
    description: string[];

}

gsap.registerPlugin(ScrollTrigger)

export default function ProjectBanner({data}: any) {

    const items: ProjectBannerType[] = 
    data as ProjectBannerType[]

    const [
            {
                src,
                placeholderSrc,
                src_m,
                placeholderSrc_m,
                name,
                timeline,
                stacks,
                role,
                site,
                github,
                description
            }
        ] = items

    const snapRef: any = useRef()

    useLayoutEffect(() => { 

        let ctx = gsap.context(() => {
          const tl = gsap.timeline()
          tl.to( "#js-containerAnim", {
              yPercent: -100,
              duration: 4,
            })
    
          ScrollTrigger.create({
            animation: tl,
            trigger: snapRef.current,
            start: "top top",
            end: "bottom bottom",
            scrub: 1,
            pin: true,
            pinSpacing: false
          })
        }, snapRef)
    
        return () => ctx.revert()
    
      }, [])

  return (
    <>
        {items.map((item, index)=> (
            <div
            ref={snapRef}
            className={styles.project}
            key={index}
            >
                <div 
                    className={`banner ${styles.banner}`}
                >
                    <picture>
                        <LazySrc 
                            media="(min-width: 1024px)"
                            srcSet={typeof src === 'string' ? src : src.default}
                            placeholderSrc={typeof placeholderSrc === 'string' ? placeholderSrc : placeholderSrc.default}
                        />
                        <LazySrc 
                            media="(min-width: 768px)"
                            srcSet={typeof src_m === 'string' ? src_m : src_m.default}
                            placeholderSrc={typeof placeholderSrc_m === 'string' ? placeholderSrc_m : placeholderSrc_m.default}
                        />
                        <LazyImg 
                            src={typeof src_m === 'string' ? src_m : src_m.default} 
                            placeholderSrc={typeof placeholderSrc_m === 'string' ? placeholderSrc_m : placeholderSrc_m.default}
                            alt="Articles of the week banner image" />
                    </picture>
                </div>
                <div 
                    id='js-containerAnim'
                    className={styles.container}
                >
                    <div className={styles.scrollDown}>
                        <span>Scroll Down</span><br/>
                    </div>
                    <div className={styles.grid}>
                        <div className={styles.title}>
                            <h1>{name}</h1>
                        </div>
                        <div className={styles.links}>
                            <ul>
                                <li>
                                    <Link to={site}>
                                        Live Site
                                    </Link>
                                </li>
                                <li>
                                    <Link to={github}>
                                        GitHub
                                    </Link>
                                </li>
                            </ul>
                        </div>
                        <div className={styles.overview}>
                            <div className={styles.overview__heading}>
                                <h2>Overview</h2>
                                <ul className={styles.overview__datails}>
                                <li>
                                    <h3>
                                        Technologies Used
                                    </h3>
                                    <div className={styles.stacks}>
                                        {stacks.map((stack, stackIndex) => (
                                            <p key={stackIndex}>{stack}</p>
                                        ))}
                                    </div>
                                </li>
                                <li>
                                    <h3>Role</h3>
                                    <p className={styles.role}>{role}</p>
                                </li>
                                <li>
                                    <h3>Timeline</h3>
                                    <p className={styles.role}>{timeline}</p>
                                </li>
                            </ul>
                          
                            </div>
                            <div className={styles.overview__description}>
                                {description.map((p, index) => (
                                    <p key={index}>{p}</p>
                                ))}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ))}
    </>
  )
}
