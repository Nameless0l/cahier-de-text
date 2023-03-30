<?php
$title = "formulaire de modification";
include 'config/database.php';
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";


//this page contain a modification formula of course's teacher 
?>

<div>
    <?php
        $pdoStat=$db->prepare('SELECT * FROM lecon WHERE id=:id');
        $pdoStat->bindValue(':id',$_GET['id'],PDO::PARAM_STR_CHAR);
        $executeIsok=$pdoStat->execute();  
        
        $teacherlecon=$pdoStat->fetch();
        $enseignant=$teacherlecon;
        

    ?>

<form method="POST" action="treatment_form_update_lecon.php">

<div class="card-body">
    <div class="form-group">
        <label for="exampleInputEmail1">id</label>
        <input type="number" class="form-control" id="id" name="id" placeholder="nouveau" value="<?=$enseignant['id']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">date et heure</label>
        <input type="text" class="form-control" name="datee" id="datee" placeholder="date et heure" value="<?=$enseignant['journee_du']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">titre de la lecon</label>
        <input type="text" class="form-control" name="titre" id="titre" placeholder="titre de la lecon" value="<?=$enseignant['titre_leçon']?>">
    </div>
    <div class="form-outline w-75 mb-4">
        <label class="form-label" for="textAreaExample6">objectif de la lecon</label>
        <textarea class="form-control" id="textAreaExample6" rows="3" name="objectif" value="<?=$enseignant['opjectif_leçon']?>"> <?=$enseignant['opjectif_leçon']?> </textarea>
    </div>
    <div class="form-outline w-75 mb-4">
        <label class="form-label" for="textAreaExample6">corpus</label>
        <textarea class="form-control" id="textAreaExample6" rows="3" name="objet" value="<?=$enseignant['corpus']?>"> <?=$enseignant['corpus']?> </textarea>
    </div>

    <div class="form-outline w-75 mb-4">
        <label class="form-label" for="textAreaExample6">activite d'apprentissage</label>
        <textarea class="form-control" id="textAreaExample6" rows="3" name="activite" value="<?=$enseignant['activite_apprentissage']?>"> <?=$enseignant['activite_apprentissage']?> </textarea>
    </div>
    <div class="form-outline w-75 mb-4">
        <label class="form-label" for="textAreaExample6">exercice d'application</label>
        <textarea class="form-control" id="textAreaExample6" rows="3" name="aplication" value="<?=$enseignant['exo_application']?>"> <?=$enseignant['exo_application']?> </textarea>
    </div>
    <div class="form-outline w-75 mb-4">
        <label class="form-label" for="textAreaExample6">devoir</label>
        <textarea class="form-control" id="textAreaExample6" rows="3" name="devoir" value="<?=$enseignant['homework']?>"> <?=$enseignant['homework']?> </textarea>
    </div>
    
  
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div>
<?php include "partials/_footer.php" ?>