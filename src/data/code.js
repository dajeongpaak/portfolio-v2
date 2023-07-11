const contextCode = `
 import { 
  createContext, 
  useEffect, 
  useState, 
} from "react"

const ArticleContext = 
createContext<ContextTypes | []>([])

export const ArticleProvider = ({ children }:ArticleProviderProp) => {

  const [ isLoading, setIsLoading ] = useState<boolean>(true)
  const [ results, setResults ] =  useState<ResultTypes[]>([])
  const [ sections, setSections ] =  useState<string[]>([])
  const [originalResults, setOriginalResults] = useState<ResultTypes[]>([])

  useEffect(() => {
      fetchArticle()
  },[]) 

  const fetchArticle = async () => {

      try {
          const response = await fetch(url)
          const data = await response.json()
          const fetchedResults: ResultTypes[] = data.results

          setResults(fetchedResults)   
          setOriginalResults(fetchedResults)
          setIsLoading(false)
          setSections(['All', ...new Set<string>(fetchedResults.map((item: ResultTypes) 
            => item.section))]);

      } catch (error) {
          console.error(error)
      }
  }

  const filterSection:FilterSectionType = (
      section) => {
      const filteredResults: ResultTypes[] = originalResults.filter((item:ResultTypes) => item.section === section)
      section && section === 'All' ? setResults(originalResults) : setResults(filteredResults) 
   
  }

  return (
      <ArticleContext.Provider
      value={{
          results,
          isLoading,
          sections,
          setResults,
          filterSection,
      }}>
          { children }
      </ArticleContext.Provider>
  )
}

export default ArticleContext
`

const mailChimpCode = `

    // start server with Express
const app = express();

const PORT = process.env.PORT || 5000;

app.listen(PORT, () => { 
    console.log('Server started on \${PORT}');
});

    /* 
        Middleware
        every incoming request body will be parsed in JSON format 
        through app.use middleware function
    */
app.use(express.json());

    /*
        Cross-Origin Resources Sharing 
        when making HTTP request from domain to another(client side) 
        the cross origin resources sharing is blocked by nature due to security restrictions

        this middleware enables CORS by allowing specific domains
        to access resources from my server
    */
app.use(cors());

    /*
        this allows communication between its client-side and this server 
        and access the server's resources, ensuring security 
    */
app.use((req, res, next) => {
    res.setHeader('Access-Control-Allow-Origin', 'http://articles-of-the-week.dajeongpark.com');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
    res.setHeader('Access-Control-Allow-Headers', 'Content-Type');
    next();
  });

client.setConfig({
apiKey: mailChimpAPIKey,
server: mailChimpServer,
});

    /*
        a POST request is sent to /signup route
        again by setting header it helps communicate between client and server
    */
app.post('/signup', async (req, res) => {
    res.setHeader('Access-Control-Allow-Origin', 'http://articles-of-the-week.dajeongpark.com');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
    res.setHeader('Access-Control-Allow-Headers', 'Content-Type');

    try {

        const { mail } = req.body;

            // add the emails that is inputed by user to the mailing list provided by MailChimp
        const response = await client.lists.batchListMembers(mailChimpListId, {
            members: [
                {
                    email_address: mail,
                    status: 'subscribed',
                    merge_fields: {
                        EMAIL: mail
                    }
                }
            ]
            });
        
            // based on its success or failure, send status code to the client to display different feedbacks
        if (response.error_count === 0) {
            res.status(200).json({ status: 200 });
        } else {
            res.status(500).json({ status: 500 });
        }

    } catch (error) {
        console.error('Mailchimp error:', error);
    }

});

const getMembersEmails = async () => {

    try {
        const response = await client.lists.getListMembersInfo(mailChimpListId);
            // extract respective email addresses and store them in an array
        const memberEmails = response.members.map(member => member.email_address);

        return memberEmails;
    
    } catch (error) {
        console.error(error);
    }

};
`

