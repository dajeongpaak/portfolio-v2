
import styles from './SubTitle.module.scss'

function SubTitle({title}: { title: string}) {
  return (
    <h3 className={`${styles.subtitle} h6`}>
        { title }
    </h3>
  )
}

export default SubTitle
