<?php 

    require("init.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $partial_css = 'about';
    $title_tag = 'ABOUT | Dajeong Park';
?>
<?php require_once(get_path("partials/global/head.php"));?>
<body>
    <?php require_once(get_path("partials/global/header.php"));?>
    
    <main id="matter-main">
        <section>
            <div class="container">
                <div class="grid h-100">
                    <div class="col-12 col-7-sm col-5-lg img-container z-index">
                        <img src="images/DJ.jpg" alt="photograph of dajeong park">
                    </div>
                    <div class="col-12 col-5-8-lg">
                        <div class="grid">
                            <div class="about__content col-12 z-index">
                                <h1 class="about__intro flex h4">
                                    <div class="text-reveal">
                                        <span>Hey there! I’m</span>
                                    </div>
                                    <div class="text-reveal">
                                        <span class="drop-shadow">Dajeong</span>
                                    </div>
                                    <div class="text-reveal">
                                        <span>but you can call me</span>
                                    </div>
                                    <div class="text-reveal">
                                        <span class="drop-shadow">DJ</span>
                                    </div>
                                </h1>
                                <div class="about__desc">
                                    <p>
                                    I'm a  front-end developer from Korea, currently based in Vancouver, and in training to become a professional in the field.
                                    </p>
                                    <br>
                                    <p>
                                    What I really pursue is to make the web a more fun and immersive place, one website at a time. With the true passion for crafting user journeys that feel like exciting adventures, 
                                    I'm always looking for ways to make web browsing a more engaging experience.
                                    </p><br>
                                    <p class="h5">
                                    So What do I do for my goal!?
                                    </p><br>
                                    <p>
                                    I spend so much time browsing cool and interesting web designs while commuting, killing some time. It all started as a way to find inspiration for my potential future projects in the beginning, but now It’s turned into a joy and a full-blown obsession! 
                                    </p><br>
                                    <p>
                                    (Sometimes, I end up with zero remaining data while browsing cool stuff on the internet on my way to school. <span class="font-bold">Zero data, infinite passion</span>)
                                    </p><br>
                                    <p>
                                    Also, I can say with confidence I work hard and give my best in my position. Without further ado, you will find me staying at BCIT Downtown Campus from 8:00 to 21:00.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skills" class="col-12 skills__title z-index"></div>
                </div>
            </div>
        </section>
       
        <div id="matter-container" class="matter-container">
        </div>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"))?>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>
        <?php require_once(get_path("/partials/about/js-about.php"))?>
        <?php require_once(get_path("/partials/about/js-about-matter.php"))?>
        <?php require_once(get_path("/partials/global/js-mouse-control.php"))?>
    </script>
   
</body>

</html>