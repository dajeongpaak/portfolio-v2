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
                                <h1 class="about__intro flex h2">
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
                                    I'm on a mission to make the web a more fun and immersive place, one website at a time. With the true passion for crafting user journeys that feel like exciting adventures, 
                                    I'm always looking for ways to make web browsing a more engaging experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skills" class="col-12 skills__title z-index"></div>
                </div>
            </div>
            <!-- background-color change trigger -->
            
        </section>
       
        <div id="matter-container" class="matter-container">
        </div>
    </main>
    <?php require_once(get_path("/partials/global/footer.php"))?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <?php require_once(get_path("/partials/global/js-global.php"))?>
    <script>

        const tl = gsap.timeline({paused: false});

        tl.from(".about__intro span", 1.8, {
                y: 120,
                ease: "power4.out",
                delay: .3,
                skewY: 7,
                stagger: {
                    amount: 0.5
                }
            })
        
        <?php require_once(get_path("/partials/about/js-about-matter.php"))?>
        <?php require_once(get_path("/partials/global/js-mouse-control.php"))?>


        var body = document.querySelector('body');
        var imgContainer = document.querySelector(".img-container");
        var aboutContent = document.querySelector(".about__content");
        var insideGap = false;
        

        window.addEventListener('scroll', function() {
        var body = document.querySelector('body');
        var skills = document.querySelector('#skills');
        var dropShadows = document.querySelectorAll('.drop-shadow');
        var menus = document.querySelectorAll('.hamburger');
        var logoChange = document.querySelector('#logoOrange');
        var logoBlack = document.querySelectorAll('.st2');
        var logoWhite = document.querySelector('#logoWhite');
        var navColor = document.querySelector(".main-nav--mobile");
        var skillsRect = skills.getBoundingClientRect();

        if (skillsRect.top <= window.innerHeight && skillsRect.bottom >= 0) {
            body.classList.add('--bg-change');
            imgContainer.classList.add('--bg-change');
            aboutContent.classList.add('--bg-change');
            dropShadows.forEach( item =>
              item.classList.add('--bg-change'));
            menus.forEach( item =>
            item.classList.add('--bg-change'));
            logoChange.style.fill = "#e4ff5e";
            logoBlack.forEach( item =>
            item.style.fill = "#fff");
            navColor.style.backgroundColor = "#000";
            navColor.style.border = "1px solid #fff";
            logoWhite.style.fill = "#000";
        } else if (skillsRect.bottom > 0) {
            body.classList.remove('--bg-change');
            imgContainer.classList.remove('--bg-change');
            aboutContent.classList.remove('--bg-change');
            dropShadows.forEach( item =>
              item.classList.remove('--bg-change'));
            menus.forEach( item =>
            item.classList.remove('--bg-change'));
            logoChange.style.fill = "#f15822";
            logoBlack.forEach( item =>
            item.style.fill = "#010101");
            navColor.style.backgroundColor = "#fff";
            navColor.style.border = "1px solid #000";
            logoWhite.style.fill = "#fff";
        }
        });
    </script>
   
</body>

</html>