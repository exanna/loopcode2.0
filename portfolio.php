<?php
$title = "Strony i sklepy internetowe";
$description = "strony internetowe Zawiercie";
include "include/header.php";
?>
<?php include "include/nav.php"; ?>

<div class="welcome-area" id="welcome">
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h2>Portfolio</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae harum id assumenda exercitationem voluptatum. Esse deleniti delectus nemo quis repellat.</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section blog-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img portfolio-image">
                        <img src="assets/images/portfolio-images/LumiPoni/site-screenshot.jpg" alt="Lumiponi - screenshot strony internetowej">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="lumiponi.php">Lumiponi.pl</a>
                        </h3>
                        <div class="text">
                            <p>Gabinet kosmetologiczny</p>
                        </div>
                        <a href="lumiponi.php" class="main-button">Zobacz</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img portfolio-image">
                        <img src="assets/images/portfolio-images/Loopcode/site-screenshot.jpeg" alt="Loopcode - screenshot strony internetowej">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="loopcode.php">Loopcode.pl</a>
                        </h3>
                        <div class="text">
                            <p>To właśnie ta strona na której jesteś :)</p>
                        </div>
                        <a href="loopcode.php" class="main-button">Zobacz</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img portfolio-image">
                        <img src="assets/images/portfolio-images/Olvou/site-screenshot.jpeg" alt="Olvou - screenshot storny internetowej">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="olvou.php">Olvou.pl</a>
                        </h3>
                        <div class="text">
                            <p>Sklep internetowy dla mody slow fashion</p>
                        </div>
                        <a href="olvou.php" class="main-button">Zobacz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "include/form.php"; ?>
<?php include "include/footer.php"; ?>