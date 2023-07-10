
import { Routes, Route } from 'react-router-dom'

import WorkHome from './WorkHome'
import Jade from './projects/Jade-bookmark-manager-project'
import ArticlesOfTheWeek from './projects/articlesOfTheWeek/ArticlesOfTheWeek'
import TLSI from './projects/tl;si/TLSI'

function Work() {
  return (
    <>
      <Routes>
        <Route path="/" element={<WorkHome />}/>
        <Route path='/articles-of-the-week-from-ny-times' element={<ArticlesOfTheWeek />}/>
        <Route path='/tlsi-text-summarizer' element={<TLSI />} />
        <Route path='/jade-bookmark-manager' element={<Jade />}/>
      </Routes>
    </>
  )
}

export default Work
