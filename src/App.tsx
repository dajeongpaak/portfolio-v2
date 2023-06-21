// Built-in 
import { Routes, Route } from 'react-router-dom'

// Internal
import './App.scss'
import Home from './pages/home/Home'
import About from './pages/about/About'
import Work from './pages/work/Work'
import Jade from './pages/work/projects/Jade-bookmark-manager-project'
import Header from './layouts/header/Header'
import Gallery from './pages/gallery/Gallery'


// Variable name is camelCase
// Component name is PascalCase
// Double Quote for JSX single quote for js 

function App() {
  return (
    <>
      <Header />
      <Routes>
        <Route path="/" element={<Home />}/>
        <Route index element={<Home />}/>
        <Route path="/about" element={<About />} />
        <Route path="/work" element={<Work />}>
          <Route index element={<Work />}/>
          <Route path='jade-bookmark-manager-project' element={<Jade />}/>
        </Route>
        <Route path="/gallery" element={<Gallery />} />
        {/* <Route path="*" element={<NotFound />} /> */}
      </Routes>
    </>
  );
}

export default App;
