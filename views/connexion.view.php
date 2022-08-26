<?php
$title = 'Connexion';
include 'partials/_header.php';
include 'config/constants.php';
?>



<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i></h3>
                        </a>
                        <h3>Connexion</h3>
                    </div>
                    <div style="color:red ; margin:1.2rem">
                        <?php
                        if (isset($errors))
                            foreach ($errors as $key => $value)
                                echo "<div class='alert alert-danger'> $value </div>";
                        ?>
                    </div>
                    <form method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Adresse Mail</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mot de Passe</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Se Souvenir de Moi la prochaine fois</label>
                            </div>
                            <!-- <a href="">Forgot Password</a> -->
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Se Connecter</button>
                    </form>
                    <!-- <p class="text-center mb-0">Don't have an Account? <a href="#">Sign Up</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>