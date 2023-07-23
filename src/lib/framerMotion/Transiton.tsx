
import { useEffect, useState, useRef } from "react";
import { useLocation } from "react-router-dom";
import { motion, usePresence } from "framer-motion"

const animationConfiguration = {
    initial: { opacity: 0 },
    animate: { opacity: 1 },
    exit: { opacity: 0 },
};


export default function Transition({children}: any) {
const location = useLocation();
const [isPresent, safeToRemove] = usePresence();
const [show, setShow] = useState(true);

useEffect(() => {
    !isPresent && setTimeout(safeToRemove, 1000)
}, [isPresent])


useEffect(() => {
    setShow(true);
  }, []);

  if (!show) {
    return null;
  }

  return (
show && (<motion.div
    key={location.pathname}
    variants={animationConfiguration}
    initial="initial"
    animate="animate"
    exit="exit"
    transition={{duration:0.3}}
    >
        {children}
    </motion.div>
    )
)
}
