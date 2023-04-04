<?php
$title = "Panel admina";
include "include/header.php";
?>

<section class="admin-page">
    <div class="container-fluid">
        <div class="row">
            <aside class="admin-menu col-2 h-100">
                <p class="mb-3">
                    <a href="../index.php">
                        <img src="../assets/images/logo.png">
                    </a>
                </p>
                <ul class="admin-menu-list">
                    <li><a href="#" class="admin-menu-link admin-menu-link-active">Start</a></li>
                    <li><a href="article-list.php" class="admin-menu-link">Lista artykułów</a></li>
                    <li><a href="add-post.php" class="admin-menu-link">Dodaj artykuł</a></li>
                </ul>
            </aside>                
            <div class="col-10">
                <h1 class="my-4">Witaj w panelu admina</h1>                
            </div>
        </div>
    </div>
</section> 


<?php include "include/footer.php"; ?>