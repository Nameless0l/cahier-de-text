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
$title = 'Ajout d\'un Enseignant';
include '../partials/_header.php';
include "../partials/_sidebar_censeur.php";
include "../partials/_nav_censeur.php";
?>

<div >

  <form class="row g-3 needs-validation" method="post">
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Matricule</label>
      <input type="text" name="matricule" class="form-control" id="validationCustom01" required="required" placeholder=" Matricule ici">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nom de l'enseignant</label>
      <input type="text" name="nom" class="form-control" id="validationCustom01" required="required" placeholder="Nom ici">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Prenom de l'enseignant</label>
      <input type="text" name="prenom" class="form-control" id="validationCustom02" required="requilled" placeholder="son prenom ici">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Ville</label>
      <input type="text" name="ville" class="form-control" id="validationCustom03" required="">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6">
      <label for="quartier" class="form-label">Quartier</label>
      <input type="text" name="quartier" class="form-control" id="quartier" name="quartier" required="">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <fieldset class="col-md-3">
      <legend>classes</legend>

      <div>
        <input type="checkbox" id="scales" name="matieres" value="Mathematques">
        <label for="scales">Mathatiques</label>
      </div>
      <div>
        <input type="checkbox" id="horns">
        <label for="horns">Physiques</label>
      </div>
      <div>
        <input type="checkbox" id="horns">
        <label for="horns">Chimie</label>
      </div>
    </fieldset>
    <fieldset class="col-md-3">
      <legend>classes</legend>

      <div>
        <input type="checkbox" id="scales">
        <label for="scales">5eme</label>
      </div>

      <div>
        <input type="checkbox" id="horns">
        <label for="horns">6eme</label>
      </div>
      <div>
        <input type="checkbox" id="horns">
        <label for="horns">seconde</label>
      </div>
    </fieldset>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Valider</button>
    </div>
  </form>
</div>
<?php
include '../partials/_footer.php';
?>