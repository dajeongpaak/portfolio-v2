import { Link } from 'react-router-dom'

import styles from './Work.module.scss'
import Title from '../../components/title/Title'
import Arrow from '../../assets/icons/Arrow'
import Card from '../../components/card/Card'
import Footer from '../../layouts/footer/Footer'

function WorkHome() {
  return (
    <>
      <section className={`${styles.container} wrapper`}>
        <div className={styles.title}>
          <Title title='featured work' />
        </div>
        <Card/>
        <article className={styles.work}>
          <Link to='/work5'>
              <Arrow />
              <h4>fifth work</h4>
              <p>description</p>
          </Link>     
        </article>
        <article className={styles.work}>
          <Link to='/work6'>
              <Arrow />
              <h4>sixth work</h4>
              <p>description</p>
          </Link>     
        </article>
      </section>
      <Footer 
        bgColor='dark'
        bgColor_title='light'
      />
    </>
  )
}

export default WorkHome
