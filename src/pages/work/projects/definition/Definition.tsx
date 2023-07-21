import styles from './Definition.module.scss'
import { definition } from '../../../../data/projects';
import setBodyColor from '../../../../utils/setBodyColor'
import Transition from '../../../../config/framerMotion/Transiton';
import ScrollNavigation from '../../../../components/scrollNavigation/ScrollNavigation'
import Code from '../../../../config/prism/Code';
import ProjectBanner from '../../../../components/projectBanner/ProjectBanner';
import ProjectContent from '../../../../components/projectContent/ProjectContent';
import ProjectText from '../../../../components/projectText/ProjectText';
import { 
  contextCode, 
  mailChimpCode,
  nodeMailerCode } 
from '../../../../data/code';


export default function Definition() {
    setBodyColor({color: '#1c1c1e'})

    return (
      <>
        <Transition>
          <ProjectBanner 
            data={definition}/>
            <ProjectContent 
              heading="Modular State Management with Context"
            >
              <Code 
                language="javascript"
                code={contextCode}
              />
              <ProjectText>
                <p>
                  One of the challenges I encountered while working with the component-based library React was efficiently handling props. This challenge became particularly relevant when I needed to use data from the New York Times API to create filters and display articles in the application.
                </p>
                <p>
                  To address this challenge, I employed various strategies to ensure the efficient handling of props. I leveraged a context provider to centralize the state management and access of the fetched data. 
                  By storing the data in the context, I eliminated the need to pass it through multiple layers of components as props, making it easily accessible to the components that needed it. 
                </p>
                <p>
                  Furthermore, I optimized the usage of props by selectively passing relevant subsets or filtered data to specific components. This approach reduced unnecessary re-rendering and improved the overall performance of the application. By passing only the required data as props, I maintained a clear and organized code structure, improving readability and maintainability.
                </p>
              </ProjectText>
            </ProjectContent>
            <ProjectContent
             heading="API Integration"
            >
              <Code 
                language='javascript'
                code={mailChimpCode}
              />
              <ProjectText>
                <div className={styles.api__content}> 
                  <h3 className='h4'>MailChimp API</h3>
                  <p>
                    I first utilized Node.js and Express.js to integrate the MailChimp API, which allowed me to expand my skillset to include backend development. By leveraging Node.js and Express.js, I was able to open up a server and handle various HTTP requests, such as POST and GET, necessary for integrating with the MailChimp API.
                  </p>
                  <p>
                    I implemented a POST route '/signup' to handle the newsletter signup process. This route is responsible for adding the email addresses inputted by users to the mailing list provided by MailChimp. To ensure proper access control, I set the required headers in the response to allow cross-origin requests from my frontend application hosted at 'http://articles-of-the-week.dajeongpark.com'.
                  </p>
                  <p>
                    Additionally,  I implemented a function called 'getMembersEmails' to retrieve the email addresses stored within the MailChimp list. By utilizing the MailChimp API's getListMembersInfo function, I fetch the list members' information, extract their respective email addresses, and store them in an array. This allows me to access and work with the email addresses as needed within my application.
                  </p>
                  <h3 className='h4'>New York Times API</h3>
                  <p>
                    Also, I extended the usage of the New York Times API beyond displaying articles. I utilized the fetched data to create email content, ensuring that users subscribed to my newsletter would receive the latest articles directly in their email inbox. This involved leveraging the data from the API to generate dynamic and engaging email content that keeps users informed and connected to the New York Times.
                  </p>
                
                  <h3 className='h4'>Nodemailer Module</h3>
                  <p>
                    With the Nodemailer module in place, I successfully completed the newsletter functionality in my application. Subscribed users receive custom newsletters containing the latest articles and updates from the New York Times, delivered directly to their email inboxes.
                  </p>
                </div>
              </ProjectText>
            </ProjectContent>
            <ProjectContent 
              heading="Synchronize Async Operations"
            >
              <Code 
                language="javascript"
                code={nodeMailerCode}
              />
              <ProjectText>
                <p>
                  One of the challenges I faced in this project was synchronizing asynchronous operations. Since data fetching from the New York Times and MailChimp APIs occurred asynchronously, I needed to ensure that the email sending function ran with the email addresses and content prepared.
                </p>
                <p>
                  To achieve this synchronization, I created the sendEmail function. It brings together the getMembersEmails and emailContent functions by awaiting their results. This ensures that the necessary email addresses and content are retrieved before sending the email.
                </p>
                <p>
                  Within sendEmail, I first await the email addresses retrieval, then await the content generation. Finally, I use the Nodemailer module to send the email with the prepared data.
                  By synchronizing these operations, I ensure a smooth workflow. The sendEmail function guarantees that the email is sent with the required information.
                </p>
              </ProjectText>
            </ProjectContent>
            <ProjectContent
              heading='Takeaways'  
            >
              <ProjectText>
                <p>
                  This project was a great opportunity for me to expand my skillset beyond frontend to backend development and helped me realize that I wanted to become full-stack developer in the near future as well as the desire to learn more.
                </p>
                <p>
                  Most importantly, the tech stacks I used in this project are all built upon JavaScript, so I was able to develop my understanding and skills about JS further more, by practicing 
                </p>
                <br />
                <ul>
                  <li>
                    - Effective Management of Asynchronous Operations
                  </li>
                  <li>
                    - Various Array Methods such as map, filter, join along with spread operator and set to manipulate objects in the array
                  </li>
                  <li>
                    - ES6 syntax including arrow function, Destructuring Assignment and much more
                  </li>
                </ul>
                <p>
                  Not only practices in JS and React, I integrated TypeScript as well and TypeScript allows me to catch potential errors early on, resulting in more reliable code. 
                </p>
              </ProjectText>
            </ProjectContent>
        
            <ScrollNavigation 
              navigateTo="photo-gallery"
              title="Photo Gallery"
              navigatePrev="tlsi-text-summarizer"
            /> 
        </Transition>
      </>
    )
}


