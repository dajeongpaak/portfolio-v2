<?php 
    require("init.php")
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("partials/global/head.php")?>

<body>
    <?php require_once("partials/global/header.php")?>
    <main>
        <section class="home__main">
            <div class="container">
                <div class="grid">
                    <div class="home__elem-1">
                        <img src="images/ball.png" alt="a ball shpaped element in homepage">
                    </div>
                    <div class="home__elem-2">
                        <img src="images/main-logo.svg" alt="logo element">
                    </div>
                    <div class="home__content  col-12 flex">

                        <div class="home__title">
                            <h1>Front-end Developer</h1>
                        </div>
                        <div class="home__desc">
                            <h2 class="p">I strive to make<br>The web a place of<br>
                                <span class="drop-shadow">wonder and
                                    excitement!
                                </span>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__projects">
            <div class="container">
                <div class="grid">
                    <div class="col-12 button title">
                        <h2>Featured Projects</h2>
                    </div>
                    <div class="projects__cards col-12">
                        <ul>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="note-taking-application.html">
                                            <h3>Note-taking Web Application</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="note-taking-application.html" class="button-sm">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="symmetry.html">
                                            <h3>‘SYMMETRY’ Photo Gallery</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="symmetry.html" class="button-sm">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="esnes.html">
                                            <h3>‘esnes’ Perfume
                                                Launching site</h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="esnes.html" class="button-sm">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card__content flex">
                                    <div class="card__title">
                                        <a href="burgersquad.html">
                                            <h3>‘Burger Squad’ Responsive Web design </h3>
                                        </a>
                                    </div>
                                    <div class="card__btn">
                                        <a href="burgersquad.html" class="button-sm">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once("partials/global/footer.php")?>
    <script src="scripts/main.js"></script>
</body>

</html>