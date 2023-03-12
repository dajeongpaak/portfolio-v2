<?php

    require("../init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'project-single';
    $title_tag = 'Note-taking Web Application Project | Dajeong Park';
?>
<?php require_once(get_path("/partials/global/head.php"))?>
<body>

    <?php require_once(get_path("/partials/global/header.php"));?>  
    <main>
    <section>
        <div class="project__container-2"></div>
        <div class="project__container">
            <div class="container">
                <div class="back__btn">
                    <div class="button-sm">
                        <i class="fa-solid fa-arrow-right-long"></i>
                </div>
                </div>
                <div class="grid project__overview">
               
                <div class="col-12 title">
                    <h2 class="h6">Note-taking Application</h2>
                </div>
                <div class="col-12">
                    <video class="js-video" playsinline autoplay loop muted>
                        <source src="../images/note-taking-app-preview.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-4">
                    <div class="title title-sm">
                    ROLE
                    </div>
                </div>
                <div class="col-8 align-center">
                    <p>Web developer / designer</p>
                </div>
                <div class="col-4">
                    <div class="title title-sm">
                    TIMELINE
                    </div>
                </div>
                <div class="col-8 align-center">
                    <p>Feb 3 - 5, 2023</p>
                </div>
                <div class="col-4 align-center">
                    <div class="title title-sm">
                    TOOLS
                    </div>
                </div>
                <div class="col-8 align-center">
                    <p>HTML, CSS, JavaScript, Figma</p>
                </div>
                <div class="col-4 align-center">
                    <div class="title title-sm">
                    OVERVIEW
                    </div>
                </div>
                <div class="col-12">
                    <p>The goal was to create a functional note-taking app to gain hands-on experience in building a practical application from scratch, improving my understanding of JavaScript syntax and JavaScript concepts as well as reinforcing best practices in coding.</p>
                </div>
                </div>
                <div class="grid project__process">
                    <div class="col-4 align-center">
                        <div class="title title-sm">
                        PROCESS
                        </div>
                    </div>
                    <div class="col-12">
                        <h3 class="h4">1.Planning & Design</h3>
                        <img src="<?php echo get_url('/images/note-taking-design.png');?>" alt="note-taking application design image">
                    </div>
                    <div class="col-12">
                        <p>To gain practical experience in JavaScript, I plan to build a 
                        note-taking app using vanilla JS from scratch. </p><br>
                        <p>I have identified several JavaScript concepts to incorporate into the project, such as creating and modifying the DOM for the user interface, handling mouse events, using local storage, working with loops, and utilizing array methods. </p><br>
                        <p>I then moved on to the design phase where I created a wireframe in Figma to aid in the coding process, providing a visual blueprint and making use of Figma's inspector feature for improved efficiency.</p><br><br>
                    </div>
                    <div class="col-12">
                        <h3 class="h4">2.Coding</h3>
                        <img src="<?php echo get_url('/images/note-taking-code.png');?>" alt="note-taking application code image">
                    </div>
                    <div class="col-12">
                        <p>In the code, I established the interface of the application by dividing it into two parts: one for displaying notes and the other for inputting notes. </p><br>
                        <p>The process of the note-taking functionality begins with submitting notes through the input field, saving them in the local storage and displaying them on the page. I used local Storage API to store and retrieve data from the local storage using JSON.parse and JSON.stringify to convert objects to strings and vice-versa. </p><br>
                        <p>and to display the data I rendered the data by using the createElement method to dynamically generate elements in the DOM.</p><br><br>
                    </div>
                    <div class="col-12">
                        <h3 class="h4">3. Takeaways</h3>
                    </div>
                    <div class="col-12">
                        <p>While working on the project, the most I struggled with was thinking in a programming way. I had to encounter some errors when working with local storage so I tried to solve the errors using a console log as much as I can to check constantly what I got as a return also what was needed to operate the code properly. </p><br>
                        <p>The whole process helped me get accustomed to JS concepts, how to work with them as well as approach problems and break them down into smaller pieces.</p><br>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"));?>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <script>
        const backBtn = document.querySelector(".back__btn");

        backBtn.addEventListener('click', () => {
            window.history.back();
        })
        
    </script>
</body>

</html>
