<?php

if (!empty($_POST)) {


    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["matricule"])
        && !empty($_POST["nom"]) && !empty($_POST["matricule"]) && !empty($_POST["prenom"])
    ) {
        $nom = strip_tags($_POST["nom"]);
        $prenom = strip_tags($_POST["prenom"]);
        $matricule = strip_tags($_POST["matricule"]);
        $ville = strip_tags($_POST["ville"]);
        $quartier = strip_tags($_POST["quartier"]);
        $matieres = strip_tags($_POST["matieres"]);
        //hashons le mot de prenom
        require_once '../config/database.php';

        // controles souhaités sur l'unicité des matricules


        $sql = "INSERT INTO enseignant (Nom,Prenom,matieres,matricule,ville,quartier) VALUES(
      :nom, :prenom,:matieres,:matricule,:ville,:quartier)";
        $query = $db->prepare($sql);

        $query->bindValue(":nom", $nom, PDO::PARAM_STR);
        $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $query->bindValue(":matieres", $matieres, PDO::PARAM_STR);
        $query->bindValue(":matricule", $matricule, PDO::PARAM_STR);
        $query->bindValue(":ville", $ville, PDO::PARAM_STR);
        $query->bindValue("quartier", $quartier, PDO::PARAM_STR);

        $query->execute();
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
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Mot de pass</label>
            <input type="password" name="nom" class="form-control" id="validationCustom01" required="required" placeholder="Password">
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