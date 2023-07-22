
import { useEffect, useRef, useState } from 'react';

const BlurAnimation = ({children, styles}: any) => {
    const [inView, setInView] = useState(false);
    const placeholderRef: any = useRef();
    useEffect(() => {
        const observer = new IntersectionObserver((entries, obs) => {
        for (const entry of entries) {
            if (entry.isIntersecting) {
                setInView(true);
                obs.disconnect();
            }
        }
   }, {});
    observer.observe(placeholderRef.current);
    return () => {
        observer.disconnect();
    }
}, []);
return (
    inView ? <div className={styles.preview}>
        { children }
    </div> : <div>
        { children }
    </div>
)
};
export default BlurAnimation;