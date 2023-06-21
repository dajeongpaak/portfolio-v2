
import FeaturedWork from './components/FeaturedWork'
import Hero from './components/Hero'
import Mission from './components/Mission'
import Footer from '../../layouts/footer/Footer'


function Home() {
  return (
    <>
      <Hero/>
      <Mission />
      <FeaturedWork />
      <Footer 
        bgColor='dark'
        bgColor_title='light'
      />
    </>
  )
}

export default Home
