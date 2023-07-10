import ScrollNavigation from "../../../components/scrollNavigation/ScrollNavigation"
import { useNavigate } from "react-router-dom"
function Jade() {
  const navigate = useNavigate()
  return (
    <div>
       <div onClick={() => navigate('/work/')}>navigate</div>
       <ScrollNavigation 
                navigateTo="/"
                title="JADE - Bookmark Manager"
        />
    </div>
  )
}

export default Jade
