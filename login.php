<?php
$title = "Logowanie";
include "include/header.php";
?>

<section class="section login-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4"> 
                <div class="center-heading">
                    <h2 class="section-title mb-5">Logowanie</h2>
                </div>  
                <form action="admin/index.php">
                    <div class="form-group">
                        <label for="name">Login</label>
                        <input required type="password" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="main-button">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "include/footer.php"; ?>