import styles from './ProjectText.module.scss'

export default function ProjectText( {children}: any) {
  return (
    <div className={styles.text}>
        {children}
    </div>
  )
}
