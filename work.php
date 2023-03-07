<?php 
    require("init.php")
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("partials/global/head.php")?>
<body>
    <?php require_once("partials/global/header.php")?>  
</body>
    <section class="work__main">
        <div class="container">
            <div class="grid">
                <div class="col-12 button title">
                    <h2>Web Development</h2>
                </div>
                <div class="col-12" style="position:relative">
                    <div class="work__card work__note-taking">
                        <a class="work-card__content" href="note-taking-application-web-development-project.php">
                            <div class="work-card__title">
                                Note-taking Web Application
                            </div>
                            <video autoplay loop muted>
                                <source src="images/note-taking-app-preview.mp4" type="video/mp4">
                            </video>
                            <div class="flex wrap">
                                <div class="button h5">
                                    Web Development
                                </div>
                                <div class="button h5">
                                    Web Design
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="work__card work__symmetry">
                        <a class="work-card__content" href="symmetry-photo-gallery-web-development-project.php" >
                            <div class="work-card__title">
                            ‘SYMMETRY’ Photo Gallery
                            </div>
                            <video autoplay loop muted>
                                <source src="images/symmetry-photo-gallery-preview.mp4" type="video/mp4">
                            </video>
                            <div class="flex wrap">
                                <div class="button h5">
                                    Web Development
                                </div>
                                <div class="button h5">
                                    Web Design
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="work__card work__esnes">
                        <a class="work-card__content" href="esnes-launching-site-web-development-project.php">
                            <div class="work-card__title">
                            ‘esnes’ Perfume
                            Launching site
                            </div>
                            <video autoplay loop muted>
                                <source src="images/esnes-launching-project-preview.mp4" type="video/mp4">
                            </video>
                            <div class="flex wrap">
                                <div class="button h5">
                                Web Development
                                </div>
                                <div class="button h5">
                                Web Design
                                </div>
                                <div class="button h5">Branding</div>
                            </div>
                        </a>
                    </div>
                    <div class="work__card work__burgersquad">
                        <a class="work-card__content" href="note-taking-application.php">
                            <div class="work-card__title">
                            ‘Burgersquad’ Responsive Design 
                            </div>
                            <img src="images/burger-squad-web-development-project.jpg" alt="Burgersquad web site image"></img>
                            <div class="flex wrap">
                                <div class="button h5">
                                    Web Development
                                </div>
                                <div class="button h5">
                                    Responsive  Design
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once("partials/global/footer.php")?>
    <script src="scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        let cards = gsap.utils.toArray(".work__card");

        cards.forEach((card, i) => {
        const titles = gsap.utils.toArray(card.querySelectorAll(".work-card__title"));
        
        const timeline = gsap.timeline({
            scrollTrigger: {
            trigger: card,
            start: "top",
            end: "bottom",
            scrub: 1, 
            pin: i === cards.length - 1,
            },
            
        });
        titles.forEach((title) => {
            timeline.fromTo(title, { x: 0 }, { x: -(title.offsetWidth*2.2) });
        });
        });
    </script>

</html>