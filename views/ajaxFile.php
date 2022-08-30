<?php
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=cahier_de_texte;charset=utf8", "root", "");
?>

<?php

if(isset($_POST["id"])){

	$classroom_id= $_POST['id'];
    $query = $bdd ->query("SELECT * FROM eleve WHERE id_classe_charge = '$classroom_id'");

    //Count total number of rows
    $count =  $query->rowCount();
    
    //Display states list
    if($count > 0){?>

     <option value=""><?= "Select state"; ?></option>
     <?php
        while($resultat = $query->fetch()){?>

        <option value='<?= $resultat['id']; ?>'><?= $resultat['Nom']; ?></option>
        <?php
        }
    }else{?>
       <option value=""><?php echo "State not available"; ?></option>
       <?php
    }
}

?>