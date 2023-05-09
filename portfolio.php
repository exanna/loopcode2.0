<?php
$title = "Portfolio";
$page_class = 'portfolio-page';
$description = "strony internetowe Zawiercie";
include "include/header.php";
?>
<?php include "include/nav.php"; ?>

<div class="welcome-area" id="welcome">
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h1>Portfolio</h1>
                    <p>Zapoznaj się z naszymi projektami</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <article class="portfolio-item ">
                    <!-- <h2 class="center-heading mb-5"><a href="https://lumiponi.pl" class="link">Lumiponi.pl</a></h2> -->
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-6 col-7 d-flex flex-column">
                            <h2 class="center-heading portfolio-heading flex-grow-1 d-flex justify-content-center align-items-center img-shadow mb-4">
                                <a href="https://lumiponi.pl" class="link">Lumiponi.pl</a>
                            </h2>
                            <img class="img-shadow js-image-to-show" src="assets/images/portfolio-images/LumiPoni/site-screenshot.jpg" alt="Lumi Poni strona internetowa - screenshot">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-5 instagram-wall">
                            <img class="img-shadow js-image-to-show" src="assets/images/portfolio-images/LumiPoni/instagram-wall-lp.jpg" alt="Lumi Poni Instagram - screenshot">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <img src="assets/images/portfolio-images/LumiPoni/instagram-post-1.jpg" class="img-shadow js-image-to-show" alt="Lumi Poni - Post instagramowy | Pielęgnacja skóry podczas podróży">
                        </div> 
                        <div class="col-md-4 mt-4">
                            <img src="assets/images/portfolio-images/LumiPoni/instagram-post-2.jpg" class="img-shadow js-image-to-show" alt="Lumi Poni - Post instagramowy | Mezoterapia mikroigłowa - dla kogo jest przeznaczona, jakie daje efekty?">                            
                        </div>
                        <div class="col-md-4 mt-4">
                            <img src="assets/images/portfolio-images/LumiPoni/instagram-post-3.jpg" class="img-shadow js-image-to-show" alt="Lumi Poni - Post instagramowy | Konkurs - do wygrania darmowe modelowanie ust">                            
                        </div>                                           
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <img src="assets/images/portfolio-images/LumiPoni/img-1.jpg" class="img-shadow js-image-to-show" alt="Lumi Poni - karta lojalnościowa">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="assets/images/portfolio-images/LumiPoni/img-2.jpg"  class="img-shadow js-image-to-show" alt="Lumi Poni - bon podarunkowy">

                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</section>

<?php include "include/form.php"; ?>
<?php include "include/footer.php"; ?>