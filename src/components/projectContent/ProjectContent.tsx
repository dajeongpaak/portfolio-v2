import styles from './ProjectContent.module.scss'

export default function ProjectContent({heading, children}: any) {
  return (
    <div className={styles.grid}>
        <div className={styles.heading}>
            <h2>{heading}</h2>
        </div>
        {children}
    </div>
  )
}
