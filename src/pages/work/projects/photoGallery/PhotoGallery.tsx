import styles from './PhotoGallery.module.scss'
import Transition from '../../../../config/framerMotion/Transiton'
import setBodyColor from '../../../../utils/setBodyColor'
import Code from '../../../../config/prism/Code'
import { scrollCode } from '../../../../data/code'
import ScrollNavigation from '../../../../components/scrollNavigation/ScrollNavigation'
import { gallery } from '../../../../data/projects'
import ProjectBanner from '../../../../components/projectBanner/ProjectBanner'
import ProjectContent from '../../../../components/projectContent/ProjectContent'
import ProjectText from '../../../../components/projectText/ProjectText'

export default function PhotoGallery() {
    setBodyColor({color: '#1c1c1e'})
  return (
    <Transition>
    <ProjectBanner data={gallery}/>
    <ProjectContent
        heading='Mouse Interaction'    
    >   
    <Code 
            language="javascript"
            code={scrollCode}
        />
        <ProjectText>
            <p>
                To enhance the interactive element of the project, I integrated mouse movement as a key navigation tool, creating a seamless and joyful experience while users explore the collection of photographs. As users move their mouse, the images in the gallery react dynamically, transforming and skewing in response to the cursor's position.
            </p>
            <p>
                By calculating the coordinates of the cursor and the offsetX, and offsetY values based on the cursor's position and the window dimemsions, I was able to achieve the interactive mouse event that works as the scroll.
            </p>
        </ProjectText>
    </ProjectContent>
    <ProjectContent
        heading="CSS Grid Layout"  
    >   
       
        <ProjectText>
            <p>
                By utilizing Grid-based layout I was able to display each images in the desired position, also thanks to its flexibility, making it responsive with ease
                
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, consequatur. Nostrum excepturi, veniam voluptas nulla hic est voluptatibus eligendi, et perspiciatis tenetur sit iusto animi iste quidem eius odio sapiente?
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
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil voluptatum quod temporibus cupiditate ipsa minima sunt culpa libero, dolore unde praesentium, iste porro? Dolores veniam nihil impedit recusandae consequuntur repellendus!
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, totam animi consequuntur autem ratione, nobis qui dolore voluptatibus quasi sequi placeat ex unde expedita! Magnam facilis autem ipsum repudiandae ea.
        </p>
    </ProjectText>
    </ProjectContent>
    <ScrollNavigation 
        navigateTo="jade-bookmark-manager"
        title="JADE - Bookmark Manager"
        navigatePrev="articles-of-the-week-from-ny-times"
    />
</Transition>
  )
}
