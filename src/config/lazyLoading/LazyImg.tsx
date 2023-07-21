
import { useEffect, useRef, useState } from 'react';

const LazyImg = ({placeholderSrc, src, alt}: any) => {
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
    inView ? <img src={src} alt={alt || ""} /> : <img ref={placeholderRef} src={placeholderSrc} alt={alt || ""} />
)
};
export default LazyImg;