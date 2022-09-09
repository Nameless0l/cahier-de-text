<?php 
        $select = $db->query("SELECT * FROM classes WHERE nom_classe = 'Tle C' ");
        $recueilid = $select->fetch();
        $recrec = $recueilid['id'];
        $selected = $db->query("SELECT * FROM matieres WHERE id_classe = $recrec ");
        $sonid = $selected->fetch();
        $idens = $sonid['id_enseignant'];
        $idmatiere = $sonid['id'];
     
     $access = $db->query("SELECT * FROM leçon WHERE id_enseignant = $idens && id_classe = $recrec && id_matiere = $idmatiere");
     $decompte = $access->rowCount();
     ?> 
<!DOCTYPE html>
<html>
<head>
    <title>affichage du cahier</title>
    <meta charset="utf-8">
</head>

<body>
<p align="center"> cours</p>
<p>
<?php 
    if($decompte > 0)
    {
        while($resultat = $access->fetch())
        {
            $date = $resultat['date_publication'];
            $numero = $resultat['numero_du_module'];
            $titre = $resultat['titre_module'];
            $titre_lecon = $resultat['titre_leçon'];
            $objectifs = $resultat['objectif_leçon'];
            $plan = $resultat['plan_leçon'];
            $corpus = $resultat['corpus'];
            $fiche_preparation = $resultat['fiche_preparation'];
            $fiche_deroulement = $resultat['fiche_deroulement'];
            $activite_apprentissage = $resultat['activite_apprentissage'];
            $exo_application = $resultat['exo_application'];
            $competence_sequence = $resultat['competence_sequence'];
            $incident = $resultat['incident'];
            $trimestre = $resultat['trimestre'];
?>
<p><?php echo "$date"; ?></p>
<p><?php echo "$numero"; ?></p>
<p><?php echo "$titre"; ?></p>
<p><?php echo "$titre_lecon"; ?></p>
<p><?php echo "$objectifs"; ?></p>
<p><?php echo "$plan"; ?></p>
<p><?php echo "$corpus"; ?></p>
<p><?php echo "$fiche_preparation"; ?></p>
<p><?php echo "$fiche_deroulement"; ?></p>
<p><?php echo "$activite_apprentissage"; ?></p>
<p><?php echo "$exo_application"; ?></p>
<p><?php echo "$competence_sequence"; ?></p>
<p><?php echo "$incident"; ?></p>
<p><?php echo "$trimestre"; ?></p>
   <?php  
        }
    }
?>
    </p>
</body>

</html>