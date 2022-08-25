<?php

use App\Model\User;

if (!empty($_POST)) {


    if (
        isset($_POST["pass"],  $_POST["matricule"])
        && !empty($_POST["pass"]) && !empty($_POST["matricule"])
    ) {
        // $pass = strip_tags($_POST["nom"]);
        // $matricule = strip_tags($_POST["matricule"]);
        require_once 'config/database.php';

        // controles souhaités sur l'unicité des matricules

        // connection db
        $sql = "SELECT * FROM enseignant WHERE matricule= :matricule";
        $query = $db->prepare($sql);

        // $query->bindValue(":pass", $nom, PDO::PARAM_STR);
        $query->bindValue(":matricule", $_POST["matricule"], PDO::PARAM_STR);

        $query->execute();

        $user = $query->fetch();
        if (!$user) {
            die("Matricule  ou mot de pass incorrecte ");
        }
        if (!password_verify($_POST["pass"], $user["mot_de_pass"])) {

            die("Matricule  ou jehjhrejmot de pass incorrecte ");
        }
        // ouverture de la sesson php
    session_start();

    } else {
        die('formulaire incomplet');
    }
}
?>
<?php
$title = 'Enseignant';
include 'partials/_header.php';
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>

<div>

    <form class="row g-3 needs-validation" method="post">

        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Matricule</label>
            <input type="text" name="matricule" class="form-control" id="validationCustom01" required="required" placeholder=" Entrer votre mancule ici">

        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Mot de pass</label>
            <input type="password" name="pass" class="form-control" id="validationCustom01" required="required" placeholder="Password">
        </div>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">se connecter</button>
</div>
</form>
</div>
<?php
include 'partials/_footer.php';
?>