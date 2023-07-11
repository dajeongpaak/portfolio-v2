
import styles from './Jade.module.scss'
import ScrollNavigation from "../../../components/scrollNavigation/ScrollNavigation"
import { useNavigate } from "react-router-dom"


function Jade() {
 
  return (
    <div>
        
       <ScrollNavigation 
            navigateTo=""
            title="List of All Projects"
            navigatePrev="photo-gallery"
        />
    </div>
  )
}

export default Jade
