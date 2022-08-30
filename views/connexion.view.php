<?php

use App\Model\User;

if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
$error = null;
if (!empty($_POST)) {
    if (
        isset($_POST["pass"],  $_POST["email"])
        && !empty($_POST["pass"]) && !empty($_POST["email"])
    ) {
        require_once 'functions/selection_table.php';
        require_once 'config/database.php';

        if (Select_table($_POST["email"], $_POST["pass"]) != 'isEmpty') {

            header("Location: index.php");
        } else {
            $error = "Email ou Mot de Passe incorrect ";
        }
    } else {
        $error = 'Veillez remplir tout les champs';
    }
}
?>
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
                        <a href="#" class="">
                            <h3 class="text-primary">CONNEXION</h3>
                        </a>
                    </div>
                    <?php if ($error != null) :  ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif ?>
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Adresse Mail</label>
                        </div>
                        <div class="input-group form-floating mb-4">
                            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password"><span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="fa fa-eye-slash" id="togglePassword"></i></span>
                            <label for="floatingPassword">Mot de Passe</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#floatingPassword");

    togglePassword.addEventListener("click", function () {
  // toggle the type attribute
    const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("fa-eye");
});
</script>