
import { useEffect, useRef, useState } from 'react';

import { Link } from 'react-router-dom'

import styles from './Card.module.scss'
import LazyImg from '../../config/lazyLoading/LazyImg'
import {projects} from '../../data/projects'
import Arrow from '../../assets/icons/Arrow'


interface Item {
    name: string;
    desc: string;
    stacks: string[];
    src: typeof import("*.png");
    placeholderSrc: typeof import("*.webp");
    url: string;
}

const Card: React.FC = () => {

const items: Item[] = projects as Item[]


       // const cards = placeholderRef.current

    //    cards.forEach((card: any) => {
    //         card.getBoundingClientRect()
    //     });
    //     console.log(rect)
    // //     const observer = new IntersectionObserver((entries, obs) => {
    //     for (const entry of entries) {
    //         if (entry.isIntersecting) {
    //             setInView(true);
    //             obs.disconnect();
    //         } else {
    //             setInView(false);
    //         }
    //     }
    // }, {});
    // observer.observe(placeholderRef.current);
    // return () => {
    //     observer.disconnect();
  //  }
        

    return (
        <>
            {items.map((item, index) => (
                <Link  to={item.url} key={index} className={styles.card}>
                    <div 
                        // ref={cardRef}
                        id='js-preview'
                        className={styles.preview}
                    >
                        <Arrow />
                        <LazyImg 
                            src={typeof item.src === 'string' ? item.src : item.src.default} 
                            placeholderSrc={typeof item.placeholderSrc === 'string' ? item.placeholderSrc : item.placeholderSrc.default}
                            alt={item.name}
                        />
                        <div className={styles.content}>
                            <h4 className={styles.title}>{item.name}</h4>
                            <div className={styles.discipline}>
                                {item.stacks.map((stack, stackIndex) => (
                                    <p key={stackIndex}>{stack}</p>
                                    ))}
                            </div>
                            <p className={styles.description}>{item.desc}</p>
                        </div>
                    </div>
                </Link>
            ))}  
        </>
      )
}

export default Card