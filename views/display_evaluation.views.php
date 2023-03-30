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

<?php
    }
  }
?>
</p>

      
<div class="card">
  <div class="card-header">
    <h3 class="card-title">affichage des informations sur les evaluations</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <?php
    $sqlSelect = "SELECT * FROM evaluation";
    $result = $db->query($sqlSelect);
    if (!empty($result)) {
    ?>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>epreuve</th>
            <th>correction</th>
            <th>incidence</th>
            <th>remise des copies</th>
            <th>nombre d'eleve ayant participé</th>
            <th>nombre de sous moyenne </th>
            <th>nombre de moyenne</th>
            <th>moyenne de la classe</th>

          </tr>
        </thead>
        <?php
        foreach ($result as $row) {
        ?>
          <tbody>
            <tr>
              <td><?php echo $row['epreuve']; ?></td>
              <td><?php echo $row['correction']; ?></td>
              <td><?php echo $row['incidence']; ?></td>
              <td><?php echo $row['copie_remise']; ?></td>
              <td><?php echo $row['nbre_eleve_participe']; ?></td>
              <td><?php echo $row['nbre_note_inf_10']; ?></td>
              <td><?php echo $row['nbre_note_sup_12']; ?></td>
              <td><?php echo $row['moy_classe']; ?></td>
             

            </tr>
          <?php } ?>
          </tbody>
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