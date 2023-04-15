<?php

    require("../init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'project-single';
    $title_tag = 'Burgersquad Website | Dajeong Park';
?>
<?php require_once(get_path("/partials/global/head.php"))?>
<body>

    <?php require_once(get_path("/partials/global/header.php"));?>  
    <main>
    <section>
        <div class="js-slidein"></div>
        <div class="bg-project__container border-radius pt-3 mt-6 mx-auto">
            <div class="container">
                <div id="js-backBtn" class="back__btn">
                    <div class="button-sm">
                        <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                </div>
                </div>
                <div class="grid project__overview">
                    <div class="col-12 js-project-title title">
                        <h1 class="h4">‘Burgersquad’ Website</h1>
                    </div>
                    <div class="col-12 col-2-10-lg js-project-video">
                        <img class="lazy" src="<?php echo get_url("images/burger-squad-web-development-project-blur.jpg"); ?>" data-src="<?php echo get_url("images/burger-squad-web-development-project.jpg"); ?>" alt="Burgersquad web site image"></img>
                    </div>
                    <div class="col-4 col-2-3-lg align-self mt-2">
                        <div class="h6">
                        OVERVIEW
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg">
                        <p>
                            The goal was to design and develop a hamburger restaurant website that is fully responsive to become familiar with the use of grid layout using CSS grid tool.
                        </p>
                    </div>
                    <div class="col-4 col-2-3-lg mt-2">
                        <div class="h6">
                        ROLE
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg align-self">
                        <p>Web developer / designer</p>
                    </div>
                    <div class="col-4 col-2-3-lg align-self mt-2">
                        <div class="h6">
                        TOOLS
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg align-self">
                        <p>HTML, CSS, JavaScript, Masonry, Figma</p>
                    </div>
                    <div class="col-12">
                        <div class="flex justify">
                            <a href="https://burgersquad.dajeongpark.com/#">
                                <div class="project__cta button h6">Launch Site</div>
                            </a>
                            <a href="#">
                                <div class="project__cta button h6">View Code</div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="grid project__process">
                    <div class="col-4 col-2-3-lg align-self mt-3">
                        <div class="h6">
                        PROCESS
                        </div>
                    </div>
                    <div class="col-12 col-2-10-lg">
                        <h3 class="h2 my-1">1.Planning & Design</h3>
                    </div>
                    <div class="col-12 col-12-lg mt-3">
                        <img class="lazy" src="<?php echo get_url("images/burger-squad-web-development-project-responsive-blur.jpg"); ?>" data-src="<?php echo get_url("images/burger-squad-web-development-project-responsive.jpg"); ?>" alt="Burgersquad web site image"></img>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>In order to make the website accessible on any device, I chose 320px for the mobile breakpoint to ensure that the website is compatible with the smallest screens.
                        And for the tablet breakpoint, I went with 834px and 1440px for larger screens.
                        </p>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <h3 class="h2 my-1">2.Development</h3>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>In the development phase, What I kept in mind was optimizing the different sizes and positions of elements. Especially, it's essential to consider the different design requirements for the mobile and desktop versions of the website. so it was important to use the <code class="language-html">&lt;picture&gt;</code> tag to optimize images for devices.
                        </p><br>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <h3 class="h2 my-1">3. Takeaways</h3>
                    </div>
                    <div class="col-12 col-2-10-lg mt-3">
                        <p>Since mobile-friendliness is crucial for modern websites, it was a good practice for grid and flex-box layout to optimize the website for different screen sizes.
                        I was able to learn when, where and how to use each layout system effectively in the right place.</p>
                      
                    </div>
                    <div class="col-12 col-2-3-lg mt-6">
                        <h4>Up Next:</h4>
                    </div>
                    <a class="work-card__content h4 col-12 align-self title mt-3" href="<?php echo get_url("/projects/ny-times-api-project.php"); ?>">
                    New York Times API Project
                    </a>
                </div>
            </div>

        </div>
        
    </section>
    </main>
    <div class="bs-footer">
    <?php require_once(get_path("/partials/global/footer.php"));?>
    </div>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <?php require_once(get_path("/partials/projects/js-single-project.php"))?>
</body>

</html>