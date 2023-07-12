const projects = [
    {
        name: "Articles of the Week from NY Times",
        desc: "a web application with a newsletter subscription feature to view the most popular articles for the week.",
        stacks: ["React", "TypeScript", "Node.js", "Express.js", "Bootstrap"],
        src: require('../assets/images/articles-of-the-week-banner.png'),
        url: "/work/articles-of-the-week-from-ny-times"
    },
    {
        name: "TL;si - Too Long Summarize It",
        desc: "a web application that uses OpenAI's text summarization capabilities to condense lengthy texts into concise summaries",
        stacks: ["React", "Node.js", "Express.js", "Tailwind", "OpenAI"],
        src: require('../assets/images/too-long-summarize-it-image.png'),
        url: "/work/tlsi-text-summarizer"
    },
    {
        name: "Photo Gallery",
        desc: "a digital photo gallery where you can explore with mouse interaction",
        stacks: ["React", "JavaScript", "CSS Grid Layout"],
        src: require('../assets/images/photo-gallery-image-min.png'),
        url: "/work/photo-gallery"
    },
    {
        name: "Id porta lectus sit feugiat libero",
        desc: "Lorem ipsum dolor sit amet consectetur. Id porta lectus sit feugiat libero blandit augue.",
        stacks: ["MongoDB", "Express.js", "React", "Node.js"],
        src: require('../assets/images/placeholder-3.jpg'),
        url: "/work/project-3"
    }
]

const articlesOfTheWeek = [
    {
        bannerSrc: require('../assets/images/articles-of-the-week-banner.png'),
        bannerSrc_m: require('../assets/images/articles-banner-m.png'),
        name: "Articles of the Week from NY Times",
        timeline: "May - June 2023",
        stacks: ["React", "TypeScript", "Node.js", "Express.js", "Bootstrap"],
        role: ["Front ·", " Backend developer", " & designer"],
        site: "http://articles-of-the-week.dajeongpark.com/",
        github: "https://github.com/dajeongpaak/articles-of-the-week-from-nytimes",
        description: ["Articles of the Week from NY Times is a web application that provides users with the ability to view the most viewed articles from the New York Times for the last 7 days. With a simple and user-friendly interface, users can easily access and stay informed about the latest news and trending topics.",
        "In addition to article viewing, the application offers a newsletter subscription feature, allowing users to stay up-to-date with the latest articles and receive weekly updates directly in their email inbox. By subscribing to the newsletter, users can ensure they never miss out on important news and stay connected with the NY Times."]
    }
]

const tlsi = [
    {
        bannerSrc: require('../assets/images/too-long-summarize-it-image.png'),
        bannerSrc_m: require('../assets/images/too-long-summarize-it-mobile.png'),
        name: "TL;si - Too Long Summarize It",
        timeline: "June 2023",
        stacks: ["React", "Node.js", "Express.js", "Tailwind", "OpenAI"],
        role: ["Front ·", " Backend developer", " & designer"],
        site: "https://too-long-summarize-it-cd67d696e9ae.herokuapp.com",
        github: "https://github.com/dajeongpaak/text-summarizer",
        description: ["TL;si is a web application that uses OpenAI's text summarization capabilities to condense lengthy texts into concise summaries. It allows users to input text and quickly generate a summarized version of that text. ",
        "Along with the summarization feature, TL;si also provides convenient options to copy the summarized text or download it as a text file. With TL;si, users can save time and effort by efficiently extracting the key information from long texts."]
    }
]

const gallery = [
    {
        bannerSrc: require('../assets/images/photo-gallery-image-min.png'),
        bannerSrc_m: require('../assets/images/photo-gallery-mobile-min.png'),
        name: "Photo Gallery",
        timeline: "June 2023",
        stacks: ["React", "JavaScript", "CSS Grid Layout"],
        role: ["Frontend developer", " & designer"],
        site: "https://dajeongpark.com/#/gallery",
        github: "https://github.com/dajeongpaak/text-summarizer",
        description: ["The Interactive Digital Photo Gallery is a distinctive project that seamlessly blends my personal touch, expertise in frontend development, and my passion and love for photography.",
        "This project introduces an interactive feature that allows users to navigate through the gallery using the position of their mouse (desktop only, sadly)."]
    }
]

export { projects, articlesOfTheWeek, tlsi, gallery }