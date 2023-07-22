// Built-in 
import { BrowserRouter as 
  Router, Routes,
  Route, Link } from 'react-router-dom'
import { useLocation } from 'react-router-dom';

// External
import Lenis from "@studio-freight/lenis";
import { AnimatePresence } from 'framer-motion';
import { ReactLenis, useLenis } from '@studio-freight/react-lenis'

// Internal
import './App.scss'
import Home from './pages/home/Home'
import About from './pages/about/About'
import Work from './pages/work/Work'
import Jade from './pages/work/projects/Jade-bookmark-manager-project'
import Header from './layouts/header/Header'
import Footer from './layouts/footer/Footer';
import Gallery from './pages/gallery/Gallery'
import ArticlesOfTheWeek from './pages/work/projects/articlesOfTheWeek/ArticlesOfTheWeek';
import TLSI from './pages/work/projects/tl;si/TLSI';
import PhotoGallery from './pages/work/projects/photoGallery/PhotoGallery';
import Definition from './pages/work/projects/definition/Definition';
// Variable name is camelCase
// Component name is PascalCase
// Double Quote for JSX single quote for js 

const lenis = new Lenis({
  duration: 0.7,
});

lenis.on('scroll', (e: any) => {

})

function raf(time: number) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

function App() {
  const location = useLocation()

  return (
    <>
        <Header />
        <AnimatePresence initial={false} mode="wait" onExitComplete={() => window.scrollTo(0,0)}>
          <Routes location={location} key={location.pathname}>
            <Route path="/" element={<Home />}/>
            <Route index element={<Home />}/>
            <Route path="/about" element={<About />} />
            <Route  path="/work/*">
              <Route index element={<Work />}/>
              <Route path='articles-of-the-week-from-ny-times' element={<ArticlesOfTheWeek />} />
              <Route path='tlsi-text-summarizer' element={<TLSI />} />
              <Route path='definition' element={<Definition />} />
              <Route path='photo-gallery' element={<PhotoGallery />} />
              <Route path='jade-bookmark-manager' element={<Jade />} />
            </Route>
            <Route path="/gallery" element={<Gallery />} />
            {/* <Route path="*" element={<NotFound />} /> */}
          </Routes>
        </AnimatePresence>
        {/* <Footer bgColor='dark' bgColor_title='light'/> */}
    </>
  );
}

export default App;
