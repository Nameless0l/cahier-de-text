<?php

if (!empty($_POST)) {
  $error='Veillez remplir tout les champs';
  if (
    isset($_POST["nom"], $_POST["prenom"], $_POST["matricule"])
    && !empty($_POST["nom"]) && !empty($_POST["matricule"]) && !empty($_POST["prenom"])
  ) {
    $nom = strip_tags($_POST["nom"]);
    $prenom = strip_tags($_POST["prenom"]);
    $matricule = strip_tags($_POST["matricule"]);
    $email = strip_tags($_POST["email"]);
    $ville = strip_tags($_POST["ville"]);
    $quartier = strip_tags($_POST["quartier"]);
    $matieres = strip_tags($_POST["matieres"]);
    // $classes=strip_tags($_POST["classes"]);
    $pass = password_hash("Nameless", PASSWORD_ARGON2ID);
    //hashons le mot de prenom
    require_once 'config/database.php';
    require_once 'functions/Update.user.php';

    //  $ab = new UpdateProfile();
    // $mm = $ab->ajout_enseignant($_SESSION["user"]["id"], $nom ,$prenom, $matricule, $email, $ville, $quartier, $matieres);

    global $db;

      $sql1 = "INSERT INTO enseignant (Nom,Prenom,matieres,matricule,ville,quartier,mot_de_pass,email) VALUES(
         :nom, :prenom,:matieres,:matricule,:ville,:quartier,'$pass',:email)";

      $query = $db->prepare($sql1);

      $query->bindValue(":nom", $nom, PDO::PARAM_STR);
      $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
      $query->bindValue(":matieres", $matieres, PDO::PARAM_STR);
      $query->bindValue(":matricule", $matricule, PDO::PARAM_STR);
      $query->bindValue(":email", $email, PDO::PARAM_STR);
      $query->bindValue(":ville", $ville, PDO::PARAM_STR);
      $query->bindValue(":quartier", $quartier, PDO::PARAM_STR);

      $query->execute();

  } else {
    die('formulaire incomplet');
  }
}
?>

<?php
$title = 'Ajout d\'un Enseignant';
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
?>

<div class="container">

  <form class="row g-3 needs-validation" method="POST">
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Matricule</label>
      <input type="text" name="matricule" class="form-control" id="validationCustom01" required="required" placeholder=" Matricule ici">
    </div>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nom de l'enseignant</label>
      <input type="text" name="nom" class="form-control" id="validationCustom01" required="required" placeholder="Nom ici">
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Prenom de l'enseignant</label>
      <input type="text" name="prenom" class="form-control" id="validationCustom02" required="requilled" placeholder="son prenom ici">
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Ville</label>
      <input type="text" name="ville" class="form-control" id="validationCustom03" required="">
    </div>
    <div class="col-md-6">
      <label for="quartier" class="form-label">Quartier</label>
      <input type="text" name="quartier" class="form-control" id="quartier" name="quartier" required="">
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="validationCustom03" required="required">
      <div class="row">
      <fieldset class="col-md-3">
        <legend>Matieres</legend>

        <div>
          <input type="checkbox" id="scales" name="matieres" value="Mathematques">
          <label for="scales">mathematiques</label>
        </div>
        <div>
          <input type="checkbox" id="horns" name="matieres" value="Physiques">
          <label for="horns">Physiques</label>
        </div>
        <div>
          <input type="checkbox" id="horns" name="matieres" value="Chimie">
          <label for="horns">chimie</label>
        </div>
        <div>
          <input type="checkbox" id="horns" name="matieres" value="Chimie">
          <label for="horns">informatique</label>
        </div>
      </fieldset >
      <fieldset class="col-md-3 pl-20">
        <legend>classes</legend>
        <div>
          <input type="checkbox" name="classes" value="5eme" id="scales">
          <label for="scales">5eme</label>
        </div>

        <div>
          <input type="checkbox" name="classes" value="6eme" id="horns">
          <label for="horns">6eme</label>
        </div>
        <div>
          <input type="checkbox" name="classes" value="seconde" id="horns">
          <label for="horns">seconde</label>
        </div>
        <div>
          <input type="checkbox" name="classes" value="premiere" id="horns">
          <label for="horns">premiere</label>
        </div>
        <div>
          <input type="checkbox" name="classes" value="Terminal" id="horns">
          <label for="horns">Terminale</label>
        </div>
      </fieldset>
      </div>
      <div class="col-12 pt-4">
        <button class="btn btn-primary" type="submit">Valider</button>
      </div>
  </form>
</div>
<?php
include 'partials/_footer.php';
?>