
import styles from './Jade.module.scss'
import ScrollNavigation from "../../../components/scrollNavigation/ScrollNavigation"
import { useNavigate } from "react-router-dom"


function Jade() {
 
  return (
    <div>
        
       <ScrollNavigation 
            navigateTo=""
            title="JADE - Bookmark Manager"
            navigatePrev="tlsi-text-summarizer"
        />
    </div>
  )
}

export default Jade
