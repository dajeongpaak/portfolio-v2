
import { Routes, Route } from 'react-router-dom'

import WorkHome from './WorkHome'
import Jade from './projects/Jade-bookmark-manager-project'

function Work() {
  return (
    <>
      <Routes>
        <Route path="/" element={<WorkHome />}/>
        <Route path='/jade-bookmark-manager-project' element={<Jade />}/>
      </Routes>
    </>
  )
}

export default Work
