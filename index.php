<?php 

    require("init.php")
   
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $title_tag = 'Dajeong Park | Front-end developer, designer' ;
    $partial_css = 'home';
?>
<?php require_once(get_path("partials/global/head.php"));?>

<body>
    <?php require_once(get_path("partials/global/header.php"));?>
    <main id="main">
        <section id="matter-canvas" class="home__main">
            <div class="container">
                <h1 class="home__title flex flex-column justify-center h-100 w-100">
                    <div class="text-reveal">
                        <span class="z-index">
                        Front-end
                        </span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">end
                        </span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">Developer</span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">
                        &</span><br>
                    </div>
                    <div class="text-reveal">
                        <span class="z-index">Designer</span><br>
                    </div>
                </h1>
                <div class="home__desc flex flex-column justify-center h-100">
                    <p class="h5">
                        to design and develop<br>
                        immersive<br>
                        web experience<br>
                        that fully engage users,<br>
                        creating 
                        an emotional connection<br>
                        with the digital environment<br><br>
                    </p>   
                    <h2 class="mission__h2">
                        <div class="text-reveal">
                            <span>
                            I strive to make
                            </span>
                        </div>
                        <div class="text-reveal">
                            <span>
                            the web a place of
                            </span>
                        </div>
                        
                    </h2>
                </div>
                <div class="home__wonder flex flex-column justify-between">
                    <div class="flex h-100 justify-center align-center">
                        <div id="js-circle-animation" class="wonder__circle z-index"></div>     
                        <div id="js-text-animation" class="wonder__circle-text z-index h2">
                                <span>W</span><span>o</span><span>n</span><span>d</span><span>e</span><span>r</span><br> 
                                <span>a</span><span>n</span><span>d</span><br> 
                                <span>E</span><span>x</span><span>c</span><span>i</span><span>t</span><span>e</span><span>m</span><span>e</span><span>n</span><span>t</span><span>!</span>
                        </div>            
                    </div>
                    <div class="wonder__content mt-6 justify-between align-end">
                        <h3 class="mission__h2 flex-grow">
                                through<br>
                                <div class="text-reveal">
                                    <span >Creativity,</span><br>
                                </div>
                                <div class="text-reveal">
                                    <span>Technology, and </span><br>
                                </div>
                                <div class="text-reveal">
                                    <span>Lifelong learning.</span>
                                </div>
                        </h3>
                        <div id="js-color-change" class="home__color text-center mt-3 z-index ">
                            <p id="js-text-change">(don't like the color?)</p>
                            <img src="<?php echo get_url("images/sad-logo.svg")?>" alt="pdj sad face logo">
                            <p class="h6">Click me!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__projects--mobile border-radius">
            <div class="container">
                <div class="grid">
                    <div class="col-12 title">
                        <h2 class="h4">Featured Projects</h2>
                    </div>
                    <div class="projects__cards col-12 z-index">
                        <ul class="grid cards">
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="<?php echo get_url("/projects/note-taking-application-web-development-project.php"); ?>">
                                            <h3 class="h5">Note-taking Web Application</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="<?php echo get_url("/projects/note-taking-application-web-development-project.php"); ?>" class="button-sm">
                                        <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="symmetry.html">
                                            <h3 class="h5">‘SYMMETRY’ Photo Gallery</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="symmetry.html" class="button-sm">
                                            <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="esnes.html">
                                            <h3 class="h5">‘esnes’ Perfume
                                                Launching site</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="esnes.html" class="button-sm">
                                            <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="burgersquad.html">
                                            <h3 class="h5">‘Burger Squad’ Responsive Web design </h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="burgersquad.html" class="button-sm">
                                            <img src="<?php echo get_url("images/right-arrow.svg")?>" alt="call to action button for project">
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__projects--desktop border-radius snap">
            <div class="container">
            <div class="projects__drag flex justify-between align-center">
                <div class="flex w-100 justify-between">
                    <div id="dragNote" class="drag__note drag__item" draggable="true">
                    </div>
                    <div id="dragGallery" class="drag__gallery drag__item" draggable="true">
                    </div>
                </div>
                <div class="drag__drop-spot">
                    Drag<br> &<br> Drop Here!
                </div>
                <div class="drag__title-top">
                <?xml version="1.0" encoding="utf-8"?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 544 86.5" style="enable-background:new 0 0 544 86.5;" xml:space="preserve">
                    <path class="st0" d="M13.6,72.5v-66h63.2v6.9h-55v22H74v6.9H21.8v30.2H13.6z M114,73.4c-5.5,0-10.2-0.4-14-1.1
                        c-3.8-0.8-7-2.1-9.4-3.9c-2.4-1.9-4.2-4.4-5.2-7.5c-1.1-3.1-1.6-7-1.6-11.8c0-5.4,0.5-9.9,1.6-13.4s2.8-6.4,5.2-8.4
                        c2.4-2.1,5.5-3.6,9.4-4.4c3.8-0.8,8.5-1.2,14-1.2c3.9,0,7.3,0.3,10.2,0.9s5.3,1.4,7.4,2.5c2,1.1,3.7,2.4,5,4c1.3,1.5,2.3,3.2,3,4.9
                        c0.7,1.7,1.2,3.7,1.5,6s0.4,4.7,0.4,7.3l-0.7,2.8H92c0,3.7,0.4,6.7,1.1,9.1s2,4.1,3.7,5.2c1.7,1.1,4,1.8,6.8,2.1
                        c2.8,0.3,6.3,0.4,10.4,0.4c3.8,0,6.9-0.1,9.4-0.3c2.5-0.2,4.4-0.6,5.9-1.2s2.5-1.4,3.1-2.4c0.6-1,0.9-2.3,0.9-4h8.2
                        c0,2.7-0.5,4.9-1.4,6.8c-0.9,1.9-2.5,3.4-4.6,4.6s-5,2-8.5,2.5C123.4,73.1,119.1,73.4,114,73.4z M114,28.5c-2.8,0-5.2,0.1-7.4,0.2
                        s-4.1,0.4-5.7,0.8c-1.6,0.4-3,0.9-4.1,1.7c-1.1,0.7-2.1,1.6-2.8,2.6s-1.2,2.4-1.5,4.2c-0.3,1.8-0.5,3.9-0.5,6.5h41.2
                        c0-3.4-0.4-6-1.1-7.9c-0.7-1.9-1.8-3.5-3.4-4.7c-1.5-1.2-3.5-2.1-6-2.5C120.3,28.7,117.4,28.5,114,28.5z M201.7,65.7
                        c-0.1,0.3-0.7,1.2-1.9,2.6c-0.9,1-2,1.9-3.4,2.7c-1.4,0.8-3.3,1.4-5.7,1.8s-5.5,0.7-9.4,0.7c-5.2,0-9.6-0.3-13.3-0.8s-6.7-1.3-9-2.4
                        s-4-2.5-5.1-4.2s-1.6-3.8-1.6-6.1c0-2.5,0.3-4.6,0.9-6.3c0.6-1.7,1.4-3.2,2.6-4.4c1.1-1.2,2.5-2.1,4.1-2.8c1.6-0.7,3.4-1.2,5.5-1.5
                        c2-0.3,4.3-0.6,6.7-0.6s5-0.1,7.8-0.1c3.9,0,7.2,0.2,9.8,0.5s4.8,0.7,6.5,1.2s2.9,1,3.8,1.6c0.9,0.6,1.5,1.1,1.8,1.6
                        c0-3.2-0.1-5.9-0.4-8.2c-0.3-2.3-0.7-4.2-1.3-5.7s-1.4-2.7-2.4-3.6c-1-0.9-2.2-1.6-3.6-2c-1.4-0.5-3.1-0.8-5-0.9s-4.1-0.2-6.5-0.2
                        c-3.8,0-6.9,0.1-9.4,0.3c-2.5,0.2-4.5,0.6-5.9,1.1c-1.5,0.5-2.5,1.3-3.1,2.3c-0.6,1-0.9,2.2-0.9,3.8H155c0-2.6,0.5-4.8,1.4-6.6
                        c0.9-1.8,2.5-3.3,4.6-4.4c2.2-1.1,5-2,8.5-2.5s7.9-0.8,13-0.8c5,0,9.3,0.4,12.8,1.2c3.5,0.8,6.3,2.3,8.5,4.4s3.7,4.9,4.7,8.4
                        s1.4,8,1.4,13.4v23.4h-8.2V65.7z M182.6,66.6c3.6,0,6.7-0.2,9.1-0.5c2.4-0.3,4.4-0.8,5.9-1.5c1.5-0.7,2.5-1.5,3.2-2.5
                        c0.6-1,0.9-2.2,0.9-3.6s-0.4-2.5-1.1-3.5s-1.9-1.7-3.7-2.3c-1.7-0.6-4-1-6.8-1.3s-6.3-0.4-10.4-0.4s-7.5,0.1-10,0.2s-4.5,0.5-5.9,1
                        s-2.3,1.3-2.8,2.2c-0.5,1-0.7,2.3-0.7,4s0.3,3.1,0.8,4.1c0.5,1.1,1.5,1.9,3.1,2.5s3.8,1,6.7,1.2C173.9,66.5,177.8,66.6,182.6,66.6z
                        M269.1,50.5c0,4.2-0.3,7.7-1,10.5s-1.8,5.1-3.5,6.8c-1.6,1.7-3.7,2.9-6.4,3.6c-2.6,0.7-5.9,1.1-9.8,1.1c-3.8,0-6.9-0.3-9.5-0.9
                        c-2.5-0.6-4.6-1.5-6.2-2.9s-2.7-3.2-3.4-5.5c-0.7-2.3-1-5.1-1-8.6V29.8h-10.2v-6.9h10.2V9.5h8.2v13.4h31.1v6.9h-31.1v24.8
                        c0,2.7,0.2,4.9,0.6,6.3c0.4,1.5,1.1,2.6,2,3.3c0.9,0.7,2.1,1.1,3.6,1.2s3.3,0.2,5.5,0.2c1.7,0,3.3,0,4.6-0.1
                        c1.4-0.1,2.5-0.2,3.6-0.5c1-0.3,1.9-0.8,2.6-1.4c0.7-0.6,1.3-1.5,1.7-2.6c0.4-1.1,0.8-2.5,1-4.2s0.3-3.8,0.3-6.3H269.1z M288.4,23
                        v27.2c0,3,0.2,5.6,0.7,7.7s1.4,3.8,2.8,5c1.4,1.3,3.3,2.2,5.9,2.8c2.5,0.6,5.8,0.9,10,0.9c4.5,0,8.1-0.3,11-1s5.1-1.6,6.7-2.8
                        c1.6-1.2,2.8-2.6,3.4-4.3c0.6-1.7,0.9-3.5,0.9-5.6v-30h8.2v49.5h-8.2v-8.7c-0.4,0.9-1.1,2-2,3.1s-2.4,2.2-4.3,3.1
                        c-1.9,1-4.3,1.8-7.3,2.4c-3,0.7-6.7,1-11.2,1c-3.7,0-6.9-0.2-9.5-0.7c-2.6-0.4-4.9-1.1-6.7-2c-1.8-0.9-3.3-2-4.4-3.2
                        c-1.1-1.3-2-2.8-2.6-4.5c-0.6-1.7-1-3.6-1.2-5.7s-0.3-4.4-0.3-6.9V22.8h8.1V23z M391.5,39.1c0-2.1-0.2-3.8-0.5-5.1
                        c-0.3-1.4-1-2.4-2.1-3.3s-2.8-1.4-5-1.7c-2.2-0.3-5.2-0.5-9-0.5c-3.7,0-6.7,0.3-9,1s-4.1,1.6-5.5,2.7c-1.3,1.2-2.2,2.6-2.7,4.2
                        s-0.7,3.5-0.7,5.5v30.6h-8.2V23h8.2v7.9c0.3-0.9,0.8-1.9,1.6-2.9s1.9-2.1,3.5-3s3.6-1.7,6.1-2.3c2.5-0.6,5.6-0.9,9.4-0.9
                        c4.3,0,7.8,0.4,10.5,1.1c2.7,0.8,4.8,1.9,6.3,3.4s2.5,3.3,3.1,5.5c0.5,2.2,0.8,4.7,0.8,7.5h-6.8V39.1z M432.8,73.4
                        c-5.5,0-10.2-0.4-14-1.1c-3.8-0.8-7-2.1-9.4-3.9c-2.4-1.9-4.2-4.4-5.2-7.5c-1.1-3.1-1.6-7-1.6-11.8c0-5.4,0.5-9.9,1.6-13.4
                        s2.8-6.4,5.2-8.4c2.4-2.1,5.5-3.6,9.4-4.4c3.8-0.8,8.5-1.2,14-1.2c3.9,0,7.3,0.3,10.2,0.9c2.9,0.6,5.3,1.4,7.4,2.5
                        c2,1.1,3.7,2.4,5,4c1.3,1.5,2.3,3.2,3,4.9c0.7,1.7,1.2,3.7,1.5,6s0.4,4.7,0.4,7.3l-0.7,2.8h-48.8c0,3.7,0.4,6.7,1.1,9.1
                        s2,4.1,3.7,5.2c1.7,1.1,4,1.8,6.8,2.1c2.8,0.3,6.3,0.4,10.4,0.4c3.8,0,6.9-0.1,9.4-0.3c2.5-0.2,4.4-0.6,5.9-1.2s2.5-1.4,3.1-2.4
                        c0.6-1,0.9-2.3,0.9-4h8.2c0,2.7-0.5,4.9-1.4,6.8c-0.9,1.9-2.5,3.4-4.6,4.6s-5,2-8.5,2.5C442.3,73.1,437.9,73.4,432.8,73.4z
                        M432.8,28.5c-2.8,0-5.2,0.1-7.4,0.2c-2.2,0.1-4.1,0.4-5.7,0.8s-3,0.9-4.1,1.7c-1.1,0.7-2.1,1.6-2.8,2.6c-0.7,1-1.2,2.4-1.5,4.2
                        c-0.3,1.8-0.5,3.9-0.5,6.5H452c0-3.4-0.4-6-1.1-7.9s-1.8-3.5-3.4-4.7c-1.5-1.2-3.5-2.1-6-2.5C439.2,28.7,436.2,28.5,432.8,28.5z
                        M500.2,73.4c-5.5,0-10.2-0.4-14-1.2c-3.8-0.8-7-2.2-9.4-4.2s-4.2-4.6-5.2-7.9c-1.1-3.3-1.6-7.5-1.6-12.5c0-5.1,0.5-9.3,1.6-12.7
                        c1.1-3.4,2.8-6,5.2-8c2.4-2,5.5-3.3,9.4-4.1c3.8-0.8,8.5-1.2,14-1.2c3.9,0,7.2,0.2,9.8,0.6c2.6,0.4,4.8,0.9,6.5,1.5s3,1.3,3.8,2
                        c0.9,0.7,1.5,1.4,1.9,2V6.6h8.2v66h-8.2v-7.8l-2.1,2.6c-1.2,1.2-2.5,2.2-4,3s-3.5,1.5-6.1,2.1C507.3,73.1,504.1,73.4,500.2,73.4z
                        M500.2,66.5c2.8,0,5.2-0.1,7.3-0.2s4-0.4,5.7-0.8c1.6-0.4,3-1.1,4.1-1.9c1.1-0.8,2.1-1.9,2.8-3.3s1.2-3.1,1.6-5.2
                        c0.3-2.1,0.5-4.5,0.5-7.4c0-3-0.2-5.6-0.5-7.7s-0.9-3.9-1.6-5.3c-0.7-1.4-1.6-2.6-2.8-3.4c-1.1-0.8-2.5-1.5-4.1-1.9
                        c-1.6-0.4-3.5-0.7-5.7-0.8c-2.1-0.1-4.6-0.2-7.3-0.2c-3.2,0-6,0.1-8.3,0.3c-2.3,0.2-4.3,0.6-6,1.1c-1.6,0.5-3,1.2-4,2.1
                        c-1,0.9-1.8,2.1-2.4,3.5c-0.6,1.4-0.9,3.1-1.1,5.1c-0.2,2-0.3,4.3-0.3,7s0.1,5,0.3,6.9c0.2,2,0.6,3.7,1.1,5.1s1.3,2.6,2.4,3.5
                        c1,0.9,2.3,1.6,4,2.1c1.6,0.5,3.6,0.9,6,1.1C494.2,66.4,497,66.5,500.2,66.5z"/>
                    </svg>
                </div>
                <div class="drag__title-bottom">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 505.4 97.6" style="enable-background:new 0 0 505.4 97.6;" xml:space="preserve">
                    <path class="st0" d="M10.3,5.8h49.5c4.1,0,7.6,0.2,10.4,0.5c2.8,0.4,5.1,0.9,7,1.6c1.8,0.7,3.2,1.6,4.2,2.7c1,1.1,1.7,2.3,2.2,3.7
                        c0.5,1.4,0.7,3,0.8,4.8s0.1,3.7,0.1,5.9c0,2.2-0.1,4.3-0.2,6.2c-0.1,1.9-0.4,3.6-1,5.1s-1.4,2.9-2.7,4c-1.2,1.2-3,2.1-5.2,2.9
                        s-5.1,1.4-8.6,1.8c-3.5,0.4-7.7,0.6-12.7,0.6H18.5v26.1h-8.2C10.3,71.7,10.3,5.8,10.3,5.8z M18.5,38.8h35.7c3.7,0,6.8-0.1,9.3-0.2
                        c2.5-0.1,4.6-0.4,6.2-0.7s2.9-0.8,3.8-1.5c0.9-0.6,1.5-1.5,2-2.5c0.4-1,0.7-2.3,0.7-3.7c0.1-1.4,0.1-3.2,0.1-5.2
                        c0-1.9,0-3.5-0.1-4.8s-0.3-2.5-0.7-3.4c-0.4-0.9-1.1-1.6-2-2.2c-0.9-0.5-2.1-1-3.8-1.3s-3.7-0.5-6.2-0.6c-2.5-0.1-5.6-0.1-9.3-0.1
                        H18.5V38.8z M135.4,38.4c0-2.1-0.2-3.8-0.5-5.1c-0.3-1.3-1-2.4-2.1-3.3s-2.8-1.4-5-1.7s-5.2-0.5-9-0.5c-3.7,0-6.7,0.3-9,1
                        s-4.1,1.6-5.5,2.7c-1.3,1.2-2.2,2.6-2.7,4.2s-0.7,3.5-0.7,5.5v30.6h-8.1V22.3h8.2v7.9c0.3-0.9,0.8-1.9,1.6-2.9s1.9-2.1,3.5-3
                        s3.6-1.7,6.1-2.3c2.5-0.6,5.6-0.9,9.4-0.9c4.3,0,7.8,0.4,10.5,1.1c2.7,0.8,4.8,1.9,6.3,3.4s2.5,3.3,3.1,5.5c0.5,2.2,0.8,4.7,0.8,7.5
                        h-6.9V38.4z M146.4,46.5c0-5,0.5-9.2,1.6-12.5s2.8-5.9,5.2-7.8s5.5-3.3,9.4-4.1c3.8-0.8,8.5-1.2,14-1.2s10.2,0.4,14,1.2
                        s7,2.1,9.4,4.1c2.4,1.9,4.2,4.5,5.2,7.8s1.6,7.5,1.6,12.5c0,5.1-0.5,9.4-1.6,12.7c-1.1,3.4-2.8,6.1-5.2,8.1s-5.5,3.4-9.4,4.2
                        c-3.8,0.8-8.5,1.2-14,1.2s-10.2-0.4-14-1.2c-3.8-0.8-7-2.2-9.4-4.2s-4.2-4.7-5.2-8.1C146.9,55.9,146.4,51.6,146.4,46.5z M154.6,46.5
                        c0,2.7,0.1,5.1,0.3,7.1s0.6,3.7,1.1,5.2c0.6,1.4,1.3,2.6,2.3,3.5s2.3,1.6,4,2.2c1.6,0.5,3.6,0.9,6,1.1c2.3,0.2,5.1,0.3,8.3,0.3
                        c2.8,0,5.2-0.1,7.4-0.2s4.1-0.4,5.7-0.9s3-1.1,4.1-1.9s2.1-2,2.8-3.4s1.2-3.2,1.5-5.3s0.5-4.7,0.5-7.6s-0.2-5.4-0.5-7.5
                        s-0.8-3.8-1.5-5.2s-1.6-2.5-2.8-3.3c-1.1-0.8-2.5-1.4-4.1-1.8s-3.5-0.7-5.7-0.8s-4.6-0.2-7.4-0.2s-5.2,0.1-7.4,0.2s-4.1,0.4-5.7,0.8
                        s-3,1-4.1,1.8s-2.1,1.9-2.8,3.3s-1.2,3.1-1.5,5.2C154.8,41.1,154.6,43.6,154.6,46.5z M231.6,74.6c0,2.1-0.1,4-0.4,5.7
                        s-0.9,3.1-2,4.3c-1,1.2-2.5,2.1-4.6,2.8c-2,0.6-4.7,1-8.2,1v-6.9c1.4,0,2.5-0.1,3.4-0.3c0.9-0.2,1.6-0.6,2.1-1.1s0.9-1.2,1.1-2.1
                        s0.3-2,0.3-3.4V22.3h8.2v52.3H231.6z M231.6,14.1h-8.2V5.9h8.2V14.1z M274.3,72.8c-5.5,0-10.2-0.4-14-1.1c-3.8-0.8-7-2.1-9.4-3.9
                        s-4.2-4.4-5.2-7.5c-1.1-3.1-1.6-7-1.6-11.8c0-5.4,0.5-9.9,1.6-13.4s2.8-6.4,5.2-8.4s5.5-3.6,9.4-4.4c3.8-0.8,8.5-1.2,14-1.2
                        c3.9,0,7.3,0.3,10.2,0.9s5.3,1.4,7.4,2.5c2,1.1,3.7,2.4,5,4c1.3,1.5,2.3,3.2,3,4.9c0.7,1.7,1.2,3.7,1.5,6s0.4,4.7,0.4,7.3l-0.7,2.8
                        h-48.8c0,3.7,0.4,6.7,1.1,9.1s2,4.1,3.7,5.2s4,1.8,6.8,2.1c2.8,0.3,6.3,0.4,10.4,0.4c3.8,0,6.9-0.1,9.4-0.3c2.5-0.2,4.4-0.6,5.9-1.2
                        s2.5-1.4,3.1-2.4s0.9-2.3,0.9-4h8.2c0,2.7-0.5,4.9-1.4,6.8s-2.5,3.4-4.6,4.6s-5,2-8.5,2.5C283.7,72.5,279.4,72.8,274.3,72.8z
                        M274.3,27.8c-2.8,0-5.2,0.1-7.4,0.2c-2.2,0.1-4.1,0.4-5.7,0.8s-3,0.9-4.1,1.7c-1.1,0.7-2.1,1.6-2.8,2.6c-0.7,1-1.2,2.4-1.5,4.2
                        c-0.3,1.8-0.5,3.9-0.5,6.5h41.2c0-3.4-0.4-6-1.1-7.9s-1.8-3.5-3.4-4.7c-1.6-1.2-3.5-2.1-6-2.5C280.6,28.1,277.7,27.8,274.3,27.8z
                        M311.4,47c0-3.4,0.2-6.4,0.5-9s1-4.9,1.8-6.8c0.9-1.9,2-3.5,3.5-4.8s3.3-2.3,5.6-3.1c2.2-0.8,4.9-1.4,8-1.7
                        c3.1-0.3,6.7-0.5,10.8-0.5c5.5,0,10,0.3,13.6,1s6.4,1.7,8.4,3.1c2.1,1.4,3.5,3.2,4.3,5.3c0.8,2.1,1.2,4.7,1.2,7.6h-8.2
                        c0-1.1,0-2-0.1-3c-0.1-0.9-0.3-1.7-0.6-2.5c-0.3-0.8-0.9-1.4-1.7-2s-1.9-1.1-3.3-1.5s-3.2-0.7-5.4-0.9s-4.9-0.3-8.1-0.3
                        c-3.7,0-6.8,0.1-9.3,0.4s-4.6,0.7-6.2,1.3c-1.6,0.6-2.9,1.4-3.8,2.3c-0.9,1-1.5,2.2-1.9,3.6s-0.6,3.1-0.7,5s-0.1,4.1-0.1,6.6
                        c0,2.4,0,4.6,0.1,6.5s0.3,3.5,0.7,4.9c0.4,1.4,1,2.6,1.9,3.5c0.9,1,2.2,1.7,3.8,2.3c1.6,0.6,3.7,1,6.2,1.3s5.6,0.4,9.3,0.4
                        c3.2,0,5.9-0.1,8.1-0.3c2.2-0.2,4-0.5,5.4-1c1.4-0.4,2.5-0.9,3.3-1.5s1.3-1.3,1.7-2.1c0.4-0.8,0.6-1.7,0.6-2.6
                        c0.1-0.9,0.1-2,0.1-3.1h8.2c0,3-0.4,5.6-1.2,7.8c-0.8,2.2-2.2,4-4.3,5.4c-2.1,1.4-4.9,2.5-8.4,3.2c-3.6,0.7-8.1,1-13.6,1
                        c-4.1,0-7.7-0.2-10.8-0.5c-3.1-0.3-5.8-0.9-8-1.7s-4.1-1.8-5.6-3.1s-2.6-2.9-3.5-4.8s-1.5-4.2-1.8-6.7S311.4,50.3,311.4,47z
                        M428.3,49.8c0,4.2-0.3,7.7-1,10.5s-1.8,5.1-3.5,6.8c-1.6,1.7-3.7,2.9-6.4,3.6c-2.6,0.7-5.9,1.1-9.8,1.1c-3.8,0-6.9-0.3-9.5-0.9
                        c-2.5-0.6-4.6-1.5-6.2-2.9s-2.7-3.2-3.4-5.5s-1-5.1-1-8.6V29.1h-10.2v-6.8h10.2V8.9h8.2v13.4h31.1v6.9h-31.1V54
                        c0,2.7,0.2,4.9,0.6,6.3c0.4,1.5,1.1,2.6,2,3.3c0.9,0.7,2.1,1.1,3.6,1.2s3.3,0.2,5.5,0.2c1.7,0,3.3,0,4.6-0.1
                        c1.4-0.1,2.5-0.2,3.6-0.5c1-0.3,1.9-0.8,2.6-1.4s1.3-1.5,1.7-2.6c0.4-1.1,0.8-2.5,1-4.2s0.3-3.8,0.3-6.3L428.3,49.8L428.3,49.8z
                        M457.9,49.1c-3-0.1-5.5-0.4-7.6-0.7c-2.1-0.4-3.9-0.9-5.3-1.5s-2.5-1.5-3.4-2.6c-0.8-1.1-1.4-2.5-1.8-4.1s-0.5-3.4-0.5-5.3
                        c0-2.6,0.5-4.7,1.6-6.5s2.8-3.2,5.2-4.3s5.5-1.9,9.4-2.4c3.8-0.5,8.5-0.7,14-0.7c5.4,0,9.9,0.3,13.5,0.9c3.5,0.6,6.3,1.5,8.4,2.6
                        c2.1,1.2,3.5,2.7,4.4,4.5c0.8,1.8,1.2,4,1.2,6.4h-8.2c0-1.5-0.3-2.8-0.9-3.8c-0.6-1-1.6-1.7-3.1-2.3s-3.4-0.9-5.9-1.2
                        c-2.5-0.2-5.6-0.3-9.4-0.3c-4.1,0-7.6,0.1-10.4,0.2s-5.1,0.4-6.8,0.9s-3,1.2-3.7,2.1s-1.1,2.2-1.1,3.9c0,1,0.1,1.9,0.2,2.9
                        s0.4,1.7,0.9,2.3c0.5,0.6,1.1,1.1,2,1.4s2.1,0.6,3.6,0.7c1.5,0.2,3.4,0.2,5.7,0.3c2.3,0,5,0,8.2,0c3.9,0,7.3,0.1,10.2,0.3
                        c2.9,0.2,5.5,0.5,7.6,0.9s3.9,1.1,5.3,2c1.4,0.9,2.5,1.9,3.4,2.9c0.8,1,1.4,2.3,1.8,3.7s0.5,3.1,0.5,4.9s-0.2,3.5-0.5,5
                        s-0.9,2.8-1.8,3.9s-2,2.1-3.5,2.9s-3.3,1.5-5.6,2s-4.9,0.9-8,1.1s-6.7,0.4-10.8,0.4c-5.2,0-9.5-0.3-13-0.8s-6.3-1.3-8.5-2.5
                        s-3.7-2.6-4.6-4.4s-1.4-4-1.4-6.6h8.2c0,1.7,0.3,3.1,0.9,4.2s1.6,1.9,3.1,2.5s3.4,1,5.9,1.2s5.6,0.3,9.4,0.3c3.4,0,6.4-0.1,8.8-0.2
                        c2.4-0.2,4.4-0.4,6.1-0.8s2.9-0.8,3.9-1.2s1.7-1.1,2.1-1.8c0.5-0.7,0.8-1.5,0.9-2.3s0.2-1.8,0.2-2.8c0-0.9-0.1-1.8-0.2-2.5
                        s-0.4-1.5-0.9-2.2s-1.1-1.3-2-1.7c-0.9-0.4-2.1-0.7-3.6-0.9c-1.5-0.2-3.4-0.4-5.7-0.5s-5-0.2-8.2-0.2
                        C464.3,49.3,460.9,49.2,457.9,49.1z"/>
                    </svg>
                </div>
            </div>
            </div>
        </section>
        <div id="matter-container--home" class="matter-container--home"></div>
    </main>
    <footer class="footer border-radius snap">
        <div class="container h-100 flex flex-column justify-center">
            <div class="footer__cta flex flex-column justify-center align-center h2">
                <div id="js-footer-text" class="footer__cta--text text-center">
                    <span>G</span><span>e</span><span>t</span><br><span>I</span><span>n</span><br><span>T</span><span>o</span><span>u</span><span>c</span><span>h</span><span>!</span>
                </div>
                <div class="footer__cta--email text-center mt-3">
                    <a href="mailto:hello@dajeongpark.com" title="dajeong park email contact me!" class="button">hello@dajeongpark.com</a>
                </div> 
                <div id="js-color-change--footer" class="footer__color text-center z-index mt-3">
                <p id="js-text-change">(Yellow is ugly!)</p>
                <img src="<?php echo get_url("images/sad-logo.svg")?>" alt="pdj sad face logo">
                <p class="h6">Click me!</p>
            </div>
            </div>
             
            
        </div>
        <div class="footer__links flex justify-between align-center">
                <p class="home-footer__copy h6">© <?php echo date("Y")?> Dajeong Park</p>
                <ul class="footer__social flex text-center">
                    <li class="h6">
                        <span>
                            <a href="https://www.linkedin.com/in/dajeong-park-4956bb255/">Linkedin</a>
                        </span>
                    </li>
                    <li class="h6">
                        <span>
                            <a href="https://github.com/dajeongpaak" target="_blank" title="Dajeong Park GitHub">GitHub</a>
                        </span>
                    </li>
                    <li>
                        <a href="#" class="h6">
                           Back To Top
                        </a>
                    </li>
                </ul>
            </div>
    </footer>
   
   
    
  
    <?php require_once(get_path("/partials/home/js-home-drag-n-drop.php"))?>
    <!-- <script src="scripts/main.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        const circle = document.querySelector('#js-circle-animation');
        const sadLogo = document.querySelector('#js-color-change');
        const tl = gsap.timeline({paused: false});

        const selectors = [
        ".home__title",
        ".home__desc",
        ".wonder__content"
        ];

        selectors.forEach(selector => {
        gsap.from(`${selector} span`, 1.8, {
            scrollTrigger: {
            trigger: selector,
            toggleActions: "play complete restart reset",
            },
            y: 150,
            ease: "power4.out",
            delay: 1,
            skewY: 10,
            stagger: {
            amount: 0.7
            }
        });
        });

        sadLogo.addEventListener('click', () => {
           
            randomBGcolor()
            sadLogo.innerHTML = '';

            let p = document.createElement('p');
            p.innerText = '(There you go!)';
            sadLogo.appendChild(p);

            let logo = document.createElement('img');
            logo.src = "<?php echo get_url("images/happy-logo.svg")?>";
            logo.alt = "pdj happy face logo";
            sadLogo.appendChild(logo);

            let clickMe = document.createElement('p');
            clickMe.innerText = 'Click me!';
            clickMe.className = 'h6';
            sadLogo.appendChild(clickMe);
        });


        function randomBGcolor() {
            let x = Math.floor(Math.random() * 256);
            let y = Math.floor(Math.random() * 256);
            let z = Math.floor(Math.random() * 256);
            let bgColor = "rgb(" + x  + ", " + y + ", " + z + ")";

            circle.style.background = bgColor;
        } 
        
      
        let pieceContainer = document.querySelector("#js-text-animation");
        let xPos = window.innerWidth / 2;
        let yPos = window.innerHeight / 2;
        let pieces = gsap.utils.toArray("#js-text-animation span");
        let getintough = gsap.utils.toArray("#js-footer-text span")
      
        pieces.forEach( item => {
            let xRandomPos = gsap.utils.random(-xPos, xPos);
            let yRandomPos = gsap.utils.random(-yPos, yPos);
            let rRandom = gsap.utils.random(-30 , 30);

            tl.to(item, {
                scrollTrigger: {
                    trigger: ".home__wonder",
                    toggleActions: "restart pause reverse none",
                    start: "top top",
                    end: "center bottom",
                    scrub: 1,
                },
                x: xRandomPos,
                y: yRandomPos,
                rotate: rRandom,
                duration: 0.5,
                stagger: 1,
                ease: "power2"
            })
        })

        tl.to( circle, {
            scrollTrigger: {
                trigger: ".home__wonder",
                toggleActions: "restart pause reverse none",
                start: 'top top',
                end: 'center bottom',
                scrub: 1,
            },
            ease: "expo",
            scale: 1,
            duration: 0.3,
        })

        getintough.forEach( item => {
            let xRandomPos = gsap.utils.random(-xPos, xPos);
            let yRandomPos = gsap.utils.random(-yPos, yPos);
            let rRandom = gsap.utils.random(-30 , 30);

            tl.from(item, {
                scrollTrigger: {
                    trigger: ".footer",
                    toggleActions: "restart pause reverse none",
                    start: "top 40%",
                    end: "bottom bottom",
                    scrub: 1,
                },
                x: xRandomPos,
                y: yRandomPos,
                rotate: rRandom,
                duration: .5,
                stagger: 1,
                ease: "power2"
            })
        })


        let snaps = gsap.utils.toArray(".snap");

        gsap.to(snaps, {
            ease: "expo",
            scrollTrigger: {
                trigger: snaps,
                pin: true,
                pinSpacing: false,
                scrub: 1,
                duration: 1
            },
        })


        const matterContainer = document.querySelector("#matter-container--home");
        const mainHeight = document.querySelector("#matter-canvas");
        const SVG_WIDTH_IN_PX = 100;
        const SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH = 0.20;
        var Engine = Matter.Engine,
            Render = Matter.Render,
            Runner = Matter.Runner,
            Bodies = Matter.Bodies,
            Composite = Matter.Composite,
            Body = Matter.Body,
            World = Matter.World;

        var engine = Engine.create(),
            world = engine.world;

        world.gravity.x = 0;
        world.gravity.y = - 0.09;

        let width = matterContainer.clientWidth;
        let height = matterContainer.clientHeight;

        let scaleFactor;
            if (window.innerWidth >= window.innerHeight*0.6) {
                scaleFactor = (window.innerHeight * (SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH - 0.08)) / SVG_WIDTH_IN_PX;
            } else {
                scaleFactor = (width * SVG_WIDTH_AS_PERCENT_OF_CONTAINER_WIDTH) / SVG_WIDTH_IN_PX;
            }


        var render = Render.create({
            element: matterContainer,
            engine: engine,
            options: {
                width: width,
                height: mainHeight.clientHeight,
                pixelRatio: 2,  
                wireframes: false,
                background: "transparent"
            }
        });

        var ball = Bodies.circle(width*(1/4), mainHeight.clientHeight*(1/7), scaleFactor*50, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/ball.png",
                    xScale: scaleFactor*0.6,
                    yScale: scaleFactor*0.6
                }
            }
        });

        var logo = Bodies.circle(width*(3/4), mainHeight.clientHeight*(2/5), scaleFactor*50, {
            density: 0.04,
            friction: 0.01,
            frictionAir: 0.000001,
            restitution: 0.8,
            render: {
                sprite: {
                    texture: "images/logosm.png",
                    xScale: scaleFactor*0.6,
                    yScale: scaleFactor*0.6
                }
            }
        });
        var ground = Bodies.rectangle(width / 2, matterContainer.clientHeight, 32848, 1, { isStatic: true,
            render: {
                fillStyle:'rgba(255,255,255,1)'
            }});

        var roof = Bodies.rectangle( 0, 0, 34234, 1, {   isStatic: true,
            render: {
                fillStyle: 'rgba(0,0,0,0)'}});

        var leftwall = Bodies.rectangle( 0, 0 , 1 , 11254, {
            isStatic: true,
            render: {
                fillStyle:'rgba(0,0,0,0)'
            }
        });

        var rightwall = Bodies.rectangle( width , height , 1 , 11254, {
            isStatic: true,
            render: {
                fillStyle:'rgba(0,0,0,0)'
            }
        });

        Composite.add(world, [ball, logo, ground, roof, leftwall, rightwall]);

        let mouse = Matter.Mouse.create(render.canvas);
        let mouseConstraint = Matter.MouseConstraint.create(engine, {
            mouse: mouse,
            constraint: {
                stiffness: 0.2,
                render: {
                    visible: false
                }
            }
        });

        Composite.add(world, mouseConstraint);

        mouseConstraint.mouse.element.removeEventListener(
            'mousewheel',
            mouseConstraint.mouse.mousewheel
        );

        mouseConstraint.mouse.element.removeEventListener(
            'DOMMouseScroll',
            mouseConstraint.mouse.mousewheel
        );

        mouseConstraint.mouse.element.removeEventListener(
            'touchstart', 
            mouseConstraint.mouse.mousedown
        );

        mouseConstraint.mouse.element.removeEventListener(
            'touchmove',
            mouseConstraint.mouse.mousemove
        );

        mouseConstraint.mouse.element.removeEventListener(
            'touchend', 
            mouseConstraint.mouse.mouseup
        );

        mouseConstraint.mouse.element.addEventListener(
            'touchstart', 
            mouseConstraint.mouse.mousedown, { passive: true });

        mouseConstraint.mouse.element.addEventListener('touchmove', (e) => {
        if (mouseConstraint.body) {
        mouseConstraint.mouse.mousemove(e);
        }
        }); 

        mouseConstraint.mouse.element.addEventListener('touchend', (e) => {
        if (mouseConstraint.body) {
        mouseConstraint.mouse.mouseup(e);
        }
        });

        Render.run(render);

        var runner = Runner.create();

        Runner.run(runner, engine);
    </script>
</body>

</html>