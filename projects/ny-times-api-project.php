<?php

    require("../init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'project-single';
    $title_tag = 'NY Times API Project | Dajeong Park';
?>
<?php require_once(get_path("/partials/global/head.php"))?>
<body>

    <?php require_once(get_path("/partials/global/header.php"));?>  
    <main>
    <section>
        <div class="js-slidein"></div>
        <div class="ny-project__container border-radius pt-3 mt-6 mx-auto">
            <div class="container">
                <div id="js-backBtn" class="back__btn">
                    <div class="button-sm">
                        <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                </div>
                </div>
                <div class="grid project__overview">
                    <div class="col-12 js-project-title title">
                        <h1 class="h4">NY Times API Project</h1>
                    </div>
                    <div class="col-12 col-2-10-lg js-project-video">
                        <img src="<?php echo get_url("images/nytime-api-project-preview.jpg");?>" alt="NY Times API Project image">
                    </div>
                    <div class="col-4 col-2-3-lg align-self mt-2">
                        <div class="h6">
                        OVERVIEW
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg">
                        <p>The goal of this project is to develop a web application that allows users to view the most viewed articles from the New York Times. The application includes filter functionality that enables users to filter articles by section and sort them by the latest or oldest order with radio buttons. The web application is designed responsively and optimized for any device, including desktops, tablets, and mobile phones.</p>
                    </div>
                    <div class="col-4 col-2-3-lg mt-2">
                        <div class="h6">
                        ROLE
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg align-self">
                        <p>Web developer</p>
                    </div>
                    <div class="col-4 col-2-3-lg align-self mt-2">
                        <div class="h6">
                        TOOLS
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg align-self">
                        <p>HTML, Bootstrap, JavaScript, Fetching API </p>
                    </div>
                    <div class="col-12">
                        <div class="flex justify">
                            <a href="https://nytimes-api-project.dajeongpark.com/" target="_blank">
                                <div class="project__cta button h6">Launch Site</div>
                            </a>
                            <a href="https://github.com/dajeongpaak/nytimes-api-project.git" target="_blank">
                                <div class="project__cta button h6">View Code</div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="grid project__process">
                    <div class="col-12 col-2-10-lg mt-6">
                        <h3 class="h2">1. Planning</h3>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            I wanted to build an interactive and dynamic web application using API to make good use of a large amount of data. 
                        </p>
                        <p>
                            To achieve this, several factors needed to be considered in this phase:
                        </p>
                    </div>
                    <div class="col-12 col-2-10-lg mt-2">
                        <ul class="p">
                            <li>
                                - It is important to choose <span class="font-bold">resources that have data that are updated frequently</span> to ensure that the application remains current and relevant.
                            </li>
                            <li>
                                - <span class="font-bold">The code structure should be flexible</span> enough to accommodate changes to the data.
                            </li>
                            <li>
                                - <span class="font-bold">The necessary features</span> of the application need to be identified.
                            </li>
                            <li>
                                - The user interface should be designed to be <span class="font-bold">responsive, accessible, and easy to use on various devices.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            In the research phase, to fulfill the first requirement, "Postman" was a helpful tool to explore and test the APIs of the resources with a vast amount of data. It allowed me to make sure that the data was updated frequently and determine the endpoints needed for the application. 
                        </p><br>
                        <p>
                            After researching several data sources, I decided to build a web application that provides the most viewed articles from the New York Times.
                        </p>
                    </div>
                    <div class="col-12 col-2-10-lg mt-6">
                        <h3 class="h2">2. Design</h3>
                    </div>
                    <div class="col-12 mt-3">
                        <img src="<?php echo get_url('/images/nytimes-api-project-responsive.jpg');?>" alt="note-taking application design image">
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>To ensure that the website is mobile-friendly and accessible on any device, I utilized Bootstrap, which is a popular tool for front-end development. Using Bootstrap made the development process much faster while maintaining a consistent design throughout the project. </p><br>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <h3 class="h2 my-1">3. Development</h3>
                    </div>
                    <div class="col-12 col-2-10-lg  code-snippet mt-3">
                        <pre>
                            <code class="language-javascript">
    let arrSection = [];
    let dateArr = [];

    fetch(uri)
            .then(
                response => response.json()
            )
            .then((data) => {

                addToContainer(data);

            })
            .catch((error) => {

                console.error('uh-oh, an error occurs', error);

            })
            .finally(

                () => document.querySelector('#spinner').classList.remove('spinner-border')

            );

    function addToContainer(data) {
        // set a variable in order to get to the array of the result 
        let result = data.results;
        let chipsContainer = document.querySelector('#filter');
        var pill = document.createElement('div');

        // loop through the result array to extract the data will be used
        result.forEach((item) => {

            createDOMElements(item);
            addToCatlist(item.section);
        })

        // create chips for section from the extracted data 
        pill.className = 'mr-1 mb-4 p-3 badge rounded-pill text-bg-primary';
        pill.addEventListener('click', function (event) {
            filterList(event, data);
        });
        pill.innerText = 'All';

        chipsContainer.appendChild(pill);

        arrSection.forEach((item) => {

            var pill = document.createElement('div');
            pill.className = 'mr-1 mb-4 p-3 badge rounded-pill text-bg-light';

            // pass the data argument to filterList
            pill.addEventListener('click', function (event) {
                filterList(event, data);
            });
            pill.innerText = item;

            chipsContainer.appendChild(pill);
        });

    }
    // in order to filter articles according to each section, 
    // store the values of section into an array substracting the duplicated values 
    // by using find method
    function addToCatlist(csection) {
        let found = arrSection.find(element => element === csection);
        if (found === undefined) {
            arrSection.push(csection);
        }
    }
    
                            </code>
                        </pre>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            Once I have successfully retrieved data from the server and added it to the container, the next step is to identify what features to implement in the application and how to approach implementing them.
                        </p>
                        <br>
                        <p>
                            Then I thought filtering is indeed one of the most versatile and useful features so I decided to implement a filtering feature so articles can be sorted out by their respective sections that are provided by NYTimes API as one of its properties.
                        </p>
                        <br>
                        <p>
                            However, since there could be multiple articles with the same section value, it was important to ensure that individual values were created in a chip, and duplicates were not created.
                        </p>
                        <br>
                        <p>
                            In order to tackle this issue, I used <code class="language-javascript">find()</code> array method to store unique section values into an array subtracting the duplicated values. And then with the return array, I created chips using <code class="language-javascript"> createElement()</code>  method.
                        </p><br>
                    </div>
                    <div class="col-12 col-2-10-lg  code-snippet mt-3">
                        <pre>
                            <code class="language-javascript">
    function filterList(event, data) {

        let result = data.results;
        const currentTarget = event.currentTarget;
        const value = currentTarget.innerText;
        const pills = document.querySelectorAll('.badge');

        // Clear prior results 
        cardContainer.innerHTML = '';
        event.preventDefault();


        // articles will be displayed if the value of the selected pill by users is matched section name
        result.forEach((item) => {
            if (value == 'All') {
                cardContainer.innerHTML = '';
                result.forEach((item) => {

                    // this is for toggle action, if a pill is selected it'll be highlighted with blue background color
                    currentTarget.classList.remove('text-bg-light');
                    currentTarget.classList.add('text-bg-primary');

                    // Recreate articles

                    createDOMElements(item);

                    removeClass();

                })
            } else

                if (value == `${item.section}`) {
                    currentTarget.classList.remove('text-bg-light');
                    currentTarget.classList.add('text-bg-primary');
                    createDOMElements(item);

                    removeClass();
                }

            function removeClass() {
                pills.forEach((pill) => {
                    if (pill !== currentTarget) {
                        pill.className = 'mb-4 p-3 badge rounded-pill text-bg-light';
                    }
                })
            };
        });
    };


    function latest() {
        const articles = Array.from(document.querySelectorAll('.col-xl-4.col-md-6'));
        articles.sort((a, b) =>
            new Date(b.querySelector('[data-published-date]').getAttribute('data-published-date')) 
            - new Date(a.querySelector('[data-published-date]').getAttribute('data-published-date')
            ));
        displaySortedData(articles);
    }

    function oldest() {
        const articles = Array.from(document.querySelectorAll('.col-xl-4.col-md-6'));
        articles.sort((b, a) =>
            new Date(b.querySelector('[data-published-date]').getAttribute('data-published-date'))
                - new Date(a.querySelector('[data-published-date]').getAttribute('data-published-date')
            ));

        displaySortedData(articles);
    }

    function displaySortedData(articles) {
        cardContainer.innerHTML = '';
        articles.forEach(article => {
            cardContainer.appendChild(article);
        });
    }


                            </code>
                        </pre>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            After creating chips, the next step was to make the chip actually work out.
                        </p>
                        <br>
                        <p>
                            To achieve that, I wrote the code that validates if the section value of the selected chip is equivalent to the section value from the extracted data. If so, the function will recreate DOM elements to display data while ensuring that UI elements reflect the filtering result. 
                        </p>
                        <br>
                        <p>
                            Lastly, to enhance the feature, I also wrote lines for sorting out articles in the latest or oldest order.
                            This feature was accomplished by using <code class="language-javascript"> sort()</code> array method to sort the articles in a certain order when a button is clicked. 
                        </p>
                        <br>
                        <p>
                            In order to make it easier to access and manipulate individual elements, such as retrieving their published date values from the DOM elements, I set a unique attribute for each article when creating the DOM elements to display data.
                        </p>
                        <br>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <h3 class="h2 my-1">4. Takeaways</h3>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            Since retrieving data from the server by fetching API is like bringing a vast array from somewhere, this project was a very good opportunity for me to gain hands-on experience in manipulating arrays, using various array methods. 
                        </p>
                        <br>
                        <p>
                            The most challenging part of the project was storing section values disregarding the duplicated values.	That part required me to spend much time researching array methods and experimenting with different approaches to solve the problem.
                        </p>
                        <br>
                        <p>
                            In addition to array manipulation, I also gained experience in dynamically creating and manipulating DOM elements using JavaScript, which was necessary for displaying the retrieved data in a user-friendly manner.
                        </p>
                        <br>
                        <p>
                            Overall, this project provided valuable hands-on experience in working with APIs, arrays, and DOM manipulation, and challenged me to think critically and problem-solve effectively.
                        </p>

                    </div>
                    
                    <div class="col-12 col-2-3-lg mt-6">
                        <h4>Up Next:</h4>
                    </div>
                    <a class="work-card__content h4 grid col-12 align-self title mt-3" href="<?php echo get_url("/projects/symmetry-web-development-project.php"); ?>">
                        ‘SYMMETRY' Photo Gallery
                    </a>
                </div>
            </div>
        </div>
        
    </section>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"));?>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <?php require_once(get_path("/partials/projects/js-single-project.php"))?>
</body>

</html>