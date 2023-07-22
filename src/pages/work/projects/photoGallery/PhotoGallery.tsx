import { useEffect, useRef } from 'react'

import Prism from "prismjs";
import '../../../../styles/prismTheme/prism-vsc-dark-plus.css'

import styles from './PhotoGallery.module.scss'
import Transition from '../../../../config/framerMotion/Transiton'
import setBodyColor from '../../../../utils/setBodyColor'
import ScrollNavigation from '../../../../components/scrollNavigation/ScrollNavigation'
import { gallery } from '../../../../data/projects'
import ProjectBanner from '../../../../components/projectBanner/ProjectBanner'
import ProjectContent from '../../../../components/projectContent/ProjectContent'
import ProjectText from '../../../../components/projectText/ProjectText'

export default function PhotoGallery() {
    setBodyColor({color: '#1c1c1e'})
    const imageContainer: any = useRef()
    const code = `
    const handleMouseMove = (event: MouseEvent) => {
        const { clientX, clientY } = event;
        const offsetX = (clientX / window.innerWidth) * 1000
        const offsetY = (clientY / window.innerHeight) * 1000
      
        window.scrollTo(offsetX, offsetY);
      }
      
    
      useEffect(() => {
        window.addEventListener('mousemove', handleMouseMove)
      
        return () => {
          window.removeEventListener('mousemove', handleMouseMove)
        }
      }, [])

    `

    const handleMouseMove = (event: MouseEvent) => {
      
        const { clientX, clientY } = event;
        const offsetX = (clientX / imageContainer.current?.clientWidth) * 500
        const offsetY = (clientY / imageContainer.current?.scrollHeight) * 1000
      
        imageContainer.current?.scrollTo(offsetX, offsetY);
      }
      
    
      useEffect(() => {
        imageContainer.current?.addEventListener('mousemove', handleMouseMove)
      
        return () => {
            imageContainer.current?.removeEventListener('mousemove', handleMouseMove)
        }
      }, [])

      useEffect(() => {
        Prism.highlightAll();
      }, []);
      
  return (
    <Transition>
    <ProjectBanner data={gallery}/>
    <ProjectContent
        heading='Mouse Interaction'    
    >   
        <div 
            className={styles.window}
            ref={imageContainer}
        >
            <div className={styles.canvas}>
                {Array.from({ length: 8 }).map((_, i) => (
                    <div key={i} className={styles[`box_${i}`]}></div>
                ))}
          
            </div>
        </div>
        <pre className={styles.code}>
            <code className="language-javascript">
            {code}
            </code>
        </pre>
        <ProjectText>
   
            <p>
                To enhance the interactive element of the project, I integrated mouse movement as a key navigation tool, creating a seamless and joyful experience while users explore the collection of photographs. 
                By calculating the coordinates of the cursor and the offsetX, and offsetY values based on the cursor's position and the window dimensions, I was able to achieve the interactive mouse event that works as the scroll.
            </p>
            <p>
                Also, by integrating GSAP library, I was able to implement dynamic interactions, transforming and skewing the images in response to the scroll.
            </p>
        </ProjectText>
    </ProjectContent>
    <ProjectContent
        heading="CSS Grid Layout"  
    >   
        <ProjectText>
            <p>
                By leveraging CSS Grid, I was able to position each element precisely, ensuring that they appeared exactly where I wanted them on the page.
            </p>
            <p>
                One of the key advantages of using CSS Grid was its flexibility. I could easily define the grid structure, specifying the number of rows and columns, and aligning the images vertically and horizontally with ease. CSS Grid allowed me to establish the desired layout and maintain consistency throughout the grid.
            </p>
            <p>
                Additionally, CSS Grid's responsiveness was a significant benefit. With media queries, I could adapt the grid layout based on different screen sizes and devices.
            </p>
        </ProjectText>
    </ProjectContent>
    <ProjectContent
        heading="Managing Image Data"
    >
    <ProjectText>
        <p>
            To ensure a modular and maintainable codebase, I adopted the practice of storing the image data in a separate file and dynamically rendering them in the project. This approach allows for easy management and updates of the image collection without directly modifying the code responsible for displaying the images.
        </p>
        <p>
            In the project, I imported the image data from a separate file and utilized the mapping technique to dynamically render the images. By mapping over the imported image data, each image was efficiently displayed within the gallery.
        </p>
    </ProjectText>
    </ProjectContent>
    <ProjectContent
        heading="Takeaways"
    >
    <ProjectText>
        <p>
            What I was primarily focused on during the development of this project was crafting a visually engaging experience that would captivate users, considering user experience as well.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, totam animi consequuntur autem ratione, nobis qui dolore voluptatibus quasi sequi placeat ex unde expedita! Magnam facilis autem ipsum repudiandae ea.
        </p>
    </ProjectText>
    </ProjectContent>
    <ScrollNavigation 
        navigateTo=""
        title="List of All Work"
        navigatePrev="tlsi-text-summarizer"
    />
</Transition>
  )
}
