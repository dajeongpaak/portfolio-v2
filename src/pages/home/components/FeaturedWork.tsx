import { useEffect, useRef } from "react";

import styles from './FeaturedWork.module.scss'
import Title from '../../../components/title/Title'
import Card from '../../../components/card/Card'

type RectValues = {
  top: number;
}
function FeaturedWork() {
  const featuredWorkRef = useRef<HTMLDivElement>(null);

  useEffect(() => {

    const handleScroll = () => {
      const rect = featuredWorkRef.current?.getBoundingClientRect()
      const { top }: RectValues = rect || { top: 0 }

      document.body.style.backgroundColor = top < 0 ? "#1c1c1e" : "#fcf8f4"
  }

  window.addEventListener('scroll', handleScroll)

  return () => {
    window.removeEventListener('scroll', handleScroll)
  } 

},[])
  return (
    <section 
      ref={featuredWorkRef} 
      className={`${styles.container} wrapper`}
    >
        <div className={`${styles.title}`}
          >
            <Title title='featured work'/>
        </div>
        <Card />
    </section>
  )
}

export default FeaturedWork
