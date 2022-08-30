
<?php
$rec_enseignant = $bdd->query("SELECT * FROM ens_cens WHERE matri_censeur = 'abc'");
$query = $bdd->query("SELECT * FROM classes ");
    $run_query =  $query->rowCount();

?>
<?php
$rec_classe = $bdd->query("SELECT * FROM classes WHERE matri_censeur_charge = '21p340' ");
$rec_eleve = $bdd->query("SELECT * FROM eleve WHERE matr_cens_charge = 'bgc' ");
$rec_enseignant = $bdd->query("SELECT * FROM enseignant WHERE  	id = 'abc'");
?>

<div class="hello">
  <p align = "center">Veuiller remplir ces informations </p>
    <form method="POST" action="" enctype="multipart/form-data">
       <table align="center">
         <tr>
           <td align= "left">Classe :</td>
           <td><input list="choix_classe" name="classroom"><datalist id="choix_classe">
         
            <?php 
            while($resultat = $rec_classe->fetch()){
            ?>
              <option value="<?php echo $resultat['nom_classe'] ?>"></option>
              <?php }?>
              </datalist></td>
         </tr>

          <tr>
           <td align= "left">Nombre d'élève :</td>
           <td>
           <input list="nbreleves" name="nbrleve">
            <datalist id="nbreleves">
            <?php $nbre =0;
            while($nbre <= 20){$nbre++; ?>
            <option value="<?php echo $nbre;?>"></option>
            <?php }?>
               </select>
               </td>
         </tr>  

        <tr>
          <td align= "left">Chef de classe :</td>
          <td>
          <input list="chefs" name="chefe">
            <datalist id="chefs">
          <?php
          while($resultat = $rec_eleve->fetch()){
            ?>
              <option value="<?php echo $resultat['nom'] ?>"></option>
              <?php }?>
           </datalist></td>
        </tr>
<tr>
<td align="left">Enseignant principale:</td>
<td>
<input list="ens_principal" name="prof_principal">
  <datalist id="ens_principal" >
  <?php
while($result = $rec_enseignant->fetch())
{
  $enseignant = $result['matricule_ens']; 
  $rec_e = $bdd->query("SELECT * FROM enseignant WHERE matricule = '$enseignant'");
  $display = $rec_e->fetch();
  ?>
  <option value="<?php echo $display['nom']; ?>" ></option>
  <?php
  
}?>
  </datalist>
</td>

</tr>

        <tr>
          <td align= "left"><label for="emploidetemps">Emploi de temps :</label></td>
          <td><input type="file" name="emploidetemps" id="emploidetemps"></td>
       </tr>

      <tr>
          <td align= "left"><label for="fichedeprogression">Fiche de progression :</label></td>
          <td><input type="file" name="fichedeprogression" id="fichedeprogression"></td>
       </tr>

    <tr>
      <td></td>
      <td style="text-align: right;"><input type="submit" name="retour" value="Créer"></td>
    </tr>

</table>
</form>
</div>



<?php include "partials/_footer.php"; ?>

