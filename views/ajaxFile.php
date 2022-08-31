<?php

	$bdd = new PDO("mysql:host=127.0.0.1;dbname=cahier_de_texte;charset=utf8", "root", "");
?>

<?php

if(isset($_POST["id"])){
    $classroom_id = $_POST['id'];
    $query = $bdd ->query("SELECT * FROM eleve WHERE id_classe_charge = '$classroom_id'");
    $count =  $query->rowCount();
	 

    if($count > 0){?>

     <option value=""><?= "Select state"; ?></option>
     <?php
        while($resultat = $query->fetch()){
            $name = $resultat['Nom'];
            $surname = $resultat['Prenom'];?>

        <option value='<?= $resultat['id_eleve']; ?>'><?= "$name  $surname"; ?></option>
        <?php
        }
    }else{?>
       <option value=""><?php echo "State not available"; ?></option>
       <?php
    }
   
}


if(isset($_POST["id_eleve"])){

	$student_id= $_POST['id_eleve'];
    //Get all city data
    $query = $bdd ->query("SELECT * FROM eleve WHERE id_eleve = '$student_id' ");
    $compte = $query->rowCount();

    if($compte > 0)
    {
        echo "<option value=''>Select teacher</option>";
        $getidclasse = $query->fetch();
        
        $recidclasse = $getidclasse['id_classe_charge'];
        
        $untourdansclasse = $bdd ->query("SELECT nom_classe FROM classes WHERE id = '$recidclasse' ");
        $recnom = $untourdansclasse->fetch();
        $obtnom =  $recnom['nom_classe'];

        $rec_enseignant = $bdd->query("SELECT * FROM ens_class WHERE nom_classe = '$obtnom'");

       
        while($result = $rec_enseignant->fetch())
{
  $enseignant = $result['matricule_ens']; 
  $rec_e = $bdd->query("SELECT * FROM enseignant WHERE matricule = '$enseignant'");
  $display = $rec_e->fetch();
  $ensid = $display["id"];
  $nom = $display["Nom"];
  $prenom = $display["Prenom"];
  ?>
  <option value="<?php echo "$ensid"; ?>" ><?php echo "$nom $prenom"; ?></option>
  <?php
  
}
    }
    else{
        echo "<option value=''>teacher not available$student_id</option>";
    }
}
?>
