
import styles from './Jade.module.scss'
import ScrollNavigation from "../../../components/scrollNavigation/ScrollNavigation"
import { useNavigate } from "react-router-dom"


function Jade() {
 
  return (
    <div>
        
       <ScrollNavigation 
            navigateTo=""
            title="Go To The List"
            navigatePrev="photo-gallery"
        />
    </div>
  )
}

export default Jade
