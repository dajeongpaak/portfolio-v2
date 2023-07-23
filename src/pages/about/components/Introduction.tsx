
import { Link } from 'react-router-dom'

import styles from './Introduction.module.scss'
import LazyImg from "../../../lib/lazyLoading/LazyImg"
import Title from "../../../components/title/Title"
import myImage from '../../../assets/images/DJ.jpg'
import placeholderImg from '../../../assets/images/DJ-blurred.jpg'
import cameraImage from '../../../assets/images/film-camera.png'
import camaraBlurred from '../../../assets/images/film-camera_blurred.png'
import Arrow from "../../../assets/icons/Arrow"
import SubTitle from "./shared/SubTitle"

function Introduction() {

  return (
    <>
        <section className={`${styles.section} wrapper`}>
            <div className={styles.title}>
                <Title title='hello!'/>
            </div>
            <div className={styles.introduction}>
                <div className={styles.profile}>
                    <LazyImg 
                        src={myImage}
                        placeholderSrc={placeholderImg}
                        alt="Dajeong Park Profile Image"
                    />
                    <div className={`${styles.profile_content}`}>
                        <h2 className={`${styles.h2} h4`}>
                            Hi, I'm Dajeong!<br />
                            You can call me DJ
                        </h2>
                        <p className='col-12'>
                            A front-end developer who is from Korea and currently in Vancouver, BC.
                        </p>
                    </div>
                </div>
            </div>
            <div className={styles.more_about_me}>
                <SubTitle title='More About Me'/>
                <div className={`${styles.more_about_me_content}`}> 
                    <p>
                    I am a front-end developer with a strong passion in JavaScript, React and Node.js. While my primary focus remains on frontend development, my growing interest in backend development with Node.js has led me to set a long-term goal of becoming a full-stack developer within the next two years.
                    By expanding my skills to encompass both frontend and backend development, I aim to contribute to the creation of practical and impactful applications from end to end.
                    </p>
                    <br/>
                    <p>
                    My journey towards this goal began with assisting and supporting my classmates with coding during my time in school. This experience made me realize how fulfilling it is to help others, and it inspired me to channel that passion into my work.
                    </p>
                    <br />
                    <p>
                    To reach my goals, I actively pursue learning opportunities outside the classroom. I believe continuous learning and hands-on experience are vital for becoming a proficient full-stack developer.
                    </p>
                </div>
            </div>
            <div className={`col-12 col-md-6 col-lg-3 ${styles.hobby}`}>
                <SubTitle title='Click This!'/>
                <Link to={"/gallery"}>
                    <LazyImg 
                        src={cameraImage} 
                        placeholderSrc={camaraBlurred} 
                        alt="an image of a film camera" 
                    />
                </Link>
            </div>
            <div className={`col-12 col-md-6 col-lg-3 ${styles.click}`}>
                <Arrow />
            </div>
        </section>
    </>
  )
}

export default Introduction
