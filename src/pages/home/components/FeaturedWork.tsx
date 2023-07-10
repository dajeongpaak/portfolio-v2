import { useEffect, useRef } from "react";

import styles from './FeaturedWork.module.scss'
import Title from '../../../components/title/Title'
import Card from '../../../components/card/Card'

function FeaturedWork() {

  return (
    <section 
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
