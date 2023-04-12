<?php

    require("../init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'project-single';
    $title_tag = 'SYMMETRY Photo Gallery Project | Dajeong Park';
?>
<?php require_once(get_path("/partials/global/head.php"))?>
<body>

    <?php require_once(get_path("/partials/global/header.php"));?>  
    <main>
    <section>
        <div class="js-slidein"></div>
        <div class="symmetry-project__container border-radius pt-3 mt-6 mx-auto">
            <div class="container">
                <div id="js-backBtn" class="back__btn">
                    <div class="button-sm">
                        <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                </div>
                </div>
                <div class="grid project__overview">
                    <div class="col-12 js-project-title title">
                        <h1 class="h4">SYMMETRY Photo Gallery</h1>
                    </div>
                    <div class="col-12 col-2-10-lg js-project-video">
                        <video class="lazy"  data-src=<?php echo get_url("images/symmetry-photo-gallery-preview.mp4");?> data-poster="<?php echo get_url("/images/symmetry-photo-gallery-blur.jpg")?>" playsinline autoplay loop muted>
                        </video>
                    </div>
                    <div class="col-4 col-2-3-lg align-self mt-2">
                        <div class="h6">
                        OVERVIEW
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg">
                        <p>The goal of this project is to develop a photo gallery website that provides an aesthetically pleasing and interactive experience. By aligning with the image concept, the website's animation and layout have been carefully designed to enhance this theme.</p>
                    </div>
                    <div class="col-4 col-2-3-lg mt-2">
                        <div class="h6">
                        ROLE
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg align-self">
                        <p>Web developer & Web designer</p>
                    </div>
                    <div class="col-4 col-2-3-lg align-self mt-2">
                        <div class="h6">
                        TOOLS
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg align-self">
                        <p>HTML, CSS, JavaScript, Figma</p>
                    </div>
                    <div class="col-12">
                        <div class="flex justify">
                            <a href="https://symmetry-photo-gallery.dajeongpark.com/" target="_blank">
                                <div class="project__cta button h6">Launch Site</div>
                            </a>
                            <a href="https://github.com/dajeongpaak/nytimes-api-project.git">
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
                            What I prioritized in this project is to present a visually appealing website design maintaining coherence concept and matching the tone with the image content by using symmetry.
                        </p>
                        <p>
                            Also, it was important to provide a way for people to closely browse through the displayed images.  
                        </p>
                        <p>
                            By setting up this goal, there were things to be considered below: 
                        </p>
                    </div>
                    <div class="col-12 col-2-10-lg mt-2">
                        <ul class="p">
                            <li>
                                - I came up with the idea of <span class="font-bold"> implementing a preloader animation using the logo </span> to captivate users attention when they are on the board.
                            </li>
                            <li>
                                - I wanted the design <span class="font-bold"> a website that is simple yet aesthetically pleasing.</span> 
                            </li>
                            <li>
                                - I need to figure out <span class="font-bold">an efficient way of showcasing the images with details</span> to ensure that this website provides a smooth and intuitive user experience.
                            </li>
                            <li>
                                - The user interface should be designed to be <span class="font-bold">responsive, accessible, and easy to use on various devices.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-2-10-lg mt-6">
                        <h3 class="h2">2. Design</h3>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <img src="<?php echo get_url('/images/symmetry-photo-gallery-wireframe.png');?>" alt="symmetry gallery wireframe with different dimension image">
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            I started off creating a wireframe for a visual representation to aim development process as well as the design process by visualizing the website’s structure and layout. 
                        </p><br>
                        <p>
                            Throughout the design process, I utilized Figma to design a user-friendly website. Above all, I set three breakpoints to ensure the website is responsive on any mobile, tablet and desktop.
                        </p><br>
                        <p>
                            For the overall layout, I thought it is also a good idea of using the asymmetrical element to create visual interest and balance to the overall design rather than having everything perfectly symmetrical.
                        </p><br>
                        <p>
                            I left the overall layout asymmetrical and focused on designing the logo while keeping in mind the use of symmetry. Since the word 'SYMMETRY' has two M's, I thought it would be a good use of its unity for animation.
                        </p>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <h3 class="h2 my-1">3. Development</h3>
                    </div>

                    <div class="col-12 col-2-10-lg symmetry-logo__anim mt-3">
                        <div class="vertical-line">
                            <div class="logo-wrapper">

                                <div class="top-anim h-100">
                                    <p>SY</p>
                                </div>
                                <div class="center-anim h-100">
                                    <p><span class="left-m">M</span><span class="right-m">M</span></p>
                                </div>
                                <div class="bottom-anim">
                                    <div class="bottom-hidden">
                                        <div class="h-100">
                                            <p>ET</p>
                                        </div>
                                        <div class="h-100">
                                            <p>RY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            After completing the design process, I moved on to the development phase and began creating a logo animation. Although the animation creation process wasn't difficult, it required careful adjustment of the letters' position, pixel by pixel.
                        </p><br>
                        <p>
                            As it is a gallery website, I wanted to add interactivity with simple functionality. 
                            To achieve this, I implemented an image gallery with popup feature that opens a popup window displaying the selected image along with details when a user clicks on it. 
                        </p><br>
                        <p>
                            Additionally, I created next and previous buttons to allow users to navigate through the gallery seamlessly. 
                        </p><br>
                        <p>
                            Firstly, I created an <code class="language-javascript">[{array of objects}]</code> that includes the image URL, details, and a unique ID for each image. Then, I created a function that displays a popup window containing the image details when the unique ID matches with the ID of the clicked image. To allow users to navigate through the images in a loop, I wrote code using an if statement that increments or decrements the index of the array when the next or previous button is clicked.
                        </p>
                    </div>
                    <div class="col-12 col-2-10-lg  code-snippet mt-3">
                        <pre>
                            <code class="language-javascript">
   
        const imageGallery = [
             {
                url: "1.jpg",
                name: "The Vancouver Club",
                address: "915 W Hastings St, Vancouver, BC",
                id: "img-1"
            },
            ...
            ]

        imgs.forEach(item => {

            item.addEventListener("click", e => {
            imgDetail.style.visibility = "visible";

            const imgPopup = document.getElementById("imgShowup");
            const image = document.createElement("img");
            const imgName = document.createElement("h2");
            const imgDesc = document.createElement("p");
            const imgCredit = document.createElement("strong");
            const prev = document.querySelector("#prevSvg");
            const prevPath = prev.querySelector("path");
            const next = document.querySelector("#nextSvg");
            const nextPath = next.querySelector("path");

            for (let i = 0; i < imageGallery.length; i++) {

            function createImgpopup() {
                image.id = "galleryImage";
                image.setAttribute("src", "images/" + imageGallery[i].url);
                image.setAttribute("alt", imageGallery[i].name);
                imgName.className = "img-name";
                imgName.innerText = imageGallery[i].name;
                imgDesc.className = "img-address";
                imgDesc.innerText = imageGallery[i].address;
                imgCredit.innerText = "Photo credit: Dajeong Park";

                imgPopup.appendChild(image);
                imgPopup.appendChild(imgName);
                imgPopup.appendChild(imgDesc);
                imgPopup.appendChild(imgCredit);
            }

            function recreateImgpopup() {
                imgPopup.textContent = "";
                createImgpopup();
            }

            if (e.target.id === imageGallery[i].id) {

                createImgpopup();
                document.body.style.overflow = "hidden";

                imgDetail.addEventListener("mousedown", e => {
                    if (e.target === next || e.target == nextPath) {
                        // Handle next button click
                        if (i === imageGallery.length - 1) {
                            i = 0;
                        } else {
                            i++
                        }
                        recreateImgpopup();
                    } else if (e.target === prev || e.target == prevPath) {
                        // Handle prev button click
                        if (i === 0) {
                            i = imageGallery.length - 1;
                        } else {
                            i--
                        }
                        recreateImgpopup();
                    }
                    else {
                        closeImagePopup();
                    }
                });

            function closeImagePopup() {
                imgDetail.style.visibility = "hidden";
                imgPopup.textContent = "";
                document.body.style.overflow = "visible";
            }
        }
        }
        e.preventDefault();
        })
        })

                            </code>
                        </pre>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <h3 class="h2 my-1">3. Takeaways</h3>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>
                            While working on this project, I was able to gain a deeper understanding of the core concepts of JavaScript. As this was one of my first projects, and now that I have slightly improved my skills in JS, I see there is a lot of room for improvement. So the next steps will be below:
                        </p>
                        <br>
                        <ul class="p">
                            <li>- Making the code <span class="font-bold">more modular and reusable</span>.</li>
                            <li>- <span class="font-bold">Optimizing performance</span> since I approached the feature by creating DOM elements every time when images are clicked. It seems inefficient</li>
                            <li>- <span class="font-bold">Improving image loading time</span> from the same issue above</li>
                            <li>- <span class="font-bold">Improving code readability</span></li>
                        </ul>
                        </div>
                        <div class="col-12 col-2-3-lg mt-6">
                        <h4>Up Next:</h4>
                        </div>
                        <a class="work-card__content h4 grid col-12 align-self title mt-3" href="<?php echo get_url("projects/note-taking-application-web-development-project.php"); ?>" >
                        Note-taking Web Application
                        </a>
                    </div>  
                </div>
            </div>
        </div>
        
    </section>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"));?>
    <script src="
    https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js
    "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>


        const backBtn = document.querySelector(".back__btn");
        let slideIn = document.querySelector('.js-slidein');

        backBtn.addEventListener('click', () => {
            window.history.back();
        })
        
        gsap.to( slideIn , {
            height: 0,
            ease: "expo",
            duration: 1.5,
        })



       
       
    </script>
</body>

</html>