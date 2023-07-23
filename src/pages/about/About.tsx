
import setBodyColor from "../../utils/setBodyColor"
import Transiton from "../../lib/framerMotion/Transiton"
import Introduction from "./components/Introduction"
import Footer from "../../layouts/footer/Footer"
import ValuesAndInterest from "./components/ValuesAndInterest"

function About() {

  setBodyColor({color: '#fcf8f4'})

  return (
    <>
      <Transiton>
        <Introduction />
        <ValuesAndInterest />
        <Footer 
          bgColor='lignt'
          bgColor_title='white'
        />
      </Transiton>
    </>
  )
}

export default About
