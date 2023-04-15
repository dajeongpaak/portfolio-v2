<?php

    require("../init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'project-index';
    $title_tag = 'WORK | Dajeong Park';
?>
<?php require_once(get_path("/partials/global/head.php"))?>
<body>
    <?php require_once(get_path("/partials/global/header.php"));?>  
    <main>
        <section class="work__main">
            <div class="container">
                <div class="grid">
                    <div class="col-12 title">
                        <h1 class="h2">Web Development</h1>
                    </div>
                    <ul class="work__cards grid">
                        <li class="work__card work__nytimes">
                            <a href="<?php echo get_url("/projects/ny-times-api-project.php"); ?>" class="work-card__subheading h6" title="View New York Times API Project">Project 1</a>
                            <a class="work-card__content" href="<?php echo get_url("/projects/ny-times-api-project.php"); ?>">
                                <h3>
                                    <div class="work-card__title flex">
                                        <span>New York Times API Project&nbsp;</span>
                                        <span>New York Times API Project&nbsp;</span>
                                        <span>New York Times API Project&nbsp; </span>
                                        <span>New York Times API Project&nbsp;</span>
                                    </div>
                                </h3>
                                <div class="project__media">
                                    <img src="<?php echo get_url("images/nytime-api-project-preview.jpg"); ?>"  alt="New York Times API Project image"></img>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="title h4">
                                    Web Development
                                    </div>
                                    <div class="title h4">
                                    Web Design
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="work__card work__symmetry">
                            <a href="<?php echo get_url("/projects/symmetry-web-development-project.php"); ?>" class="work-card__subheading h6" title="View SYMMETRY Gallery Project">Project 2</a>
                            <a class="work-card__content" href="<?php echo get_url("/projects/symmetry-web-development-project.php"); ?>" >
                                <h3>
                                    <div  class="work-card__title flex">
                                        <span>‘SYMMETRY’ Photo Gallery&nbsp;</span>
                                        <span>‘SYMMETRY’ Photo Gallery&nbsp;</span>
                                        <span>‘SYMMETRY’ Photo Gallery&nbsp;</span>
                                        <span>‘SYMMETRY’ Photo Gallery&nbsp;</span>
                                    </div>
                                </h3>
                                <div class="project__media">
                                    <video class="lazy"  data-src=<?php echo get_url("images/symmetry-photo-gallery-preview.mp4");?> data-poster="<?php echo get_url("/images/symmetry-photo-gallery-blur.jpg")?>" playsinline autoplay loop muted>
                                    </video>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="title h4">
                                        Web Development
                                    </div>
                                    <div class="title h4">
                                        Web Design
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="work__card work__note-taking">
                            <a href="<?php echo get_url("projects/note-taking-application-web-development-project.php"); ?>" title="View Note-taking App Project" class="work-card__subheading h6">Project 3</a>
                            <a class="work-card__content" href="<?php echo get_url("projects/note-taking-application-web-development-project.php"); ?>">
                                <h3>
                                    <div class="work-card__title flex">
                                        <span>Note-taking Web Application&nbsp;</span>
                                        <span>Note-taking Web Application&nbsp;</span>
                                        <span>Note-taking Web Application&nbsp;</span>
                                        <span>Note-taking Web Application&nbsp;</span>
                                    </div>
                                </h3>
                                <div class="project__media">
                                    <video class="lazy"  data-src=<?php echo get_url("/images/note-taking-app-preview.mp4");?> data-poster="<?php echo get_url("/images/note-taking-app-blur.jpg")?>" playsinline autoplay loop muted>
                                    </video>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="title h4">
                                        Web Development
                                    </div>
                                    <div class="title h4">
                                        Web Design
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="work__card work__burgersquad">
                            <a href="<?php echo get_url("/projects/burgersquad-web-development-project.php"); ?>" title="View 'Burgersquad' Web Design Project" class="work-card__subheading h6">Project 4</a>
                            <a class="work-card__content" href="<?php echo get_url("/projects/burgersquad-web-development-project.php"); ?>">
                                <h3>
                                    <div class="work-card__title flex">
                                        <span>‘Burgersquad’ Website &nbsp;</span>
                                        <span>‘Burgersquad’ Website &nbsp;</span>
                                        <span>‘Burgersquad’ Website &nbsp;</span>
                                        <span>‘Burgersquad’ Website &nbsp;</span>
                                    </div>
                                </h3>
                                <div class="project__media">
                                    <img class="lazy" src="<?php echo get_url("images/burger-squad-web-development-project-blur.jpg"); ?>" data-src="<?php echo get_url("images/burger-squad-web-development-project.jpg"); ?>" alt="Burgersquad web site image"></img>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="title h4">
                                        Web Development
                                    </div>
                                    <div class="title h4">
                                        Responsive Design
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="js-bottom-logo snap">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="Layer_2_00000049932786728454095710000007139008918812545183_" x="0" y="0" style="enable-background:new 0 0 127.9 137.9" version="1.1" viewBox="0 0 127.9 137.9"><style>.st1{fill:#010101}</style><g id="Layer_1-2"><path d="M116.4 62.7c.3 7-.2 14-1.6 21.4-1.3 7.3-3.6 14-6.8 20.1-3.2 6.2-7.4 11.3-12.6 15.5-5.2 4.2-17.7 7.4-25.2 8.1-8.7.9-16.5 0-23.3-2.7-6.8-2.7-12.6-6.6-17.5-11.7s-8.8-11.2-11.6-18.1c-2.9-7-4.8-14.4-5.7-22.2-.8-5.9-.8-11.9-.2-17.9s2-11.8 4.1-17.4c3.4-8.8 7.2-11.9 13.4-16.9 6.3-5 13-8.2 20.3-9.5s20.8-1.5 28.4.8c7.5 2.4 14.2 3.5 20.3 9.4 5.3 5.2 10.6 10.6 13.3 17.7 2.8 7.1 4.4 14.9 4.7 23.4z" style="fill:#fff"/><path d="M86.5 50.5c.9 2.2 1.4 4.4 1.6 6.6s0 4.4-.4 6.7c-.4 2.2-1 4.2-1.8 6.3-.8 2-1.9 3.9-3.3 5.7-1 1.2-2 2.2-3 3.2-1.1 1-2.2 1.9-3.4 2.6-1.2.7-2.5 1.3-3.8 1.7-1.3.4-2.7.6-4.2.5-2.1-.1-4.2-.5-6.1-1-2-.5-3.9-1.4-5.7-2.5-1.9-1.1-3.2-2.7-3.9-4.6-.2-.5-.2-1.1-.1-1.6.1-.6.4-1.2.7-1.9.3-.7.7-1.3 1.2-2s.9-1.4 1.4-2c1.4-2 2.5-3.8 3.4-5.5.8-1.7 1.4-3.4 1.8-5.2.4-1.7.6-3.5.6-5.2 0-1.8-.1-3.7-.2-5.9 0-.5 0-1.1-.1-1.6s0-1 .1-1.5c.1-.8.4-1.6.9-2.2.4-.6 1-1.1 1.6-1.5.6-.3 1.4-.5 2.2-.6s1.7 0 2.6.3c1.8.5 3.6 1.1 5.4 1.6 1.8.6 3.6 1.3 5.2 2.1s3.1 1.9 4.5 3.1c1 1.1 2 2.6 2.8 4.4zM77 69.6c.6-.9 1.1-1.9 1.5-3s.6-2.2.8-3.3c.1-1.1.2-2.2.1-3.4-.1-1.1-.3-2.2-.5-3.2-.6-2-1.6-3.6-3-4.9-.6-.5-1.2-.9-1.7-.9-.5-.1-1 0-1.4.3s-.7.7-1 1.2c-.2.5-.3 1.1-.3 1.8-.1 1.3-.2 2.4-.5 3.5-.2 1.1-.5 2.2-.8 3.2s-.7 2-1.1 3.1c-.4 1-.8 2.1-1.3 3.2-.6 1.4-.8 2.5-.7 3.4.1.9.4 1.5.9 2s1.2.7 2 .8c.8.1 1.7 0 2.5-.3.9-.3 1.7-.7 2.5-1.3.8-.8 1.4-1.5 2-2.2z" class="st1"/><path d="M122.4 33.8c-3.2-8.1-8.1-12.7-14.4-18.6-7.1-6.8-15.9-10.3-24.7-13S59.7-.4 51.2 1 34.8 6.1 27.4 11.9c-7.3 5.7-13 13.6-17 23.6-2.5 6.4-3 9.3-3.7 16.1-.8 6.9-.7 13.6.2 20.4 1.1 9 3.3 17.5 6.7 25.4s7.9 14.8 13.6 20.6c5.7 5.8 12.5 10.3 20.5 13.3 7.9 3 17 4.1 27.2 3.1 8.8-.8 22.4-4.3 28.4-9.1 6.1-4.8 11-10.7 14.7-17.6 3.7-7 6.3-14.6 7.9-22.9s2.2-16.5 1.8-24.4c-.3-9.6-2.1-18.5-5.3-26.6zm-2.9 27.4c.3 6.8-.2 13.7-1.6 20.9-1.3 7.1-3.6 13.7-6.8 19.6-3.2 6-7.4 11-12.6 15.1s-17.7 7.2-25.2 7.9c-8.7.9-16.5 0-23.3-2.6s-12.6-6.4-17.5-11.4S23.7 99.8 20.9 93c-2.9-6.8-4.8-14-5.7-21.7-.8-5.8-.8-11.6-.2-17.5s2-11.5 4.1-17c3.4-8.6 7.2-11.6 13.4-16.5 6.3-4.9 13-8 20.3-9.3s20.8-1.5 28.4.8c7.5 2.3 14.2 3.4 20.3 9.2 5.3 5.1 10.6 10.3 13.3 17.3 2.9 6.9 4.4 14.5 4.7 22.9z" style="fill:#f15822"/><path d="M116.2 37c-3.2-8.1-8.1-12.7-14.4-18.6-7.1-6.8-15.9-10.3-24.7-13S53.5 2.8 45 4.3 28.6 9.4 21.2 15.1c-7.3 5.7-13 13.6-17 23.6-2.5 6.4-3 9.3-3.7 16.1-.8 6.9-.7 13.7.2 20.4 1.1 9 3.3 17.5 6.7 25.4s7.9 14.8 13.6 20.6c5.7 5.8 12.5 10.3 20.5 13.3 7.9 3 17 4.1 27.2 3.1 8.8-.8 22.4-4.3 28.4-9.1 6.1-4.8 11-10.7 14.7-17.6 3.7-7 6.3-14.6 7.9-22.9s2.2-16.5 1.8-24.4c-.4-9.7-2.1-18.6-5.3-26.6zm-2.9 27.3c.3 6.8-.2 13.7-1.6 20.9-1.3 7.1-3.6 13.7-6.8 19.6-3.2 6-7.4 11-12.6 15.1s-17.7 7.2-25.2 7.9c-8.7.9-16.5 0-23.3-2.6s-12.6-6.4-17.5-11.4-8.8-10.9-11.6-17.7c-2.9-6.8-4.8-14-5.7-21.7-.8-5.8-.8-11.6-.2-17.5s2-11.5 4.1-17c3.4-8.6 7.2-11.6 13.4-16.5 6.3-4.9 13-8 20.3-9.3s20.8-1.5 28.4.8c7.5 2.3 14.2 3.4 20.3 9.2 5.3 5.1 10.6 10.3 13.3 17.3 2.8 7 4.4 14.6 4.7 22.9z" class="st1"/><path d="M112.1 71.9c1 1.3 1.4 2.8 1.2 4.4-.2 1.6-1 3-2.3 4-.9.7-1.9 1-3.1 1.1-1.5 1.3-19.7 19.3-21.2 20.5-1.5 1.3.4-.2-1.9 1.3s-4.6 2.8-6.7 3.9c-2.2 1.1-4.5 1.9-7 2.4-2.5.6-4.8.7-6.9.3-3.5-.6-6.4-2.4-8.6-5.3-.7-.9-1.3-1.9-1.9-3.1-.7-1.5-.8-3-.2-4.6.6-1.5 1.6-2.7 3.1-3.4 1.5-.7 3-.8 4.6-.2 1.5.6 2.7 1.6 3.4 3.1.5 1 1.1 1.6 1.8 1.7 1.9.3 4.7-.5 8.4-2.6S94.9 77 98.5 73.9L97.1 72c-1-1.3-1.4-2.8-1.2-4.4.2-1.6 1-3 2.3-4 .6-.5 1.4-.8 2.1-1 .8-.2 1.5-.3 2.3-.2.7.1 1.5.3 2.2.7s1.3.9 1.8 1.6c0 0 5.5 7.3 5.5 7.2zM21.9 75.2c-.5 1.2-1 2.3-1.6 3.5-.8 1.7-1.8 2.7-3 3.3-1.2.5-2.4.7-3.5.4-1.1-.3-2.1-.8-3-1.7-.8-.9-1.3-2-1.4-3.2-.1-.6 0-1.1.1-1.7.2-.6.4-1.1.6-1.6l.9-1.5c.3-.5.7-.9 1-1.3 1.3-1.9 2.6-3.5 3.9-5.5" class="st1"/><path d="M49.2 45c.9 2.2 1.4 4.4 1.6 6.6s0 4.4-.4 6.7c-.4 2.2-1 4.2-1.8 6.3-.8 2-1.9 3.9-3.3 5.7-1 1.2-2 2.2-3 3.2-1.1 1-2.2 1.9-3.4 2.6s-2.5 1.3-3.8 1.7c-1.3.4-2.7.6-4.2.5-2.1-.1-4.2-.5-6.1-1-2-.5-3.9-1.4-5.7-2.5-1.9-1.1-3.2-2.7-3.9-4.6-.2-.5-.2-1.1-.1-1.6.1-.6.4-1.2.7-1.9.3-.7.7-1.3 1.2-2s.9-1.4 1.4-2c1.4-2 2.5-3.8 3.4-5.5.8-1.7 1.4-3.4 1.8-5.2.4-1.7.6-3.5.6-5.2 0-1.8-.1-3.7-.2-5.9 0-.5 0-1.1-.1-1.6s0-1 .1-1.5c.1-.8.4-1.6.9-2.2.4-.6 1-1.1 1.6-1.5.6-.3 1.4-.5 2.2-.6.8-.1 1.7 0 2.6.3 1.8.5 3.6 1.1 5.4 1.6 1.8.6 3.6 1.3 5.2 2.1s3.1 1.9 4.5 3.1c1 1.1 2 2.6 2.8 4.4zm-9.5 18.9c.6-.9 1.1-1.9 1.5-3s.6-2.2.8-3.3c.1-1.1.2-2.2.1-3.4-.1-1.1-.3-2.2-.5-3.2-.6-2-1.6-3.6-3-4.9-.6-.5-1.2-.9-1.7-.9-.5-.1-1 0-1.4.3s-.7.7-1 1.2c-.2.5-.3 1.1-.3 1.8-.1 1.3-.2 2.4-.5 3.5-.2 1.1-.5 2.2-.8 3.2s-.7 2-1.1 3.1c-.4 1-.8 2.1-1.3 3.2-.6 1.4-.8 2.5-.7 3.4.1.9.4 1.5.9 2s1.2.7 2 .8c.8.1 1.7 0 2.5-.3.9-.3 1.7-.7 2.5-1.3.8-.6 1.5-1.3 2-2.2z" class="st1"/></g></svg>
            </div>
        </section>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"));?>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({paused: false});
        let titles = gsap.utils.toArray(".work-card__title");

        titles.forEach((title, i) => {
                tl.to(title, {
                    x: -(title.offsetWidth*2.1),
                    duration: 20,
                    scrollTrigger: {
                        trigger: "body",
                        toggleActions: "play pause reverse none",
                        start: "top 20%",
                        scrub: 1,
                        // markers: true,
                    },
            })

            
        })
        
        
        const logotl = tl.to('.js-bottom-logo', {
            scrollTrigger: {
                trigger: ".work__burgersquad",
                        toggleActions: "play pause reverse none",
                        start:"top top",
                        end: "100% bottom",
                        scrub: 4,
                      
            },
            x: "50vw",
            rotation: 720, 
            duration: 1000,
        })

    </script>
</body>
</html>