import { useRef, useEffect, useState } from 'react'
import { Link } from 'react-router-dom';

import Transition from '../../config/framerMotion/Transiton';
import LazyImage from '../../config/lazyLoading/lazyImage';
import styles from './Gallery.module.scss'
import images from '../../data/gallery'
import Arrow from '../../assets/icons/Arrow';
import setBodyColor from '../../utils/setBodyColor';

interface GalleryImagesType {
  id: number;
  src: typeof import("*.jpg")
}

function Gallery() {

  setBodyColor({color: '#fcf8f4'})
  const imageContainer = useRef<HTMLDivElement>(null)
  const galleryImages: GalleryImagesType[] = images as GalleryImagesType[]

const handleMouseMove = (event: MouseEvent) => {
    const { clientX, clientY } = event;
    const offsetX = (clientX / window.innerWidth) * 1000
    const offsetY = (clientY / window.innerHeight) * 1000
  
    const imgs: HTMLImageElement[] = Array.from(document.querySelectorAll('.img'))
    const constrain  = 10
    imgs.forEach((item: HTMLImageElement): void => {
    const itemRect = item.getBoundingClientRect()
    const calcY = (offsetX/2 - (itemRect.x)/2 - (item.width / 2)) / constrain
    item.style.transform = `skewX(${calcY/20}deg)` 
    })

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
      className={`${styles.canvas}`}
      >
        {images.map((item: any) => (
          <div key={item.id} className={styles[`img_${item.id}`]}>
            <LazyImage
              src={item.src}
              className='lazy img'
              data-src={item.placeholderSrc}
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
          <div>Go To This Project</div>
        </Link>
  
      </div>
    </Transition>
  )
}

export default Gallery
