
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import Tippy from '@tippyjs/react';
import 'tippy.js/dist/tippy.css';


import styles from './TLSI.module.scss'
import setBodyColor from '../../../../utils/setBodyColor'
import Transition from '../../../../config/framerMotion/Transiton';
import ScrollNavigation from '../../../../components/scrollNavigation/ScrollNavigation'
import Code from '../../../../config/prism/Code';
import { validationCode } from '../../../../data/code';
import { tlsi } from '../../../../data/projects';
import ProjectBanner from '../../../../components/projectBanner/ProjectBanner';
import ProjectContent from '../../../../components/projectContent/ProjectContent';
import ProjectText from '../../../../components/projectText/ProjectText';

export default function TLSI() {
    setBodyColor({color: '#1c1c1e'})

    const handleToast = () => {
        toast('Hi I am toast!')
    }
  return (
    <>
        <Transition>
            <ProjectBanner data={tlsi}/>
            <ProjectContent
                heading='React and UI Component Library'    
            >   
            <div className={styles.components}>
                <div className={styles.copy}>
                    <Tippy
                       content="Copy"
                       showOnCreate={true}
                       hideOnClick={false}
                       placement='right'
                    >
                        <div>📑</div>
                    </Tippy>
                </div>
                <div className={styles.download}>
                    <Tippy
                        content="Download"
                        showOnCreate={true}
                        hideOnClick={false}    
                        placement='left'
                    >
                        <div>⤵️</div>
                    </Tippy>
                </div>
                <div  className={styles.clear}>
                    <Tippy
                       content="Clear"
                       showOnCreate={true}
                       hideOnClick={false}
                       placement='right'
                    >
                        <div>🗑️</div>
                    </Tippy>
                </div>
                    <Tippy
                        content="toast waits to pop up"
                        hideOnClick={false}
                    >
                        <div 
                            onClick={handleToast}
                            className={styles.button}
                        >
                            Click Me!
                        </div>
                    </Tippy>
                    <ToastContainer />
                </div>
            <ProjectText>
                <p>
                    One of the great advantages of React is its rich ecosystem of UI component library which significantly speeds up the development process without having to build every component from scratch.
                </p>
                <p>
                    The UI component library has showcased its effectiveness in showing feedback appropriately and visually appealing manner. For instance, I have utilized components like Toastify to display informative notifications or messages to users. These components provide a user-friendly and visually appealing way to communicate real-time updates, success messages, error notifications, and other relevant information. 
                </p>
            </ProjectText>
            </ProjectContent>
            <ProjectContent
                heading="Client & Server side Validation"  
            >   
                <Code 
                    language="javascript"
                    code={validationCode}
                />
                <ProjectText>
                    <p>
                        I incorporated client-side validation into the handleSubmit function of my project to ensure that the user's input adheres to specific criteria. When the form is submitted, I first check the wordCounter variable, which represents the number of words in the input text. If the word count is less than or equal to 50, I display a toast notification to alert the user that the text must contain a minimum of 50 words.
                    </p>
                    <p>
                        In cases where the word count falls within the valid range of 50 to 400, I proceed to send a POST request to the server for text summarization. To provide visual feedback during the process, I set the loading state and open the toast container, indicating that the request is being processed.
                    </p>
                    <p>
                        On the server side, server-side validation takes place to verify the validity of the prompt. For instance, the server checks if the prompt is not empty and consists of at least one word.
                    </p>
                    <p>
                        Upon receiving a successful response from the server, I extract the summarized content from the response and display it in the application. In case of an error response, I log the specific error message to the console for debugging purposes.
                    </p>
                    <p>
                        By incorporating both client-side and server-side validation, I establish a multi-layered validation process. This not only enhances the user interface by providing instant feedback on invalid inputs but also ensures data integrity and reliability on the server side.
                    </p>
                </ProjectText>
            </ProjectContent>
            <ProjectContent
                heading="HTTP requests in Node.js"
            >
                <ProjectText>
                    <p>
                        I used Express.js which is a framework that simplifies the handling of HTTP requests and response in Node.js. 
                    </p>
                    <p>
                        By leveraging HTTP requests in Node.js, I gained the capability to seamlessly interact with the OpenAI API, specifically the ChatGPT API. Express.js facilitated the integration of this functionality into my application, allowing me to effortlessly send data to the ChatGPT API and retrieve the generated responses directly within my frontend application.
                    </p>
                    <p>
                        This capacity to communicate with the OpenAI API through HTTP requests opened up a world of possibilities for creating dynamic and interactive content in my applications. 
                    </p>
                </ProjectText>
            </ProjectContent>
            <ProjectContent
                heading="Takeaways"
            >
            <ProjectText>
                <p>
                    As I mentioned above, one of the most enjoyable aspects of working on this project was the experience of working with Node.js. It provided me with a valuable opportunity to tap into the capabilities of the OpenAI API and seamlessly incorporate its functionality into my application.
                </p>
                <p>
                    This integration not only allowed me to tap into the capabilities of the OpenAI API but also deepened my understanding of how data flows between the client-side and server-side, by making HTTP requests from the frontend to the backend and fetching the responses back to the frontend. It enabled me to effectively utilize APIs to enhance the functionality of my application and create a smooth communication flow between different parts of the system.
                </p>
            </ProjectText>
            </ProjectContent>
            <ScrollNavigation 
                navigateTo="jade-bookmark-manager"
                title="JADE - Bookmark Manager"
            />
        </Transition>
    </>
  )
}
