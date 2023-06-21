import { Link } from 'react-router-dom'

import styles from './Card.module.scss'
import projects from '../../data/projects'
import Arrow from '../../assets/icons/Arrow'


interface Item {
    name: string;
    desc: string;
    src: string | { default: string };
    url: string;
}

// interface CardProps {
//     className: string; // Add className prop to the interface
//   }

const Card: React.FC = () => {

const items: Item[] = projects as Item[]
    
    return (
        <>
            {items.map((item, index) => (
                <article  key={index} className={`${styles.card}`}>
                    <Link to={item.url} key={index} >
                        <div className={styles.preview}>
                            <Arrow />
                            <img 
                                src={typeof item.src === 'string' ? item.src : item.src.default} 
                                alt={item.name}
                            />
                            <div className={`${styles.content}`}>
                                <h4>{item.name}</h4>
                                <div className={`${styles.discipline}`}>
                                    <div>web devleopent</div>
                                    <div>web design</div>
                                </div>
                                <p className={styles.description}>{item.desc}</p>
                            </div>
                        </div>
                    </Link>
                </article>
            ))}  
        </>
      )
}

export default Card