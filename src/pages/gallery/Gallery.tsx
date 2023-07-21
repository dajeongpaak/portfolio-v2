import { useRef, useEffect, useState, useLayoutEffect } from 'react'
import { Link } from 'react-router-dom';

import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

import Transition from '../../config/framerMotion/Transiton';
import LazyImg from '../../config/lazyLoading/LazyImg';
import styles from './Gallery.module.scss'
import images from '../../data/gallery'
import Arrow from '../../assets/icons/Arrow';
import setBodyColor from '../../utils/setBodyColor';

interface GalleryImagesType {
  id: number;
  src: typeof import("*.jpg");
  placeholderSrc: typeof import("*.jpg");
  alt: string;
}

gsap.registerPlugin(ScrollTrigger)

function Gallery() {

  setBodyColor({color: '#fcf8f4'})
  const imageContainer = useRef<HTMLDivElement>(null)
  const galleryImages: GalleryImagesType[] = images as GalleryImagesType[]

  useLayoutEffect(() => {

    let ctx = gsap.context(() => {

      let proxy = { skew: 0 },
      skewSetter = gsap.quickSetter(".img", "skewY", "deg"), 
    clamp = gsap.utils.clamp(-5, 5); 

    ScrollTrigger.create({
      onUpdate: (self) => {
        let skew = clamp(self.getVelocity() / -1000);

        if (Math.abs(skew) > Math.abs(proxy.skew)) {
          proxy.skew = skew;
          gsap.to(proxy, {skew: 0, duration: 1, ease: "expo", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
        }
      }
    });

    gsap.set(".img", {transformOrigin: "right center", force3D: true});

    }, imageContainer)

    return () => ctx.revert()
  }, [])

const handleMouseMove = (event: MouseEvent) => {
    const { clientX, clientY } = event;
    const offsetX = (clientX / window.innerWidth) * 1000
    const offsetY = (clientY / window.innerHeight) * 1000
  
    window.scrollTo(offsetX, offsetY);
  }
  

  useEffect(() => {
    window.addEventListener('mousemove', handleMouseMove)
  
    return () => {
      window.removeEventListener('mousemove', handleMouseMove)
    }
  }, [])

  return (
    <Transition>
      <div 
      ref={imageContainer} 
      className={styles.canvas}
      >
        {images.map((item: any) => (
          <div key={item.id} className={`img ${styles[`img_${item.id}`]}`}>
            <LazyImg
              src={item.src}
              placeholderSrc={item.placeholderSrc}
              alt={item.alt}
            />
          </div>
        ))}
        <div className={styles.hobby}>
          <span className='h3'>Film photography</span><br />
          has been one of my favorite hobbies for almost half of my life
          <br />Hope you enjoy the pieces!
        </div>
        <Link to="/about" className={styles.about}>
          <Arrow />
          <div className={styles.about}>Go To About</div>
        </Link>
        <Link to="/work/photo-gallery" className={styles.project}>
          <Arrow />
          <div>View Project Detail</div>
        </Link>
  
      </div>
    </Transition>
  )
}

export default Gallery
