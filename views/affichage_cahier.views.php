<?php
$select = $db->query("SELECT * FROM classes WHERE nom_classe = 'Tle C' ");
$recueilid = $select->fetch();
$recrec = (int)$recueilid['id'];
$selected = $db->query("SELECT * FROM matieres WHERE id_classe = $recrec ");
$sonid = $selected->fetch();
$idens = $sonid['id_enseignant'];
$idmatiere = $sonid['id'];

$idens = 16;
$access = $db->query("SELECT * FROM lecon WHERE id_enseignant = $idens");
$decompte = $access->rowCount();
?>
<p align="center"> cours</p>
<p>
    <?php
    if ($decompte > 0) {
        while ($resultat = $access->fetch()) {
            $date = $resultat['journee_du'];
            $numero = $resultat['numero_du_module'];
            $titre = strtoupper($resultat['titre_module']);
            $titre_lecon = $resultat['titre_leçon'];
            $objectifs = $resultat['opjectif_leçon'];
            $plan = $resultat['plan_leçon'];
            $corpus = $resultat['corpus'];
            $fiche_preparation = $resultat['fiche_preparation'];
            $fiche_deroulement = $resultat['fiche_deroulement'];
            $activite_apprentissage = $resultat['activite_apprentissage'];
            $exo_application = $resultat['exo_application'];
            $competence_sequence = $resultat['competence_sequence'];
            $incident = $resultat['incident'];
            $trimestre = $resultat['trimestre'];
            $signature = $resultat['VU'] ;
    ?>
<p>
    <center><?php if(!$signature) echo "<b><i>Cours fait la  Journée du </i></b>" . "  $date" . "<b>Trimestre Numeros: " . "$trimestre " . " Seance non controllée par le censeur</b> "; 
    else echo "<b><i>Cours fait la  Journée du </i></b>" . "  $date" . "<b>Trimestre Numeros: " . "$trimestre " . " Seance non controllée par le censeur</b> " ; ?></br></center>
</p>
<?php if ($numero != null) : ?>
    <p><b><?php  echo "<u>Numero du modul </u> :" . "$numero"; ?></b></p>
<?php endif ?>
<?php if ($titre != null) : ?>
    <p><?php echo "<b><u>Titre du module : </u></b>" . "$titre"; ?></p>
<?php endif ?>
<?php if ($titre_lecon != null) : ?>
    <p><?php echo "<U>Titre de la leçon</U> </br>" . "$titre_lecon"; ?></p>
<?php endif ?>
<?php if ($objectifs != null) : ?>
    <p><?php echo "<b><u>Objectifs de la leçon</u></b></br>" . "$objectifs"; ?></p>
<?php endif ?>
<?php if ($plan != null) : ?>
    <p><?php echo "<b>Plan de la leçon</b> </br>" . "$plan"; ?></p>
<?php endif ?>
<?php if ($corpus != null) : ?>
    <p>
        <?php echo "<b><u>Corpus</u></b>" . "$corpus"; ?></p>
<?php endif ?>
<?php if ($fiche_preparation != null) : ?>
    <p><?php echo "<b><u>Fiche de preparation</u> </b></br>" . "$fiche_preparation"; ?></p>
<?php endif ?>
<?php if ($fiche_deroulement != null) : ?>
    <p><?php echo "<b><u>Fiche de deoulement</u></b>" . "$fiche_deroulement"; ?></p>
<?php endif ?>
<?php if ($activite_apprentissage != null) : ?>
    <p><?php echo "<b><u>Acitivités d'apprentissage</u></b> : " . "$activite_apprentissage"; ?></p>
<?php endif ?>
<?php if ($exo_application != null) : ?>
    <p><?php echo "<b>Exercice d'Application</b></br> :" . "$exo_application"; ?></p>
<?php endif ?>
<?php if ($competence_sequence != null) : ?>
    <p><?php echo "<b><u>Competences visées pour la sequences</u></b></br>  :" . "$competence_sequence"; ?></p>
<?php endif ?>
<?php if ($incident != null) : ?>
    <p><?php echo "<b><u>Incidents survenus</u></b>" . "$incident"; ?></p>
<?php endif ?>
<?php
        }
    }
?>
</p>