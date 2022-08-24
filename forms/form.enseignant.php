<?php
include '../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body style="padding: 10 rem">

  <form  method="POST" class="row g-3 needs-validation" action="form.enseignant.php">
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nom de l'enseignant</label>
      <input type="text" class="form-control" name="Nom" id="nom" placeholder=" le nom de l'enseignant" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Prenom</label>
      <input type="text" class="form-control" name="Prenom" id="prenom" placeholder=" le prenom de l'enseignant" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Matricule</label>
      <input type="text" class="form-control" name="matricule" id="validationCustom02" value="ex:21pjf656fhdf" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03"  class="form-label">Ville et quartier</label>
      <input type="text" class="form-control" name="ville" id="validationCustom03" required>
      <input type="text" class="form-control" name="quartier" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
      <div class="col-md-6">
        <h3> class enseignée</h3>
        <div class="form-check">
          <input type="radio" name="matiere" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
          <label class="form-check-label" for="validationFormCheck2">Mathematiques</label>
        </div>
        <div class="form-check mb-3">
          <input type="radio" class="form-check-input"  name="matiere" id="validationFormCheck3" name="radio-stacked" required>
          <label class="form-check-label" for="validationFormCheck3">Physique</label>
          <div class="valid-feedback">More example invalid feedback text</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Statut</label>
      <select class="form-select" name="Statut" id="validationCustom04" required>
        <option selected  value="Choose...">Choose...</option>
        <option selected value="Surveillant general">Surveillant general</option>
        <option selected  value="titulaire">titulaire</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-3 dropdown">
      <div class="form-label"> maitères</div>
      <div class="list-group">
        <label class="list-group-item">
          <input class="form-check-input me-1" name="matiere" type="checkbox" value=" mathematiques">
          Mathematiques
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" name="matiere" type="checkbox" value="Physiques">
          Physiques
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" name="matiere" type="checkbox" value="informaiques">
          Informaiques
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" name="matiere" type="checkbox" value="hisoire">
          Hisoire
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" name="matiere" type="checkbox" value="geographie">
          Geographie
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1"name="matiere" type="checkbox" value="ecm">
          Ecm
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" name="matiere" type="checkbox" value="SVTEEHP">
          SVTEEHP
        </label>
        <label class="list-group-item">
          <input class="form-check-input me-1" key="matiere" name="matiere" type="checkbox" value="anglais">
          Anglais
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>

  </form>
  </div>
  
  <?php
  var_dump($_POST);
    $sql="INSERT INTO enseignant(matricule,Nom,Prenom,ville,quartier,Statut,matieres)
    VALUES ('".$_POST["matricule"]."','".$_POST["Nom"]."','".$_POST["Prenom"]."','".$_POST["ville"]."','".$_POST["quartier"]."','".$_POST["Statut"]."','".$_POST["matiere"]."')";  
    // $db->exec($sql);  

  ?>
</body>

</html>