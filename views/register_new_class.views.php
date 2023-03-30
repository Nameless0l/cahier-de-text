<?php
$title = "classes";
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
include "functions/affichage_enseignant.php";
//this page contain the form that permit to register a new class
?>


<form id="formstrap">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">nom de la classe</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="classe">
    </div>
    <div class="input-group mb-3">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">cycle</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="1">niveau1</option>
            <option value="2">niveau2</option>
            <option value="3">niveau3</option>
        </select>
      
    </div>
  <div class="form-group">
    <label for="inputAddress">professeur titulaire</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="professeur">
  </div>
  <div class="form-group">
    <label for="inputAddress2">chef de classe</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="chef">
  </div>
  <div class="form-group">
    <label for="inputAddress2">effectifs</label>
    <input type="number" class="form-control" id="inputAddress2" min=1 max=1000 placeholder="chef">
  </div>
  <div class="form-group col-md-2">
      <label for="file">emploi de temps</label>
      <input type="file" class="form-control" id="inputZip">
    </div>

  <button type="submit" class="btn btn-primary">enregistrer</button>
</form>

<?php include "partials/_footer.php" ?>