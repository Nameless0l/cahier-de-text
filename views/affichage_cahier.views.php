<?php
  include "functions/affichage_enseignant.php";
?>

<?php
//this page contain a table that display a data concerning the table lecon
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
      $signature = $resultat['VU'];
  ?>
      <!-- <p>
    <center><php if(!$signature) echo " Seance non controllée par le censeur</b> "; 
    else echo "<b><i>Cours fait la  Journée du </i></b>" . "  $date" . "<b>Trimestre Numeros: " . "$trimestre " . " Seance non controllée par le censeur</b> " ; ?></br></center>
</p>
<php if ($numero != null) : ?>
    <p><b><php  echo "<u>Numero du modul </u> :" . "$numero"; ?></b></p>
<php endif ?>
<php if ($titre != null) : ?>
    <p><php echo "<b><u>Titre du module : </u></b>" . "$titre"; ?></p>
<php endif ?>
<php if ($titre_lecon != null) : ?>
    <p><php echo "<U>Titre de la leçon</U> </br>" . "$titre_lecon"; ?></p>
<php endif ?>
<php if ($objectifs != null) : ?>
    <p><php echo "<b><u>Objectifs de la leçon</u></b></br>" . "$objectifs"; ?></p>
<php endif ?>
<php if ($plan != null) : ?>
    <p><php echo "<b>Plan de la leçon</b> </br>" . "$plan"; ?></p>
<php endif ?>
<php if ($corpus != null) : ?>
    <p>
        <php echo "<b><u>Corpus</u></b>" . "$corpus"; ?></p>
<php endif ?>
<php if ($fiche_preparation != null) : ?>
    <p><php echo "<b><u>Fiche de preparation</u> </b></br>" . "$fiche_preparation"; ?></p>
<php endif ?>
<php if ($fiche_deroulement != null) : ?>
    <p><php echo "<b><u>Fiche de deoulement</u></b>" . "$fiche_deroulement"; ?></p>
<php endif ?>
<php if ($activite_apprentissage != null) : ?>
    <p><php echo "<b><u>Acitivités d'apprentissage</u></b> : " . "$activite_apprentissage"; ?></p>
<php endif ?>
<php if ($exo_application != null) : ?>
    <p><php echo "<b>Exercice d'Application</b></br> :" . "$exo_application"; ?></p>
<php endif ?>
<php if ($competence_sequence != null) : ?>
    <p><php echo "<b><u>Competences visées pour la sequences</u></b></br>  :" . "$competence_sequence"; ?></p>
<php endif ?>
<php if ($incident != null) : ?>
    <p><php echo "<b><u>Incidents survenus</u></b>" . "$incident"; ?></p>
<php endif ?>
<?php
    }
  }
?>
</p>-->


      
<div class="card">
  <div class="card-header">
    <h3 class="card-title">affichage des donnees du cahier de  texte</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <?php
    $sqlSelect = "SELECT enseignant.id,numero_du_module,titre_module,titre_leçon ,trimestre,numero_sequence_didactique,titre_sequence_didactique,journee_du,Nom,matieres,Statut
    FROM enseignant 
    INNER JOIN lecon ON lecon.id=enseignant.id";
    $result = $db->query($sqlSelect);
    if (!empty($result)) {
    ?>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>trimestre</th>
            <th>module</th>
            <th>titre du module</th>
            <th>UE</th>
            <th>date et heure du cours</th>
            <th>titre de la lecon</a></th>
            <th>nom de l'enseignant</th>
            <th>statut</th>
            <th>le cours a t'il ete fait?</th>

          </tr>
        </thead>
        <?php
        foreach ($result as $row) {
          
          affichelecon($row['trimestre'], $row['numero_du_module'], $row['titre_module'],$row['matieres'],$row['journee_du'],$row['titre_leçon'],$row['Nom'],$row['Statut'],$row['id']);
        }
        ?>
        
          <!-- <tbody>
            <tr> -->


              <!-- <td><php echo $row['trimestre']; ?></td>
              <td><php echo $row['numero_du_module']; ?></td>
              <td><php echo $row['titre_module']; ?></td>
              <td><php echo $row['matieres']; ?></td>
              <td><php echo $row['journee_du']; ?></td>
              <td><a href="update_lecon.php"> <php echo $row['titre_leçon']; ?></a></td>
              <td><php echo $row['Nom']; ?></td>
              <td><php echo $row['Statut']; ?></td> -->
              <!-- <td><php if(!$signature){?>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="matiere1" id="exampleCheck1" disabled
                      <php
                        if(($signature==0)){
                            echo 'checked';
                        }
                      ?>
                    >
                   
                  <php } ?>  
                 
              </td> -->

            <!-- </tr>
          <php } ?>
          </tbody> -->
      </table>
    <?php } ?>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->


<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>