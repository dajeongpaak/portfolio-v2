
import Introduction from "./components/Introduction"
import Footer from "../../layouts/footer/Footer"
import ValuesAndInterest from "./components/ValuesAndInterest"

function About() {
  return (
    <>
      <Introduction />
      <ValuesAndInterest />
      <Footer 
        bgColor='lignt'
        bgColor_title='white'
      />
    </>
  )
}

export default About