const emailContentCode = `
// fetch NY Times data in order to complete an email content with the data for weekly updates 
const fetchData = async () => {

    try {
        const response = await axios.get(https://api.nytimes.com/svc/mostpopular/v2/viewed/7.json?api-key=\${apiKey}');
        const result = response.data.results;

        return result;

    } catch(error) {
        console.log(error);
    }

};

const emailContent = async () => {

    try {

            // create a part of email content as needed
        const results = await fetchData();
        const result = results?.map((item) => ('
        <div class="card">
            <h2 class="title">\${item.title}</h2>
            <p class="abstract">\${item.abstract}</p>
            <p><a class="read-more-link" href="\${item.url}">Read More</a></p>
        </div>
        ')).join('');
        
            // inject the created part in the email template
        const htmlContent = '
        <!doctype html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Weekly Updates - The Most Viewed Articles from New York Times</title>
        <style>
        /*--- CSS STYLING GOES HERE --*/
        </style>
        <!-- START MAIN CONTENT AREA -->
            <tr>
            <td class="wrapper">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                <td>
                    <h1>The Most Viewed Article of The Week</h1>
                    <hr>
                    <p>Dear Subscriber,</p>
                    <p>I hope this email finds you well. Thank you for subscribing to our weekly updates featuring the most viewed article from the New York Times.</p>
                    <br>
                    <p>Here's the most viewed article of the week:</p>
                        \${result}
                    <p>To read the full article, please visit the New York Times website through <span class="read-more-link">Read More</span> button at the bottom of each article.</p>
                    <p>Thank you for subscribing to weekly newsletter and staying informed with the latest news from the New York Times.</p>
                    <p>If you have any feedback or suggestions, I would love to hear from you. Simply reply to this email or reach out to me at <a href="mailTo:hello@dajeongpark.com">hello@dajeongpark.com</a>.</p>
                    <p>Wishing you a wonderful week ahead!</p>
                    <p>Warm regards,</p>
                </td>
                </tr>
            </table>
            </td>
            </tr>
            ';
            ...
            return htmlContent;

        } catch (error) {
            console.log(error);
        }

    };
`

const nodeMailerCode =`
const transporter = nodemailer.createTransport({

    service: 'gmail',
    host: "smtp.gmail.com",
    port: 587,
    secure: false,
    auth: {
        user: 'dajeong2019@gmail.com',
        pass: gmailAppPass
    }
    
});

const sendEmail = async () => {

    try {
            // prepare retrieved email addresses and content to send weekly updates
        const emails = await getMembersEmails();
        const content = await emailContent();

        const mailOptions = {
        from: 'DJ Park',
        bcc: emails,
        subject: 'Weekly Updates with the most viewed articles',
        html: content
        };

        const info = await transporter.sendMail(mailOptions);
        console.log('Email sent: ' + info.response);

    } catch (error) {
        console.log(error);
    }
};


sendEmail();

`

const validationCode = `
// Client Side Validation
const handleSubmit = async (e) => {
    e.preventDefault()

    if(wordCounter <= 50) {
      toast('Text must be at least 50 words')
    } else if ( 50 < wordCounter && wordCounter <= 400 ) {

        try {
          setIsLoading(true)
          
          const requestOption = {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ prompt }),
          }

          const response = await fetch('/summarize', requestOption)

          if(response.ok) {
            const data = await response.json()
            const { content } = data

            setContent(content)
          } else {
            console.error('error occured with status code:', response.status)
          }

        } catch (error) {
          console.error(error)
        } finally {
          setIsLoading(false)
        }
    } else {
      toast('Text must be less than 400 words')
      setIsOpen(false)
    }
  }

// Server Side Validation
app.post('/summarize', async (req, res) => {
    const { prompt } = req.body;

    try { 
        console.log('Incoming request:', req.body);

        if (!prompt || prompt.trim().length === 0) {
            return res.status(400).json({ error: 'Prompt is required' });
          }
      
        const wordCount = prompt.trim().split(' ').length;
        if (wordCount < 50 || wordCount > 400) {
        return res.status(400).json({ error: 'Text must be between 50 and 400 words' });
        }

        const completion = await openai.createChatCompletion({
            model: "gpt-3.5-turbo",
            messages: [{ 
                role: 'system', 
                content: 'You are a text summarizer.' 
            },{ 
                role: 'user', 
                content: 'Summarize the following text:' 
            },{
                role: 'user',
                content: prompt
            }],
        });

        const response = completion.data.choices[0].message;
        res.json({ content: response.content })

    } catch (error) {
        console.error(error);
    }
})

`

const scrollCode = `


const handleMouseMove = (event: MouseEvent) => {
    const { clientX, clientY } = event;
    const offsetX = (clientX / window.innerWidth) * 1000
    const offsetY = (clientY / window.innerHeight) * 1000
  
    const imgs: HTMLImageElement[] = Array.from(document.querySelectorAll('.img'))
    const constrain  = 10
    imgs.forEach((item: HTMLImageElement): void => {
    const itemRect = item.getBoundingClientRect()
    const calcY = (offsetX/2 - (itemRect.x)/2 - (item.width / 2)) / constrain
    item.style.transform = 'skewX(\${calcY/20}deg)' 
    })

    window.scrollTo(offsetX, offsetY);
  }



`

export { contextCode, mailChimpCode, nodeMailerCode, validationCode, scrollCode }