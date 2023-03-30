<?php
$title = "formulaire de modification";
include 'config/database.php';
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
// include "views/teacher.views.php";

//this page contain a modification formula of teacher 
?>

<div>
    <?php
        $pdoStat=$db->prepare('SELECT * FROM enseignant WHERE matricule=:matricule');
        $pdoStat->bindValue(':matricule',$_GET['matricule'],PDO::PARAM_STR_CHAR);
        $executeIsok=$pdoStat->execute();  
        
        $teacher=$pdoStat->fetch();
        $enseignant=$teacher;


    ?>

<form method="POST" action="treatement_form.php">

                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">matricule</label>
                    <input type="hidden" class="form-control" id="matricule" name="matricule" placeholder="nouveau matricule" value="<?=$enseignant['matricule']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="nouveau nom" value="<?=$enseignant['Nom']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">prenom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="nouveau prenom" value="<?=$enseignant['Prenom']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" value="<?=$enseignant['email']?>">
                  </div>
                  
                  <legend>nouvelles Matieres</legend>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="matiere1" id="exampleCheck1" value="<?=$enseignant['matieres']?>"
                
                      <?php
                        if(($enseignant['matieres']==="mathematiques") || ($enseignant['matieres']==="Mathematques")){
                            echo 'checked';
                        }
                      ?>
                    >
                    <label class="form-check-label" for="exampleCheck1">mathematiques</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="<?=$enseignant['matieres']?>"
                    <?php
                        if($enseignant['matieres']==="Physiques"){
                            echo 'checked';
                        }
                      ?>
                    >
                    <label class="form-check-label" for="exampleCheck1">Physiques</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="matiere2" id="exampleCheck1" value="<?=$enseignant['matieres']?>"
                    <?php
                        if($enseignant['matieres']==="Chimie"){
                            echo 'checked';
                        }
                      ?>
                    
                    >
                    <label class="form-check-label" for="exampleCheck1">chimie</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="matiere3" id="exampleCheck1" value="<?=$enseignant['matieres']?>"
                    <?php
                        if($enseignant['matieres']==="informatiques"){
                            echo 'checked';
                        }
                      ?>
                    
                    >
                    <label class="form-check-label" for="exampleCheck1">informatique</label>
                  </div>
                  <fieldset class="col-md-3 pl-20">
                    <legend>nouvelles classes</legend>
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
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
              
</div>

<script>
  function myfuntion(){
    document.getElementById("nom").diseabled;
  }
</script>


<?php include "partials/_footer.php" ?>