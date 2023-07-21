import { lazyLoad } from 'unlazy'
import styles from './Jade.module.scss'
import ScrollNavigation from "../../../components/scrollNavigation/ScrollNavigation"
import { useNavigate } from "react-router-dom"
import LazyImage from '../../../config/lazyLoading/LazyImg'
import imageBlur from '../../../assets/images/10_blurred.jpg'
import image from '../../../assets/images/10.jpg'
import LazyImg from '../../../config/lazyLoading/LazyImg'
import svgimg from '../../../assets/images/1_blurred.svg'
// import Img from '../../../config/lazyLoading/Img'

function Jade() {
  lazyLoad()
  return (
    <div className={styles.image}>
    </div>
  )
}

export default Jade
