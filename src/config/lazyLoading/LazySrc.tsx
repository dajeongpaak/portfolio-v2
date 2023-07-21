
import { useEffect, useRef, useState } from 'react';

const LazySrc = ({placeholderSrc, srcSet, media}: any) => {
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
    inView ?
    <source 
    media={media}
    srcSet={srcSet}
    /> : 
     <source 
    ref={placeholderRef}
    media={media}
    srcSet={placeholderSrc}
    />
)
};
export default LazySrc;