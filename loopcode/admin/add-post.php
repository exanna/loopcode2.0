<?php
$title = "Panel admina - dodaj artykuł";
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
                    <li><a href="index.php" class="admin-menu-link admin-menu-link">Start</a></li>
                    <li><a href="article-list.php" class="admin-menu-link">Lista artykułów</a></li>
                    <li><a href="#" class="admin-menu-link admin-menu-link-active">Dodaj artykuł</a></li>
                </ul>
            </aside>                
            <div class="col-10">
                <h1 class="my-4">Dodaj artykuł</h1>
                <form action="#">
                    <div class="my-2">
                        <fieldset>
                            <label for="title">Tytuł artykułu:</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </fieldset>
                    </div>
                    <div class="my-2">
                        <fieldset>
                            <label for="title">Treść skrócona (widoczna na liście artykułów):</label>
                            <textarea name="" id="" cols="20" rows="10" class="form-control"></textarea>
                        </fieldset>
                    </div>
                    <div class="my-2">
                        <fieldset>
                            <label for="main-image">Dodaj zdjęcie główne:</label>
                            <input type="file" name="main-image" id="main-image" class="form-control-upload">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 
<?php include "include/footer.php"; ?>