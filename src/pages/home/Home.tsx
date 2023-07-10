
import setBodyColor from '../../utils/setBodyColor'
import Transition from '../../config/framerMotion/Transiton'
import FeaturedWork from './components/FeaturedWork'
import Hero from './components/Hero'
import Mission from './components/Mission'
import Footer from '../../layouts/footer/Footer'


function Home() {

  setBodyColor({color: '#fcf8f4'})
 

  return (
    <>
      <Transition>
        <Hero/>
        <Mission />
        <FeaturedWork />
        <Footer 
          bgColor='dark'
          bgColor_title='light'
        />
      </Transition>
    </>
  )
}

export default Home
