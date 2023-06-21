import { useRef } from 'react'
import { useEffect } from 'react'

import styles from './Gallery.module.scss'
import images from '../../data/gallery'



type HandleScrollType = () => void

interface GalleryImagesType {
  id: number;
  src: typeof import("*.jpg")
}

function Gallery() {
  const imageContainer = useRef<HTMLDivElement>(null)
  const galleryImages: GalleryImagesType[] = images as GalleryImagesType[]


  //useScrollSmooth()
  // useEffect(() => {
  //   const lenis = new Lenis({
  //     duration: 3,
  //     easing: (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t)), // https://easings.net/
  //     smooth: true,
  //     direction: "vertical"
  //   });

  //   //get scroll value
  //   lenis.on("scroll", (e: MouseEvent ) => {
  //     console.log(e);
  //   });

  //   function raf(time: any) {
  //     lenis.raf(time);
  //     requestAnimationFrame(raf);
  //   }

  //   requestAnimationFrame(raf);

  //   return () => lenis.destroy();
  // }, []);
  // const [scrollPosition, setScrollPosition] = useState({
  //   positionX: 0,
  //   positionY: 0
  // })

const handleMouseMove = (event: MouseEvent) => {
    const { clientX, clientY } = event;
    const offsetX = (clientX / window.innerWidth) * 1000;
    const offsetY = (clientY / window.innerHeight) * 1000
  
    const imgs: HTMLImageElement[] = Array.from(document.querySelectorAll('.img'))
    const constrain  = 10
    imgs.forEach((item: HTMLImageElement): void => {
    const itemRect = item.getBoundingClientRect()
    let calcX = -(offsetY/2 - (itemRect.y)/2 - (item.height / 2)) / constrain;
    let calcY = (offsetX/2 - (itemRect.x)/2 - (item.width / 2)) / constrain;
    item.style.transform = `skewX(${calcY/20}deg)` 
    })

    window.scrollTo(offsetX, offsetY);
  }
  

  useEffect(() => {
    window.addEventListener('mousemove', handleMouseMove)
  
    return () => {
      window.removeEventListener('mousemove', handleMouseMove)
     // scroll.destroy()
    }
  }, [])
  

  // const handleScroll:HandleScrollType = () => {
  //   setScrollPosition({
  //     positionX: window.scrollX || document.documentElement.scrollLeft,
  //     positionY: window.scrollY || document.documentElement.scrollTop
  //   })
    
  // }
  // console.log(scrollPosition)
  // useEffect(() => {
  //   window.addEventListener('scroll', handleScroll)

  //   return () => window.removeEventListener('scroll', handleScroll)

  //   handleScroll()
  // })

  return (

      <div 
      ref={imageContainer} 
      className={`${styles.canvas}`}
      >
        {images.map((item: any) => (
          <img 
            className={`img ${styles[`img_${item.id}`]}`} 
            src={item.src} 
            key={item.id} 
            />
        ))}
        <div className={styles.hobby}>
          <span className='h3'>Film photography</span><br />
         has been one of my favorite hobbies for almost half of my life
          <br />Hope you enjoy the pieces!
        </div>
      </div>

  )
}

export default Gallery
