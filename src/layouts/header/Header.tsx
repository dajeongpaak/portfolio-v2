import React from 'react'
import { ReactDOM } from 'react'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom'


// import Navbar from '../navigation/Navbar'
import styles from './Header.module.scss'

function Header() {
  return ( 
    <header className={styles.container}> 
      <nav className={styles.nav}>
          <ul className={styles.flex}>
            <li className={styles.nav__logo}>
              <Link to="/">
                <svg id="Layer_1" className={styles.logo} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 109"><defs></defs><path d="M21,109h-4C7.61,109,0,101.39,0,92V17C0,7.61,7.61,0,17,0h4c29.27,0,53,23.73,53,53v3c0,29.27-23.73,53-53,53Z"/></svg>
              </Link>
            </li> 
            <div className='flex'>
              <li className={styles.nav__item}>
                <Link to="/about">ABOUT</Link>
              </li>
              <li className={styles.nav__item}>
                <Link to="/work">WORK</Link>
              </li>
            </div>
          </ul>
      </nav>
    </header>
  )
}

export default Header
